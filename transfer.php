<html>
<head>
<title></title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,600&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/userstyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src=” sweetalert-dev.js”></script>
<link rel=”stylesheet” href=” sweetalert.css”>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
.main_div
{
	width:100%;
    height:100vh;
    background-image:linear-gradient(to right, #2282A4, #459BB7,#67B3C9,#8ACCDC,#ACE5EE,#ACE5EE);
    /* clip-path: polygon(0% 0%,100% 0%,100% 100%,0% 80%); */
}

.navbar
{
    width:100%;
    white-space:nowrap;
    background-color: #006992;
	font-family: 'Lora', serif;
}
.main_div
{
    width:100%;
    height:100vh;
	font-family: 'Lora', serif;

}
   input,select
  {
      margin-top:10px;
      width:230px;
      height:40px;
      border-radius:5px;
      outline:none;
  }
 ::placeholder
 {
     padding:10px;
     color:orange;
 }
button
{
    color:#7A3DAF;
    background:white;
    border-color:#7A3DAF;
   padding: 14px 20px;
  cursor: pointer;
  width: 100%;

}
button:hover
 {
     color:white;
     background:#00e64d;
     border:none;
     opacity:0.8;
 }


 </style>
</head>

<?php
include 'config.php';

		$ids=$_GET['id'];
		$showquery="SELECT * FROM customers WHERE ID=$ids";
		$showdata=mysqli_query($con,$showquery);
		if (!$showdata)
		{
		printf("Error: %s\n", mysqli_error($con));
		exit();
		}
$arrdata=mysqli_fetch_array($showdata);
?>





<?php
include "config.php"; // Using database connection file here

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']))
{
	$sender_id=$_POST['from_customer_id'];
    $receiver_id=$_POST['to_customer_id'];
    $amount=$_POST['amount'];
    $sender_cb= $_POST['sender_current_balance'] - $amount;
    $receiver_cb= $_POST['receiver_current_balance'] + $amount;

	if($amount > $_POST['sender_current_balance'])
	{
		echo "<script>alert('INSUFFICIENT BALANCE!')</script>";
	}
	else
	{
		$sql= "INSERT INTO transfers (from_customer_id,amount,to_customer_id) VALUES('$sender_id','$amount','$receiver_id')";


		$sender_update_sql="UPDATE customers SET current_balance='$sender_cb' WHERE id='$sender_id'";

		$receiver_update_sql="UPDATE customers SET current_balance='$receiver_cb' WHERE id='$receiver_id'";

		if ($con->query($sql)===false || $con->query($sender_update_sql)===false || $con->query($receiver_update_sql)===false)
		{
			trigger_error('Wrong SQL Command:'. $sql . 'ERROR:'. $con->error ,E_USER_ERROR);
		}
		else
		{
			echo "<script>alert('Transaction Successful!')</script>";
			echo "<meta http-equiv=refresh content=\"0;url=customer.php\">";
		}
	}

}


?>


<body>
<div class="main_div">

     <div class="navbar navbar-expand-md">

      <a href="#" class="navbar-brand font-weight-bold text-white text-center">THE WORLD BANK</a>
      <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
      <span class="navbar-toggler-icon" style="background:white;"></span>
      </button>

       <div class="collapse navbar-collapse text-center" id="collapsenavbar">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="index.php" class="nav-link text-white">HOME</a></li>
              <li class="nav-item">
                  <a href="about.php" class="nav-link text-white">ABOUT</a></li>
              <li class="nav-item">
                  <a href="customer.php" class="nav-link text-white">VIEW CUSTOMER</a></li>
              <li class="nav-item">
                  <a href="contact.php" class="nav-link text-white">CONTACT</a></li>
               </ul>
        </div>
     </div>


     <div class="container">
        <div class="row">

          <div class="col-sm-4">
              <div class="card text-center" style="margin-top:76px;background-color:#006992;;border-radius:10px;color:white" >
              <form method="POST">

                    <div class="card-body">

                    <h3>Sender Details</h3>

                        <label>Name :</label>
                        <input type="hidden" name="from_customer_id" value="<?php echo $arrdata['id'];?>" readonly />
						<input type="hidden" name="sender_current_balance" id="sender_current_balance" readonly value="<?=$arrdata['current_balance']?>"/>
                        <input type="text"  name="name1" value="<?php echo $arrdata['name'];?>"
						readonly><br><br>
                        <label>Email :</label>
                        <input type="text" name="email1" value="<?php echo $arrdata['email'];?>"
						readonly><br><br>
                        <label>Amount :</label>
                        <input type="number" name="amount" value="" style="width:210px;" required placeholder="Enter amount"><br><br>
                    </div>

               </div>
          </div>

          <div class="col-sm-4">
              <div class="card text-center" style="margin-top:80px;height:300px;">
                   <div class="card-body">
                   <img src="assets/img_moneytransfer.jpg" style="width:250px;height:220px;margin-top:0px;">
                   <button  name="submit">Proceed to Pay</button>
                  </div>
             </div>
          </div>

          <div class="col-sm-4">
                <div class="card text-center" style="margin-top:76px;background-color:#006992;border-radius:10px;color:white">

                   <div class="card-body">
                   <h3>Receiver Details</h3>
						    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<select required id="to_customer_select">
							<option>Please select receiver</option>
							<?php
							include 'config.php';
							$senderId = $arrdata['id'];
							$selectquery = "SELECT * FROM customers WHERE id!='$senderId'";
							$query = mysqli_query($con,$selectquery);
							$numofrows = mysqli_num_rows($query);
							while($res = mysqli_fetch_array($query))
							{
								?>
									<option value="<?=$res['id'];?>,<?=$res['name'];?>,<?=$res['email'];?>,<?=$res['current_balance'];?>">
										<?=$res['name']; ?>, <?=$res['email']; ?>
									</option>
								<?php
							}
							?>
						</select>
						<br>
						<br>
                        <input type="hidden" name="to_customer_id" id="receiverId" readonly value=""/>
						<input type="hidden" name="receiver_current_balance" id="receiver_current_balance" readonly value=""/>
                        <label>Name :</label>
                        <input type="text" name="name2" id="receiverName" readonly value=""/><br><br>
                        <label>Email :</label>
                        <input type="text" name="email2" id="receiverEmail" readonly value=""/><br><br>
                   </div>

               </div>
          </div>

       </div>

    </div>
</div>
</form>
<script>
document.getElementById('to_customer_select').onchange = function() {
	let value = this.value;
	let splittedValue = value.split(',');
	document.getElementById('receiverId').value = splittedValue[0];
	document.getElementById('receiverName').value = splittedValue[1];
	document.getElementById('receiverEmail').value = splittedValue[2];
	document.getElementById('receiver_current_balance').value = splittedValue[3];


}

</script>
</body>
</html>
