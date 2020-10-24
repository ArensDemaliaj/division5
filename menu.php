<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Division5</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php') { echo 'active'; } ?>">
        <a class="nav-link" href="index.php">Home</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'login.php') { echo 'active'; } ?>">
            <?php
               if(!isset($_COOKIE["fullname"])){
                 echo "<a class='nav-link' href='login.php'>";
                 echo "Login";   
                 echo "</a>";            
               }
             ?>
        </li>
        <li class="nav-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'register.php') { echo 'active'; } ?>">
            <?php
               if(!isset($_COOKIE["fullname"])){
                 echo "<a class='nav-link' href='register.php'>";
                 echo "Register";   
                 echo "</a>";            
               }
             ?>
        </li>
        <li class="nav-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'logout.php') { echo 'active'; } ?>">
            <?php
               if(isset($_COOKIE["fullname"])){
                 echo "<a class='nav-link' href='logout.php'>";
                 echo "Logout";   
                 echo "</a>";            
               }
             ?>
        </li>
        </ul>
    </form>
  </div>
</nav>