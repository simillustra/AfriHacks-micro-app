<?php
/*
* =======================================================================
* CLASSNAME:        orange_credit_farm_appraisal
* DATE CREATED:  	26-04-2022
* FOR TABLE:  		orange_credit_farm_appraisal
* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
* IMPORTANT:
* 'post()' is a defined function located @ lib/funtions.php
* =======================================================================
*/
if (!defined('VALID_DIR')) die('You are not allowed to execute this file directly');

//Begin class

class orange_credit_farm_appraisal
{
    public $id;
    public $farm_name;
    public $farm_address;
    public $farm_management_style;
    public $farm_produce_type;
    public $farm_size_total;
    public $farm_revenue_cycle;
    public $farm_revenue;
    public $farm_profit_margin;
    public $farm_date_created;
    public $farm_date_mordified;
    public $user_id;

    //Constructor
    public function __construct()
    {
        $this->id = isset($id);
        $this->farm_name = isset($farm_name);
        $this->farm_address = isset($farm_address);
        $this->farm_management_style = isset($farm_management_style);
        $this->farm_produce_type = isset($farm_produce_type);
        $this->farm_size_total = isset($farm_size_total);
        $this->farm_revenue_cycle = isset($farm_revenue_cycle);
        $this->farm_revenue = isset($farm_revenue);
        $this->farm_profit_margin = isset($farm_profit_margin);
        $this->farm_date_created = isset($farm_date_created);
        $this->farm_date_mordified = isset($farm_date_mordified);
        $this->user_id = isset($user_id);
    }
}