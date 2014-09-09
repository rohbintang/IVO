<style>
    .table-borderless th, .table-borderless td { 
        border-top: none; 
    }
    .set { 
        width: 150px;
    }
</style>
<div class="row-fluid">
    <p class="lead pull-left"><?php echo $title ?></p>
</div>
<?php foreach ($order->result() as $value) : ?>
    <div class="row-fluid">
        <div class="span6">
            <table class="table table-borderless">
                <tr>
                    <td class="set"><strong>Order ID</strong></td>
                    <td>: <?php echo $value->order_id; ?></td>
                </tr>
                <tr>
                    <td><strong>Date</strong></td>
                    <td>: <?php echo date('d-m-Y', strtotime($value->order_date)); ?></td>
                </tr>
                <tr>
                    <td><strong>Package</strong></td>
                    <td>: <?php echo $value->package_name; ?></td>
                </tr>
                <tr>
                    <td><strong>Status</strong></td>
                    <td>: <?php echo ($value->payment_status == 1) ? 'Verified' : 'Not Verified'; ?></td>
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
                    <td><strong>Payment ID</strong></td>
                    <td>: <a href="<?php echo base_url('dashboard/payment/detail/' . $value->payment_id); ?>"><?php echo $value->payment_id; ?></a></td>
                </tr>
            </table>
        </div>
    </div>
<?php endforeach; ?>