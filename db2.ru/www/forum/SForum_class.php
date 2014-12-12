<?php
  header('Content-Type: text/html; charset= utf-8');
?>
<?php

/*********************************
* SForum class v1.4
**********************************
*
* This class makes very Simle Forum.
* The forum is for everybody. There
* is no autorisation module.
* If you post message you fill
* only four inputs: title, text,
* your name or nick and e-mail.
* You do not need registration nor
* authorization just start using it.
* The class working with MySQL but in
* the near future it will spread on
* other DBs (with your help)
*
* I am looking forward your help.
*
**********************************
* How to use the class  (Quick Start)
**********************************
*
* At first create DB -> SForum.sql
*
* Include the class file
* include_once('SForum_class.php');
*
* A new object is created in the class
*
* 1. If... statment for active form
*    if (isset($_POST['submit'])) {
*        $forum->add_new_post($_POST['frm_ptitle'],$_POST['frm_text'],$_POST['frm_mail'],$_POST['frm_ip'],$_POST['frm_name'],$_POST['frm_wid']);
*    }
* 2. Display 1st message of threads or
*    all messages form thread
*    if (isset($_GET['wid'])) {
*        $forum->Show_SForum_Threads($_GET['wid']);
*        $forum->pansw = $_GET['wid'];
*    } else {
*        $forum->Show_SForum();
*        $forum->pansw = 0;
*    }
* 3. Show form w or w/o title of the
*    main thread you are answering
*    $forum->Show_frm($forum->ptitle);
*
*
**********************************
*
* @autor: Wojciech Napieraіa XII.2004
* @help: Ondra Marek ondra.marek@interval.cz;Pepe josegiambruno@adinet.com.uy
* @
* voytass@op.pl
*
*
* @license: GNU
**********************************
*/


class SForum {
    var $SFname = "<h3>Форум</h3>";
    var $ptitle;
    var $react;              // number of answers in a thread
    var $pansw;
    var $title;

    // SForum: constructor, connecting to DB
    function SForum() {
        session_start();
		$this->ptitle = NULL;
        $this->pansw = 0;
        $this->title = "<TITLE>$this->Форум</TITLE>";
        print($this->title);
        include_once("config.php");  // DB Config Data
        $pol = mysql_connect($dbhost,$dbuname,$dbpass) or die ("Couldn't connect to server.<br>\n");
        $db = mysql_select_db($dbname,$pol) or die ("Couldn't connect to database.<br>\n");
    }

    // Show_frm: displays the form
    function Show_frm($ptitle=NULL) {
        if(!empty($ptitle)) {
            $this->ptitle = "Re: ".$ptitle;
        }
        $zawartosc = 
		"\n\n<FORM ACTION=\"".$_SERVER['PHP_SELF']."\" METHOD=\"post\" NAME=\"frm\">\n"
        . "</br><table width='90%' cellpadding='5' cellspacing='7'><TR>\n"
        . "<td id='col1'>Заголовок темы:</TD><td id='col2'><INPUT TYPE=\"text\" NAME=\"frm_ptitle\" VALUE=\"$this->ptitle\" SIZE=\"30\"></TD>\n"
        . "</TR><TR>"
        . "<td id='col1'>Текст:</TD><td id='col2'><TEXTAREA NAME=\"frm_text\" cols=\"50\" rows=\"10\"></TEXTAREA></TD>\n"
        . "<td id='col4'><img src='captcha.php' />"
		. "</br></br><input class='input' type='text' name='norobot' size='12' />"
		. "</br></br><INPUT TYPE=\"submit\" NAME=\"submit\" VALUE=\" Написать \" class='button_example'></td>"
		. "</TR><TR>\n"
        . "<td id='col1'>Имя или ник:</TD><td id='col2'><INPUT TYPE=\"text\" NAME=\"frm_name\" VALUE=\"\" SIZE=\"30\"></TD>\n"
        . "</TR><TR>\n"
        
				
		. "</tr></TABLE>\n"
        . "<INPUT TYPE=\"hidden\" NAME=\"frm_ip\" VALUE=\"".$_SERVER['REMOTE_ADDR']."\">\n"
        . "<INPUT TYPE=\"hidden\" NAME=\"frm_wid\" VALUE=\"".$this->pansw."\">\n"
        . "</FORM>\n\n";
			
			
		
        print($zawartosc);
    }

    // Show_SFname : Show SForum name as text
    function Show_SFname() {
        print("<H1>$this->SFname</H1>\n");
    }

