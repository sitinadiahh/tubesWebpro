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
            
                <button type="button" class="btn btn-light">Top Posts of the Week</button>
                <button type="button" class="btn btn-light">Pokemon</button>
                <button type="button" class="btn btn-light">Wholesome</button>
                <button type="button" class="btn btn-light">Today I Wore</button>
                <br>
                <br>
                <?php foreach($posts as $po) : ?>
                <div class="row">
                  <img src="test.webp" alt="" width="30px" height="30px">
                  <a style="color: grey; font-size: 14px; margin-left: 15px; margin-bottom: 10px; line-height: 30px;" href="#" ><?php echo $po['kategori'] ?></a>
                  <a style="margin-left: 5px; color: grey;">.</a>
                  <span><a href="#" style="color: grey; margin-left: 5px; line-height: 30px; font-size: 12px;"><?php echo $po['waktu_upload'] ?></a></span>
                </div>
                <div class="row">
                  <h2 style="color: black; font-size: 24px;"><?php echo $po['judul'] ?></h2>
                </div>
                <div class="row">
                  <img src="<?php echo base_url('gambar/'). $po['gambar'] ?>" alt="" width="100%">
                </div>
                <div class="row">
          
                  <span><a href="#" style="color: grey; font-size: 14px;"><?php echo $po['point'] ?> Points</a></span>
                  <a style="color: grey;">.</a>
                  <span><a href="#" style="color: grey; font-size: 14px; ">111 Comments</a></span>
                </div>
                <div class="row">
                      <button type="button" class="btn btn-outline-dark" style="margin-right: 10px;"><i class="fa fa-arrow-up"></i></button>
                      <button type="button" class="btn btn-outline-dark" style="margin-right: 10px;"><i class="fa fa-arrow-down"></i></button>
                      <button type="button" class="btn btn-outline-dark"><i class="fa fa-comments"></i></button>
                </div>
                <?php endforeach; ?>
        </div>
    </div>
</body>
<?php $this->load->view('partials/script') ?>
</html>