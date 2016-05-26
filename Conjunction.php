<?php
$mysql_server_name="localhost";    //���ݿ�����������
$mysql_username="root";               // ���ݿ��û���
$mysql_password="";               // ���ݿ�����
$mysql_database="teach_data";      // �������ݿ����� 
$ftime=50000;


$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password,$mysql_database);

mysql_query("set names 'utf8'",$conn);

mysql_select_db($mysql_database,$conn);


?>