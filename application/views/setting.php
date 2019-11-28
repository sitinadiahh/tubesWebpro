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
            <div class="col-2.9">
              <div class="btn-group-vertical" style="width: 250px; padding-top: 30px;">
                <button type="button" class="btn btn-primary" style="background-color: white; color: grey; text-align: left;"><b>Account</b></button>
                <a href="<?php echo base_url('Welcome/setting_password') ?>" class="btn btn-info" role="button" >Password</a>
                <button type="button" class="btn btn-primary" style="background-color: white; color: grey; text-align: left;"><b>Profile</b></button>
              </div>      
            </div>
                
            <div class="col-3" style="margin-left: 20px; padding-top: 24px;">
                 <form id="setting" action method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="csrftoken" value=""><h2><b>Account</b></h2>
                    <br>
                    <div class="field">
                      <label><b>Username</b></label>
                      <input type="text" name="loginName" value="" maxlength="15" style="width: 440px;" maxlength="15">
                      <p class="tips" style="color: grey; font-size: 12px; padding-bottom: 15px; margin-bottom: -1px;">https://9gag.com/</p>
                      <label style="padding-bottom: 20px; margin-bottom: -10px;"><b>Email</b></label>
                      <input type="text" name="email" maxlength="50" style="width: 440px; ">
                      <p class="tips" style="font-size: 12px; color: grey;">Email will not be displayed publicy</p>
                      <div class="combox">
                        <label><b>Mask Sensitive Content</b></label>
                        <br>
                        <select style="font-size: 14px; height: 40px; border-radius: 2px; margin-bottom: 20px">
                          <option value="on1" sty><b>On</b></option>
                          <option value="off1"><b>Off</b></option>
                        </select>
                      </div>
                      <div class="combo box">
                        <label><b>Show Sensitive Content</b></label>
                        <br>
                        <select style="font-size: 14px; height: 40px; border-radius:2px;">
                          <option value="on1" sty><b>On</b></option>
                          <option value="off1"><b>Off</b></option>
                        </select>
                      </div>
                      <button type="submit" form="nameform" value="Submit" style="margin-top: 35px; border-radius: 2px; border: none; padding: 10px; font-size: 14px; background-color: #137EE6 ; color: white;"><b>Save Changes</b></button>
                      <br>
                      <br>
                      <br>
                      <a href="#">Delete my Account</a>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</body>
<?php $this->load->view('partials/script') ?>
</html>