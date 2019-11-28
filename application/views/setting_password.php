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
                <button type="button" class="btn btn-primary" style="background-color: white; color: grey; text-align: left;"><b>Password</b></button>
                <button type="button" class="btn btn-primary" style="background-color: white; color: grey; text-align: left;"><b>Profile</b></button>
              </div>      
            </div>
            <div class="col-3" style="margin-left: 20px; padding-top: 24px;">
                 <form id="setting" action method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="csrftoken" value=""><h2><b>Password</b></h2>
                    <br>
                    <div class="field">
                      <label><b>New Password</b></label>
                      <input type="text" name="changepass" value="" maxlength="12" style="width: 440px; height: 35px; ">
                      <label style="padding-bottom: 20px; margin-bottom: -10px; margin-top: 15px; height: 35px; border-radius: 4px;"><b>Re-type New Password</b></label>
                      <input type="text" name="changepass1" value="" maxlength="12" style="width: 440px;">
                      <button type="submit" form="nameform" value="Submit" style="margin-top: 35px; border-radius: 2px; border: none; padding: 10px; font-size: 14px; background-color: #137EE6 ; color: white; width: 125px;"><b>Save Changes</b></button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</body>
<?php $this->load->view('partials/script') ?>
</html>