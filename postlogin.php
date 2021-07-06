<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>AssistMe</title>
<script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#"><h1><span>A</span>ssist <span>M</span>e</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
           <li></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact-Us</a></li>
            <li><a href="reset-password.php">Reset-Password</a></li>
            <li><a href="feedback.php">Support&Feedback</a></li>
            <li><a href="logout.php">Log Out</a></li>            
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>Virtual Assistant Kanni<span></span></h1>
        <h1>is here <span></span></h1>
        <a href="" type="button" class="cta"><?php
                session_start();  
            echo "Hi ".$_SESSION["username"]; ?></a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Wor<span>k</span>ing</h1>
        <p>Virtual Assistant "Kanni" is python baseed speech recognition and processing program it will be assisting users with their queries. And 
           improve there browsing experience.</p><br>
        <p><a href="ASSIST_ME"> Lets Begin </a></p>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
     <h1 class="section-title">About <span>Us</span></h1>
       <div class="col-left">
       <div class="about-img">
         <img src="./img/img1.png" alt="img">
       </div>
      </div>
      <div class="col-right"> 
        <h2>Baldev Verma <br>Student Developer</h2>
         <p>Web Developer and Competetive programmer</p>
        <a href="Sample_Resume_bv.pdf" download class="cta">Download Resume</a>
      </div>
      <div class="col-left">
        <div class="about-img">
          <img src="./img/img2.png" alt="img">
        </div>
      </div>
      <div class="col-right">
           <h2>Kamesh Chandra Maharana <br>Student Developer</h2>
        <p>CP with cpp</p>
        <a href="Sample_Resume_kcm.pdf" download class="cta">Download Resume</a>
      </div>
</div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Contact <span>Us</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+91 987 654 3210</h2>
            <h2>+91 897 567 4321</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>1905232@kiit.ac.in</h2>
            <h2>1905241@kiit.ac.in</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png"/></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>KP-7 KIIT Bhubaneswar </h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>A</span>ssist <span>M</span>e</h1></div>
      <h2>Your Excellent Assistant</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.facebook.com/" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="https://www.instagram.com/" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"/></a>
        </div>
        <div class="social-item">
          <a href="https://twitter.com/?lang=en" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"/></a>
        </div>
        <div class="social-item">
          <a href="https://in.linkedin.com/" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/linkedin.png"/></a>
        </div>
      </div>
      <p>Copyright © 2021 assistme. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>
</html>
