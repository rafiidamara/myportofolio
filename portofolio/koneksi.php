<?php
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
    </svg>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@100&display=swap" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Portofolio | Rafidamara</title>
    
  </head>
  <body>

    <?php

        $sql = "SELECT * FROM profil";
        $query = mysqli_query($connect,$sql);

        while($profil = mysqli_fetch_array($query)){    


      ?>
    
    <div id="home"></div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top p-3" style="background-color: #AE7C5B;">
      <div class="container-sm">
        <a href="#home" class="nav-link  active me-4 fs-5 fw-bold" style="color: white;">PORTOFOLIO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse-sm navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <div class="menu-nav">
              <ul>
                <li class="dropdown"><a href="#">MENU</a>
                  <ul class="isi-dropdown">
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#gallery">GALLERY</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                  </ul>
                </li>
                <li><a href="admin.php">ADMIN</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#AE7C5B" fill-opacity="1" d="M0,192L80,170.7C160,149,320,107,480,112C640,117,800,171,960,186.7C1120,203,1280,181,1360,170.7L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>




    <!-- Jumbotron -->
    
    <div class="jumbotron-sm jumbotron-fluid mb-5" style="height: 600px; background-color: #fff; background-size: cover; background-position-y: -150px;">
      <div class="container-sm text-dark text-center">
      
        <img class="img-thumbnail rounded-circle shadow" src="<?php echo $profil['gambar'] ?>" alt="img" width="250px" height="250px" style="margin-top: 82px;">
        <p class="lead text-center mt-2 fw-bold fs-2"><?php echo $profil['nama'] ?></p>

        
      </div>
    </div>
    
    <?php
        }
    ?>

  

    <?php

        $sql = "SELECT * FROM about";
        $query = mysqli_query($connect,$sql);

        while($about = mysqli_fetch_array($query)){


      ?>
    <!-- About -->
    <span id="about"></span>
    <div class="card" style="background-color: #ECF0F1;">
      <div class="container-sm" style="margin-top: 200px; margin-bottom: 450px;">
        <h1 class="text-center fw-bold mb-5 display-5">About</h1>
        <div class="col-sm justify-content text-center fs-5">
          <p class="col-sm"><?php echo $about['about'] ?></p>
        </div>
      </div>
    </div>

    <?php } ?>
    
    
    <!-- Gallery -->
    <span id="gallery"></span>
   <section class="pb-5">
    <h1 class="text-center fw-bold mb-5 display-5 text-dark" style="padding-top: 130px; padding-bottom: 60px;">Gallery</h1>
     <div class="container-sm ">
       <div class="row text-center">

       <div class="card-group justify-content-evenly">
       <?php               
            $id = mysqli_query($connect,'SELECT * FROM gallery ORDER BY gallery.id');
            while ($isi = mysqli_fetch_array($id)){
                $idp = $isi['id'];
        ?>
         <div class="col-md-4 mb-5">
          <div class="card shadow-sm" style="width: 98%;">
            <img src="<?php echo $isi['gambar'] ?>" style="height:250px;" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title fw-bold text-center"><?php echo $isi['judul'] ?></h5>
              <p class="card-text"><?php echo $isi['isi'] ?></p>
            </div>
          </div>
         </div>
        <?php 
            } 
        ?>
       </div>
       </div>
     </div>
   </section>


   <!-- Contact -->
   <br id="contact"><br><br><br>
   <div class="container-sm" style="padding-bottom : 130px; padding-top: 60px; background-color: #ECF0F1;">
    <h1 class="text-center mb-5"><b>Contact</b></h1>
    <form action="contact.php" method="POST">
      
      <input type="hidden" name="id">

      <div class="form-group mb-3">
        <label for="name">Nama</label>
        <input id="name" class="form-control" type="text" name="nama">
      </div>
      <div class="form-group mb-3">
        <label for="email">Alamat Email</label>
        <input id="email" class="form-control" type="email" name="email">
      </div>
      <div class="form-group mb-3">
        <label for="comment">Komentar</label>
        <textarea id="comment" class="form-control" name="komentar" rows="3"></textarea>
      </div>

      <button class="btn btn-primary" type="submit" name="simpan" style="width: 15%;">Kirim</button>

    </form>
   </div>



   <!-- Footer -->
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#AE7C5B" fill-opacity="1" d="M0,192L80,170.7C160,149,320,107,480,112C640,117,800,171,960,186.7C1120,203,1280,181,1360,170.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
   <footer class="footer position-relative text-center pb-3" style="background-color: #AE7C5B;">
     <div class="text-center fw-bolder text-light">
     <p>Created by <i class="bi bi-instagram"></i> <a href="https://www.instagram.com/rafiidamara/?hl=bg" style="color: white; fw-bold">Rafidamara</a></p>
     </div>
   </footer>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>