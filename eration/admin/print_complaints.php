<?php
	include 'connection.php';
	$c_id=$_REQUEST['c_id'];
	$sql="SELECT * FROM tbl_complaint 
    WHERE tbl_complaint.complaint_id='$c_id'";
	$result3=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_all($result3,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Admin | E-Ration </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<style>
		table {
		border-collapse: collapse;
		width: 40%;
		margin-left: auto;
		margin-right: auto;
		}

		th, td {
		text-align: left;
		padding: 4px;
		}

		</style>
	</head>
	<body>
		<div class="container">
			<div class="w3-container w3-center">
				<h2 style="margin-top: 50px;">E-Ration</h2>
				<h4 style="margin-top: -10px;">Complaint Details of Complaint Id-<u><?php echo $c_id; ?></u></h4>
                <h5>Date:<?php 
				date_default_timezone_set("Asia/Kolkata");
				echo date("d-m-y")."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."Time: ".date("h:i:s a"); ?></h5>
			</div>
			<div style="overflow-x: auto; margin-top: 30px;">
			<table>
				<tr>
					<th>Complaint  Id</th>
					<th>Date</th>
				</tr>
				<?php
                    foreach($rows as $row)
                    {
                ?>
				<tr class="details">
					<td><?php echo $c_id; ?></td>
                    <td> <?php echo $row['date'] ?></td>
				</tr>
				<tr>
					<th>Customer Name</th>
                    <th>PDS No</th>
				</tr>
				<tr>
					<td><?php echo $row['u_fname']." ".$row['u_mname']." ".$row['u_lname']; ?></td>
                    <td><?php echo $row['pds_no']; ?></td>
				</tr>
				<tr>
					<th>Description</th>
				</tr>
				<tr>
					<td colspan="2"><?php echo $row['description']; ?></td>
				</tr>
                <?php
                    }
                ?>
			</table>
			<button type="submit" onclick="myFunction()" id="printpagebutton" 
			style="font-size:24px;margin-left: 50%;margin-top:10px;background-color: #0A2558;color: white;">Print <i class="material-icons">receipt</i></button>
			<script>
			function myFunction() {
				var printButton = document.getElementById("printpagebutton");
					
					printButton.style.visibility = 'hidden';
					
					window.print()
					printButton.style.visibility = 'visible';
			}
			</script>
		</div>
		</div>
	</body>
</html>