    // Add_new_post: Adds new record to DB
    function Add_new_post($ptitle,$text,$ip,$name,$frm_wid) {
        if($ptitle=="" or $text==""){
            return;
	    }
        $this->ptitle = addslashes(htmlspecialchars(trim($ptitle)));
        $this->text = addslashes(htmlspecialchars(trim($text)));

        if ($frm_wid == 0) {
            $zapytanie = "INSERT INTO SForum (wid,for_ptitle,for_text,for_data,for_dataw,for_ip,for_name) VALUES('$frm_wid', '$this->ptitle', '$this->text',  now(), now(), '$ip', '$name')";
            $sql = mysql_query($zapytanie) or die (mysql_error());
        } else {
            $zapytanie = "INSERT INTO SForum (wid,for_ptitle,for_text,for_data,for_ip,for_name) VALUES('$frm_wid', '$this->ptitle', '$this->text', now(), '$ip', '$name')";
            $sql = mysql_query($zapytanie) or die (mysql_error());
        }
        $id = mysql_insert_id();
        if ($frm_wid == 0) {
            $zapytanie = "UPDATE SForum SET wid='$id' WHERE id='$id'";
            #print $zapytanie;
            $sql = mysql_query($zapytanie) or die (mysql_error());
        } else {
            $zapytanie = "UPDATE SForum SET for_dataw=now() WHERE id='$frm_wid'";
            #print $zapytanie;
            $sql = mysql_query($zapytanie) or die (mysql_error());
        }

    }

    // Show_SForum: Displays the main message of threads
    function Show_SForum() {
        $sql = 'SELECT * FROM SForum WHERE id=wid ORDER BY for_dataw DESC';
        #print $sql."<br>\n";
        $sql = mysql_query($sql) or die (mysql_error());
        $iledokumentow = mysql_affected_rows();
        if ($iledokumentow > 0) {
            print("<TABLE BORDER=\"1\" WIDTH=\"90%\">\n");
            while ($row = mysql_fetch_array($sql)) {
            	$sql1 = "SELECT COUNT(wid)-1 AS num FROM SForum WHERE wid=".$row['id']." GROUP BY wid";
                #print $sql1."<br>\n";
                $sql1 = mysql_query($sql1) or die (mysql_error());
                $row1 = mysql_fetch_array($sql1);
                //number of reactions
                $this->react=$row1['num'];
                if ($row['for_name'] == "") {
                    $row['for_name'] = "Гость";
                }
                $this->ptitle = stripslashes($row['for_ptitle']);
                print("<tr><TD><A HREF=\"".$_SERVER['PHP_SELF']."?wid=".$row['id']."\">".$this->ptitle."</A></TD><TD ALIGN=\"center\">Ответов:&nbsp;".$this->react."</TD><TD ALIGN=\"center\"  WIDTH=\"20%\">".$row['for_name']."</TD><TD ALIGN=\"center\"  WIDTH=\"20%\">".$row['for_dataw']."</TD></tr>\n\n");
            }
            unset($this->react);
            print("</TABLE>\n");
        } else {
            print("No threads<br>\n");
        }
        $this->ptitle = ""; //the new thread's title is empty
    }

    // Show_SForum_Threads: Displays all messages of a thread
    function Show_SForum_Threads($wid) {
        //$this->pansw = $wid;
        $zapytanie = "SELECT * FROM SForum WHERE wid='$wid' ORDER BY for_data ASC";
        //print $zapytanie;
        $sql = mysql_query($zapytanie) or die (mysql_error());
        $iledokumentow = mysql_affected_rows();
        if ($iledokumentow > 0) {
            print("<TABLE BORDER=\"1\" WIDTH=\"90%\">\n");
            while ($row = mysql_fetch_array($sql)) {
                $this->ptitle = stripslashes($row['for_ptitle']);
                $this->text = nl2br(stripslashes($row['for_text']));
                if ($row['for_name'] == "") {
                    $row['for_name'] = "Гость";
                }
                
                print("<tr><TD><b>".$this->ptitle."</b><br><div ALIGN=\"right\"><i><FONT SIZE=\"1\">".$row['for_name']."___".$row['for_data']."</FONT></i></DIV>\n\n");
                print("<hr>".$this->text."<br><br></TD></tr>\n\n");
            }
            print("</TABLE>\n");
        } else {
            print("No threads<br>\n");
        }
        $zapytanie = "SELECT * FROM SForum WHERE id='$wid' LIMIT 0,1";
        $sql = mysql_query($zapytanie) or die (mysql_error());
        $row = mysql_fetch_array($sql);
        $this->ptitle = stripslashes($row['for_ptitle']);  //Re title for form
    }

    // Main_page: Show back-to-main link
    function Main_page() {
        print("<A HREF=\"".$_SERVER['PHP_SELF']."\">К темам</A>\n</br></br>");
		
		
		    }
}

if (!isset($forum)) {
    $forum = new SForum;
}

?>