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
	.contactus
{
	width:100%;
    height:100vh;
    background-image:linear-gradient(to right, #2282A4, #459BB7,#67B3C9,#8ACCDC,#ACE5EE,#ACE5EE);
    /* clip-path: polygon(0% 0%,100% 0%,100% 100%,0% 80%); */
	font-family: 'Lora', serif;
}
.contactus{
    width:100%;
    height: 100vh;
    padding: 80px 0;
    position: relative;
}
.contactus:before{
    content:"";
    position: absolute;
    top:0;
    left:0;
    bottom: 0;
    right:0;
    background:linear-gradient(#009eff);
    z-index: -1;
	background-image:linear-gradient(to right, #2282A4, #459BB7,#67B3C9,#8ACCDC,#ACE5EE,#ACE5EE);
}

.homebutton{
border:1px solid #50d1c0;
    border-radius:100px;
    margin:0 50px;
    padding: 12px 35px;
    outline:none;
    columns: #50d1c0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.4;
    text-align: center;
    //background:transparent;
    color:white;
}
.formbutton button{
    border:1px solid #50d1c0;
    border-radius:100px;
    margin:0 50px;
    padding: 12px 35px;
    outline:none;
    columns: #50d1c0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.4;
    text-align: center;
    //background:transparent;
    color:#1ec1f4;

}

.homebutton{

box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);
}

form:hover .formbutton button{
background:  #006992;
color:white ;
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
<body style="background-image:linear-gradient(to right, #2282A4, #459BB7,#67B3C9,#8ACCDC,#ACE5EE,#ACE5EE);">
<section>
<div class="contactus" id="contact" >
        <div class="container headings text-center">
            <h1 class="center" style="font-weight: bold;text-align: center;">CONTACT US</h1>
            <p>Drop down your queries.We Look Forward To Hearing From You</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offet-md-2-col col-1">
                    <form action="/action_page.php">
                        <div class="form-group">

                          <input type="text" class="form-control" placeholder="Enter name" id="username" required autocomplete="off">
                        </div>
                            <div class="form-group">

                              <input type="email" class="form-control" placeholder="Enter email" id="email" required autocomplete="off">
                            </div>
                                <div class="form-group">

                                  <input type="number" class="form-control" placeholder="Enter mobile number" id="mobile" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Comment:</label>
                                    <textarea class="form-control" rows="4" id="comment" placeholder="Your Comments"></textarea>
                                  </div>
                                  <div class="formbutton" style="display: flex;justify-content: center;">
                        <button type="submit" >Submit</button></div>
								<br>
								<div class="form-group text-center">
									<a href="index.php" class="homebutton" role="button">GO TO HOMEPAGE</a>
								</div>
						<br>
						<br>
						<br>


                      </form>
                </div>
            </div>
        </div>
</section>
</body>
</html>
