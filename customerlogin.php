<?php
include('login.php'); 

if(isset($_SESSION['login_user2'])){
header("location: index.php"); 
}

?>

<style>
  .edit{
  /* text-shadow: 2px 2px 5px lightgreen; */
  color: #C3FF99;
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
    margin: auto ;
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


   

   

    
<div class=""  style="margin:-10px -10px 0 -10px;background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0, 0, 0, 0.6)), url(./icons/nasa-yZygONrUBe8-unsplash.jpg);height:60vh;background-size:cover;background-position:center;background-repeat:no-repeat;" >
<div class="title">

  <h1 style="color: white;">Hi Guest,<br> Welcome to <span class="edit"> Weather Forcast App </span></h1>
       <br>
     <p style="color: white;">Kindly LOGIN to continue.</p>
</div>
    </div>
  

    
    <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
      <div class="col-md-5 col-md-offset-4">
        <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
      <div class="panel panel-primary">
        <div class="panel-heading"style="text-align:center;"><h1>Login </h1> </div>
        <div class="panel-body">
          
        <form action="" method="POST">
          
        
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
            <div class="input-group">
              <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
              <span class="input-group-btn">
                <!-- <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label> -->
            </span>
              </span>
            </div>           
          

        
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
            <div class="input-group">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
              <span class="input-group-btn">
                <!-- <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label> -->
            </span>
              
            </div>           
          </div>
        

        
          <div class="form-group col-xs-4">
              <input class="btn btn-primary" name="submit" type="submit" value=" Login ">
          </div>

          <label style="margin-left: 5px;">or</label> <br>
         <label style="margin-left: 5px;"><a style="color: blue;" href="customersignup.php">Create a new account.</a></label>
        </div>

        </form>
        </div>     
      </div>      
    </div>
    </div>

   <script src="js/script.js"></script>
    </body>
</html>