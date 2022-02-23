<?php
session_start();
if(isset($_SESSION['user']))
{
	?>
  <?php
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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
        .table{
        width: 50%;
        border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;
        }

        .table thead{
        background-color:#0A2558;
        }

        .table thead tr th{
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.35px;
        color: #ffffff;
        opacity: 1;
        padding: 12px;
        vertical-align: top;
        border: 1px solid #dee2e685;
        }

        .table tbody tr td{
        font-size: 14px;
        font-weight: normal;
        letter-spacing: 0.35px;
        padding: 8px;
        text-align: center;
        border: 1px solid #dee2e685;
        }
        </style>
    </head>
    <body>
    <div class="w3-container w3-center">
		<h2 style="margin-top: 50px;">E-Ration</h2>
		<h4 style="margin-top: -10px;">Stock Details</h4>
		<h5>Date:<?php 
    date_default_timezone_set("Asia/Kolkata");
    echo date("d-m-y")."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."Time: ".date("h:i:s a"); ?></h5>	
	</div>
    <table class="table">
        <thead>
             <tr>
                <th>SR No.</th>
                <th>Item Name</th>
                <th>Item ID</th>
                <th>Item Price in ₹</th>
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
                    <td data-label="Item Price">₹<?php echo $row['stock_price']; ?></td>
                </tr>
                <?php
                    $n=$n+1;
                }
                ?>
            </tbody>
        </table>
        <button type="submit" onclick="myFunction()" id="printpagebutton" style="font-size:24px;margin-left: 47%;
        margin-top:10px;background-color: #0A2558;color: white;">Print <i class="material-icons">receipt</i></button>
		<script>
			function myFunction() {
				var printButton = document.getElementById("printpagebutton");
					
					printButton.style.visibility = 'hidden';
					
					window.print()
					printButton.style.visibility = 'visible';
			}
		</script>
    </body>
  </html>
  <?php
}
else
{
	header("location: ../login/admin_login.php");
}
?>