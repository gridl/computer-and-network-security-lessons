<?php
/*
$con = @mysql_connect("localhost","root","toor123");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
 }
mysql_select_db("pcap2mysql_data", $con)
	or die("������ ������ ���� ������");

$result_id = mysql_query("select * from pcap_weka")
	or die("������ ��������� ������");

$flag1=0; // initial for http
$count=0;
$count_flow1=0;
$count_flow2=0;
$count_shift=0; // ������� ���������
$src_ip=0; // ���������� ������ ip-����� 

while ($row = mysql_fetch_row($result_id)) {			
	//for ($i=0; $i < mysql_num_fields($result_id); $i++){
		if ($row[7]==80){ 
			$count++;				
			if($flag1==0){
				$src_ip=$row[2];				
				$flag1=1; 
							
				$query=sprintf("update pcap_weka set pcap_weka.tcp_flow_dir=1,  pcap_weka.app_proto=1, pcap_weka.app_proto_name='http' where pcap_weka.id=%d",$row[0]);
				mysql_query($query) or die("������ ��������� ������ 1"); 				
		
				$count_flow1++;	
						
			}else{
				
				$query=sprintf("update pcap_weka set pcap_weka.tcp_flow_dir=1,  pcap_weka.app_proto=1, pcap_weka.app_proto_name='http' where pcap_weka.id=%d",$row[0]);
				mysql_query($query) or die("������ ��������� ������ 2"); 
											
				$count_flow1++;			
			}			
		}
		if ($row[6]==80){ 
			$count++;			
			if($flag1==1){				
				
				$query=sprintf("update pcap_weka set pcap_weka.tcp_flow_dir=2,  pcap_weka.app_proto=1, pcap_weka.app_proto_name='http' where pcap_weka.id=%d",$row[0]);
				mysql_query($query) or die("������ ��������� ������ 3"); 
						
				$count_flow2++;			
			}else{				
				$count_shift++;
			}
		} 	
 	} 	 		
 // } 
  
 print ("src_ip: $src_ip\n");
 print ("����� ������� (HTTP): $count\n");
 $count_flow=$count_flow2+$count_flow1;
 print ("����� �������: $count_flow\n");
 print ("��������� �������: $count_shift\n\n"); 
 
 mysql_free_result($result_id);
 mysql_close($con);
 */
 ////////////////////////////////////////////////////////////////////////
 
$con = @mysql_connect("localhost","root","toor123");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
 }
mysql_select_db("pcap2mysql_data", $con)
	or die("������ ������ ���� ������");

$result_id = mysql_query("select * from pcap_weka")
	or die("������ ��������� ������");

$flag1=0; // initial for http
$count=0;
$count_flow1=0;
$count_flow2=0;
$count_shift=0; // ������� ���������
$src_ip=0; // ���������� ������ ip-����� 

while ($row = mysql_fetch_row($result_id)) {			
	//for ($i=0; $i < mysql_num_fields($result_id); $i++){
		if ($row[6]==25){ 
			$count++;				
			if($flag1==0){
				$src_ip=$row[2];				
				$flag1=1; 
							
				$query=sprintf("update pcap_weka set pcap_weka.tcp_flow_dir=2,  pcap_weka.app_proto=2, pcap_weka.app_proto_name='smtp' where pcap_weka.id=%d",$row[0]);
				mysql_query($query) or die("������ ��������� ������ 1"); 				
		
				$count_flow1++;	
						
			}else{
				
				$query=sprintf("update pcap_weka set pcap_weka.tcp_flow_dir=2,  pcap_weka.app_proto=2, pcap_weka.app_proto_name='smtp' where pcap_weka.id=%d",$row[0]);
				mysql_query($query) or die("������ ��������� ������ 2"); 
											
				$count_flow1++;			
			}			
		}
		if ($row[7]==25){ 
			$count++;			
			if($flag1==1){				
				
				$query=sprintf("update pcap_weka set pcap_weka.tcp_flow_dir=1,  pcap_weka.app_proto=2, pcap_weka.app_proto_name='smtp' where pcap_weka.id=%d",$row[0]);
				mysql_query($query) or die("������ ��������� ������ 3"); 
						
				$count_flow2++;			
			}else{				
				$count_shift++;
			}
		} 	
 	} 	 		
 // } 
  
 print ("src_ip: $src_ip\n");
 print ("����� ������� (SMTP): $count\n");
 $count_flow=$count_flow2+$count_flow1;
 print ("����� �������: $count_flow\n");
 print ("��������� �������: $count_shift\n\n"); 
 
 mysql_free_result($result_id);
 mysql_close($con);
  
/////////////////////////////////////////////////////////////////////////////
 /*
 $con = @mysql_connect("localhost","root","toor123");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
 }
mysql_select_db("pcap2mysql_data", $con)
	or die("������ ������ ���� ������");

$result_id = mysql_query("select * from pcap_weka")
	or die("������ ��������� ������");

$flag1=0; // initial for http
$count=0;
$count_flow1=0;
$count_flow2=0;
$count_shift=0; // ������� ���������
$src_ip=0; // ���������� ������ ip-����� 

while ($row = mysql_fetch_row($result_id)) {			
	//for ($i=0; $i < mysql_num_fields($result_id); $i++){
		if ($row[6]==21){ 
			$count++;				
			if($flag1==0){
				$src_ip=$row[2];				
				$flag1=1; 
							
				$query=sprintf("update pcap_weka set pcap_weka.tcp_flow_dir=2,  pcap_weka.app_proto=3, pcap_weka.app_proto_name='ftp-c' where pcap_weka.id=%d",$row[0]);
				mysql_query($query) or die("������ ��������� ������ 1"); 				
		
				$count_flow1++;	
						
			}else{
				
				$query=sprintf("update pcap_weka set pcap_weka.tcp_flow_dir=2,  pcap_weka.app_proto=3, pcap_weka.app_proto_name='ftp-c' where pcap_weka.id=%d",$row[0]);
				mysql_query($query) or die("������ ��������� ������ 2"); 
											
				$count_flow1++;			
			}			
		}
		if ($row[7]==21){ 
			$count++;			
			if($flag1==1){				
				
				$query=sprintf("update pcap_weka set pcap_weka.tcp_flow_dir=1,  pcap_weka.app_proto=3, pcap_weka.app_proto_name='ftp-c' where pcap_weka.id=%d",$row[0]);
				mysql_query($query) or die("������ ��������� ������ 3"); 
						
				$count_flow2++;			
			}else{				
				$count_shift++;
			}
		} 	
 	} 	 		
 // } 
  
 print ("src_ip: $src_ip\n");
 print ("����� ������� (FTP-C): $count\n");
 $count_flow=$count_flow2+$count_flow1;
 print ("����� �������: $count_flow\n");
 print ("��������� �������: $count_shift\n\n"); 
 
 mysql_free_result($result_id);
 mysql_close($con);

 // delete from pcap_weka where app_proto=0;
 */
?>

