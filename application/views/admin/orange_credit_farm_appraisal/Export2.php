
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Export2.php
	* DATE CREATED:  	26-04-2022
	* FOR TABLE:  		orange_credit_farm_appraisal
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	<?php
	$etype=get('etype');
	$excel='
	<p style="font-family:arial; font-size:18px;" align="left">
	<strong style="font-family:arial;">'.LANG_REPORT_TITLE.'</strong><br>'.LANG_REPORT_SUB_TITLE.'<br>
	<strong>'.LANG_REPORT_TABLE.'</strong> ASFA Farm Appraisal</p>';
	$excel.='
	<table border="1" cellspacing="0" width="100%" style="font-family:arial; font-size:14px;" cellpadding="5">
    <tr>
	<td>Farm Name</td>
	<td>'.$rows->farm_name.'</td>
  	</tr>
    <tr>
	<td>Farm Address</td>
	<td>'.$rows->farm_address.'</td>
  	</tr>
    <tr>
	<td>Farm Management Style</td>
	<td>'.$rows->farm_management_style.'</td>
  	</tr>
    <tr>
	<td>Farm Produce Type</td>
	<td>'.$rows->farm_produce_type.'</td>
  	</tr>
    <tr>
	<td>Farm Size Total</td>
	<td>'.$rows->farm_size_total.'</td>
  	</tr>
    <tr>
	<td>Farm Revenue Cycle</td>
	<td>'.$rows->farm_revenue_cycle.'</td>
  	</tr>
    <tr>
	<td>Farm Revenue</td>
	<td>'.$rows->farm_revenue.'</td>
  	</tr>
    <tr>
	<td>Farm Profit Margin</td>
	<td>'.$rows->farm_profit_margin.'</td>
  	</tr>
    <tr>
	<td>Farm Date Created</td>
	<td>'.$rows->farm_date_created.'</td>
  	</tr>
    <tr>
	<td>Farm Date Mordified</td>
	<td>'.$rows->farm_date_mordified.'</td>
  	</tr>
    <tr>
	<td>User Id</td>
	<td>'.$rows->user_id.'</td>
  	</tr>';
   $excel.='</table>';
	
	$filename1= 'orange_credit_farm_appraisal_'.date('Y-m-d').'.doc';
	$filename2= 'orange_credit_farm_appraisal_'.date('Y-m-d').'.xls';
	$pdf_output= 'orange_credit_farm_appraisal_'.date('Y-m-d').'.pdf';
	if ($etype == 'word') {
	header("Content-type: application/msword");
	header("Content-Disposition: attachment; filename=$filename1");
	header("Pragma: no-cache");
	header("Expires: 0");
	print $excel;
	}
	elseif ($etype == 'excel') {
	header("Content-type: application/msexcel");
	header("Content-Disposition: attachment; filename=$filename2");
	header("Pragma: no-cache");
	header("Expires: 0");
	print $excel;
	}
	elseif ($etype == 'printer') {
	print'<title>'.H_TITLE.'</title>
	<script type="text/javascript">
	window.onload = function () {
		window.print();
	}
	</script>
	';
	print $excel;
	}
	elseif ($etype == 'PDF') {
	HezecomPDF($excel, $pdf_output);
	}
	?>