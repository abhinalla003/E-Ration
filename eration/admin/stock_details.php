<?php
session_start();
if(isset($_SESSION['user']))
{
	?>
  <?php
      include 'config.php';
      include ('connection.php');
      $sql2="SELECT * FROM `tbl_stock`";
      $result3=mysqli_query($conn,$sql2);
      $rows=mysqli_fetch_all($result3,MYSQLI_ASSOC);
  ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="UTF-8">
      <title> Admin | E-Ration </title>
      <link rel="stylesheet" href="style.css?v=<?=$v?>">
      <!-- Boxicons CDN Link -->
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
      table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      }
      </style>
    </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <img src="logo2.png" height="40px" weight="40px" style="margin-left: 10px">
        <img src="logo3.png" height="40px" weight="140px">
      </div>
        <ul class="nav-links">
          <li>
            <a href="admin_dash.php">
              <i class='bx bx-grid-alt' ></i>
              <span class="links_name">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="add_dist.php">
              <i class='bx bx-user' ></i>
              <span class="links_name">Add Distributor</span>
            </a>
          </li>
          <li>
            <a href="add_stock.php">
                <i class="bx bx-coin-stack"></i>
              <span class="links_name">Add Stock</span>
            </a>
          </li>
          <li>
            <a href="applied_stock.php">
              <i class='bx bx-list-ul' ></i>
              <span class="links_name">View Applied Stock</span>
            </a>
          </li>
          <li>
            <a href="analytics.html">
              <i class='bx bx-pie-chart-alt-2' ></i>
              <span class="links_name">Analytics</span>
            </a>
          </li>
          <li>
            <a href="stock_details.php" class="active">
              <i class='bx bx-coin-stack' ></i>
              <span class="links_name">Stock Details</span>
            </a>
          </li>
          <li>
            <a href="check_complaints.php">
              <i class='bx bx-message' ></i>
              <span class="links_name">Check Complains</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-cog' ></i>
              <span class="links_name">Setting</span>
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
          <span class="dashboard">Stock Details</span>
        </div>
        <div class="profile-details">
          <img src="images/profile.jpg" alt="">
          <span class="admin_name">Abhishek Nalla</span>
          <i class='bx bx-chevron-down' ></i>
        </div>
      </nav>
      <div class="home-content">
        <div class="add-distributor">
          <div class="form_wrapper">
            <div class="form_container">
              <table class="table">
                <thead>
                  <tr>
                    <th>SR No.</th>
                    <th>Item Name</th>
                    <th>Item ID</th>
                    <th>Item Price</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $n=1;
                    foreach($rows as $row)
                    {
                ?>
                  <tr>
                    <td data-label="SR No."><?php echo $n; ?></td>
                    <td data-label="Item Name"><?php echo $row['stock_name']; ?></td>
                    <td data-label="Item ID"><?php echo $row['stock_id']; ?></td>
                    <td data-label="Item Price"><?php echo $row['stock_price']; ?></td>
                  </tr>
                  <?php
                        $n=$n+1;
                      }
                    ?>
                  <tr>
                    <td colspan="4">
                      <form action="" method="post">
                      <button name="btnadditem" class="w3-button w3-dark-blue">Add Item</button>
                      <button class="w3-button w3-dark-blue"><a href="print_stock.php" name="btnprint" style="cursor:default;text-decoration: none;">Print</a></button>
                      </form>
                    </td>
                  </tr>
                </tbody>
              </table>
              <?php
              if(isset($_REQUEST['btnadditem']))
              {?><br><hr> 
                <form action="" method="POST">
                <span class="dashboard" style="font-weight: 500;font-size: x-large;margin-left: 15px;margin-top: 20px;">Add Item</span>
                <div class="w3-row-padding">
                      <div class="w3-third w3-margin-top">
                        <label>Item Name:</label>
                        <input class="w3-input w3-border w3-margin-top" type="text" placeholder="Enter Item Name" name="iname">
                      </div>
                      <div class="w3-third w3-margin-top">
                      <label>Item Id</label>
                        <input class="w3-input w3-border w3-margin-top" type="number" placeholder="Enter Item Id" name="i_id">
                      </div>
                      <div class="w3-third w3-margin-top">
                      <label>Item Price</label>
                        <input class="w3-input w3-border w3-margin-top" type="number" placeholder="Enter Item Price" name="iprice">
                      </div>
                </div>
                <div class="w3-center w3-margin-top">
                  <button class="w3-button w3-dark-blue" name="submit">Add</button>
                </div>
                </form>
              <?php
              }
            ?>
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
                  if(isset($_REQUEST['submit']))
                  {
                    include 'connection.php';
                    $iname=$_REQUEST['iname'];
                    $i_id=$_REQUEST['i_id'];
                    $iprice=$_REQUEST['iprice'];
                    $sql="INSERT INTO tbl_stock (stock_id,stock_name,stock_price)
                    VALUES ('$i_id', '$iname', '$iprice')";
                    if(mysqli_query($conn,$sql))
                    {
                      sleep(2);
                      echo '<script>
                      alert("Item Added Successfully");
                      window.location.href="stock_details.php";
                      </script>';
                    }
                  }
                ?>
  <?php
}
else
{
	header("location: ../login/login.php");
}
?>