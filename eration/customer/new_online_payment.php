<?php 
    session_start();
	if(isset($_SESSION['rationcard_no']))
    {
    include 'config.php';
    $rcard_no=$_SESSION['rationcard_no'];
    $total_amount=$_SESSION['total_amount'];
    $price=$total_amount/75;
    include 'connection.php';
    $sql="SELECT * FROM tbl_user WHERE rationcard_no='$rcard_no'";
    $result=mysqli_query($conn,$sql);
    $user_details=mysqli_fetch_assoc($result);
    $u_id=$user_details['u_id'];
    $sql1="SELECT * FROM tbl_user_stock WHERE u_id='$u_id'
    ORDER BY stock_id";
    $result1=mysqli_query($conn,$sql1);
    $rows=mysqli_fetch_all($result1,MYSQLI_ASSOC);
    $n=1;

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>E-Ration</title>
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
		<div class="invoice-box">
				<div class="w3-center w3-margin">
					<img src="l2.png" width="100px" height="70px" alt="">
					<img src="l1.png" alt="" width="170px" height="70px">
				</div>
				<h2 class="w3-text-orange w3-dark-blue w3-padding-24 w3-round-large w3-center" style="text-shadow:1px 1px 0 #444">
                <b>Online Payment</b></h2>
				<div class="w3-container w3-margin">
					<h4><b>Date : </b><?php date_default_timezone_set("Asia/Kolkata");    echo date("d-m-y");  ?>
					<p class="w3-right"><b>Time : </b><?php echo date("h:i:s a");   ?></p></h4>
					<br><p class="w3-large w3-text-dark-blue"><b><?php echo "Dear, ". $user_details['fname']." ". $user_details['mname']." ". $user_details['lname'];?> <br></b></p>
						<p class="w3-margin-top w3-large"><b>Your Amount : </b><?php echo "$ ".$price;?> (<?php echo "Rs. ".$total_amount.".00";?>)</p><br>				
						<table class="table w3-margin-top">
						<thead>
						<tr>
							<th>SR No.</th>
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
							<td data-label="Stock Name" style="text-align: center;"><?php echo $row['stock_name']; ?></td>
							<td data-label="Quantity"><?php echo $row['quantity']; ?></td>
							<td data-label="Price"><?php echo $row['stock_price']; ?></td>
						</tr>
						<?php
							$n=$n+1;
							}
							?>
						<tr>
							<td colspan="3"><b>Total</b></td>
							<td  style="text-align: center;"><b><?php 
							$_SESSION['total_amount']=$total_amount;
							echo "Rs. ". $total_amount; ?></b></td>
						</tr>
						</tbody>
					</table>
				</div>
                

			<div class="w3-padding-32 w3-center w3-margin-top" style="font-size: 48px;">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
        </table>
				
				
		<div id="paypal-payment-button">
        </div>
		<h1 id="success"></h1>
		<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_blank">
			<input type="hidden" name="cmd" value="_xclick">
			<input type="hidden" name="business" value="sb-lh2o112107974@business.example.com">
			<input type="hidden" name="item_name" value="<?php echo $rcard_no; ?>">
			<input type="hidden" name="item_number" value="<?php echo $u_id; ?>">
			<input type="hidden" name="amount" value="<?php echo $price; ?>">
			<input type="hidden" name="no_shipping" value="1">
			<input type="hidden" name="no_note" value="1">
			<input type="hidden" name="currency_code" value="USD">
			<input type="hidden" name="lc" value="AU">
			
			<input type="hidden" name="rm" value="2">
			<input type="hidden" name="notify_url" value="http://localhost/eration/customer/success.php">
			<input type="hidden" name="return" value="http://localhost/eration/customer/success.php">
			
			<input type="submit" name="pay" value="Pay with PAYPAL" style="margin-left:40%;margin-top:20px;
            width:200px;background-color: #0A2558;border: none;color: white;padding: 15px 32px;text-align: center;
            text-decoration: none;display: inline-block;font-size: 16px;cursor: pointer;" class="w3-round">
		</form>
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