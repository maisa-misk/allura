<?php 
include_once('includes/header.php');
 ?>
  
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> about us || Allura Bling's</title>
<link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

<style type="text/css">
  body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #e7f3fe;
  color: black;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}


@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.notes { 
    margin-bottom: 25px; 
    padding: 8px 24px; 
} 
 
.danger { 
    background-color: #CFEFFA ; 
    border-left: 12px solid #3C3CEC; 
} 
 
.success { 
    background-color: #D7EEF7 ; 
    border-left: 12px solid #3C3CEC; 
} 
 
.info { 
    background-color: #e7f3fe; 
    border-left: 12px solid #3C3CEC; 
} 
 
 
.warning { 
    background-color: #E5F6FC ; 
    border-left: 12px solid #3C3CEC; 
} 
.danger_rounded { 
    background-color: #ffdddd; 
    border-left: 12px solid #3C3CEC; 
    border-radius: 0px 10px 10px 0px; 
} 
 
.success_rounded { 
    background-color: #ddffdd; 
    border-left: 12px solid #3C3CEC; 
    border-radius: 0px 10px 10px 0px; 
} 
 
.info_rounded { 
    background-color: #e7f3fe; 
    border-left: 12px solid #3C3CEC; 
    border-radius: 0px 10px 10px 0px; 
} 
 
 
.warning_rounded { 
    background-color: #ffffcc; 
    border-left: 12px solid #ffeb3b; 
    border-radius: 0px 10px 10px 0px; 
}
.container1 {
  position: relative;
  max-width: 1400px; /* Maximum width */
  margin: 0 auto; /* Center it */
}

.container1 .content1 {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #ffffff; /* Grey text */
  width: 100%; /* Full width */
  padding: 20px; /* Some padding */
}

  </style>
</head>

<body>

  

<div class="about-section">
  <h1>About Us</h1>
  <br>
  <h5>Founded by Ingvar Kamprad in 1943 as a tiny Swedish mail-order catalogue business, today ALLURA BLIING'S is a global home furnishing brand that lives in the hearts of the many people.<br> Explore the ALLURA BLING'S story here, including our heritage, where we are today and our positive impact on people and planet.</h5>
</div>
<br><br>
<h2 style="text-align:center" > Our Team</h2><br><br>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="art1.jpg" style="width: 100%">
      <div class="container">
        <h2>Danell McDowell</h2>
        <p class="title"> Communication Manager</p>
        <p>The ALLURA BLIING'S  culture is within everyone of us. And as co-workers we create, move and develop the culture everyday. The possibilities are endless if you are willing to learn, adapt and grow together.</p>
        <br><br>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="art.png"  style="width:100%">
      <div class="container">
        <h2>Urszula Wilczak</h2>
        <p class="title">Store Manager</p>
        <p>“At ALLURA BLING'S, we dare to try new things and we are allowed to make mistakes while trying. I am really grateful for the fantastic, diverse, supportive people I’ve met here.”</p>
        <br><br>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="art2.jpg" style="width:100%">
      <div class="container">
        <h2>Petra Hesser</h2>
        <p class="title">Human Resource Manager</p>
        <p>“ALLURA BLING'S has always offered me a variety of learning and career possibilities. You can always be yourself, everyone has a voice and it’s a company that encourages open dialogue.”</p>
        
        <br><br>
      </div>
    </div>
  </div>
</div>
<h2>How We’re Different</h2> <br><br>
<div class="danger notes"> 
    <p><h2><strong>We’re Expert Marketer</h2></strong><br><h3>
As a company that spends $450M annually on our advertising,<br> we have the experience and expertise needed to position your brand and drive purchases.</h3></p> 
</div> 
 
<div class="success notes"> 
    <p><h2><strong>We’re Constantly Evolving+</h2></strong><br><h3>
With innovative shopping tools, an ever-growing product catalog, and a data-driven marketing approach,<br> we make it easy and exciting for customers to explore your brand.</h3></p> 
</div> 
 
<div class="info notes"> 
    <p><h2><strong>We Give Your Brand a Platform</h2></strong><br><h3>
Whether it’s sponsored content or featured videos, we create a custom space for you to share your story<br>, spread brand awareness, and meaningfully engage.</h3></p> 
</div> 
 
<div class="warning notes"> 
    <p><h2><strong>We’re Dedicated Curators</h2></strong><br><h3>
We may offer more than seven million products, but we make it easy for shoppers to engage with your brand <br>by using customer behavior analytics to guide them through their shopping experience..</h3></p> 
</div> 
<div class="container1">
  <img src="about.png" style="max-width:100%">
  <div class="content1">
    <h2>About ALLURA BLING'S Family</h2><br>
    <p style="color: #fff"> ALLURA BLING'S Family is for you and everyone who wants to make life at home better. From those whose homes are their passion, to those who are just starting out and need a helping hand. Together we bring your ideas to life.</p>
  </div>
</div>

<!---footer--->
<div class="footer">
  
   <div class="conatiner">
     <div class=" row">
       <div class="footer-col-1">
         <h3>Download our app</h3>
         <p>download  for Android and IOS mobile phone</p>
       </div>
        <div class="footer-col-2">
       <img src="logo.png" width="125" >
       </div>
        <div class="footer-col-3">
         <h3>Useful links</h3>
        <ul>
          <li>coupons</li>
          <li>blog post</li>
          <li>Return polisy</li>
        </ul>
       </div>
        <div class="footer-col-4">
         <h3>follow Us</h3>
         
         <li>Facebook</li>
         <li>Intagram</li>
         <li>Twitter</li>
         <li>YouTube</li>
       </div>
     </div>
   </div>

 </div>
</html>
</head>