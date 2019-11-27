<?php if($this->session->userdata('email')){
    echo '              <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
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
              <a class="dropdown-item" href="#">Logout</a>
            </div>
          </div>
        <div class="upload">
          <button class="btn btn-primary" ><b>+ Upload</b></button>
        </div>
    </div>
      </nav>';
} else {
    echo '<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
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
          <a href="#" style="color:grey; margin-right: 10px;" >Login</a>
            <button class="btn btn-primary my-2 my-sm-0">Sign Up</button>
        </div>
    </div>
      </nav>



';
}?>
