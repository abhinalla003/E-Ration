<!DOCTYPE html>
<html>
<title>E-Ration</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../lib/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Raleway", sans-serif
}

body,
html {
    height: 100%;
    line-height: 1.8;
}

/* Full height image header */

.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("images/bg.jpg");
    min-height: 100%;
}

.w3-bar .w3-button {
    padding: 16px;
}

/* Full-width input fields */
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: auto;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}
</style>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-card" id="myNavbar" style="background-color: #00545d; color: white!important;">
            <img src="images/logo.png" width="140px;" style="margin-top: 8px; margin-left: 20px;">
            <img src="images/quote.png" width="120px" style="margin-top: 30px;">
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small" style="margin-right:20px;">
                <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
                <a href="#service" onclick="w3_close()" class="w3-bar-item w3-button">Services</a>
                <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About Us</a>
                <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">Contact Us</a>
                <a href="login/login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-round-large"
                    style="background-color:rgb(241, 213, 88); color:black;">Sign In</a>
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
                onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>

    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large"
        style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close
            ×</a>
        <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
        <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">Services</a>
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About Us</a>
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">Contact Us</a>
        <a href="login/login.php" onclick="w3_close()" class="w3-bar-item w3-button">Sign In</a>
    </nav>

    <!-- Header with full-height image -->
    <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
        <div class="w3-text-white w3-display-left" style="padding:48px;">
            <span class="w3-jumbo w3-hide-small"
                style="font-weight: 600px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;margin-top:-20px;">Do
                You Want Your Ration Card on<div style="color: rgb(243, 242, 176);margin-top:-20px;">Your Finger Tips?
                </div></span><br>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium" style="margin-top:-20px;">Do You Want Your <div
                    style="color: rgb(243, 242, 176);margin-top:-20px;">Ration Card on</div>
                <div style="color: rgb(243, 242, 176);margin-top:-20px;">Your Finger Tips ?</div>
            </span><br>
            <p class=" w3-hide-large w3-hide-medium" style="margin-top:-4rem;margin-left:10px;">You can Register
                Yourself Now to access new features provided by E-Ration.<br> E-Ration provides fast and secure platform
                for user to shop online.<br> E-Ration provides E-mail service to notify the user about their goods.<br>
                E-Ration supports
                Feedback System.<br> E-Ration provide Multi-Mode Payment System.</p>

            <p class=" w3-hide-small" style="margin-top:-8rem;margin-left:20px;">You can Register Yourself Now to access
                new features provided by E-Ration.<br> E-Ration provides fast and secure platform for user to shop
                online.<br> E-Ration provides E-mail service to notify the user about their goods.<br> E-Ration supports
                Feedback System.<br> E-Ration provide Multi-Mode Payment System.</p>


            <form action="verifyrationno.php" method="post">
                <p><button name="signup"
                        class="w3-button w3-padding-large w3-hover-opacity w3-large w3-margin-top w3-round-large"
                        style="background-color:rgb(241, 213, 88); color:black; margin-left:30px;width: auto;">Register
                        Now</button></p>
            </form>
        </div>

        </div>
    </header>

    <!-- Promo Section - "We know design" -->
    <div class="w3-container w3-light-grey" style="padding:18px 16px;" id="service">
        <div class="w3-row-padding" style="margin-top:5%">
            <div class="w3-col m6">
                <h3>E-Ration Provides Following Services...</h3>
                <p style="margin-left:20px;"><b>You can Register Yourself Now to access new features provided by
                        E-Ration.</b><br> E-Ration provides fast and secure platform for user to shop online.<br>
                    E-Ration provides E-mail service to notify the user about their goods.<br> E-Ration
                    supports Feedback System.<br> E-Ration provide Multi-Mode Payment System.</p>
                <p><a href="https://services.india.gov.in/" target="_blank"
                        class="w3-button w3-black w3-round-large w3-margin-left w3-padding"><i class="fa fa-th"> </i>
                        View
                        All Government Services</a></p>
            </div>
            <div class="w3-col m6">
                <img class="w3-image w3-round-large"
                    src="https://rebellionvoice.com/wp-content/uploads/2017/12/images-1.jpg" alt="Buildings" width="700"
                    height="394">
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="w3-container" style="padding:128px 16px" id="about">
        <h3 class="w3-center">ABOUT THE E-RATION</h3>
        <p class="w3-center w3-large"><b>Key features of E-Ration</b></p>
        <div class="w3-row-padding w3-center" style="margin-top:64px">
            <div class="w3-quarter">
                <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
                <p class="w3-large">Responsive</p>
                <p>E-Ration is supported in all devices without any problem.</p>
            </div>
            <div class="w3-quarter">
                <i class="fa fa-shield w3-margin-bottom w3-jumbo w3-center"></i>
                <p class="w3-large">Free, Secure and Fast</p>
                <p>E-Ration is secure as well as fast.</p>
            </div>
            <div class="w3-quarter">
                <i class="fa fa-commenting w3-margin-bottom w3-jumbo w3-center"></i>
                <p class="w3-large">Feedback</p>
                <p>E-Ration accepts feedback from customers. That makes E-Ration more reliable and efficient.</p>
            </div>
            <div class="w3-quarter">
                <i class="fa fa-money w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Multi-mode Payment Option</p>
                <p>E-Ration can accepts Offline and Online mode of Payment.</p>
            </div>
        </div>
    </div>


    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
        <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright"
            title="Close Modal Image">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
        <h3 class="w3-center">CONTACT US</h3>
        <p class="w3-center w3-large">Lets get in touch. Send us a request, we will get back to you:</p>
        <div style="margin-top:48px">
            <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Gujarat, India</p>
            <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +91 9054849782&nbsp +91 93270 21597
            </p>
            <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: eration2022@gmail.com</p>
            <br>
            <form action="send_request.php" method="post">
                <p><input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
                <p><input class="w3-input w3-border" type="date" placeholder="Date" name="Date" required></p>
                <p><input class="w3-input w3-border" type="email" placeholder="Email" name="Email" required></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
                <p>
                <div class="w3-center">
                    <button class="w3-button w3-center w3-black w3-padding w3-round-large" type="submit"
                        name="btnsend_request">
                        <i class="fa fa-paper-plane"></i> SEND REQUEST
                    </button>
                </div>
                </p>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-64">
        <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <div class="w3-xlarge w3-section">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
    </footer>

    <script>
    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
        } else {
            mySidebar.style.display = 'block';
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
    }
    </script>

</body>

</html>