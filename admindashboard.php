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
.alert-success{
background-color: rgb(160, 214, 160);
color: rgb(25, 89, 25);
border-radius: 2px solid rgb(102, 181, 102);
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
padding: 10px;
text-align: center;
}
.alert-danger{
background-color: rgb(215, 160, 160);
color: rgb(126, 39, 39);
border-radius: 2px solid rgb(165, 64, 64);
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
padding: 10px;
text-align: center;
}
table {
    margin-top: 50px;
    border-collapse: collapse;
    width: 100%;
  }
  
  th, td {
    text-align: left;
    padding: 8px;
  }
  
  tr:nth-child(even){background-color: #f2f2f2}
  


.yellow{
    width: 50%;
    margin: auto;
}
.col-md-7{
    margin: auto;
    width: 70%;
}
@media only screen and (min-width:1000px){
    form{
        padding:0 0 0 30vh ;
    }
    
}
@media only screen and (max-width:700px){
    form{
    padding:0 0 0 5vh ;
    }
    
}
.btn{
    padding: 1%;
    border: none;
    font-size: 1rem;
    border-radius: 5px;
}
.btn-primary{
    padding: 15px;
    background-color: #ff6b81;
    color: white;
    cursor: pointer;
}
.btn-primary:hover{
    color: white;
    background-color: #ff4757;
}
.btn-secondary{
    padding: 15px;
    background-color: #8c8889;
    color: white;
    cursor: pointer;
}
.btn-secondary:hover{
    color: white;
    background-color: #726a6b;
}
.btn-info{
    padding:7px ;
    margin-top:2rem;
    
    background-color: #39c8e8;
    color: white;
    cursor: pointer;
}
 .space{
    padding: 25px;
}
.btn-info:hover{
    color: white;
    background-color: #53eaf4;
}
.btn-danger{
    padding: 7px;
    background-color: #e84839;
    color: white;
    cursor: pointer;
    margin:10px 0 10px 0;
}
.btn-danger:hover{
    color: white;
    background-color: #f54d4d;
}
    
</style>

 <!-- Navbar Section Starts Here -->
 <section class="navbar text-white">
        <div class="container">
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
  <?php


echo '<div class="container">';     
if (isset($_GET["error"])){
    if($_GET["error"]=="SuccessfullyUpdated"){
        echo '<div class="alert alert-success" role "alert">Records successfully updated </div>';
    }
    else if($_GET['error']=="noupdate"){
        echo '<div class="alert alert-info" role "alert">No update </div>';
    }
    else if($_GET['error']=="noerrorsuccess"){
        echo '<div class="alert alert-success" role "alert"> New passenger successfully added </div>';
    }
    
    else if($_GET['error']=="successfullydeleted"){
    echo '<div class="alert alert-success" role "alert">Deleted successfully </div>';
}
    else if($_GET['error']=="ExistingAdmin"){
    echo '<div class="alert alert-danger" role "alert">Already Existing Admin </div>';
}
}
if (isset($_SESSION['update'])){
    echo $_SESSION['update'];
    unset($_SESSION['update']);
}
$sn=1;
?>
<div class="containerish">


    <h1 class="py-4" style="color:black">Manage Customer</h1>
    <a href="admin_add.php" class="btn btn-secondary my-3">Add User</a>
    <?php
    $sql="Select * from register";
    $result = $conn->query($sql);
    $datas = array();
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $datas[]=$row;
        }
    }
    echo "<table class='table table-hover py-5'>";
    echo "<thread>";
    
    echo "<tr class='pt-5'>";
    echo "<th scope='col'> Id</th>";
    echo "<th scope='col'>FullName</th>";
    echo "<th scope='col'>User Name</th>";
    echo "<th scope='col'>Email</th>";
    echo "<th scope='col'>Contacts</th>";
    echo "<th scope='col'>Address</th>";
    echo "<th scope='col'>Password</th>";
    
    echo "</tr>";
    echo "</thread>";

    foreach($datas as $data){

        echo "<tbody>";
        echo "<tr>";
        echo "<td>"; echo $sn++; echo "</td>";
        echo "<td>"; echo $data["fullname"]; echo "</td>";
        echo "<td>"; echo $data["username"]; echo "</td>";
        echo "<td>"; echo $data["email"]; echo "</td>";
        echo "<td>"; echo $data["contact"]; echo "</td>";
        echo "<td>"; echo $data["address"]; echo "</td>";
        echo "<td>"; echo $data["password"]; echo "</td>";
        // echo "<td> <a class='btn btn-secondary' href='password_admin.php?id=".$data['id']."'>Change password</a> </td>";
        echo "<td> <a class='btn btn-info' href='update_admin.php?update=".$data['id']."'> Update</a> </td>";
    echo "<td> <a class='btn btn-danger' href='delete_admin.php?delete=".$data['id']."'>Delete</a>  </td>";
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</thread>";


    ?>
</div>

</div>

<?php
 

    ?>