<?php
    require 'db_connect.php';
    
    $id = $_GET["id"];

    if (isset($_COOKIE["fullname"]) && isset($_COOKIE["admin"])) {
        $sql = "SELECT * FROM users WHERE id = " . $_GET["id"] . ";";
        
        $sth = $conn->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        $firstName = $result[0]["firstName"];
        $lastName = $result[0]["lastName"];
        $email = $result[0]["email"];
        $admin = $result[0]["admin"];
    }else{
        header("location:index.php");
    }

?>
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
    ?>
   

<div class="container">
    <div class="row">
        <div class="col-sm-0 col-md-3 col-lg-4">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <br>
            <h3>Edit the user info</h3>
            <br>
            <form method="post" action="user_edit.php">
                <div class="form-group">
                    <label for="id">ID</label>
                    <input type="text" name="id" class="form-control" value="<?php echo $id; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="firstName">Fist Name</label>
                    <input type="text" name="firstName" class="form-control" value="<?php echo $firstName; ?>">
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" class="form-control" value="<?php echo $lastName; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                </div>
                <div class="form-group">
                    <label for="admin">Privileges</label>
                    <select name="admin">
                        <option value="0">Non-Admin</option>
                        <option value="1">Admin</option>
                    </select>
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