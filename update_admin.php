<?php
session_start();
if(!isset($_SESSION['login_user1'])){
    header("location: adminlogin.php"); 
    }
    
    require 'database.php';

//Get Id from selected admin

$id=$_GET['update'];

//Create ql query to get the details
$sql= "SELECT * FROM register where id=$id";
// execute the query
$res= $conn->query($sql);
if($res == true){
    $count = $res->num_rows;
    if($count ==1 ){    
        //Get details
        $row = $res->fetch_assoc();
        $fullname= $row['fullname'];
        $username = $row['username'];
        $email = $row['email'];
        $contact = $row['contact']; 
        $address = $row['address']; 
        
        
    }
    else header('Location: admindashboard.php ');
}

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
            <a href="admindashboard.php" title="">
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
  
<?php

?>
<div class="container">


<div class="" style="margin-top: 4%; margin-bottom: 2%;">
  <div class="col-md-5 col-md-offset-4">
  <div class="panel panel-primary">
    <div class="panel-heading"style="text-align:center;"> <h1>Create Account</h1> </div>
    <div class="panel-body">
      
    <form role="form" action="" method="POST">
     
      <div class="row">
      <div class="form-group col-xs-12">
        <label for="fullname"><span class="text-danger" style="margin-right: 5px;">*</span> Full Name: </label>
        <div class="input-group">

          <input class="form-control" id="id" type="hidden" name="id" value="<?php echo  $id?>">
          <input class="form-control" id="fullname" type="text" value="<?php echo  $fullname?>" name="fullname" placeholder="Your Full Name" required="" autofocus="">
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
          <input class="form-control" id="username" value="<?php echo  $username?>" type="text" name="username" placeholder="Your Username" required="">
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
          <input class="form-control" id="email" type="email" value="<?php echo  $email?>" name="email" placeholder="Email" required="">
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
          <input class="form-control" id="contact" value="<?php  echo $contact?>" type="text" name="contact" placeholder="Contact" required="">
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
          <input class="form-control" id="address" value="<?php echo  $address?>" type="text" name="address" placeholder="Address" required="">
          <span class="input-group-btn">
            <!-- <label class="btn btn-primary"><span class="glyphicon glyphicon-home" aria-hidden="true"></label> -->
        </span>
          </span>
        </div>           
      </div>
    </div>

    

    

    <div class="row">
      <div class="form-group col-xs-4">
          <input class="btn btn-primary" name="signups" type="submit" value="Submit">
      </div>


    </form>
    </div>
  </div>
  </div>
</div>
</div>

<?php
function uidExist($conn,$username){
  //? is a placeholder, due to prepared statements,statements are sent to db 1st then placeholder are filled user provides data 
 $sql= "SELECT * FROM register WHERE username=?"; //scopes to check db for userid and userEmail
 // prepared statement to submit data in a proper way
 $stmt=$conn->prepare($sql); // initialising new prepared statement
 
// if true we want to pass data from user
  $stmt->bind_param("s",$username); //ss means its 2 strings
  // executing data from the database
  $stmt->execute();
  // Grabbing the data 
  $result=$stmt->get_result();
  // fetching the data in a form of an assoctive array
  if($row = $result->fetch_array()){ // checking if data by user is true
      return $row; 
  }
  else 
  $result= false;
  return $result;

  $stmt->close();
}
function emailExist($conn,$email){
  //? is a placeholder, due to prepared statements,statements are sent to db 1st then placeholder are filled user provides data 
 $sql= "SELECT * FROM register WHERE email=?"; //scopes to check db for userid and userEmail
 // prepared statement to submit data in a proper way
 $stmt=$conn->prepare($sql); // initialising new prepared statement
 
// if true we want to pass data from user
  $stmt->bind_param("s",$email); //ss means its 2 strings
  // executing data from the database
  $stmt->execute();
  // Grabbing the data 
  $result=$stmt->get_result();
  // fetching the data in a form of an assoctive array
  if($row = $result->fetch_array()){ // checking if data by user is true
      return $row; 
  }
  else 
  $result= false;
  return $result;

  $stmt->close();
}
  if(isset($_POST['signups'])){
      $id =$_POST['id'];
      $fullname = $conn->real_escape_string($_POST['fullname']);
      $username = $conn->real_escape_string($_POST['username']);
      $email = $conn->real_escape_string($_POST['email']);
      $contact = $conn->real_escape_string($_POST['contact']);
      $address = $conn->real_escape_string($_POST['address']);

      if(uidExist($conn,$username,) !== false){
        echo '<script>alert("Username Exists,")</script>';
        echo '<script>window.location="update_admin.php?update='.$id.'</script>';
        exit();
    }
    if(emailExist($conn,$email,) !== false){
      echo '<script>alert("Email Exists, Try again")</script>';
      echo '<script>window.location="update_admin.php?update='.$id.'"</script>';
      exit();
    }
      
      $sql1 = "UPDATE register SET username='".$username."',fullname='".$fullname."',email='".$email."',contact='".$contact."',address='".$address."' WHERE id='".$id."'";
      $res=mysqli_query($conn,$sql1);
      
  if($res){
      
      
   echo '<script>alert("Successfull")</script>';
   echo '<script>window.location="admindashboard.php"</script>';
  }
  else{
    
    echo '<script>alert("Something went wrong")</script>';
    echo '<script>window.location="update_admin.php"</script>';
      }
 
  }
?>
</body>