<?php
/*
* =======================================================================
* FILE NAME:        Details.php
* DATE CREATED:  	01-04-2020
* FOR TABLE:  		orange_credit_coupons
* PRODUCED BY:		SIMILLUSTRA  PHP CODE GENERATOR
* AUTHOR:			Simillustra (http://simillustra.com) info@simillustra.com
* =======================================================================
*/
if (!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">ASFA Coupons</h3>
                <ul class="nav pull-right">

                    <a href="<?php echo H_ADMIN; ?>&view=orange_credit_coupons&do=viewall"
                       class="btn btn-default btn-xs tip" title="<?php echo LANG_TIP_VIEWALL; ?>"><i
                                class="fa fa-reply"></i> <?php echo LANG_GO_BACK; ?></a>
                    <a href="<?php echo H_ADMIN_MAIN; ?>&view=orange_credit_coupons&id=<?php echo $rows->id; ?>&do=export2&hexport=yes&etype=printer"
                       title="<?php echo LANG_TIP_PRINT; ?>" target="_blank" class="btn btn-default btn-xs tip"><i
                                class="fa fa-print"></i> <?php echo LANG_PRINT; ?></a>

                </ul>

            </div><!-- /.box-header -->
            <div class="box-body">
                <table data-page="false" class="table table-striped table-bordered">
                    <tbody>

                    <tr>
                        <th>Coupon Code</th>
                        <td><?php echo $rows->coupon_code; ?></td>
                    </tr>

                    <tr>
                        <th>Coupon Amount</th>
                        <td><?php echo $rows->coupon_amount; ?></td>
                    </tr>

                    <tr>
                        <th>Coupon Trans Id</th>
                        <td><?php echo $rows->coupon_trans_id; ?></td>
                    </tr>

                    <tr>
                        <th>Coupon Payment Mode</th>
                        <td><?php echo $rows->coupon_payment_mode; ?></td>
                    </tr>

                    <tr>
                        <th>Coupon Status</th>
                        <td><?php echo $rows->coupon_status; ?></td>
                    </tr>

                    <tr>
                        <th>Coupon Date Added</th>
                        <td><?php echo $rows->coupon_date_added; ?></td>
                    </tr>

                    <tr>
                        <th>Coupon Date Activated</th>
                        <td><?php echo $rows->coupon_date_activated; ?></td>
                    </tr>

                    <tr>
                        <th>Coupon User</th>
                        <td><?php echo $rows->coupon_user; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div><!-- /.row -->
	