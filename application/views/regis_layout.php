
    <!-- Contact -->
    <div id="contact" class="tabs" style="min-height: 700px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>REGISTER FORM</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    
                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false" action="<?= base_url('login/doRegis') ?>" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" name="username" required>
                            <label class="label-control" for="cname">Username</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control-input" name="password" required>
                            <label class="label-control" >Password</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">REGISTER</button>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form -->
    <!-- end of contact -->