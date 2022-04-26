
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Export.php
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
	<strong>'.LANG_REPORT_TABLE.'</strong> Orange Credit Farm Appraisal</p>';
	$excel.='<table border="1" cellspacing="0" width="100%" style="font-family:arial; font-size:14px;" cellpadding="5">
	<tr>
      <th>Farm Name</th>
      <th>Farm Address</th>
      <th>Farm Management Style</th>
      <th>Farm Produce Type</th>
      <th>Farm Size Total</th>
      <th>Farm Revenue Cycle</th>
      <th>Farm Revenue</th>
      <th>Farm Profit Margin</th>
      <th>Farm Date Created</th>
      <th>Farm Date Mordified</th>
      <th>User Id</th>
  </tr>
  ';
	foreach($result as $rows)
			{
	$excel.='<tr>
	<td>'.$rows->farm_name.'</td>
	<td>'.$rows->farm_address.'</td>
	<td>'.$rows->farm_management_style.'</td>
	<td>'.$rows->farm_produce_type.'</td>
	<td>'.$rows->farm_size_total.'</td>
	<td>'.$rows->farm_revenue_cycle.'</td>
	<td>'.$rows->farm_revenue.'</td>
	<td>'.$rows->farm_profit_margin.'</td>
	<td>'.$rows->farm_date_created.'</td>
	<td>'.$rows->farm_date_mordified.'</td>
	<td>'.$rows->user_id.'</td>
	</tr>';
	}
	$excel.='</table>';
	$filename1= 'orange_credit_farm_appraisal_'.date('Y-m-d').'.doc';
	$filename2= 'orange_credit_farm_appraisal_'.date('Y-m-d').'.xls';
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
	
	?>