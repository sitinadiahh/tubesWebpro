<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php $this->load->view('partials/header') ?>
</head>
<body>
    <?php $this->load->view('partials/navbar') ?>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <?php $this->load->view('partials/sidebar') ?>
            <div class="col-7">
              <h2><b>Hosea Albert</b></h2>
              <p class="tips" style="color: grey; font-size: 12px; padding-bottom: 15px; margin-bottom: -1px;">@hoseaalbert619 . 3 days</p>
              <p>My Funny Collection</p>
              <div class="btn-group" style="width: 650px;">
                <a href="<?php echo base_url('Welcome/setting') ?>" class="btn btn-info" role="button" ><b>Home</b></a>
                <a href="<?php echo base_url('Welcome/setting_password') ?>" class="btn btn-info" role="button" ><b>Post</b></a>
                <a href="<?php echo base_url('Welcome/setting_account') ?>" class="btn btn-info" role="button" ><b>Comment</b></a>
                <a href="<?php echo base_url('Welcome/setting_account') ?>" class="btn btn-info" role="button" ><b>Upvotes</b></a>
              </div>
              <br>
              <br>
              <div class="row">
                  <img src="pokemon.png" alt="" width="30px" height="30px">
                  <a style="color: grey; font-size: 14px; margin-left: 15px; margin-bottom: 10px; line-height: 30px;" href="#" >Pokemon</a>
                  <a style="margin-left: 5px; color: grey;">.</a>
                  <span><a href="#" style="color: grey; margin-left: 5px; line-height: 30px; font-size: 12px;">1h</a></span>
                </div>
                <div class="row">
                  <h2 style="color: black; font-size: 24px;">I Like You</h2>
                </div>
                <div class="row">
                  <img src="pokemon1.jpg" alt="" width="100%">
                </div>
                <div class="row">
          
                  <span><a href="#" style="color: grey; font-size: 14px;">296 Points</a></span>
                  <a style="color: grey;">.</a>
                  <span><a href="#" style="color: grey; font-size: 14px; ">1 Comments</a></span>
                </div>
                <div class="row">
                      <button type="button" class="btn btn-outline-dark" style="margin-right: 10px;"><i class="fa fa-arrow-up"></i></button>
                      <button type="button" class="btn btn-outline-dark" style="margin-right: 10px;"><i class="fa fa-arrow-down"></i></button>
                      <button type="button" class="btn btn-outline-dark"><i class="fa fa-comments"></i></button>
                </div>
            </div> 
        </div>
    </div>
</body>
<?php $this->load->view('partials/script') ?>
</html>