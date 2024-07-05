<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta name="keyword" content="Toiture,Couverture,Zinguerie,Isolation,Travaux du toit,dépannage,Velux">
  <title>Global Couverture - Galerie</title>
 
  <!-- Favicons -->
  <link href="assets/img/LOL.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 2000; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}
.checked {
  color: orange;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><img src="assets/img/S1.png" width="auto" alt="logo"></a></h1>
      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="index.html">Accueil</a></li>
          <li><a href="./index.html#about">A Propos</a></li>
           <li class="drop-down"><a href="./index.html#services">Services</a>
            <ul>
              <li><a href="Services/ServicesToit.html">Toiture</a></li>
              <li><a href="Services/ServicesRepar.html">Réparation</a></li>
              <li><a href="Services/ServicesZing.html">Zinguerie</a></li>
              <li><a href="Services/ServicesIsola.html">Isolation</a></li>
			        <li><a href="Services/ServicesPose.html">Pose de vélux</a></li>
			      
            </ul>
          </li>
          <li class="active"><a href="galerie.php">Réalisations</a></li>
          <li><a href="./index.html#portfolio">Galerie</a></li>
          <li><a href="./index.html#faq">FAQ</a></li>
          <li><a href="./index.html#contact">Contact</a></li>
          <li class="get-started"><a href="tel:+33686381114" ><i class="icofont-phone"></i> (06) 8638 1114 </a></li>
          <li class="get-started"> <a class="btn-get-started" href="#"  id="myBtn">Devis Gratuit</a>  </li>
        </ul>
      </nav>
    </div>
  </header><!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Gallery</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Gallery</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
 <section id="portfolio-details" class="portfolio-details">
      <div class="container">

      
             <?php  
                include("Dashboard/config.php");
                $query = "SELECT * FROM images ORDER BY id DESC";  
                $result = mysqli_query($c, $query); 
             
                   echo ' <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">'; 
                   
                while($row = mysqli_fetch_array($result))  
                {  
                 
                     echo ' 

                  

                       <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                          <a href="Dashboard/images/'.$row[1].'" data-gall="portfolioGallery" class="venobox"> <img src="Dashboard/images/'.$row[1].'"  height="300" width="350" alt="Travaux de Toiture zinguerie et isolation "></a>
                          <div class="portfolio-info">
                          
                          
                        
                         
                          </div>
                        </div>
                      </div>
                                            
           
              
                 ';  
                        
                   
               
                }
              echo '</div>';

   ?> 

         

          


        </div>
     
    </section>
    <div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <section  id="contact1" class="contact">
              <div class="container">
        
                <div class="section-title" data-aos="fade-up">
                  <h2>Devis Gratuit</h2>
                </div>
        
                <div class="row">
        
               
        
                
        
                  <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="300">
                    <form action="Dashboard/devisBack.php" method="POST" role="form" >
                      <div class="php-email-form">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom et Prenom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                        <div class="validate"></div>
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Votre E-mail" data-rule="email" data-msg="Please enter a valid email" required/>
                        <div class="validate"></div>
                      </div>
                      <div class="form-group">
                        <input type="number" class="form-control" name="number" id="number" placeholder="Votre Numéro" data-rule="minlen:8" data-msg="Please enter a valid email" required />
                        <div class="validate"></div>
                      </div>
                   


                      <div class="form-group">
                        <select class="form-select" name ="region" aria-label="Default select example" required>
                          <option selected>Sélectionnez Votre Region</option>
                          <option value="Essonne">91. Essonne</option>
                          <option value="Paris">  75. Paris</option>
                          <option value="Hauts-de-Seine">92. Hauts-de-Seine</option>
                          <option value="Seine-et-Marne">77. Seine-et-Marne</option>
                          <option value="Val-d'Oise">95. Val-d'Oise</option>
                          <option value="Val-de-Marne">94. Val-de-Marne</option>
                          <option value="Yvelines">78. Yvelines</option>
                          </select>                          
                        <div class="validate"></div>
                      </div>



                      <div class="form-group">
                        <select class="form-select" name ="service" aria-label="Default select example" required>
                          <option selected>Sélectionnez le service</option>
                          <option value="Toiture">Toiture</option>
                          <option value="Réparation">Réparation</option>
                          <option value="Zinguerie">Zinguerie</option>
                          <option value="Isolation">Isolation</option>
                          <option value="Pose de vélux">Pose de vélux</option>
                          <option value="Bardage">Bardage</option>
                          <option value="Démoussage et entretien">Démoussage et entretien</option>
                          <option value="Habillage de bandeaux">Habillage de bandeaux</option>
                  
                        </select>                          
                        <div class="validate"></div>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" maxlength="79" data-msg="Veuillez ecrire votre message ..." placeholder="Message" required></textarea>
                        <div class="validate"></div>
                      </div>
                      <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>
                      <div class="text-center"><button type="submit" name="devis">Envoi du Message</button></div>
                     </div>
                    </form>
                  </div>
        
                </div>
        
              </div>
            </section><!-- End Contact Section -->
        
          </div>
          
        </div>
  </main><!-- End #main -->
  <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Global Couverture 2021</span>
                    </div>
                </div>
            </footer>
</body>
 <!-- Vendor JS Files -->
 <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
      
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
      
        
        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }
      
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }
        span1.onclick = function() {
          modal.style.display = "none";
        }
        span2.onclick = function() {
          modal.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>
</html>