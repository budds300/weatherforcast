<?php
session_start();
if(!isset($_SESSION['login_user2'])){
  header("location: customerlogin.php"); 
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

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    
    <link rel="stylesheet" href="styles.css">
    <title>Weather app</title>
</head>
<body>
  <div id="preloader">
    <div id="loader"></div>
  </div>
  <nav class="container">
    <input id="nav-toggle" type="checkbox" />
    <a href="index.php"> 
      <div class="logo">Weather<strong>App</strong></div>
    </a>
    <ul class="links">
      <li class="list">
        <a href=""> Hello <?php echo $_SESSION['login_user2'] ?></a>
        <div class="#container"></div>
      </li>
      <li class="list">
        <a href="">Home</a>
        <div class="#container"></div>
      </li>
      <li class="list">
        <a href="hourly.php">Hourly</a>
        <div class="home_underline"></div>
      </li>
      <li class="list">
        <a href="daily.php">Daily</a>
        <div class="home_underline"></div>
      </li>
      <li class="list">
        <a href="logout_user.php">Log out</a>
        <div class="home_underline"></div>
      </li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>
      
<div class="container" id="container">
    <h1 class="text-center pt-5 text-white" data-aos="fade-up" data-aos-offset="500">Welcome to  Weather forcast app.</h1>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card card1 mt-5 border-round" data-aos="fade-up" data-aos-offset="300" data-aos-anchor-placement="top-bottom">
                <div class="card-header border-bottom border-white">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="input-group rounded-pill pt-3 ">
                              
                                <input type="search" class="form-control rounded-pill text-white bar border-light search" placeholder="Search" required aria-label="Search" aria-describedby="search-addon" id="search" />
                                <button class="input-group-text border-0  ms-1 rounded-pill bg-dark" id="search-addon">
                                  <i class="fa fa-search"></i>
                                </button>
                              </div>
                              <hr>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                
                <div class="card-body loading">
                    <h2> <strong class="city">Weather in Nairobi</strong> </h2>
                    <div class="d-inline-flex">
                      <h4 class="degrees ms-1">51°C</h4>
                        <img class="icon" src="" alt="" width="70px">
                        <h5 class="description ps-1 mt-3">cloudy</h5>
                    </div>
                    <h5 class="humidity ms-1">humidity:</h5>
                    <h5 class="windspeed   ms-1">windspeed::</h5>
                    <h5 class="time ms-1"></h5>
                    <h5 class="country ms-1"></h5>

                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
  
  

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>
    <script src="script.js" defer></script>
</body>
</html>