<?php
  session_start();
  if(isset($_SESSION['rationcard_no']))
  {
  $rcard_no=$_SESSION['rationcard_no'];
  include 'connection.php';
  $sql="SELECT * FROM tbl_distributor WHERE rationcard_no='$rcard_no'";
  $result=mysqli_query($conn,$sql);
  $distributors=mysqli_fetch_all($result,MYSQLI_ASSOC);
  foreach($distributors as $distributor)
  {
    $d_pincode=$distributor['pincode'];
    $d_fname=$distributor['fname'];
    $d_lname=$distributor['lname'];
    $d_image=$distributor['image'];
  }

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Distributor Dashboard | E-Ration </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <img src="logo2.png" height="40px" weight="40px" style="margin-left: 10px">
      <img src="logo3.png" height="40px" weight="140px">
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="avail_stock.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Check Available Stock</span>
          </a>
        </li>
        <li>
          <a href="apply_stock.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Apply For Stock</span>
          </a>
        </li> 
        <li>
          <a href="customer.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Customers</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Recent Transections</span>
          </a>
        </li>
        <li>
          <a href="edit_profile.php">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Edit Profile</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
        <img src="<?php echo "../uploads_images/".$d_image; ?>" alt="Error"> 
        <span class="distributor_name"><?php echo $d_fname." ". $d_lname; ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div style="font-size: 24px;font-weight: 500;text-align: center;margin-bottom: 10px;">Ration List</div>
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="w3-card-4" style="width:auto;height: auto;">
              <img src="..\distributor\images\wheat.jpg" class="w3-round" style="width:100%">
              <div class="w3-container w3-center">
                <div class="box-topic">
                  <p>01-Wheat</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="w3-card-4" style="width:auto;height: auto;">
              <img src="..\distributor\images\rice.jpg" class="w3-round" style="width:100%">
              <div class="w3-container w3-center">
                <div class="box-topic">
                  <p>02-Rice</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="w3-card-4" style="width:auto;height: auto;">
              <img src="..\distributor\images\oil.jpg" class="w3-round" style="width:100%">
              <div class="w3-container w3-center">
                <div class="box-topic">
                  <p>03-Oil</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="w3-card-4" style="width:auto;height: auto;">
              <img src="..\distributor\images\dal.jpg" class="w3-round" style="width:100%">
              <div class="w3-container w3-center">
                <div class="box-topic">
                  <p>04-Dal</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="w3-card-4" style="width:auto;height: auto;">
              <img src="..\distributor\images\sugar.jpg" class="w3-round" style="width:100%">
              <div class="w3-container w3-center">
                <div class="box-topic">
                  <p>05-Sugar</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
      let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if(sidebar.classList.contains("active")){
      sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
      sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
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