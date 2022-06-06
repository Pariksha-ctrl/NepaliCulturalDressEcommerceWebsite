<?php
require "configuration/constants.php";

// STARTING SESSION HERE
session_start();

if(isset($_SESSION["uid"])){
  //header("location:about.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Nepali Cultural Dress</title>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <script src="js/jquery2.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="main.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>

  body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
  }

  html {
    box-sizing: border-box;
  }

  *, *:before, *:after {
    box-sizing: inherit;
  }

  .column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 8px;
  }

  .about-section {
    padding: 50px;
    text-align: center;
    background-color: lightskyblue;
    color: white;
  }

  .container {
    padding: 0 16px;
  }

  .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
  }

  .title {
    color: grey;
  }

  .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
  }

  .button:hover {
    background-color: #555;
  }

  h1 {
    color: black;
  }

  h4 {
    color: black;
    width: 80%;
    justify-content: center;
    padding-left: 250px;
  }

footer {
  text-align: center;
  padding: 3px;
  background-color: black;
  color: white;
}

a {
    color: white;
}

  @media screen and (max-width: 650px) {
    .column {
      width: 100%;
      display: block;
    }
  }
</style>
</head>
<body>
  <div class="wait overlay">
    <div class="loader"></div>
  </div>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid"> 
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
          <span class="sr-only">navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">Nepali Cultural Dress</a>
      </div>
      <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>HOME</a></li>
          <li><a href="about.php">ABOUT US</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
          <li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>PRODUCT</a></li>
        </ul>
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search" id="search">
          </div>
          <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
            <div class="dropdown-menu" style="width:400px;">
              <div class="panel panel-success">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-md-3">Sl.NO</div>
                    <div class="col-md-3">IMAGE</div>
                    <div class="col-md-3">NAME</div>
                    <div class="col-md-3">PRICE in <?php echo CURRENCY; ?></div>
                  </div>
                </div>
                <div class="panel-body">
                  <div id="cart_product">
                    <!-- DISPLAYING THE PRODUCTS OF CART HERE -->
                  </div>
                </div>
                <div class="panel-footer"></div>
              </div>
            </div>
          </li>
          <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
            <ul class="dropdown-menu">
              <div style="width:300px;">
                <div class="panel panel-primary">
                  <div class="panel-heading">Login</div>
                  <div class="panel-heading">
                    <form onsubmit="return false" id="login">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" id="email" required/>
                      <label for="email">Password</label>
                      <input type="password" class="form-control" name="password" id="password" required/>
                      <p><br/></p>
                      <a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
                    </form>
                  </div>
                  <div class="panel-footer" id="e_msg"></div>
                </div>
              </div>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>  


  <div class="about-section">
    <h1>Cultural Diversity of Nepal</h1><br>
    <img src="product_images/nepal_diversity2.png" alt="John" style="width:100%"><br><br><br><br>
    <h4>We offer all kinds of Nepali cultural dresses and accessories for all men, women, and kids. We are specialized for all cultural dresses representing Nepal in a wide range. Nepali Cultural Dress simply means the cultural dresses of Nepal which is diverse, but still unique among all. Our main objective is to make the life of Nepalese people more convenient by making various cultural dresses and accessories of Nepal available to buy online. We promote the uniqueness and diversity of Nepal and Nepali Cultural Dress worldwide.
    </h4>
  </div>
 
 <footer>
  <p><a href="index.php">Nepali Cultural Dress</a></p>
</footer>

</body>
</html>
















































