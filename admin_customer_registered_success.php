<?php
require 'database.php';
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

$success=null;

$fullname = $conn->real_escape_string($_POST['fullname']);
$username = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$address = $conn->real_escape_string($_POST['address']);
$password = $conn->real_escape_string($_POST['password']);
$pwd=md5($password);
// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {

    echo '<script>alert("Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character")</script>';
    echo '<script>window.location="admin_add.php.php"</script>';
}else{
  if(uidExist($conn,$username,) !== false){
    echo '<script>alert("Username Exists,")</script>';
    echo '<script>window.location="admin_add.php.php"</script>';
    exit();
}
if(emailExist($conn,$email,) !== false){
  echo '<script>alert("Email Exists, Try again")</script>';
  echo '<script>window.location="admin_add.php.php"</script>';
  exit();
}
    $query = "INSERT into register(fullname,username,email,contact,address,password) VALUES('" . $fullname . "','" . $username . "','" . $email . "','" . $contact . "','" . $address ."','" . $pwd ."')";
    $success = $conn->query($query);
    echo '<script>alert("Successfully registered")</script>';
    echo '<script>window.location="admindashboard.php"</script>';
}


if ($success==null){
	die("Couldnt enter data: ".$conn->error);
}

$conn->close();

?>