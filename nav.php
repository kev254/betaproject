<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    a{
      text-decoration: none;
      font-family: 
      color:#637c33;
    }
    hr{
      color: blue;
      height: 8px;
      width: 85%;
      color: #637c33 !important;
    }
    nav{
      height: 200px;
    }
  </style>
</head>
<body>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php"> Food Share</a>
  </li>
  <?php
  if (isset($_SESSION['name'])) {


      //admin
      if ($_SESSION['role']=='user') {

        echo '
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="donate.php">Donate</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">contact Us</a>
          </li>
        ';
        
      }elseif ($_SESSION['role']=='admin'){
        echo '
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../admin/blockuser.php">Block User</a>
          </li>
          ';
      }
    
      echo '<li class="nav-item"><a class="nav-link disabled" href="" tabindex="-1" aria-disabled="true"> Hi, '.$_SESSION['name'].'</a></li>
    <li class="nav-item"> <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>      
      </li>
  
  ';

  }else{
    //login
    echo '
       

     <li class="nav-item">
      <a class="nav-link" href="login.php" tabindex="-1" aria-disabled="true">Login</a>
    </li>
    ';
  }
  ?>

</ul>
</div>
</div>
</nav>
</body>
</html>


