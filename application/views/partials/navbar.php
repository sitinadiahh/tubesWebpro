<?php if($this->session->userdata('email')): ?>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
    <div class="container">
        <a class="navbar-brand" href="#"><b>9GAG</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="#">Wholesome <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#">Today I Wore</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="#">Pokemon</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" href="#">Local</a>
            </li>
            
          </ul>
          <ul class="navbar-nav my-2 my-lg-0">
              <li class="nav-link"><i class="fa fa-moon-o"></i></li>
              <li class="nav-link"><i class="fa fa-search"></i></li>
              <li class="nav-link"><i class="fa fa-bell-o"></i></li>
          </ul>
          <div class="dropdown" style="margin-right: 30px;">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="rounded-circle" src="pokemon.png" alt="" width="25px" height="25px">
            </a>
          
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">My Profile</a>
              <a class="dropdown-item" href="#">Setting</a>
              <a class="dropdown-item" href="<?php echo base_url('user/logout') ?>">Logout</a>
            </div>
          </div>
        <div class="upload">
          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModalCenter"><b>+ Upload</b></button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <?php echo form_open_multipart('post/aksi_upload');?>
              <form>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Judul post</label>
                  <input name="judul" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Kategori</label>
                  <select name="kategori" class="form-control" id="exampleFormControlSelect1">
                    <option>Pokemon</option>
                    <option>Wholesome</option>
                    <option>Today I Wore</option>
                    <option>Local</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Gambar</label>
                  <input name="berkas" type="file" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
              
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
              </div>
              </form>
              <?php echo form_close();?>
            </div>
          </div>
        </div>


    </div>
      </nav>

      <?php else : ?>
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
    <div class="container">
        <a class="navbar-brand" href="#"><b>9GAG</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="#">Wholesome <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#">Today I Wore</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="#">Pokemon</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" href="#">Local</a>
            </li>
            
          </ul>
          <ul class="navbar-nav my-2 my-lg-0">
              <li class="nav-link"><i class="fa fa-moon-o"></i></li>
              <li class="nav-link"><i class="fa fa-search"></i></li>
          </ul>
          <a href="#" style="color:grey; margin-right: 10px;" data-toggle="modal" data-target="#exampleModal">Login</a>
          <!-- Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel"><b>Login</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <?php echo form_open('user/login');?>
                <form>
                <small id="emailHelp" class="form-text text-muted" style="margin-bottom : 20px">Log in with your email address</small>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Log in</button>
                </form>
                <?php echo form_close(); ?>
                </div>
                </div>
            </div>
            </div>
            </div>
           
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
              Sign Up
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel"><b>Become a member</b></h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                    <div class="form-group">
                        <label for="exampleInputFullName"><b>Full Name</b></label>
                        <input type="email" class="form-control" id="exampleInputFullName">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><b>Email Address</b></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"><b>Password</b></label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
  </nav>
<?php endif; ?>
