<?php

//
// ��������� ������� time_packet � ������������ ����������� ���������� ��������� �������
// 

$con = @mysql_connect("localhost","root","toor123");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
 }
mysql_select_db("pcap2mysql_data", $con)
	or die("������ ������ ���� ������");

$result_id = mysql_query("select * from pcap")
	or die("������ ��������� ������");

//$count=1; // ������������ ������� 

while ($row = mysql_fetch_row($result_id)) {			
		
		//$query=sprintf("insert into pcap_weka (pcap_weka.datetime, pcap_weka.usec) values (%d,%d)",$row[1], $row[2]);
		//mysql_query($query) or die("������ ��������� ������ 1"); 								

		$query=sprintf("insert into time_packet (time_packet.id, time_packet.datetime, time_packet.usec) values (%d,%d,%d)",$row[0],$row[1], $row[2]);
		mysql_query($query) or die("������ ��������� ������ 1"); 								

//		$count++;
}

mysql_free_result($result_id);
mysql_close($con);

?>