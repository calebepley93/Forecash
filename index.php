<?php
// Starting a session at the beginning of the script
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (isset($_SESSION['success_msg'])) {
    echo "<p class='success_msg'>" . $_SESSION['success_msg'] . "</p>";

    // Unset the message after displaying it
    unset($_SESSION['success_msg']);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forecash - A Global Market to Predict Pop Culture</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
</head>
<body>
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3 class="login-header">Login</h3>
            <hr class="login-divider">
            <p class="login-subheader">Login with your email address</p>
            <form>
                <input type="email" id="email" name="email" required placeholder="Email*">
                <input type="password" id="pwd" name="password" required placeholder="Password*">
                <button type="submit">Login</button>
            </form>
            <div class="signup-login-container">
                <p class="signup-login">Don't have an account?</p>
                <a href="#">Sign Up</a>
            </div>
        </div>
    </div>
    <div id="signupModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3 class="login-header">Sign Up</h3>
            <hr class="login-divider">
            <p class="login-subheader">Sign up with your email address</p>
            <form action="./register.php" method="POST">
                <input type="email" id="email" name="email" required placeholder="Email*">
                <input type="password" id="pwd" name="password" required placeholder="Password*">
                <button type="submit">Sign Up</button>
            </form>
            <div class="signup-login-container">
                <p class="signup-login">Already have an account?</p>
                <a href="#">Login</a>
            </div>
        </div>
    </div>
    <header class="header-section">
    <div class="max-width-cont">
        <nav class="nav-menu">
                <ul class="nav-list">
                    <div class="logo-section">
                        <div class="logo-container">
                            <img src="./Imgs/logo2.webp" alt="logo">
                        </div>
                        <span class="header-title">Forecash</span>
                    </div>
                    <li class="nav-item">Markets</li>
                    <li class="nav-item">About</li>
                    <li class="nav-item">Contact</li>
                </ul>
        </nav>
        <div class="buttons">
            <a href="#" class="login" id="loginBtn">Login</a>
            <a href="#" class="signup" id="signupBtn">Sign Up</a>
        </div>
    </div>
    </header>
    <div class="lower-menu">
        
            <div class="svg-container">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="c-cmpvrW c-gFjjjT c-cmpvrW-bGjNZs-color-gray3 c-cmpvrW-iiwAxuC-css" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M1 2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H2a1 1 0 01-1-1V2zm5 0a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H7a1 1 0 01-1-1V2zm5 0a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1h-2a1 1 0 01-1-1V2zM1 7a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H2a1 1 0 01-1-1V7zm5 0a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H7a1 1 0 01-1-1V7zm5 0a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1h-2a1 1 0 01-1-1V7zM1 12a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H2a1 1 0 01-1-1v-2zm5 0a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1H7a1 1 0 01-1-1v-2zm5 0a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1h-2a1 1 0 01-1-1v-2z"></path></svg>
                <p>Markets</p>
            </div>
            <div class="svg-container">
                <i class="fas fa-info-circle"></i>
                <p>About</p>
            </div>
            <div class="svg-container">
                <i class="fas fa-user"></i>
                <p>Contact</p>
            </div>
    </div>
    <section class="featured-markets">
        <h1 class="page-header">Get paid to predict</h1>
    <div class="your-class">
        <div class="market-box-container">
            <div class="market-box">
                <img src="./Imgs/trump.webp" alt="marketphoto">
            </div>
            <div class="title-container">
                <p class="market-title">Will Trump be the Republican nominee for President?</p>
                <p class="market-price">
                    <span class="yes-price">Yes 65c</span>
                    <span class="no-price">No 35c</span>
                    <!-- use javascript to dynamically change these later -->
                </p>
            </div>
        </div>
        <div class="market-box-container">
            <div class="market-box">
                <img src="./Imgs/biden.webp" alt="marketphoto">
            </div>
            <div class="title-container">
                <p class="market-title">Will Biden be the Democratic nominee for President?</p>
                <p class="market-price">
                    <span class="yes-price">Yes 70c</span>
                    <span class="no-price">No 30c</span>
                    <!-- use javascript to dynamically change these later -->
                </p>
            </div>
        </div>
        <div class="market-box-container">
            <div class="market-box">
                <img src="./Imgs/barbie.webp" alt="marketphoto">
            </div>
            <div class="title-container">
                <p class="market-title">Will Barbie have the highest worldwide gross of 2023?</p>
                <p class="market-price">
                    <span class="yes-price">Yes 30c</span>
                    <span class="no-price">No 70c</span>
                    <!-- use javascript to dynamically change these later -->
                </p>
            </div>
        </div>
        <div class="market-box-container">
            <div class="market-box">
                <img src="./Imgs/whitehouse.webp" alt="marketphoto">
            </div>
            <div class="title-container">
                <p class="market-title">Which Party will win control of the White House?</p>
                <p class="market-price">
                    <span class="yes-price">Yes 65c</span>
                    <span class="no-price">No 35c</span>
                    <!-- use javascript to dynamically change these later -->
                </p>
            </div>
        </div>
        <div class="market-box-container">
            <div class="market-box">
                <img src="./Imgs/trump.webp" alt="marketphoto">
            </div>
            <div class="title-container">
                <p class="market-title">Will Trump be the Republican nominee for President?</p>
                <p class="market-price">
                    <span class="yes-price">Yes 65c</span>
                    <span class="no-price">No 35c</span>
                    <!-- use javascript to dynamically change these later -->
                </p>
            </div>
        </div>
        <div class="market-box-container">
            <div class="market-box">
                <img src="./Imgs/biden.webp" alt="marketphoto">
            </div>
            <div class="title-container">
                <p class="market-title">Will Biden be the Democratic nominee for President?</p>
                <p class="market-price">
                    <span class="yes-price">Yes 70c</span>
                    <span class="no-price">No 30c</span>
                    <!-- use javascript to dynamically change these later -->
                </p>
            </div>
        </div>
        <div class="market-box-container">
            <div class="market-box">
                <img src="./Imgs/barbie.webp" alt="marketphoto">
            </div>
            <div class="title-container">
                <p class="market-title">Will Barbie have the highest worldwide gross of 2023?</p>
                <p class="market-price">
                    <span class="yes-price">Yes 30c</span>
                    <span class="no-price">No 70c</span>
                    <!-- use javascript to dynamically change these later -->
                </p>
            </div>
        </div>
        <div class="market-box-container">
            <div class="market-box">
                <img src="./Imgs/whitehouse.webp" alt="marketphoto">
            </div>
            <div class="title-container">
                <p class="market-title">Which Party will win control of the White House?</p>
                <p class="market-price">
                    <span class="yes-price">Yes 65c</span>
                    <span class="no-price">No 35c</span>
                    <!-- use javascript to dynamically change these later -->
                </p>
            </div>
        </div>
    </div>
    </section>
    <section class="how-it-works">
        <h3 class="how-header">How it works</h1>
        <div class="how-icon-container">
            <div class="how-icon">
                <i class="fas fa-money-check-alt"></i>
                <h6 class="how-icon-header">Deposit</h6>
                <p>Deposit BTC from your favorite crypto platform</p>
            </div>
            <div class="how-icon">
                <i class="fas fa-chart-line"></i>
                <h6 class="how-icon-header">Predict</h6>
                <p>Buy shares to make your predictions</p>
            </div>
            <div class="how-icon">
                <i class="fas fa-trophy"></i>
                <h6 class="how-icon-header">Profit</h6>
                <p>Redeem your winning shares for $1 a piece</p>
            </div>
        </div>
    </section>
    <section class="home-market-container">
        <div class="market-top-container">
            <div class="market-arrow">
                <h3 class="markets-header">Markets</h3>
                <button class="go-to-markets-btn"><i class="fas fa-arrow-right"></i>
                </button>
            </div>
            <div class="market-types">
                <button class="market-pill-btn active" data-category="all">
                    <p>All</p>
                </button>
                <button class="market-pill-btn" data-category="Politics">
                    <p>Politics</p>
                </button>
                <button class="market-pill-btn" data-category="Hollywood">
                    <p>Hollywood</p>
                </button>
                <button class="market-pill-btn" data-category="Sports">
                    <p>Sports</p>
                </button>
            </div>
        </div>
        <div class="market-bottom-container">
            <div class="market-card">
                <img src="./Imgs/trump.webp" alt="trump">
                <div class="market-title-card-bottom">
                    <p class="market-kind">Politics</p>
                    <p class="market-title">Will Trump be the Republican nominee for President?</p>
                    <div class="price-wrapper">
                        <span class="yes-price">Yes 65c</span>
                        <span class="no-price">No 35c</span>
                    </div>
                    <!-- use javascript to dynamically change these later -->
                </div>
            </div>
            <div class="market-card">
                <img src="./Imgs/biden.webp" alt="Biden">
                <div class="market-title-card-bottom">
                    <p class="market-kind">Politics</p>
                    <p class="market-title">Will Biden be the Republican nominee for President?</p>
                    <div class="price-wrapper">
                        <span class="yes-price boxdif">Yes 70c</span>
                        <span class="no-price boxdif">No 30c</span>
                    </div>
                    <!-- use javascript to dynamically change these later -->
                    
                </div>

            </div>
            <div class="market-card">
                <img src="./Imgs/barbie.webp" alt="barbie">
                <div class="market-title-card-bottom">
                    <p class="market-kind">Hollywood</p>
                    <p class="market-title">Will Barbie be the highest grossing movie of 2023?</p>
                    <div class="price-wrapper">
                        <span class="yes-price">Yes 65c</span>
                        <span class="no-price">No 35c</span>
                    </div>
                    <!-- use javascript to dynamically change these later -->
                    
                </div>

            </div>
            <div class="market-card">
                <img src="./Imgs/whitehouse.webp" alt="whitehouse">
                <div class="market-title-card-bottom">
                    <p class="market-kind">Politics</p>
                    <p class="market-title">Who will win the White House in 2023?</p>
                    <div class="price-wrapper">
                        <span class="yes-price">Yes 75c</span>
                        <span class="no-price">No 25c</span>
                    </div>
                    <!-- use javascript to dynamically change these later -->
                    
                </div>

            </div>
            <div class="market-card">
                <img src="./Imgs/ohtani.webp" alt="trump">
                <div class="market-title-card-bottom">
                    <p class="market-kind">Sports</p>
                    <p class="market-title">Will Shohei Ohtani win AL MVP?</p>
                    <div class="price-wrapper">
                        <span class="yes-price">Yes 75c</span>
                        <span class="no-price">No 25c</span>
                    </div>
                    <!-- use javascript to dynamically change these later -->

                </div>

            </div>
            <div class="market-card">
                <img src="./Imgs/killers.webp" alt="Biden">
                <div class="market-title-card-bottom">
                    <p class="market-kind">Hollywood</p>
                    <p class="market-title">Will Killers of the Flower Moon win Best Picture at the 2024 Oscars?</p>
                    <div class="price-wrapper">
                        <span class="yes-price">Yes 20c</span>
                        <span class="no-price">No 80c</span>
                    </div>
                    <!-- use javascript to dynamically change these later -->
                </div>

            </div>
            <div class="market-card">
                <img src="./Imgs/lebron.webp" alt="barbie">
                <div class="market-title-card-bottom">
                    <p class="market-kind">Sports</p>
                    <p class="market-title">Will Lebron retire before the 2025 NBA season?</p>
                    <div class="price-wrapper">
                        <span class="yes-price">Yes 50c</span>
                        <span class="no-price">No 50c</span>
                    </div>
                    <!-- use javascript to dynamically change these later -->
                    
                </div>

            </div>
            <div class="market-card">
                <img src="./Imgs/trumptwitter.webp" alt="whitehouse">
                <div class="market-title-card-bottom">
                    <p class="market-kind">Politics</p>
                    <p class="market-title">Will Trump tweet in 2024?</p>
                    <div class="price-wrapper">
                        <span class="yes-price">Yes 20c</span>
                        <span class="no-price">No 80c</span>
                    </div> 
                    <!-- use javascript to dynamically change these later -->
                </div>

            </div>

        </div>
    </section>
    <footer>
        <div class="footer-container">
            <div class="logo-slug">
                <div class="footer-logo-text-wrapper">
                    <img src="./Imgs/logo2.webp" alt="logo">
                    <p class="footer-logo-text">Forecash</p>
                </div>
                <p class="footer-slug">Where it pays to predict</p>
            </div>
            
            <div class="site-map">
                <h3>Site Map</h3>
                <ul>
                    <li>Home</li>
                    <li>Markets</li>
                    <li>About</li>
                    <li>Contact</li>
                </ul>
            </div>
            <div class="socials">
                <h3>Connect</h3>
                <ul>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>Facebook</li>
                </ul>
            </div>
        </div>
        <hr class="footer-divider">
        <div class="footer-bottom">
            <p>© 2021 Forecash</p>
        <div class="terms-policy">
            <p>Terms of Service</p>
            <p>Privacy Policy</p>
        </div>
        </div>
            
    </footer>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript">
   
        $(document).ready(function(){
          $('.your-class').slick({
            slidesToShow: 4,
            slidesToScroll: 4,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false,
            infinite: true,
            responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
          });
        });
      
</script>
<script src="./Sandbox/main.js"></script>
</body>
</html>