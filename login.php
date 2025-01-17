<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title>Division 5!</title>
</head>

<body>
    <?php
    include_once 'menu.php';
    if(isset($_GET['fehler'])){
        if($_GET['fehler'] == 2){
        $_GET['fehler'] = 0;
        }
        if($_GET['fehler'] == 1){
            echo "<h3 class='bg-danger text-center'>User does not exist. You might want to register.</h3>";
            $_GET['fehler'] = 0;
            }
    }
    ?>

    
    <div class="container">
    <div class="row">
        <div class="col-sm-0 col-md-3 col-lg-4">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <br>
            <h1>Let's login</h1>
            <br>
            <form method="post" action="user_login.php">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-sm-0 col-md-3 col-lg-4">
        </div>
    </div>
    </div>


</body>

</html>

