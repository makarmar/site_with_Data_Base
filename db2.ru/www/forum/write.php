<?php
require 'connect.php';

	session_start();
	if (md5($_POST['norobot']) == $_SESSION['randomnr2'])	{ 
		    
			
			echo "������� , �������, ��� �� �� �����";
			
			
}
			
			
			
	}	else {  
		
			echo "�� ������ ����������� ���!";
	}
?>