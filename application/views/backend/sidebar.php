<div class="span3">
    <div class="accordion" id="sidebar">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#dashboard">
                    <i class="icon-home"></i> Dashboard
                </a>
            </div>
            <div id="dashboard" class="accordion-body collapse <?php if ($this->uri->segment(2)=='' OR $this->uri->segment(2)=='home') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($this->uri->segment(2)=='home' OR $this->uri->segment(3)=='') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/home'); ?>">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#order">
                    <i class="icon-shopping-cart"></i> Orders
                </a>
            </div>
            <div id="order" class="accordion-body collapse <?php if ($this->uri->segment(2)=='order' OR $this->uri->segment(2)=='payment') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($this->uri->segment(2)=='order' AND $this->uri->segment(3)=='view') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/order'); ?>">View Orders</a></li>
                        <li <?php if ($this->uri->segment(2)=='payment' AND $this->uri->segment(3)=='view') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/payment'); ?>">View Payments<!--<span class="label label-info pull-right">+1</span>--></a></li>
                        <li <?php if ($this->uri->segment(2)=='order' AND $this->uri->segment(3)=='export') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/order/export'); ?>">Export</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#customer">
                    <i class="icon-list-alt"></i> Customers
                </a>
            </div>
            <div id="customer" class="accordion-body collapse <?php if ($this->uri->segment(2)=='customer') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($this->uri->segment(2)=='customer' AND $this->uri->segment(3)=='view') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/customer'); ?>">View Customers</a></li>
                        <!--<li <?php if ($this->uri->segment(2)=='customer' AND $this->uri->segment(3)=='export') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/customer/export'); ?>">Export</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#invitation">
                    <i class="icon-book"></i> Invitations
                </a>
            </div>
            <div id="invitation" class="accordion-body collapse <?php if ($this->uri->segment(2)=='invitation') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($this->uri->segment(2)=='invitation' AND $this->uri->segment(3)=='') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/invitation'); ?>">View Invitations</a></li>
                        <!--<li <?php if ($this->uri->segment(2)=='invitation' AND $this->uri->segment(3)=='upload') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/invitation/add'); ?>">Add Invitation</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#package">
                    <i class="icon-gift"></i> Packages
                </a>
            </div>
            <div id="package" class="accordion-body collapse <?php if ($this->uri->segment(2)=='package') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($this->uri->segment(2)=='package' AND $this->uri->segment(3)=='view') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/package'); ?>">View Packages</a></li>
                        <li <?php if ($this->uri->segment(2)=='package' AND $this->uri->segment(3)=='add') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/package/add'); ?>">Add Package</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#user">
                    <i class="icon-user"></i> Users
                </a>
            </div>
            <div id="user" class="accordion-body collapse <?php if ($this->uri->segment(2)=='user') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if ($this->uri->segment(2)=='user' AND $this->uri->segment(3)=='view') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/user'); ?>">View Users</a></li>
                        <li <?php if ($this->uri->segment(2)=='user' AND $this->uri->segment(3)=='add') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/user/add'); ?>">Add User</a></li>
                        <li <?php if ($this->uri->segment(2)=='user' AND $this->uri->segment(3)=='profile') echo 'class="active"'; ?>><a href="<?php echo base_url('dashboard/user/profile'); ?>">Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--<div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#setting">
                    <i class="icon-wrench"></i> Setting
                </a>
            </div>
            <div id="setting" class="accordion-body collapse <?php if ($this->uri->segment(2)=='setting') echo 'in'; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Bla bla bla</a></li>
                    </ul>
                </div>
            </div>
        </div>-->
    </div>
</div>