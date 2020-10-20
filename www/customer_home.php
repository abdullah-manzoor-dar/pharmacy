<?php
    require_once 'dbconnect.php';
    session_start();
    if(isset($_SESSION['username']))
    {
      $username = $_SESSION['username'];
    }
    else
    {
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    .mySlides {display:none}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height: 13px;width:13px;padding:0}
    </style>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <style type="text/css">

        @font-face {
            font-family: FontinBold;
            src: url("/static/fonts/Fontin-Bold.ttf");
        }

        @font-face {
            font-family: Fontin;
            src: url("/static/fonts/Fontin-Regular.ttf");
        }

        .portfolio-item {
            display: block;
            position: relative;
            overflow: hidden;
            max-width: 530px;
            margin: auto auto 1rem
        }

        .portfolio-item .caption {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            height: 100%;
            width: 100%;
            background-color: rgba(33,37,41,.2);
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1
        }

        .portfolio-item .caption .caption-content {
            color: #fff;
            margin: auto 2rem 2rem
        }

        .portfolio-item .caption .caption-content h2 {
            font-size: .8rem;
            text-transform: uppercase
        }

        .portfolio-item .caption .caption-content p {
            font-weight: 300;
            font-size: 1.2rem
        }

        @media (min-width: 992px) {
            .portfolio-item {
                max-width:none;
                margin: 0
            }

            .portfolio-item .caption {
                -webkit-transition: -webkit-clip-path .25s ease-out,background-color .7s;
                -webkit-clip-path: inset(0);
                clip-path: inset(0)
            }

            .portfolio-item .caption .caption-content {
                -webkit-transition: opacity .25s;
                transition: opacity .25s;
                margin-left: 5rem;
                margin-right: 5rem;
                margin-bottom: 5rem
            }

            .portfolio-item img {
                -webkit-transition: -webkit-clip-path .25s ease-out;
                -webkit-clip-path: inset(-1px);
                clip-path: inset(-1px)
            }

            .portfolio-item:hover img {
                -webkit-clip-path: inset(2rem);
                clip-path: inset(2rem)
            }

            .portfolio-item:hover .caption {
                background-color: rgba(29,128,159,.9);
                -webkit-clip-path: inset(2rem);
                clip-path: inset(2rem)
            }
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }
        @media (min-width: 768px) {
            .container {
                max-width: 940px;
            }
        }
        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }
        @media (min-width: 1200px) {
            .container {
                max-width: 980px;
            }
        }

        .background {
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: -1;
        }

        .background img {
            width: 100vw;
            filter: brightness(0.4);
        }

        body {
            overflow-x: hidden;
        }

        .heading {
            color: white;
            text-transform: uppercase;
            font-size: 2em;
            text-align: center;
            font-weight: bold;
            font-family: FontinBold, sans-serif;
        }
        
        @media (max-width: 1167px) {
            .background img {
                height: 100vh;
                width: auto;
            }
        }

    </style>

  </head>

  <body  bgcolor="white">

      <div class="heading" style="color: white">   
        Welcome    
          <?php
            echo "$username";
          ?>
      </div>

      <br>


   <!--  <div class="w3-container">
  <h2>Slideshow Indicators</h2>
  <p>An example of using buttons to indicate how many slides there are in the slideshow, and which slide the user is currently viewing.</p>
</div> -->

<!-- <div class="w3-content w3-display-container" style="max-width:1400px">
  <img class="mySlides" src="images/slide1.jpg" style="height:100%;width:100%">
  <img class="mySlides" src="images/slide2.jpg" style="height:100%;width:100%">
  <img class="mySlides" src="images/slide3.jpg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script> -->


<div class="w3-content w3-section" style="max-width:1400px">
  <img class="mySlides" src="images/slide1.jpg" style="width:100%">
  <img class="mySlides" src="images/slide2.jpg" style="width:100%">
  <img class="mySlides" src="images/slide3.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>


      <button onclick="location.href='logout.php'" type="button" name="logout" style="position: absolute; top: 5%; left: 90%;">Logout</button>
      <div class="background" style="width: 100% height:100%; background-color: white">
          <!-- <img src="1.JPG" height="200px" width="200px"> -->
          <img src="images/admin_background.jpg">
      </div>
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-6 box">
            <a class="portfolio-item" href="view_medicine.php">
              <span class="caption">
                <span class="caption-content">
                  <h2 style="font-size: 1.7em;" style="font-family: FontinBold">View Medicine and place order</h2>
                </span>
              </span>
              <img class="img-fluid" src="images/medicine_info.jpg" alt="">
            </a>
          </div>
          <div class="col-md-6 box">
            <a class="portfolio-item" href="customer_view_orders.php">
              <span class="caption">
                <span class="caption-content">
                  <h2 style="font-size: 1.7em;" style="font-family: FontinBold">View your orders</h2>
                </span>
              </span>
              <img class="img-fluid" src="images/view_orders.jpg" alt="">
            </a>
          </div>
          <div class="col-md-6 box" >
            <a class="portfolio-item" href="customer_update_info.php">
              <span class="caption">
                <span class="caption-content">
                  <!-- <p class="mb-0" style="font-family: Fontin;">I am a</p> -->
                  <h2 style="font-size: 1.7em;" style="font-family: FontinBold">View and Update Profile</h2>
                </span>
              </span>
              <img class="img-fluid" src="images/profile_r.png" alt="">
            </a>
          </div>
          <div class="col-md-6 box">
            <a class="portfolio-item" href="view_medicine_requests.php">
              <span class="caption">
                <span class="caption-content">
                  <!-- <p class="mb-0" style="font-family: Fontin;">I am an</p> -->
                  <h2 style="font-size: 1.7em;" style="font-family: FontinBold">View your medicine requests</h2>
                </span>
              </span>
              <img class="img-fluid" src="images/requests.jpg" alt="">
            </a>
          </div>
        </div>
      </div>

  <script type="text/javascript">

		var h = (window.innerHeight - document.getElementsByClassName("container")[0].clientHeight - document.getElementsByClassName("heading")[0].clientHeight)/3;
		if(h>0 && window.innerWidth >= 768) {
			document.getElementsByClassName("container")[0].style.marginTop = h + 'px';
			document.getElementsByClassName("container")[0].style.marginBottom = h + 'px';
			document.getElementsByClassName("heading")[0].style.marginTop = h + 'px';
		}
		else {
		    document.getElementsByClassName("container")[0].style.marginTop = '15px';
			document.getElementsByClassName("container")[0].style.marginBottom = '15px';
			document.getElementsByClassName("heading")[0].style.marginTop = '15px';
        }

  </script>

  </body>

</html>