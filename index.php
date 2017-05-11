<?php session_start();
    if(!isset($_SESSION["docInfo"])){
        $_SESSION["docInfo"] = array();
    }
?>
<html lang="en">
  <head>
      <title>Upload | Tutorial 7</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
      <style media="screen">
        button, input{
          margin: 20px;
        }
        button.upload{
          margin-left: 40%;
        }
        .result{
          margin-top: 40px;
        }
      </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="form col-md-12">
          <?php
            if(isset($_SESSION["uploadStatus"])){
              if(strpos($_SESSION["uploadStatus"], "berhasil") !== false){
                echo "<div class='alert alert-success'><strong>".$_SESSION["uploadStatus"]."</strong></div>";
              }
              else if(strpos($_SESSION["uploadStatus"], "dihapus") !== false){
                echo "<div class='alert alert-success'><strong>".$_SESSION["uploadStatus"]."</strong></div>";
              }
              else{
                echo "<div class='alert alert-danger'><strong>".$_SESSION["uploadStatus"]."</strong></div>";
              }
              unset($_SESSION["uploadStatus"]);
            }
          ?>
          <h2 class="offset-md-4">Upload Dokumen anda disini!</h2>
          <form method="POST" action="./app.php" enctype="multipart/form-data">
            <div class="form-group">
              <label class="custom-file offset-md-4">
                <input type="file" id="theDoc" name="theDoc" class="offset-md-5 custom-file-input">
                <span class="custom-file-control"></span>
                <button type="submit" class="btn btn-primary offset-md-4 upload">Upload</button>
              </label>
            </div>
          </form>
        </div>
      </div>
      <div class="result">
        <div class="row">
          <?php
            $files = $_SESSION["docInfo"];
            foreach($files as $file) :
          ?>
          <div class="col-md-4 card">
            <img src=<?= "'./src/".$file["ext"].".png'";?> height="200px"/>
            <p class="font-weight-normal">Nama Dokumen : <?= $file["filename"]; ?></p>
            <p class="font-weight-normal">Ekstensi dokumen : <?= $file["ext"]; ?></p>
            <p class="font-weight-normal">Diupload pada : <?= $file["time"]; ?></p>
            <a href=<?= "'".$file["link"]."'";?> download><button type="submit" class="btn btn-primary">Download <?= "".$file["ext"]."";?></button></a>
            <a href=<?= "app.php?hapus=".$file["link"]?> ><button type="submit" class="btn btn-primary">Hapus</button></a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </body>
     <footer>

      <div class="row">       

         <div class="six columns tab-whole footer-about">
				
				<h3>About TokoKeren</h3>
               
            <p>TokoKeren adalah suatu penghubung masyarakat dengan produk yang ingin dibeli dengan cara yang sangat mudah. 
            </p>

            <p>Akan selalu menampilkan yang terbaik untuk seluruhnya.</p>        

         </div> <!-- /footer-about -->

         <div class="six columns tab-whole right-cols">

            <div class="row">

               <div class="columns">
                  <h3 class="address">About Us</h3>
                  <p>
                  Gedung Fasilkom<br>
                  Universitas Indonesia<br>
                  Depok, Jawa Barat 15242
                  </p>

                  <ul>
                    <li><a href="tel:6473438234">647.343.8234</a></li>
                    <li><a href="tel:1234567890">123.456.7890</a></li>
                    <li><a href="mailto:someone@puremedia.com">someone@puremedia.com</a></li>
                  </ul>                  
               </div> <!-- /columns -->             

               <div class="columns last">
                  <h3 class="contact">Follow Us</h3>

                  <ul>
                     <li><a href="#">Facebook</a></li>
                     <li><a href="#">Twitter</a></li>
                     <li><a href="#">GooglePlus</a></li>
                     <li><a href="#">Instagram</a></li>
                     <li><a href="#">Flickr</a></li>
                     <li><a href="#">Skype</a></li>
                  </ul>
                  
               </div> <!-- /columns --> 

            </div> <!-- /Row(nested) -->

         </div>
   

         <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#hero"><span>Top</span><i class="fa fa-long-arrow-up"></i></a>
         </div>

      </div> <!-- /row -->

   </footer> <!-- /footer -->
</html>
