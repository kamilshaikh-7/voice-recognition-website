<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSpeech to Text</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
          <ul class="navbar-nav" style="margin-top: 10px;">
            <li class="nav-item h5">
                <a class="nav-link active" href="#"><img src="img/mic.png" style="margin-right: 10px;width: 2rem;" alt="">iSpeech</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li> -->
          </ul>
        </div>
      </nav>

    <div class="container" style="height: 80vh;">
        <div class="header">
            <h1 class="">
                Speech to Text Converter
            </h1>
            <h6 id="instructions">Press the Start button</h6>
        </div>

        <div class="form-group">
            <textarea id="textbox" style="width: 90%; margin: 0 auto;" rows="6" class="form-control" placeholder="text appear here"></textarea>
        </div>
        <div class="form-group mt-3" style="text-align: center;">
            <button id="startbtn" class="btn btn-danger btn-block"><i class="fa-solid fa-microphone"></i>&nbsp;Start</button>
        </div>
    </div>

    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <!-- <span>Get connected with us on social networks:</span> -->
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="https://www.twitter.com/iamkamil_7" class="me-4 text-reset" target="_blank">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.instagram.com/iamkamil7" class="me-4 text-reset" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/in/kamil-shaikh-3b0430210" class="me-4 text-reset" target="_blank">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://www.github.com/kamilshaikh-7" class="me-4 text-reset" target="_blank">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-2">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="">
            <!-- Content -->
            <!-- <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6> -->
            <!-- <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p> -->
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <!-- <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div> -->
          <!-- Grid column -->
  
          <!-- Grid column -->
          <!-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div> -->
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> Aurangabad, India</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              kamilshaikh.co@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i>+91 9511740140</p>
            <!-- <p><i class="fas fa-print me-3"></i> +91 9511740140</p> -->
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="https://www.instagram.com/iamkamil7" target="_blank">Kamil Shaikh</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>