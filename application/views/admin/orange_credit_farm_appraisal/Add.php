
	<?php
	/*
	* =======================================================================
	* FILE NAME:        Add.php
	* DATE CREATED:  	26-04-2022
	* FOR TABLE:  		orange_credit_farm_appraisal
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	?>
	
	<div class="heze-table">
	<div class="col-12">
	<ul class="nav nav-tabs pull-right">
	<a href="<?php echo H_ADMIN;?>&view=orange_credit_farm_appraisal&do=viewall" class="btn btn-default btn-sm tip" title="<?php echo LANG_TIP_VIEWALL;?>"><i class="fa fa-reply"></i> <?php echo LANG_GO_BACK;?></a>
	</ul>
	<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-reorder"></i> <?php echo LANG_CREATE_NEW;?> Orange Credit Farm Appraisal</h3></div>
  <div class="panel-body pformmargin">
	
	 
	 <p>
	 <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" name="hezecomform" id="hezecomform" enctype="multipart/form-data">
	
	<?php if(isset($errors))form_errors($errors);?>
	
	<div class="form-group">
    <label class="control-label" for="farm_name">Farm Name</label>
	<input id="farm_name" name="farm_name" type="text" maxlength="100"  value="" class="form-control styler" />
	</div>

	<div class="form-group">
    <label class="control-label" for="farm_address">Farm Address</label>
	<input id="farm_address" name="farm_address" type="text" maxlength="255"  value="" class="form-control styler" />
	</div>

	<div class="form-group">
    <label class="control-label" for="farm_management_style">Farm Management Style</label>
	<select name="farm_management_style" id="farm_management_style" class=" form-control styler choz">
	<option value=""></option><option value="SELF MANAGEMENT">SELF MANAGEMENT</option>
	<option value="EMPLOYEE MANAGEMENT">EMPLOYEE MANAGEMENT</option>
	<option value="FAMILY MANAGEMENT">FAMILY MANAGEMENT</option>
	</select>
	</div>

	<div class="form-group">
    <label class="control-label" for="farm_produce_type">Farm Produce Type</label>
	<input id="farm_produce_type" name="farm_produce_type" type="text" maxlength="100"  value="" class="form-control styler" />
	</div>

	<div class="form-group">
    <label class="control-label" for="farm_size_total">Farm Size Total</label>
	<input id="farm_size_total" name="farm_size_total" type="text" maxlength="100"  value="" class="form-control styler" />
	</div>

	<div class="form-group">
    <label class="control-label" for="farm_revenue_cycle">Farm Revenue Cycle</label>
	<select name="farm_revenue_cycle" id="farm_revenue_cycle" class=" form-control styler choz">
	<option value=""></option><option value="ALL YEAR CYCLE">ALL YEAR CYCLE</option>
	<option value="QUARTERLY CYCLE">QUARTERLY CYCLE</option>
	<option value="BI-ANNUAL CYCLE">BI-ANNUAL CYCLE</option>
	</select>
	</div>

	<div class="form-group">
    <label class="control-label" for="farm_revenue">Farm Revenue</label>
	<select name="farm_revenue" id="farm_revenue" class=" form-control styler choz">
	<option value=""></option><option value="BETWEEN_N50K_TO_250K">BETWEEN_N50K_TO_250K</option>
	<option value="BETWEEN_N250K_N500K">BETWEEN_N250K_N500K</option>
	<option value="BETWEEN_N500K_N1MILLION">BETWEEN_N500K_N1MILLION</option>
	<option value="ABOVE_N1MILLION">ABOVE_N1MILLION</option>
	</select>
	</div>

	<div class="form-group">
    <label class="control-label" for="farm_profit_margin">Farm Profit Margin</label>
	<select name="farm_profit_margin" id="farm_profit_margin" class=" form-control styler choz">
	<option value=""></option><option value="BELOW 10%">BELOW 10%</option>
	<option value="BETWEEN 10-15%">BETWEEN 10-15%</option>
	<option value="BETWEEN 16-25%">BETWEEN 16-25%</option>
	<option value="BETWEEN 26-50%">BETWEEN 26-50%</option>
	<option value="ABOVE 50%">ABOVE 50%</option>
	</select>
	</div>

	<div class="form-group">
    <label class="control-label" for="farm_date_created">Farm Date Created</label>
	<input name="farm_date_created" class="datepicker form-control styler" type="text" maxlength="100" value="<?php echo date('Y-m-d');?>" />
	</div>

	<div class="form-group">
    <label class="control-label" for="farm_date_mordified">Farm Date Mordified</label>
	<input name="farm_date_mordified" class="datepicker form-control styler" type="text" maxlength="100" value="<?php echo date('Y-m-d');?>" />
	</div>

	<div class="form-group">
    <label class="control-label" for="user_id">User Id</label>
	<input id="user_id" name="user_id" type="text" maxlength="20"  value="" class="form-control styler" />
	</div>

	 <div class="controls">
	 <div class="col-md-2" style="padding:0;">
	 <input type="submit" name="button" id="hButton" class="btn btn-primary btn-lg" value="<?php echo LANG_CREATE_RECORD;?>" />
	 </div>
	 <div class="col-md-3" style="padding:0;">
	 <div id="output"></div>
	 </div>
	 </div>
	  
	</form>
	</p>
	 
	
	</div>
 </div><!--/col-12-->
 </div><!--/heze-table-->
	