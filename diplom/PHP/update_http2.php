<?php
// ��������� ���������� � ����� ������
$con = @mysql_connect($host,$user,$psw);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
 }
// ����� ���� ������
 mysql_select_db("pcap2mysql_data", $con)
	or die("������ ������ ���� ������");

// ���������� �������
$result_id = mysql_query("select * from pcap_weka")
	or die("������ ��������� ������");

$flag1=0; 

while ($row = mysql_fetch_row($result_id)) {			
	for ($i=0; $i < mysql_num_fields($result_id); $i++){
		if ($row[8]==80){ 
			if($flag1==0){
				$flag1=1; 
							
				$query=sprintf("update pcap_weka set pcap_weka.tcp_flow_dir=1,  pcap_weka.app_proto=1, pcap_weka.app_proto_name='http' where pcap_weka.id=%d",$row[0]);
				mysql_query($query) or die("������ ��������� ������, 1"); 
			}else{
				$query=sprintf("update pcap_weka set pcap_weka.tcp_flow_dir=1,  pcap_weka.app_proto=1, pcap_weka.app_proto_name='http' where pcap_weka.id=%d",$row[0]);
				mysql_query($query) or die("������ ��������� ������, 2"); 
			}			
		}
		if ($row[7]==80){ 
			if($flag1==1){
				$query=sprintf("update pcap_weka set pcap_weka.tcp_flow_dir=2,  pcap_weka.app_proto=1, pcap_weka.app_proto_name='http' where pcap_weka.id=%d",$row[0]);
				mysql_query($query) or die("������ ��������� ������, 3"); 
			}
		} 	
 	} 	 		
  } 
  
 mysql_free_result($result_id);
 mysql_close($con);
?>