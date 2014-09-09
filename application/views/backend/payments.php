<div class="row-fluid">
    <p class="lead pull-left"><?php echo $title ?></p>
    <form class="form-search pull-right" method="post" action="<?php echo base_url('dashboard/payment/view'); ?>">
        <input name="keyword" type="text" class="input-medium">
        <select name="field" class="input-small">
            <option value="payment_id">Payment ID</option>
            <option value="order_id">Order ID</option>
            <option value="name">Name</option>
        </select>
        <button type="submit" class="btn">Search</button>
    </form>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Payment ID</th>
            <th>Order ID</th>
            <th>Name</th>
            <th>Package</th>
            <th>Date</th>
            <th>Status</th>
            <th style="width: 15%;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($payments->result() as $value) : ?>
            <tr>
                <td><?php echo $value->payment_id; ?></td>
                <td><?php echo $value->order_id; ?></td>
                <td><?php echo $value->customer_name; ?></td>
                <td><?php echo $value->package_name; ?></td>
                <td><?php echo date('d F Y', strtotime($value->payment_date)); ?></td>
                <td>
                    <?php
                    echo ($value->payment_status == 1) ? '<span class="label label-success">Confirmed</span>': '<span class="label label-warning">Unconfirmed</span>' ;
                    ?>
                </td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-small" href="<?php echo base_url('dashboard/payment/detail/' . $value->payment_id); ?>"><i class="icon-eye-open"></i> View</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $pagination; ?>