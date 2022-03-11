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
        $sql1="SELECT tbl_receipt.*, tbl_book.booking_id, tbl_payment.mode FROM tbl_receipt, tbl_book, tbl_payment 
        WHERE tbl_book.rationcard_no='$rcard_no' AND tbl_book.booking_id=tbl_payment.booking_id 
        AND tbl_receipt.receipt_id='$r_id'";
        $result1=mysqli_query($conn,$sql1);
        $row=mysqli_fetch_assoc($result1);
        $n=1;
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
        <h2 class="w3-text-orange w3-dark-blue w3-padding-24 w3-round-large w3-center"
            style="text-shadow:1px 1px 0 #444">
            <b>Payment Receipt</b>
        </h2>
        <div class="w3-container w3-margin">
            <br>
            <p class="w3-large w3-text-dark-blue"><b><?php echo "Dear, ". $u_name;?> <br></b></p>
            <h4><b>Date : </b><?php date_default_timezone_set("Asia/Kolkata");    echo date("d-m-y");  ?>
                <p class="w3-right"><b>Time : </b><?php echo date("h:i:s a");   ?></p>
            </h4>
            <h4><b>Ration Card No : </b><?php echo $rcard_no;  ?>
                <p class="w3-right"><b>Phone No : </b><?php echo $u_ph;   ?></p>
            </h4>
            <h4><b>Receipt ID : </b><?php echo $r_id;  ?>
                <p class="w3-right"><b>Mode of Payment: </b><?php echo $row['mode'];   ?></p>
            </h4>
            <table class="table w3-margin-top">
                <thead>
                    <tr>
                        <th>SR No.</th>
                        <th>Date</th>
                        <th>Mode of Payment</th>
                        <th>Amount</th>
                        <th>Booking ID</th>
                        <th>Reference ID</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="SR No."><?php echo $n; ?></td>
                        <td data-label="Date"><?php echo $row['date']; ?></td>
                        <td data-label="Mode of Payment"><?php echo $row['mode']; ?></td>
                        <td data-label="Amount"><?php echo $row['amount']; ?></td>
                        <td data-label="Booking ID"><?php echo $row['booking_id']; ?></td>
                        <td data-label="Reference ID"><?php echo $row['tid']; ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="w3-center">
                <button type="button" class="w3-button w3-round-large w3-dark-blue w3-padding w3-margin-top"
                    id="home"><a href="customer.php" style="text-decoration: none;">Home</a></button>
                <button type="button" class="w3-button w3-round-large w3-dark-blue w3-padding w3-margin-top"
                    onclick="myFunction()" id="printpagebutton">Print Receipt</button>
            </div>
        </div>
        <script>
        function myFunction() {
            var printButton = document.getElementById("printpagebutton");
            var home = document.getElementById("home");
            printButton.style.visibility = 'hidden';
            home.style.visibility = 'hidden';
            window.print()
            printButton.style.visibility = 'visible';
            home.style.visibility = 'visible';
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