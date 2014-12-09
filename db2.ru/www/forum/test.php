<?php
require_once("SForum_class.php");
//require_once("email_validation.php");

//$validator=new email_validation_class;

$forum->Show_SFname();

$forum->Main_page();
print("<br><br>\n");

if (isset($_POST['submit'])) {
    /*$for_mail = $_POST['frm_mail'];
    if (!empty($_POST['frm_mail'])) {
	    $valmail = $validator->ValidateEmailAddress($_POST['frm_mail']);
        if ($valmail == 0) {
            echo "Your mail was invalid so was droped!<br><br>\n";
            $for_mail = "";      // if mail invalid then dropped
        }
    }*/

	//session_start();
	if (md5($_POST['norobot']) == $_SESSION['randomnr2'])
	 {
    $forum->Add_new_post($_POST['frm_ptitle'],$_POST['frm_text'],$_POST['frm_ip'],$_POST['frm_name'],$_POST['frm_wid']);
     }
	 else
	 {
	 echo "Не правильно введена капча";
	 }
}

if (isset($_GET['wid'])) {
    #phpinfo();
    $forum->Show_SForum_Threads($_GET['wid']);
    $forum->pansw = $_GET['wid'];
} else {
    $forum->Show_SForum();
    $forum->pansw = 0;
}

$forum->Show_frm($forum->ptitle);

print("<br><br>\n");
$forum->Main_page();
?>