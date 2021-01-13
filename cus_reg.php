<?php
ob_start();
require('admin/includes/connection.php');
if(isset($_POST['submit'])){
   $fname =  $_POST['fname'];
   $lname =  $_POST['lname'];
   $email    =  $_POST['email'];
   $pass  =$_POST['password'];
   $phone    =  $_POST['phone'];
   $cardname =  $_POST['cname'];
   $cardnum =  $_POST['cnum'];
   $month =  $_POST['month'];
   $year =  $_POST['year'];
$qur = "INSERT INTO customer (first_name,last_name,email,pass,phone,card_name,card_num,exp_month,exp_year)
         values('$fname','$lname' ,'$email','$pass','$phone','$cardname','$cardnum','$month','$year')";
         mysqli_query($conn,$qur);
         header("Location: cus_reg.php");
}




  ?>

</html>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

<style type="text/css">
  
.small-img-row{
  display: flex;
  justify-content: space-between;
}
.small-img-col{
  flex-basis: 24%;
  cursor: pointer;
  
}
.content h1{
font-size: 60px;
font-weight: 100;

margin-top: 24px;
margin-bottom: 15px;

}
.content p{
font-size: 20px;
color: black;
}
.content{
  margin-left: 10%;
  margin-top: 10%;
}

.content.btn{
  display: inline-block;
  border-radius: 60px;
  padding: 10px 20px;
  box-sizing: border-box;
  text-decoration:none;
color: #C6C2DB ;
box-shadow: 3px 8px 22px #C6C2DB ;

}
.feature-img{

}




* {
  box-sizing: border-box;
}

body {
  background-color:#DFEBED ;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}
#btn{
  background-color:#4CAF50;
  border-radius: 0; 
}
/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

</style>
<body>
  <div class="conatiner">
    <div class="navbar">
       <div class="logo">
          <img src="image/logo.png" width="125px">

       </div>
       
       
       <img src="menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
 </div>
<form id="regForm" action="" method="post">
  <h1>Contact us</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab"> <h4>Name:</h4>  
    <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
  </div>
  <div class="tab">  <h4>Contact Info:</h4> 
    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="password"></p>
    <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
  </div>
  <div class="tab"><h4>Payment</h4> 
    <p><input placeholder="Name on Card" oninput="this.className = ''" name="cname"></p>
    <p><input placeholder="Credit card number" oninput="this.className = ''" type="password" name="cnum"></p>
  </div>
  <div class="tab"> <h4>Payment</h4> 
    <p><input placeholder="Exp Month" oninput="this.className = ''" name="month"></p>
    <p><input placeholder="Exp Year" oninput="this.className = ''" name="year" ></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      <?php
           
                          echo "<input  id='btn' type= 'submit' name= 'submit' class='btn btn-lg btn-success'  value='submit'> 
                            </input>";
                      
                        ?>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n !== (x.length - 1)) {
   
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

</script>
<center>     <h4><a href='cus_login.php' class='btn'> LOGIN</a>
                    </center>
<br><br><br>
<br><br><br>

<!-----footer----->
 <br><br><br>
<br><br><br><br><br><br>
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
          <li><a href="coupon.html" style="color: black"> coupon</a></li>
          <li><a href="Delivery service.html" style="color: black">Delivery service</a></li>
          <li><a href="return.html" style="color: black"> Return polisy </a></li>
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
</body>
</html>