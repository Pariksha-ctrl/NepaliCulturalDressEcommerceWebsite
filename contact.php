<?php
require "configuration/constants.php";

// STARTING SESSION HERE
session_start();

if(isset($_SESSION["uid"])){
  //header("location:contact.php");
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
  }

  * {
    box-sizing: border-box;
  }

  /* Style inputs */
  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  /* Style the container/contact section */
  .container {
    border-radius: 5px;
    background-color: lightskyblue;
    padding: 10px;
  }

  /* Create two columns that float next to eachother */
  .column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
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

  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .column, input[type=submit] {
      width: 100%;
      margin-top: 0;
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
  <p><br/></p>
  <p><br/></p>
  <p><br/></p>
  <p><br/></p>

  <div class="container">
    <div style="text-align:center">
      <h1>Contact Us</h1>
      <h4>We would love to hear from you</h4>
    </div>
    <div class="row">
      <div class="column">
        <h3>Online Business Startup Company</h3>

        <img src="product_images/contactus.jpg" alt="John" style="width:60%">
        <p><br/></p>
        <h5>Address: 129 Trafalgar Street, Stanmore 2048 NSW</h5>

        <h5>Phone number: +61 45180 8192</h5>

        <h5>Email: reshmigrg22@gmail.com</h5>
        <p><br/></p>
      </div>
      <div class="column">
        <form action="https://formsubmit.co/reshmigrg22@gmail.com" method="POST">
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name..">
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name..">
          <input type="hidden" name="_subject" value="New Email">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Your email.." required>
          <input type="hidden" name="_next" value="https://domain_name.com/Nepali_Cultural_Dress/thankyou.html">
          <textarea id="subject" name="subject" placeholder="Please write your message here.." required style="height:170px"></textarea>
          <button type="submit" style="background-color: lightblue;">Send</button>
        </form>
      </div>
    </div>
  </div>
  <p><br/></p>
  <p><br/></p>

  <footer>
    <p><a href="index.php">Nepali Cultural Dress</a></p>
  </footer>

</body>
</html>
















































