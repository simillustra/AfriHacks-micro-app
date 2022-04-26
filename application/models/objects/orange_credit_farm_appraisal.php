<?php
/*
* =======================================================================
* CLASSNAME:        orange_credit_farm_appraisal_model
* DATE CREATED:  	26-04-2022
* FOR TABLE:  		orange_credit_farm_appraisal
* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
* =======================================================================
*/
if (!defined('VALID_DIR')) die('You are not allowed to execute this file directly');

include_once(APP_FOLDER . '/models/classes/class_orange_credit_farm_appraisal.php');

class orange_credit_farm_appraisal_model
{
    private $orange_credit_farm_appraisal_table = "orange_credit_farm_appraisal";
    // SELECT ALL
    public function SelectAll_($limit = null)
    {
        $dbc = new dboptions();
        if ($limit) {
            $startpg = pageparam($limit);
            $record = $dbc->rawSelect("SELECT * FROM orange_credit_farm_appraisal LIMIT {$startpg} , {$limit}");
        } else {
            $record = $dbc->rawSelect("SELECT * FROM orange_credit_farm_appraisal");
        }
        return $record->fetchAll(PDO::FETCH_OBJ);
    }


    public function SelectAll($query, $limit = null)
    {
        if ($query['user_role'] == 5) {
            $bind = array(
                ":user_id" => $query['user_id'],
                ":range_start" => $query['range_start'],
                ":range_limit" => $query['range_end']);

            if ($limit) {
                $startpg = pageparam($limit);
                return HDB::hus()->Hselect($this->orange_credit_farm_appraisal_table ,
                    " `user_id`=:user_id AND DATE(farm_date_created) BETWEEN DATE_FORMAT(:range_start, '%Y/%m/%d') AND DATE_FORMAT(:range_limit, '%Y/%m/%d') LIMIT {$startpg} , {$limit}",
                    $bind);
            } else {
                return HDB::hus()->Hselect($this->orange_credit_farm_appraisal_table ,
                    " `user_id`=:user_id  AND DATE(farm_date_created) BETWEEN DATE_FORMAT(:range_start, '%Y/%m/%d') AND DATE_FORMAT(:range_limit, '%Y/%m/%d')",
                    $bind);
            }
        } else {
            if ($limit) {
                $startpg = pageparam($limit);
                return HDB::hus()->Hselect($this->orange_credit_farm_appraisal_table  . " LIMIT {$startpg} , {$limit}");
            } else {
                return HDB::hus()->Hselect($this->orange_credit_farm_appraisal_table );
            }
        }
    }

    //Select Count for Pagination
    public function CountRow_()
    {
        $dbc = new dboptions();
        return $dbc->SelectCount('SELECT COUNT(*) as num FROM orange_credit_farm_appraisal');
    }

    public function CountRow($query)
    {
        if ($query['user_role'] == 5) {
            $bind = array(
                ":user_id" => $query['user_id'],
                ":range_start" => $query['range_start'],
                ":range_limit" => $query['range_end']);
            return HDB::hus()->Hcount($this->orange_credit_farm_appraisal_table,
                "user_id=:user_id  AND DATE(farm_date_created) BETWEEN DATE_FORMAT(:range_start, '%Y/%m/%d') AND DATE_FORMAT(:range_limit, '%Y/%m/%d')",
                $bind);
        } else {
            return HDB::hus()->Hcount($this->orange_credit_farm_appraisal_table);
        }
    }


    // SELECT ONE
    public function SelectOne($id)
    {
        $bind = array(":id" => $id);
        return HDB::hus()->Hone($this->orange_credit_farm_appraisal_table, "id=:id", $bind);
    }

    // TRUNCATE TABLE
    public function TruncateTable($redirect_to)
    {
        $db = DB::getInstance();
        $sql = $db->prepare("TRUNCATE orange_credit_farm_appraisal");
        $sql->execute();
        send_to($redirect_to);
    }

    // DELETE
    public function Delete($id, $redirect_to)
    {
        $dbc = new dboptions();
        $dbc->dbDelete('orange_credit_farm_appraisal', 'id', $id);
        send_to($redirect_to);
    }

    // INSERT
    public function Insert($farm_name, $farm_address, $farm_management_style, $farm_produce_type, $farm_size_total, $farm_revenue_cycle, $farm_revenue, $farm_profit_margin, $farm_date_created, $farm_date_mordified, $user_id)
    {
        //$dbc = new dboptions();


        $values = array(array('farm_name' => $farm_name, 'farm_address' => $farm_address, 'farm_management_style' => $farm_management_style, 'farm_produce_type' => $farm_produce_type, 'farm_size_total' => $farm_size_total, 'farm_revenue_cycle' => $farm_revenue_cycle, 'farm_revenue' => $farm_revenue, 'farm_profit_margin' => $farm_profit_margin, 'farm_date_created' => $farm_date_created, 'farm_date_mordified' => $farm_date_mordified, 'user_id' => $user_id));
        //$dbc->dbInsert('orange_credit_farm_appraisal', $values);
        HDB::hus()->Hinsert($this->orange_credit_farm_appraisal_table, $values);
    }

    // UPDATE
    public function Update($farm_name, $farm_address, $farm_management_style, $farm_produce_type, $farm_size_total, $farm_revenue_cycle, $farm_revenue, $farm_profit_margin, $farm_date_created, $farm_date_mordified, $user_id, $id)
    {
        //$db = DB::getInstance();
        $sql = " UPDATE orange_credit_farm_appraisal SET  farm_name =:farm_name,farm_address =:farm_address,farm_management_style =:farm_management_style,farm_produce_type =:farm_produce_type,farm_size_total =:farm_size_total,farm_revenue_cycle =:farm_revenue_cycle,farm_revenue =:farm_revenue,farm_profit_margin =:farm_profit_margin,farm_date_created =:farm_date_created,farm_date_mordified =:farm_date_mordified,user_id =:user_id WHERE id = :id ";
        $data = array(':farm_name' => $farm_name, ':farm_address' => $farm_address, ':farm_management_style' => $farm_management_style, ':farm_produce_type' => $farm_produce_type, ':farm_size_total' => $farm_size_total, ':farm_revenue_cycle' => $farm_revenue_cycle, ':farm_revenue' => $farm_revenue, ':farm_profit_margin' => $farm_profit_margin, ':farm_date_created' => $farm_date_created, ':farm_date_mordified' => $farm_date_mordified, ':user_id' => $user_id, ':id' => $id);
        //$stmt = $db->prepare($sql);
        //$stmt->execute($data);
        HDB::hus()->Hupdate($this->orange_credit_business_plan_table, $sql, $data);

    }


} // end class

?>
	
	