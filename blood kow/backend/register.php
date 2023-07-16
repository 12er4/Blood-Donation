<?php 
    include("connection.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {   
            $first_name = $_POST['firstname'];
            $last_name = $_POST['lastname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $blood=$_POST['blood'];
            $dob=$_POST['dob'];
            $street=$_POST['street'];
            $apart=$_POST['apart'];
            $city=$_POST['city'];
            $state=$_POST['state'];
            $zip=$_POST['zip'];
            $Country=$_POST['country'];
            $hiv=$_POST['hiv'];

            $query = "INSERT INTO `register` (`id`, `First Name`, `Last Name`, `Email`, `Phone`, `Blood Group`, `Date Of Birth`, `Street Address`, `Apartment`, `City`, `State`, `Postal Code`, `Country`, `hiv`) VALUES (NULL, '$first_name', '$last_name', '$email', '$phone', '$blood', '$dob', '$street', '$apart', '$city', '$state', '$zip', '$Country', '$hiv')";
            mysqli_query($con,$query);
            echo '<script>alert("message sent successfully!")</script>';
            echo '<script type="text/javascript">window.location="home.php"</script>';
            header("location:login.php");
            die;   
    }      
?>


<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register as a Donor</title>
        <link rel="stylesheet" type="text/css" href="css/register.css" />
        
        <!--claneder header-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    </head>
    <body>
        <div class="nn">
            <a class="tab" class="home" href="#"></a>
            <a class="tab" class="home" href="#"></a>
            <a class="tab" class="home" href="#"></a>
            <a class="tab" class="home" href="home.php">Home</a>
            <a class="tab" class="home" href="aboutus.php">Who We are</a>
            <a class="tab" class="home" href="how.php">How it Works</a>
            <a class="tab" class="home" href="register.php">Register as a Donor</a>
            <a class="tab" class="home" href="request.php">Post a Request</a>
            <a class="tab" class="home" href="#">Blog</a>
            <a class="tab" class="home" href="contact.php">Contact</a>
        </div>
        <input type="Submit" value="Blood Request" class="bloodrequest">
        <img src="images/rectanglehead.png" class="headrect">        
        <div>
            <h2 class="head">Angel's Blood</h2>
        </div>
        <h4 class="wordhead">Just let’s us know that you’re willing to save lives. We’ll send you blood requests in your locality through Whatsapp.</h4>
        <form class="register" action="" method="post">
        
        <p class="fn">First  Name*</p>
        <input class="fnt" type="text" id="name" placeholder="E.g. John"name="firstname"required>
     
        
        <p class="ln">Last Name </p>
        <input class="lnt" type="text"id="name" placeholder="E.g. Doe"name="lastname">

        
        <p class="e">Email*</p>
        <input class="et" type="email" id="email"placeholder="E.g. john@doe.com"name="email"required>


        <p class="ph">Phone*</p>
        <input class="pht" type="number" id="phone" placeholder="E.g. +91 1234567890" name="phone"required>
    
        <p class="bg">Blood Group*</p>
        <select class="bgt" name="blood" required>
            <option>Please Select an Option</option>
            <option>A+</option>
            <option >A-</option>
            <option >B+</option>
            <option >B-</option>
            <option >O+</option>
            <option >O-</option>
            <option >AB+</option>
            <option >AB-</option>
            <option >Bombay Blood type</option>
        </select>
        <p class="dob">DOB*</p><br>
        <input class="dobt" type="dob" id="datepicker"  name="dob" required>


        <p class="st">Street Address</p>
        <input class="stt" type="text" placeholder="Eg. 42 Wallaby Way"name="street">
        <p class="apartment">Apartment</p>
        <input class="apartmentt" type="text"name="apart">
        <p class="city">City</p>
        <input class="cityt" type="text" placeholder="Eg. Chennai"name="city">
        <p class="state">State / Province</p>
        <input class="statet" type="text"name="state">
        <p class="zip">Zip / Postal Code</p>
        <input class="zipt" type="number"name="zip"  pattern="[0-9]{6}">
        <p class="country">Country</p>
        <input class="countryt" type="text"name="country">
        <p class="qn">Have You ever tested positive for HIV?*</p>

        <input class="qn1" type="radio" name="hiv" value="Yes">
        <label class="qnl1" >Yes</label>
        <input class="qn2" type="radio" name="hiv"value="No">
        <label class="qnl2">No</label>

        
        <form action="#" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
        <input class="ck" type="checkbox">
        <p class="ckt">I have read and agree the Terms & Service and Privacy Policy</p>
        <input class="submitbut" type="Submit" name="submit" value="Register as a donor"required>
        </form>
    </form>

        <div class="rectangle"></div>
        <div class="oval"></div>
        <img class="world" src="images/charity-heart-silhouette-4772938 1.png" alt="">
        <img class="mail" src="images/mail.png" alt="">
        <p class="mailt">help@donor.in</p>
        <p class="right">© 2023 Blood Donor</p>
        <p class="right2">Designed & Developed by Blood-Donor</p>




<script>
      const nameInput = document.getElementById("name");
      const phoneInput = document.getElementById("phone");
      const emailInput = document.getElementById("email");
      const 

    //validate name
      nameInput.addEventListener("input", function() {
        const namePattern = /^[a-zA-Z ]{2,30}$/;
        const isValidName = namePattern.test(nameInput.value);

        if (!isValidName) {
          nameInput.setCustomValidity("Please enter a valid name");
        } else {
          nameInput.setCustomValidity("");
        }
      });
      //vaidate phone
      phoneInput.addEventListener("input", function() {
        const phonePattern = /^(\+?\d{1,2}\s?)?(\d{3}[-\s]?\d{3}[-\s]?\d{4})$/;
        const isValidPhone = phonePattern.test(phoneInput.value);

        if (!isValidPhone) {
          phoneInput.setCustomValidity("Please enter a valid phone number");
        } else {
          phoneInput.setCustomValidity("");
        }
      });
      //validate email
      emailInput.addEventListener("input", function() {
        const emailPattern = /^[^@]+@[^@]+\.[^@]+$/;
        const isValidEmail = emailPattern.test(emailInput.value);

        if (!isValidEmail) {
          emailInput.setCustomValidity("Please enter a valid email address");
        } else {
          emailInput.setCustomValidity("");
        }
      });
    //pincode validation check 
    const pincodeInput = document.getElementById("pincode");
  pincodeInput.addEventListener("input", function() {
    const pincodePattern = /^[0-9]{6}$/;
    if (!pincodePattern.test(this.value)) {
      this.setCustomValidity("Please enter a valid pincode.");
    } else {
      this.setCustomValidity("");
    }
  });
    //calender function
    $( function() {
    $( "#datepicker" ).datepicker();
  } );



</script>
    </body>
</html>