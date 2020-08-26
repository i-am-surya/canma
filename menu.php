<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Canmation menu</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check"><i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3><span>Canmation</span></h3>
      </div>

      <div class="right_area">
        <form action="login.php" method="post" name="login">
        <a href="#" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="images/avatar.png" class="profile_image" alt="">
        <h4>Admin</h4>
      </center>
      <!-- <button onclick="show(0)"><i class="fas fa-desktop"></i><span>Dashboard</span></button> -->
      <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="#"><i class="fas fa-id-badge"></i><span>Employee</span></a>
      <a href="#"><i class="fas fa-shopping-bag"></i><span>Products</span></a>
      <a href="#"><i class="fas fa-users"></i><span>Suppliers</span></a>
      <a href="#"><i class="fas fa-shopping-cart"></i><span>Purchase</span></a>
      <a href="#"><i class="fas fa-tags"></i><span>Expenses</span></a>
      <a href="#"><i class="fas fa-credit-card"></i><span>Transaction</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
     <!-- <form action="employee.php" method="post" name="login"> -->
     
    </div>

  </body>
</html>
                           