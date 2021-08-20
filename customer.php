<html>
<head>
<title></title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,400;1,600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

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

    background-image:linear-gradient(to right, #2282A4, #459BB7,#67B3C9,#8ACCDC,#ACE5EE,#ACE5EE);
    /* clip-path: polygon(0% 0%,100% 0%,100% 100%,0% 80%); */
	font-family: 'Lora', serif;
}

.navbar
{
    width:100%;
    white-space:nowrap;
    background-color: #006992;
}
.main_div
{
    width:100%;
    height:100vh;

}
*{
    margin:0;
    padding:0;
   box-sizing:border-box;
}
.display_table
{
    width:100vw;
    height:100vh;
    display:flex;
    flex-direction:column;
    justify-content: center;
    text-align:center;
	background-image:linear-gradient(to right, #2282A4, #459BB7,#67B3C9,#8ACCDC,#ACE5EE,#ACE5EE);
}
.center_div
{
    width:90vw;
    height:80vh;
    background-image:url('images/2.jpg');
    background-repeat:no-repeat;
    background-size:100%;
    padding:20px 0 0 0;
    box-shadow:0 10px 20px 0 rgba(0,0,0,0.03);
    border-radius:10px;
    margin-left:30px;
}
h1
{
    font-size:25px;
    color:#000;
    text-align:center;
    margin-top:-20px;
    margin-bottom:20px;
	text-shadow: 2px 2px #1ec1f4;
}
table
{
    border-collapse:collapse;
    background-color:black;
    box-shadow:0 10px 20px 0 rgba(0,0,0,0.03);
    border-radius: 10px;
    border-collapse:collapse;
    table-layout:fixed;
    opacity:0.7;
    color:#1ec1f4;
    font-weight:bold;
    margin:auto;
}
th,td
{
  border:1px solid #f2f2f2;
  padding:8px 30px;
  text-align:center;
  opacity:0.9;
  color:#1ec1f4; ;
}
th{
    text-transform:uppercase;
    font-weight:500;
}
td
{
    font-size:13px;
}

</style>
</head>
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
							<a href="#" class="nav-link text-white">ABOUT</a></li>
						<li class="nav-item">
							<a href="contact.php" class="nav-link text-white">CONTACT</a></li>
					</ul>
			</div>
    </div>


          <div class="display_table">
                 <h1>Customers Details &nbsp &nbsp </h1>
               <div class="center_div">
               <div class="table-responsive">
                    <table>
                    <thead>
					<tr>
						<th>Sl No.</th>
						<th>Name</th>
						<th>Email</th>
						<th>Balance</th>
						<th colspan="2">Transfer</th>
                    </tr>
                    </thead>
                    <tbody>
                  </div>
          <?php
          include 'config.php';
          $selectquery = "SELECT * FROM customers";
          $query = mysqli_query($con,$selectquery);
          $numofrows = mysqli_num_rows($query);
			$i=1;
           while($res = mysqli_fetch_array($query))
          {
            ?>
               <tr>
               <td><?php  echo $i; ?></td>
               <td><?php echo $res['name']; ?></td>
               <td><?php echo $res['email']; ?></td>
               <td><?php echo $res['current_balance']; ?></td>
			   <td>
			  <a href="transfer.php?id=<?=$res['id'];?>" title="Transfer Amount" data-toggle="tooltip"><span class=" fa fa-user-circle large" aria-hidden="true" style="color:#1ec1f4;"><b>&nbsp Click</b></span></a>
		       </td>
               </tr>
             <?php
			 $i++;
          }
           ?>


</tbody>
</table>
</div>
</div>
</div>
</div>

</body>
</html>
