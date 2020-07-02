<script src="<?= base_url('assets/') ?>js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="<?= base_url('assets/') ?>js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
<script src="<?= base_url('assets/') ?>js/bootstrap-notify.min.js"></script> <!-- Bootstrap framework -->
<script src="<?= base_url('assets/') ?>js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="<?= base_url('assets/') ?>js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
<script src="<?= base_url('assets/') ?>js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
<script src="<?= base_url('assets/') ?>js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
<script src="<?= base_url('assets/') ?>js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="<?= base_url('assets/') ?>js/scripts.js"></script> <!-- Custom scripts -->
<script type="text/javascript">
	function showNotify(msg,type,time = 1000){
		$.notify({
			icon: 'fa fa-info',
			title: 'Info',
			message: msg,
		},{
			type: type,
			placement: {
				from: "bottom",
				align: "right"
			},
			timer: time,
		});
	}
	<?php
	$dataNotif = $this->session->flashdata('notif');
	if (!empty($dataNotif)) {?>
		showNotify('<?= $dataNotif["msg"] ?>','<?= $dataNotif["type"] ?>');
	<?php } ?>
</script>