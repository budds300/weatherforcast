<?php
session_start();
if(!isset($_SESSION['login_user1'])){
    header("location: adminlogin.php"); 
    }
    require 'database.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tiro+Devanagari+Sanskrit&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link >
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
    
   
    <title>Weather app</title>
</head>
<body>

<style>
    .my-3{
    padding: 30px 0;
}
  .logo{
    width: 10%;
    float: left;
}
.menu{
    line-height: 60px;
}
.menu ul{
    list-style-type: none;
}

.menu ul li{
    display: inline;
    padding: 1%;
    font-weight: bold;
}
section.navbar {
    background-color: black;
    color: white;
    margin: -16px -10px 0 -10px;
}
section a{
    color: #ffffff;
    text-decoration:none;
    
}
a{
    text-decoration: none;
}
a:hover{
    color: #d0d0d0;
}
body{
    overflow-x: hidden;
}
.text-right{
    text-align: right;
}
.text-center{
    text-align: center;
}
.text-left{
    text-align: left;
}

  .click{
    width:50%;
    margin: auto;
  }
  .title{
    /* background-color:#f2f2f2; */
    text-align: center;
    width: 80%;
    margin: auto;
    padding: 30px;
}
  input[type=text], select,input[type=email],input[type=password],input[type=file],textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  } 
  .container {
    position: relative;
    top: 0px;
    left: 0px;
    right: 0px;
    display: block;
    margin: 30px 160px 30px 160px;
    justify-content: space-between;
    align-items: center;
  }
    
    
</style>

 <!-- Navbar Section Starts Here -->
 <section class="navbar text-white">
        <div class="">
            <div class="logo">
            <a href="index.php" title="">
                <h3>
                    <strong>
                      <p>Weather Forcast App</p>
                    </strong>
                </h3>
            </div>
            <div class="menu text-right">
        <div class="collapse navbar-collapse " id="myNavbar">
            <ul class="nav navbar-nav">           
            <?php if(isset($_SESSION['login_user1'])){
?>
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="admindashboard.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li> 
<?php
}
else if (isset($_SESSION['login_user2'])) {
  $username= $_SESSION['login_user2'];
    ?>
            <li class="" ><a href="index.php">Home</a></li>
            <li><a href="#"><span class=""></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="index.php"><span class=""></span> View weather </a></li>
              <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
            
    <?php } else{

  ?>
                 <li class="" ><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li> <a href="customerlogin.php">  Login</a></li>
                <li> <a href="managerlogin.php"> Manager </a></li>
                
              <?php } ?>    
            </ul>
        </div>

            <div class="clearfix"></div>
        </div>
    </section>
  

<div class="container">


<div class="" style="margin-top: 4%; margin-bottom: 2%;">
  <div class="col-md-5 col-md-offset-4">
  <div class="panel panel-primary">
    <div class="panel-heading"style="text-align:center;"> <h1>Create Account</h1> </div>
    <div class="panel-body">
      
    <form role="form" action="admin_customer_registered_success.php" method="POST">
     
      <div class="row">
      <div class="form-group col-xs-12">
        <label for="fullname"><span class="text-danger" style="margin-right: 5px;">*</span> Full Name: </label>
        <div class="input-group">
          <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Your Full Name" required="" autofocus="">
          <span class="input-group-btn">
            <!-- <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label> -->
        </span>
          </span>
        </div>           
      </div>
    </div>

    <div class="row">
      <div class="form-group col-xs-12">
        <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
        <div class="input-group">
          <input class="form-control" id="username" type="text" name="username" placeholder="Your Username" required="">
          <span class="input-group-btn">
            <!-- <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label> -->
        </span>
          </span>
        </div>           
      </div>
    </div>

    <div class="row">
      <div class="form-group col-xs-12">
        <label for="email"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
        <div class="input-group">
          <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="">
          <span class="input-group-btn">
            <!-- <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label> -->
        </span>
          </span>
        </div>           
      </div>
    </div>

    <div class="row">
      <div class="form-group col-xs-12">
        <label for="contact"><span class="text-danger" style="margin-right: 5px;">*</span> Contact: </label>
        <div class="input-group">
          <input class="form-control" id="contact" type="text" name="contact" placeholder="Contact" required="">
          <span class="input-group-btn">
            <!-- <label class="btn btn-primary"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></label> -->
        </span>
          
        </div>           
      </div>
    </div>

    <div class="row">
      <div class="form-group col-xs-12">
        <label for="address"><span class="text-danger" style="margin-right: 5px;">*</span> Address: </label>
        <div class="input-group">
          <input class="form-control" id="address" type="text" name="address" placeholder="Address" required="">
          <span class="input-group-btn">
            <!-- <label class="btn btn-primary"><span class="glyphicon glyphicon-home" aria-hidden="true"></label> -->
        </span>
          </span>
        </div>           
      </div>
    </div>

    <div class="row">
      <div class="form-group col-xs-12">
        <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
        <div class="input-group">
          <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
          <span class="input-group-btn">
            <!-- <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label> -->
        </span>
          
        </div>           
      </div>
    </div>

    

    <div class="row">
      <div class="form-group col-xs-4">
          <input class="btn btn-primary" type="submit" value="Submit">
      </div>


    </form>
    </div>
  </div>
  </div>
</div>
</div>
</body>
</html>

    