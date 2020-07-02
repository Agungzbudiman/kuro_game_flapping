</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layout/head') ?>
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    <?php  $this->load->view('layout/topnav') ?>

    <?php $this->load->view($v_content) ?>
	
	<?php $this->load->view('layout/footer') ?>

	<?php $this->load->view('layout/script') ?>
    <!-- Scripts -->
</body>
</html>