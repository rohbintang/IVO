<style>
    .table-borderless th, .table-borderless td { 
        border-top: none; 
    }
    .set { 
        width: 80px;
    }
</style>
<div class="row-fluid">
    <p class="lead pull-left"><?php echo $title ?></p>
</div>
<?php foreach ($customer->result() as $value) : ?>
<div class="row-fluid">
    <div class="span6">
        <table class="table table-borderless">
            <tr>
                <td class="set"><strong>Name</strong></td>
                <td>: <?php echo $value->customer_name; ?></td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td>: <?php echo $value->customer_email; ?></td>
            </tr>
            <tr>
                <td><strong>Phone</strong></td>
                <td>: <?php echo $value->customer_phone; ?></td>
            </tr>
            <tr>
                <td><strong>Address</strong></td>
                <td>: <?php echo $value->customer_address; ?></td>
            </tr>
        </table>
    </div>
    <div class="span6">
        <table class="table table-borderless">
            <tr>
                <td class="set"><strong>Order ID</strong></td>
                <td>: <a href="<?php echo base_url('dashboard/order/detail/'.$value->order_id); ?>"><?php echo $value->order_id; ?></a></td>
            </tr>
            <tr>
                <td><strong>Payment ID</strong></td>
                <td>: <a href="<?php echo base_url('dashboard/payment/detail/'.$value->payment_id); ?>"><?php echo $value->payment_id; ?></a></td>
            </tr>
            <tr>
                <td><strong>Invitation</strong></td>
                <td>: <?php echo $value->invitation_url; ?></td>
            </tr>
            <tr>
                <td><strong>Preview</strong></td>
                <!--<td>: <img src="http://placehold.it/300x300"></td>-->
                <td>
                    <?php if ($value->invitation_url) {
                           ?>
                    <img src="http://api.webthumbnail.org?width=300&height=200&format=png&screen=1024&url=<?php echo $value->invitation_url; ?>" />
                    <?php
                        } else {
                           echo '<img src="http://placehold.it/300x300">';
                       } ?>
                </td>
                <!--<td>: <img src="http://free.pagepeeker.com/v2/thumbs.php?size=500&url=bing.com"></td>-->
            </tr>
        </table>
    </div>
</div>
<?php endforeach; ?>