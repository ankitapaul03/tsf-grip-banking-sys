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
<style>

  *{
    margin:0;
    padding:0;
    box-sizing:border-box;
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
    background-image:linear-gradient(to right, #2282A4, #459BB7,#67B3C9,#8ACCDC,#ACE5EE,#ACE5EE);
    /* clip-path: polygon(0% 0%,100% 0%,100% 100%,0% 80%); */
}
.main_text
{
    color:white;
    margin-top:120px;
    font-family: 'Lora', serif;
}
.big-text
{

    margin:20px 0;
    color:white;
    font-family: 'Lora', serif;


}
form:hover .formbutton button{
background: white;
color:#5E11A3 ;
box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);
}
@media(min-width:400px)
{
    .main_div
    {
        max-height:1000px;
    }
}
</style>
</head>

<body>
<div class="main_div">

     <div class="navbar navbar-expand-md">

      <a href="#" class="navbar-brand font-weight-bold text-white text-center"><h2>THE WORLD BANK</h2></a>
      <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
      <span class="navbar-toggler-icon" style="background:white;"></span>
      </button>

       <div class="collapse navbar-collapse text-center" id="collapsenavbar">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="about.php" class="nav-link text-white "><span style="margin-left:90px;">ABOUT</span></a></li>
              <li class="nav-item">
                  <a href="customer.php" class="nav-link text-white">VIEW CUSTOMERS</a></li>
              <li class="nav-item">
                  <a href="contact.php" class="nav-link text-white">CONTACT</a></li>
          </ul>
        </div>
     </div>
	 <br>
	 <br>
	 <br>

     <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h2 class="main_text">THE WORLD BANK</h1>
            <p class="big-text">WELOCOME TO WORLD BANK SERVICES</p>
          </div>
          <div class="col-sm-6">

            <img src="assets/PIC.jpg" class="img-fluid" width="560" height="345" style="margin-top:20px;">

          </div>
       </div>

    </div>
</div>
</div>


  <!--contact starts-->

</body>
</html>
