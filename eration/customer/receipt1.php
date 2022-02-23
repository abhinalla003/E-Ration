<?php
    session_start();
    include 'config.php';
    if(isset($_SESSION['rationcard_no']))
    {
        $rcard_no=$_SESSION['rationcard_no'];
        $r_id=$_REQUEST['r_id'];
        include 'connection.php';
        $sql="SELECT * FROM tbl_user WHERE rationcard_no='$rcard_no'";
        $result=mysqli_query($conn,$sql);
        $rows=mysqli_fetch_assoc($result);
        $u_id=$rows['u_id'];
        $u_name=$rows['fname']." ". $rows['mname']." ". $rows['lname'];
        $u_ph=$rows['contact_no'];
        $sql1="SELECT * FROM tbl_user_stock WHERE u_id='$u_id'
        ORDER BY stock_id";
        $result1=mysqli_query($conn,$sql1);
        $rows=mysqli_fetch_all($result1,MYSQLI_ASSOC);

        $sql2="SELECT * FROM tbl_receipt WHERE receipt_id='$r_id'";
        $result2=mysqli_query($conn,$sql2);
        $receipt_info=mysqli_fetch_assoc($result2);
        $n=1;
        $total_amount=0;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Receipt | E-Ration</title>
        <link rel="stylesheet" href="style.css?v=<?=$v?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<style>
			.invoice-box {
				max-width: 1000px;
				margin: auto;
                margin-top: 50px;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
				border-radius: 20px;
			}
		</style>
	</head>

	<body>
		<div class="w3-container">
				<div class="w3-center w3-margin">
					<img src="l2.png" width="100px" height="70px" alt="">
					<img src="l1.png" alt="" width="170px" height="70px">
				</div>
				<h2 class="w3-text-orange w3-dark-blue w3-padding-24 w3-round-large w3-center" style="text-shadow:1px 1px 0 #444">
                <b>Payment Receipt</b></h2>
				<div class="w3-container w3-margin">
					<br><p class="w3-large w3-text-dark-blue"><b><?php echo "Dear, ". $u_name;?> <br></b></p>
					<h4><b>Date : </b><?php date_default_timezone_set("Asia/Kolkata");    echo date("d-m-y");  ?>
					<p class="w3-right"><b>Time : </b><?php echo date("h:i:s a");   ?></p></h4>
                    <h4><b>Ration Card No : </b><?php echo $rcard_no;  ?>
					<p class="w3-right"><b>Phone No : </b><?php echo $u_ph;   ?></p></h4>
					<h4><b>Receipt ID : </b><?php echo $receipt_info['receipt_id'];  ?>
                    <p class="w3-right"><b>Mode of Payment: </b><?php echo "Offline";   ?></p></h4>
                    <table class="table w3-margin-top">
						<thead>
                            <tr>
                                <th>SR No.</th>
                                <th>Stock ID</th>
                                <th>Stock Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
						</thead>
                        <tbody>
						<?php
                            foreach($rows as $row)
                            {
                            ?>
                            <tr>
                                <td data-label="SR No."><?php echo $n; ?></td>
                                <td data-label="Stock ID"><?php echo $row['stock_id']; ?></td>
                                <td data-label="Stock Name"><?php echo $row['stock_name']; ?></td>
                                <td data-label="Quantity"><?php echo $row['quantity']; ?></td>
                                <td data-label="Price"><?php echo $row['stock_price']; ?></td>
                            </tr>
                                <?php
                                $total_amount=$row['stock_price']+$total_amount;
                                $n=$n+1;
                                }
                                ?>
                            <tr>
                                <td colspan="4"><b>Total</b></td>
                                <td><b><?php echo $total_amount; ?></b></td>
                            </tr>
                            <tr>
                                <td colspan="4"><b>Payment</b></td>
                                <td><b><?php echo $receipt_info['state']; ?></b></td>
                            </tr>
						</tbody>
                        </table>
					<div class="w3-center">
                        <button type="button" class="w3-button w3-round-large w3-dark-blue w3-padding w3-margin-top"><a href="customer.php" style="text-decoration: none;">Home</a></button>
					    <button type="button" class="w3-button w3-round-large w3-dark-blue w3-padding w3-margin-top" onclick="myFunction()" id="printpagebutton">Print Receipt</button>
					</div>
				</div>
                <script>
                    function myFunction() {
                        var printButton = document.getElementById("printpagebutton");
                                   
                        printButton.style.visibility = 'hidden';
                                 
                        window.print()
                        printButton.style.visibility = 'visible';
                    }
                </script>
        </table>
		</div>	
	</body>
</html>
<?php
}
else
{
	header("location: ../login/login.php");
}
?>