<style>
    .table-borderless th, .table-borderless td { 
        border-top: none; 
    }
    .set { 
        width: 150px;
    }
</style>
<?php foreach ($payment->result() as $value) : ?>
    <div class="row-fluid">
        <p class="lead pull-left"><?php echo $title ?></p>
        <a href="<?php echo base_url('dashboard/payment/del/' . $value->payment_id); ?>" class="btn btn-danger pull-right"><i class="icon-trash"></i> Delete</a>
    </div>
    <div class="row-fluid">
        <div class="span6">
            <table class="table table-borderless">
                <tr>
                    <td class="set"><strong>Payment ID</strong></td>
                    <td>: <?php echo $value->payment_id; ?></td>
                </tr>
                <tr>
                    <td><strong>Date</strong></td>
                    <td>: <?php echo date('d-m-Y', strtotime($value->payment_date)); ?></td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td>: <?php echo rupiah($value->payment_total); ?></td>
                </tr>
                <tr>
                    <td><strong>Message</strong></td>
                    <td>: <?php echo $value->payment_message; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>                    
                    <td>
                        <?php
                        if ($value->payment_status == 0) :
                            ?>
                            <a class="btn btn-success btn-block" href="<?php echo base_url('dashboard/payment/confirm/' . $value->payment_id); ?>"><i class="icon-ok"></i> Confirm Payment</a>
                            <?php
                        else :
                            ?>
                            <a class="btn btn-warning btn-block" href="<?php echo base_url('dashboard/payment/unconfirm/' . $value->payment_id); ?>"><i class="icon-remove"></i> Unconfirm Payment</a>
                        <?php
                        endif;
                        ?>
                    </td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="span6">
            <table class="table table-borderless">
                <tr>
                    <td class="set"><strong>Name</strong></td>
                    <td>: <a href="<?php echo base_url('dashboard/customer/detail/' . $value->customer_id); ?>"><?php echo $value->customer_name; ?></a></td>
                </tr>
                <tr>
                    <td><strong>Phone</strong></td>
                    <td>: <?php echo $value->customer_phone; ?></td>
                </tr>
                <tr>
                    <td><strong>Order ID</strong></td>
                    <td>: <a href="<?php echo base_url('dashboard/order/detail/' . $value->order_id); ?>"><?php echo $value->order_id; ?></a></td>
                </tr>

            </table>
        </div>
    </div>
<?php endforeach; ?>