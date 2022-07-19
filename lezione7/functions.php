<?php 

function head($top="This is the Head section") {  

    echo '<!DOCTYPE html>
    <html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Title</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>';
}
?>


<?php
function nav($upper="This is the header section"){
    echo '<header>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact.html">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Download</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

</header>';
}
?>


<?php 

function form($default="this is the default"){

    $login = $_POST['pluto'];
    $password = $_POST['pippo'];

    $controllologin = "info@talent.it";
    $controllopassword = "12345";

    if ( $login == $controllologin && $password == $controllopassword ) {

        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>";
        echo "<strong>Puoi Accedere!</strong>";
        echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
        echo "<span aria-hidden='true'>&times;</span>";
        echo "</button>";
        echo "</div>";

    } else {

        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>";
        echo "<strong>Non Puoi Accedere!</strong>";
        echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
        echo "<span aria-hidden='true'>&times;</span>";
        echo "</button>";
        echo "</div>";

    }

    echo '<div class="container min-vh-100 d-flex align-items-center justify-content-center flex-column pt-5 pt-md-0">
    <form method="POST" action="elaboradati.php" class="needs-validation" novalidate>
    <div class="row">
        <div class="mb-3 col-md-12">
            <label for="login" class="form-label ">Login</label>
            <input type="email" id="login" name="pluto" class="form-control" placeholder="Your Email" required>
            <div class="valid-feedback">Succesful Login!</div>
            <div class="invalid-feedback">Insert a valid Email</div>
        </div>
        <div class="mb-3 col-md-12">
            <label for="password" class="form-label ">Password</label>
            <input type="password" id="password" name="pippo" class="form-control" placeholder="Your Password" required>
        </div>
    </div>
    <button class="btn btn-success" type="submit">LOGIN</button>
    </form>
    </div>';
}

?>


<?php 

function footer($credits = "SITO CREATO DA FELIPE"){ 
    
    echo '<footer class="container my-5 d-flex justify-content-between">
        <p>
            © 2017 - 2022 Company, Inc.
            <a href="#">Terms</a>
            <a href="#">Privacy</a>
        </p>
        <p>
            <a href="#">Back to top</a>
        </p>
        </footer>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
        
    </body>
    </html>';
}
?>


