<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
    <main>
        
    <?php
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


    ?>
    <div class="container" >
        <a href="./index.html"><button class="btn btn-success">Back to Login</button></a>
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    
</body>
</html>