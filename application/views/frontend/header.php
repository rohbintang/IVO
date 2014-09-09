<div class="container">
    <div class="header row">
        <div class="span12">
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <h1>
                        <a class="brand" href="<?php echo base_url('home'); ?>">Make your Wedding Invitation Online</a>
                    </h1>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li <?php if ($this->uri->segment(1)=='home' OR $this->uri->segment(1)=='') echo 'class="current-page"'; ?>>
                                <a href="<?php echo base_url('home'); ?>"><i class="icon-home"></i><br />Home</a>
                            </li>
                            <li <?php if ($this->uri->segment(1)=='about') echo 'class="current-page"'; ?>>
                                <a href="<?php echo base_url('about'); ?>"><i class="icon-user"></i><br />Tentang Kami</a>
                            </li>
                            <li <?php if ($this->uri->segment(1)=='product') echo 'class="current-page"'; ?>>
                                <a href="<?php echo base_url('product'); ?>"><i class="icon-tasks"></i><br />Fitur</a>
                            </li> 
                            <li <?php if ($this->uri->segment(1)=='gallery') echo 'class="current-page"'; ?>>
                                <a href="<?php echo base_url('gallery'); ?>"><i class="icon-camera"></i><br />Galeri</a>
                            </li>
                            <li <?php if ($this->uri->segment(1)=='contact') echo 'class="current-page"'; ?>>
                                <a href="<?php echo base_url('contact'); ?>"><i class="icon-envelope-alt"></i><br />Kontak</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>