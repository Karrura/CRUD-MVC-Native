<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
<div class="container-fluid">

  <div class="row">
    <div class="col-md-2">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #D3E0DC">
      <div class="card-header d-flex justify-content-center">
        
      </div>
      <div class="card-body" style="height: 20%">
          <img src="../public/image/image-center.jpg" alt="Admin" class="rounded mx-auto d-block" width="50%" height="auto">
          <div class="d-flex justify-content-center">
            <span><b>Admin</b></span>
          </div>
      </div>
      <hr>
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= BASEURL;?>/home">
              <span><i class="fa-solid fa-house-chimney"></i></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL;?>/jenis">
              <span><i class="fa-solid fa-list-check"></i></span>
              Jenis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL;?>/supplier">
              <span><i class="fa-solid fa-people-carry-box"></i></span>
              Supplier
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL;?>/barang">
              <span><i class="fa-solid fa-box"></i></span>
              Barang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span><i class="fa-solid fa-right-from-bracket"></i></span>
              Logout
            </a>
          </li>
         
        </ul>

      </div>
    </nav>
    </div>
    <div class="col-md-9 ">