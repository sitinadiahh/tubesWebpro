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
                <a href="<?php echo base_url('Welcome/setting') ?>" class="btn btn-info" role="button" >Account</a>
                <a href="<?php echo base_url('Welcome/setting_password') ?>" class="btn btn-info" role="button" >Password</a>
                <a href="<?php echo base_url('Welcome/setting_account') ?>" class="btn btn-info" role="button" >Profile</a>
              </div>      
            </div>
                
            <div class="col-5" style="margin-left: 20px; padding-top: 24px;">
                 <form id="setting" action method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="csrftoken" value=""><h2><b>Profile</b></h2>
                    <br>
                    <div class="field">
                      <label><b>Your Name</b></label>
                      <input type="text" name="accountName" value="" maxlength="15" style="width: 440px;" maxlength="15">
                      <p class="tips" style="color: grey; font-size: 12px; padding-bottom: 15px; margin-bottom: -1px;">This is the name that will be visible to other users on 9GAG.</p>
                      <div class="combox">
                        <label><b>Status</b></label>
                        <br>
                        <select style="font-size: 14px; height: 40px; border-radius: 2px; margin-bottom: 20px; width: 125px;">
                          <option value="status" sty><b>None</b></option>
                          <option value="status1"><b>Amerika</b></option>
                          <option value="status2" sty><b>Indonesia</b></option>
                          <option value="status3"><b>India</b></option>
                          <option value="status4" sty><b>Russia</b></option>
                          <option value="status5"><b>Vietnam</b></option>
                          <option value="status6" sty><b>Thailand</b></option>
                          <option value="status7"><b>Malaysia</b></option>
                        </select>
                      </div>
                      <div class="combo box">
                        <label><b>Gender</b></label>
                        <br>
                        <select style="font-size: 14px; height: 40px; border-radius:2px; width: 125px;">
                          <option value="gen" sty><b>Select Gender..</b></option>
                          <option value="gen1"><b>Pria</b></option>
                          <option value="gen2" sty><b>Perempuan</b></option>
                          <option value="gen3"><b>Unspecified</b></option>
                        </select>
                      </div>
                      <br>
                      <p><b>Your 9GAG Data</b></p>
                      <p style="color: grey; font-size: 12px;  margin-top: -12px; margin-bottom: -2px">You can<a href="#"> request </a>a HTML with your 9GAG data. We'll send it to your email once ready.</p>
                       <button type="submit" form="nameform" value="Submit" style="margin-top: 35px; border-radius: 2px; border: none; padding: 10px; font-size: 14px; background-color: #137EE6 ; color: white;"><b>Save Changes</b></button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</body>
<?php $this->load->view('partials/script') ?>
</html>