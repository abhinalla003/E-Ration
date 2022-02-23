<?php
  include "connection.php";
  if(isset($_POST['btn-signup']))
	{
		$post_password1=md5(mysqli_real_escape_string($conn,$_POST['password']));
		$post_password2=md5(mysqli_real_escape_string($conn,$_POST['con_password']));
		if($post_password1 == $post_password2)
		{
      $post_fname=mysqli_real_escape_string($conn,$_POST['fname']);
      $post_mname=mysqli_real_escape_string($conn,$_POST['mname']);
      $post_lname=mysqli_real_escape_string($conn,$_POST['lname']);
      $post_add=mysqli_real_escape_string($conn,$_POST['address']);
      $post_ph_no=mysqli_real_escape_string($conn,$_POST['phone_no']);
      $post_gender=mysqli_real_escape_string($conn,$_POST['gender']);
      $post_dob=mysqli_real_escape_string($conn,$_POST['dob']);
      $post_ac_no=mysqli_real_escape_string($conn,$_POST['acard_no']);
      $post_rc_no=mysqli_real_escape_string($conn,$_POST['rcard_no']);
      $post_city=mysqli_real_escape_string($conn,$_POST['city']);
      $post_state=mysqli_real_escape_string($conn,$_POST['state']);
      $post_pincode=mysqli_real_escape_string($conn,$_POST['pincode']);
      $post_email=mysqli_real_escape_string($conn,$_POST['email']);
			$sql = "INSERT INTO tbl_user (fname, mname, lname, address, contact_no, gender, dob, aadhar_no, rationcard_no, city, state, pincode, email_id, password)
			VALUES ('$post_fname', '$post_mname', '$post_lname', '$post_add', '$post_ph_no', '$post_gender', '$post_dob', '$post_ac_no', '$post_rc_no', '$post_city', '$post_state', '$post_pincode', '$post_email', '$post_password1')";
			if (mysqli_query($conn, $sql)) 
      {
        include 'connection.php';
        $sql1="SELECT * FROM tbl_user WHERE rationcard_no='$post_rc_no'";
        $result1=mysqli_query($conn,$sql1);
        $rows=mysqli_fetch_assoc($result1);
        $u_id=$rows['u_id'];
        $sql2="SELECT * FROM tbl_stock";
        $result2=mysqli_query($conn,$sql2);
        $stocks=mysqli_fetch_all($result2,MYSQLI_ASSOC);
        foreach($stocks as $stock)
        {
          $stock_id=$stock['stock_id'];
          $stock_name=$stock['stock_name'];
          $pre_price=$stock['stock_price'];
          if($stock_name=="Wheat")
          {
            $stock_quantity=5;
          }
          else
          {
            $stock_quantity=1;
          }
          $final_price=$pre_price*$stock_quantity;

          $sql3="INSERT INTO tbl_user_stock (u_id,stock_id,stock_name,stock_price,quantity)
          VALUES ('$u_id', '$stock_id', '$stock_name', '$final_price', '$stock_quantity')";
          mysqli_query($conn,$sql3);
        }
        sleep(2);
        echo '<script>
        alert("Registration Successfully");
        window.location.href="../login/login.php";
        </script>';
      }
      else 
      {
        sleep(2);
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
		}
	}
?>
<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Register Here | E-Ration </title>
    <link rel="stylesheet" href="style-signup.css?v=<?=$v?>">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title w3-margin">Registration</div>
    <div class="content">
    <form method="post">
                  <div class="w3-row-padding">
                      <div class="w3-third w3-margin-top">
                        <label>First Name</label>
                        <input class="w3-input w3-border w3-margin-top" type="text" placeholder="Enter First Name" name="fname">
                      </div>
                      <div class="w3-third w3-margin-top">
                      <label>Middle Name</label>
                        <input class="w3-input w3-border w3-margin-top" type="text" placeholder="Enter Middle Name" name="mname">
                      </div>
                      <div class="w3-third w3-margin-top">
                      <label>Last Name</label>
                        <input class="w3-input w3-border w3-margin-top" type="text" placeholder="Enter Last Name" name="lname">
                      </div>
                    </div>
                    <div class="w3-row-padding w3-margin-top">
                      <div class="w3-third w3-margin-top">
                        <label>Email</label>
                        <input class="w3-input w3-border w3-margin-top" name="email" type="email" placeholder="Enter Email">
                      </div>
                      <div class="w3-third w3-margin-top">
                      <label>DOB</label>
                        <input class="w3-input w3-border w3-margin-top" name="dob" type="date">
                      </div>
                      <div class="w3-third w3-margin-top">
                      <label>Phone No.</label>
                        <input class="w3-input w3-border w3-margin-top" name="phone_no" type="text" placeholder="Enter Phone No.">
                      </div>
                    </div><div class="w3-row-padding w3-margin-top">
                      <div class="w3-third w3-margin-top">
                        <label>Aadharcard No.</label>
                        <input class="w3-input w3-border w3-margin-top" name="acard_no" type="text" placeholder="Enter Aadharcard No.">
                      </div>
                      <div class="w3-third w3-margin-top">
                      <label>Rationcard No.</label>
                        <input class="w3-input w3-border w3-margin-top" name="rcard_no" type="text" placeholder="Enter Rationcard No.">
                      </div>
                    </div>
                    <div class="w3-row-padding w3-margin-top">
                      <div class="w3-third w3-margin-top">
                        <label>State</label>
                        <select class="w3-select w3-border w3-margin-top" name="state">
                          <option value="" disabled selected>&nbsp;&nbsp;Select your State</option>
                          <option value="Gujarat" >Gujarat</option>
                        </select>
                      </div> 
                      <div class="w3-third w3-margin-top">
                        <label>City</label>
                        <select class="w3-select w3-border w3-margin-top" name="city">
                          <option value="" disabled selected>&nbsp;&nbsp;Select your City</option>
                          <option value="Ahamdabad">Ahamdabad</option>
                          <option value="Rajkot">Rajkot</option>
                          <option value="Surat">Surat</option>
                        </select>
                      </div>
                      <div class="w3-third w3-margin-top">
                      <label>Pincode</label>
                        <input class="w3-input w3-border w3-margin-top" name="pincode" type="text" placeholder="Enter Pincode">
                      </div>
                    </div>
                    <div class="w3-row-padding w3-margin-top">
                      <div class="w3-third w3-margin-top">
                      <label>Gender</label>
                      <div class="w3-padding-small">
                        <p>
                        <input class="w3-radio w3-margin-top w3-padding-small" type="radio" name="gender" value="male" checked>
                        <span>Male</span></p>
                        <p>
                      </div>
                      <div class="w3-padding-small">  
                        <input class="w3-radio w3-padding-small" type="radio" name="gender" value="female">
                        <span>Female</span></p>
                      </div>
                      <div class="w3-padding-small">
                        <p>
                        <input class="w3-radio w3-padding-small" type="radio" name="gender" value="other">
                        <span>Other</span></p>
                      </div>
                    </div>
                    <div class="w3-third w3-margin-top">
                    <label>Address</label><br>
                        <textarea class="w3-margin-top w3-padding" cols="27" placeholder="Enter Address" name="address"></textarea>
                    </div>
                    <div class="w3-third w3-margin-top">
                      <label>Password</label>
                        <input class="w3-input w3-border w3-margin-top" name="password" type="password" placeholder="Enter Password">
                      </div>
                      <div class="w3-third w3-margin-top">
                      <label>Conform Password</label>
                        <input class="w3-input w3-border w3-margin-top" name="con_password" type="password" placeholder="Enter Conform Password">
                      </div>
                    </div>
                    </div>
                    <div class="w3-center w3-margin-top">
                    <button class="w3-button w3-margin-top w3-round-large" style="background:linear-gradient(#00545d , #000729);color:white;" name="btn-signup">SUBMIT</button>
                    </div>
                </form>  
    </div>
  </div>

</body>
</html>