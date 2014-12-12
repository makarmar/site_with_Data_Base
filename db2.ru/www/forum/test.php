<?php
  header('Content-Type: text/html; charset= utf-8');
?>
<?php
require_once("SForum_class.php");
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
<head>
<title>Все заказы</title>
<link href='style.css' rel='stylesheet' type='text/css' />
<link href='layout.css' rel='stylesheet' type='text/css' />
<style type='text/css'>
   TD {
   vertical-align: center; 
   }
   #col1 {
    width: 15%; 
      }
   #col2 {
    width: 45%; 
        }
   #col3 {
    width: 10%; 
      }
   #col4 {
    width: 35%; 
      }
	  
	  .button_example{
border:1px solid #ffad41; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:18px;font-family:arial, helvetica, sans-serif; padding: 10px 10px 10px 10px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3);font-weight:bold; color: #FFFFFF;
 background-color: #ffc579; background-image: -webkit-gradient(linear, left top, left bottom, from(#ffc579), to(#fb9d23));
 background-image: -webkit-linear-gradient(top, #ffc579, #fb9d23);
 background-image: -moz-linear-gradient(top, #ffc579, #fb9d23);
 background-image: -ms-linear-gradient(top, #ffc579, #fb9d23);
 background-image: -o-linear-gradient(top, #ffc579, #fb9d23);
 background-image: linear-gradient(to bottom, #ffc579, #fb9d23);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#ffc579, endColorstr=#fb9d23);
}

.button_example:hover{
 border:1px solid #ff9913;
 background-color: #ffaf46; background-image: -webkit-gradient(linear, left top, left bottom, from(#ffaf46), to(#e78404));
 background-image: -webkit-linear-gradient(top, #ffaf46, #e78404);
 background-image: -moz-linear-gradient(top, #ffaf46, #e78404);
 background-image: -ms-linear-gradient(top, #ffaf46, #e78404);
 background-image: -o-linear-gradient(top, #ffaf46, #e78404);
 background-image: linear-gradient(to bottom, #ffaf46, #e78404);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#ffaf46, endColorstr=#e78404);
}
	  
    </style>
</head>

<body id='page6'>
<div class='tail-top-right'></div>
<div class='tail-top'>
  <div class='tail-bottom'>
    <div id='main'>
      <!-- header -->
      <div id='header'>
        <form action='' method='post' id='form'>
          <div>
            <label>Поиск:</label>
            <span>
            <input type='text' />
            </span></div>
        </form>
        <ul class='list'>
          <li><a href='../home.php'><img src='images/icon1.gif' alt='' /></a></li>
          <li><a href='../home.php'><img src='images/icon2.gif' alt='' /></a></li>
          <li class='last'><a href='../home.php'><img src='images/icon3.gif' alt='' /></a></li>
        </ul>
        <ul class='site-nav'>
          <li><a href='../info_form.php'>Новый заказ</a></li>
          <li><a href='../search_user.php'>Найти заказ</a></li>
          <li><a href='../select_change.php'>Все заказы</a></li>
          <li><a href='../video/video.php'>Видео в помощь</a></li>
          <li><a href='test.php''>Форум</a></li>
          <li class='last'><a href='../vhod.php'>Выход</a></li>
        </ul>
        <div class='logo'><a href='../home.php'><img src='images/logo.png' alt='' /></a></div>
        <div class='slogan'><img src='images/slogan.png' alt='' /></div>
      </div>
	  </br>";
//require_once("email_validation.php");

//$validator=new email_validation_class;

$forum->Show_SFname();

$forum->Main_page();
print("<br>\n");

if (isset($_POST['submit'])) {
    
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

print("<br>\n");


echo "<div id='footer'>
        <div class='indent'>
          <div class='fleft'>group of companies LeXan</div>
          <div class='fright'>Тел.: 8(812)100-00-00</br>+7911-100-00-00</div>
        </div>
      </div>



</div>
  </div>
</div>
</body></html>";
?>