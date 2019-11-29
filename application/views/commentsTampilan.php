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
            <div class="col-5">
            <img src="pokemon.png" alt="" width="30px" height="30px">
                  <a style="color: grey; font-size: 14px; margin-left: 15px; margin-bottom: 10px; line-height: 30px;" href="#" >Pokemon</a>
                  <a style="margin-left: 5px; color: grey;">.</a>
                  <span><a href="#" style="color: grey; margin-left: 5px; line-height: 30px; font-size: 12px;">1h</a></span>
                </div>
                <div class="row">
                  <h2 style="color: black; font-size: 24px;">I Like You</h2>
                </div>
                <br>
                <br>
                <div class="row">
                  <h5><b>2 Comments</b></h5>
                </div>
                <div class="row">
                  <span><b>My Comments</b></span>
                </div>
                <br>
                <div class="row">
                  <p style="margin-top: -5px;"><b>hoseaalbert619</b></p>
                </div>
                <div class="row">
                  <p style="margin-top: -2px;">good</p>
                </div>
                <div class="row">
                  <p class="tips" style="color: grey; font-size: 12px;">Reply</p>
                </div>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-info">
                      <div class="panel-body">
                        <textarea placeholder="Write your comment here!" class="pb-cmnt-textarea" style="width: 200px;"></textarea>
                        <form class="form-inline">
                          <button class="btn btn-primary pull-right" type="button">Share</button>
                        </form>
                      </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</body>
<?php $this->load->view('partials/script') ?>
</html>