
<div class="container">
<hr>
<script>
var image = "myproject/assets/img/contact-bg.jpg"; var title=""; var sub= "Itt küldhetsz e-mailt nekem"
changeBg(image,title,sub);
</script> 
	<div class="row">
		<form action = "<?php echo site_url("contact/contact");?>" role="form" id="contact-form" class="contact-form" method="post">
                    <div class="row">
                		<div class="col-md-6">
                  		<div class="form-group">
                            <input type="text" class="form-control" name="name" autocomplete="off" id="Name" placeholder="Név">
                  		</div>
                  	</div>
                    	<div class="col-md-6">
                  		<div class="form-group">
                            <input type="email" class="form-control" name="email" autocomplete="off" id="email" value="<?php if(isset($_SESSION['email'])){
														echo $_SESSION['email'];} else{echo "";}?>" placeholder="Email cím">
                  		</div>
                  	</div>
                  	</div>
                  	<div class="row">
                  		<div class="col-md-12">
                  		<div class="form-group">
                            <textarea class="form-control textarea" rows="3" name="message" id="Message" placeholder="Üzenet"></textarea>
                  		</div>
                  	</div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                  <button type="submit" class="btn main-btn pull-right">Üzenet elküldése</button>
                  </div>
                  </div>
                </form>
                <?php echo validation_errors(); ?>
	</div>
</div>