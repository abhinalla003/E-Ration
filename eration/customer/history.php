<?php 
    session_start();
    if(isset($_SESSION['rationcard_no']))
    {
    include 'config.php'; 
    $rcard_no=$_SESSION['rationcard_no'];
    include 'connection.php';
    $sql="SELECT * FROM tbl_user WHERE rationcard_no='$rcard_no'";
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css?v=<?=$v?>">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Dashboard Sidebar Menu</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="l2.png" width="100px" height="40px" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name"><img src="l1.png" alt="" width="120px" height="40px"></span>
                    <!-- span class="profession"><img src="quote.png" alt="" width="80px" height="20px"></span -->
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="customer.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="bookration.php">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Book Ration</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Transections</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Other Services</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text">My Profile</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="top">
            <div class="head">
                <i class='bx bx-home sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="profile-details">
                <img src="l2.png" alt="">
                <span class="admin_name"><?php echo $rows['fname']." ". $rows['mname']." ". $rows['lname']; ?></span>
                <i class='bx bx-chevron-down' ></i>
            </div>
        </div>
        <div class="welcome-banner  w3-container w3-margin-left">
        <ul class="w3-ul w3-card-4 w3-dark-blue w3-round-large">
            <li class="w3-bar">
            <img src="user-logo.png" class="w3-bar-item w3-circle w3-hide-small" style="width:92px; margin-top:2px;">
            <div class="w3-bar-item">
                <span class="w3-large ">Hello <?php echo $rows['fname']." ". $rows['mname']." ". $rows['lname']; ?></span><br>
                <div class="w3-margin-top"><span>Welcome to the E-Ration...</span></div>
            </div>
            </li>
        </ul>
        <h2 class="w3-center w3-margin-top">Payment History</h2>
        <table class="table w3-margin-top">
                <thead>
                  <tr>
                    <th>SR No.</th>
                    <th>Date</th>
                    <th>Mode of Payment</th>
                    <th>Amount</th>
                    <th>Booking ID</th>
                    <th>Reference ID</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="SR No.">1</td>
                    <td data-label="Date">12/02/2022</td>
                    <td data-label="Mode of Payment">UPI</td>
                    <td data-label="Amount">213.65</td>
                    <td data-label="Booking ID">8569325</td>
                    <td data-label="Reference ID">13625342</td>
                    <td data-label=""><a href="" class="btn">Recipt</a></td>
                  </tr>
                  <tr>
                    <td data-label="SR No.">1</td>
                    <td data-label="Date">12/02/2022</td>
                    <td data-label="Mode of Payment">UPI</td>
                    <td data-label="Amount">213.65</td>
                    <td data-label="Booking ID">8569325</td>
                    <td data-label="Reference ID">13625342</td>
                    <td data-label=""><a href="" class="btn">Recipt</a></td>
                  </tr>
                  <tr>
                    <td data-label="SR No.">1</td>
                    <td data-label="Date">12/02/2022</td>
                    <td data-label="Mode of Payment">UPI</td>
                    <td data-label="Amount">213.65</td>
                    <td data-label="Booking ID">8569325</td>
                    <td data-label="Reference ID">13625342</td>
                    <td data-label=""><a href="" class="btn">Recipt</a></td>
                  </tr>
                  <tr>
                    <td data-label="SR No.">1</td>
                    <td data-label="Date">12/02/2022</td>
                    <td data-label="Mode of Payment">UPI</td>
                    <td data-label="Amount">213.65</td>
                    <td data-label="Booking ID">8569325</td>
                    <td data-label="Reference ID">13625342</td>
                    <td data-label=""><a href="" class="btn">Recipt</a></td>
                  </tr>
                  <tr>
                    <td data-label="SR No.">1</td>
                    <td data-label="Date">12/02/2022</td>
                    <td data-label="Mode of Payment">UPI</td>
                    <td data-label="Amount">213.65</td>
                    <td data-label="Booking ID">8569325</td>
                    <td data-label="Reference ID">13625342</td>
                    <td data-label=""><a href="" class="btn">Recipt</a></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

</body>
</html>
<?php
}
else
{
	header("location: ../login/login.php");
}
?>