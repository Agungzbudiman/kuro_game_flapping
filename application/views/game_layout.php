<!-- Features -->
<div id="features" class="tabs">
	<div class="container">
        <?php 
        $dataLogin = $this->session->userdata('loginUser');
        $uid = '';
        if (empty($dataLogin)) {?>
		<p style="text-align: center;">log in first if you want to save the score</p>
        <?php }else{
        	$uid = $dataLogin['userId'];
        } ?>
		<div class="row" style="margin-top: 50px;">
			<embed src="<?= base_url('play?uid='.$uid) ?>" style="width: 100%;height: 500px"></embed>
		</div> <!-- end of row -->
	</div> <!-- end of container --> 
</div> <!-- end of tabs -->
<!-- end of features -->