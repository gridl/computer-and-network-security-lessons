<?php

//
// 2) ��������� ���� � ���������� ��������� 
// 

$con = @mysql_connect("localhost","root","toor123");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
 }
mysql_select_db("pcap2mysql_data", $con)
	or die("������ ������ ���� ������");

$result_id = mysql_query("select * from pcap_weka")
	or die("������ ��������� ������");

// ----------------------------------------

$i=1; 	    // ������������ ������� 
while ($row = mysql_fetch_row($result_id)) {
   	
	if ($i%2){ // ������� �������� - ��������
	
		$tv_sec1=$row[3];
		$tv_usec1=$row[4];	
	}
		
	if (!($i%2)){ // ������� �������� - ������
		
		$tv_sec2=$row[3];
		$tv_usec2=$row[4];		

		$tv_sec=$tv_sec2-$tv_sec1;
		$tv_usec=$tv_usec2-$tv_usec1;
		
		if($tv_usec < 0){
			$tv_sec--;	
			$tv_usec+=1000000;
		}
		
		$res=$tv_sec*1000+$tv_usec/1000;		
		$query=sprintf("update pcap_weka set pcap_weka.packet_time=%d where pcap_weka.pos=%d",$res*1000, $i-1);				
		mysql_query($query) or die("������ ��������� ������ 1"); 
   	}           
   $i++;
}

mysql_free_result($result_id);
mysql_close($con);

// ----------------------------------------


$con = @mysql_connect("localhost","root","toor123");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
 }
mysql_select_db("pcap2mysql_data", $con)
	or die("������ ������ ���� ������");

$result_id = mysql_query("select * from pcap_weka")
	or die("������ ��������� ������");

// ----------------------------------------
$i=1;
$flag_space=0;

while ($row = mysql_fetch_row($result_id)) {
   	
  if ($flag_space==1) {			
	if (!($i%2)){ // ������� �������� - ������
	
		$tv_sec1=$row[3];
		$tv_usec1=$row[4];	
	}
		
	if ($i%2){ // ������� �������� - ��������
		
		$tv_sec2=$row[3];
		$tv_usec2=$row[4];		

		$tv_sec=$tv_sec2-$tv_sec1;
		$tv_usec=$tv_usec2-$tv_usec1;
		
		if($tv_usec < 0){
			$tv_sec--;	
			$tv_usec+=1000000;
		}
		
		$res=$tv_sec*1000+$tv_usec/1000;		
		$query=sprintf("update pcap_weka set pcap_weka.packet_time=%d where pcap_weka.pos=%d",$res*1000, $i-1);				
		mysql_query($query) or die("������ ��������� ������ 1"); 
   	}           
     }	
   	
   $i++;
     
   $flag_space=1;   
}
// ----------------------------------------

// 
// ������� ��������� ������ � �����
// 

mysql_free_result($result_id);
mysql_close($con);

?>