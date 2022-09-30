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
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>

<link href="https://fonts.googleapis.com/css2?family=Tiro+Devanagari+Sanskrit&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>


    <link rel="stylesheet" href="styles.css">
    <title>Weather app Hourly</title>
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
        <a href=""  > Hello <?php echo $_SESSION['login_user2'] ?></a>
        <div class="#container"></div>
      </li>
      <li class="list">
        <a href="index.php"  style="padding: 0 15px 0 0;">Home</a>
        <div class=""></div>
      </li>
      <li class="list">
        <a href="#container" style="padding: 0 15px 0 0;">Hourly</a>
        <div class="home_underline"></div>
      </li>
      <li class="list">
        <a href="daily.php" style="padding: 0 15px 0 0;">Daily</a>
        <div class="home_underline"></div>
      </li>
      <li class="list">
        <a href="logout_user.php" style="padding: 0 15px 0 0;">Logout</a>
        <div class="home_underline"></div>
      </li>
      <div class="d-flex input-group w-auto">
        <input
        id="searchHour"
          type="search"
          class="form-control rounded search"
          placeholder="Search"
          aria-label="Search"
          aria-describedby="search-addon"
        />
        <button class="input-group-text border-0 searchHours bg-dark" id="search-addon">
          <i class="fas fa-search text-white"></i>
        </button>
      </div>
    
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
    
  </nav>
    <div class="container" id="container">
        <div class="row1">
              <h1 class="text-center pt-5" data-aos="fade-up" data-aos-offset="500" > <strong class="city text-white">Search for a city</strong> </h1>
            <div class="col-md-2 column" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here0">
            </div></div>
            <div class="col-md-2 column" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here1">
              </div>
            </div>
            <div class="col-md-2 column" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here2">
              </div>
            </div>
            <div class="col-md-2 column" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here3">
              </div>
            </div>
            <div class="col-md-2 column" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here4">
              </div>
            </div>
            <div class="col-md-2 column" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here5">
              </div>
            </div>
            <div class="col-md-2 column" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here6">
              </div>
            </div>
            <div class="col-md-2 column" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here7">
              </div>
              
            </div>
            <div class="col-md-2 column" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here8">
              </div>
              
            </div>
            <div class="col-md-2 column" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here9">
              </div>
              
            </div>
            <div class="col-md-2 column" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here10">
              </div>
              
            </div>
            <div class="col-md-2 column" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here11">
              </div>
            </div>
            <div class="col-md-2 column" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here12">
              </div>
            </div>
            <div class="col-md-2 column" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here13">
              </div>
            </div>
            <div class="col-md-2 column" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here14">
              </div>
            </div>
            <div class="col-md-2 column" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here15">
              </div>
            </div>
            <div class="col-md-3 col-lg-2  column" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here16">
              </div> 
            </div>
            <div class="col-md-3 col-lg-2  column" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here17">
              </div>
            </div>
            <div class="col-md-3 col-lg-2  column" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here18">
              </div>
            </div>
            <div class="col-md-3 col-lg-2  column" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here19">
              </div>
            </div>
            <div class="col-md-3 col-lg-2  column" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here20">
              </div>
            </div>
            <div class="col-md-3 col-lg-2  column" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here21">
              </div>
            </div>
            <div class="col-md-3 col-lg-2  column" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here22">
              </div>
            </div>
            <div class="col-md-3 col-lg-2  column" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
              <div class="" id="here23">
              </div>
            </div>
            </div>
            
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
  </script>
      <script
type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"  ></script>
    <script src="scripts1.js" defer></script>
</body>
</html>