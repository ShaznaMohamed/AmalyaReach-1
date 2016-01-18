<html>

<head>
    <style>
        .footer-distributed{
			background-color: #032617;
			box-sizing: border-box;
			width: 100%;
			text-align: left;
			font: bold 16px sans-serif;
			padding: 20px 20px;
			margin-top: 80px;
		}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px;
	margin: 0;
}

.footer-distributed h3 span{
	color:  white;
    font : 'Cookie', cursive;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #5383d3;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}

        
        .myButton {
	    background-color:#9F8554;
        border:1px solid #9F8554;
        display:inline-block;
        cursor:pointer;
            height: 3em;
        color:#ffffff;
        font-family:Arial;
        font-size:17px;
        padding:16px 31px;
        text-decoration:none;
        text-shadow:0px 1px 0px #2f6627;
            
    }
.myButton:hover {
	background-color:#5cbf2a;
}
.myButton:active {
	position:relative;
	top:1px;
}

    
    </style>
    
    
    
    
	<!--<link rel="stylesheet" href="/css/footer-distributed-with-address-and-phones.css"> -->
    <!--<link rel="stylesheet" href="/css/demo.css"> -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>





<footer class="footer-distributed">
    <form name="newslettersignup" method="post">

			<div class="footer-left">

				<h3 style="color:#b29262; ">Newsletter<span> <input type="text">    <input type="button" value="SignUp" class="myButton"></span></h3>

				<p class="footer-links" style="color: #b29262;">
					Get special offers and promotions right in your inbox.
				</p>

				<p class="footer-company-name" style="color:#b29262; ">Amalya Reach &copy; 2015</p>
			</div>

			<div class="footer-center" style="color:#b29262; ">

				<div>
					<i class="fa fa-map-marker" ></i>
					<p style="color:#b29262; "><span>Homagama</span> Sri Lanka</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p style="color:#b29262; ">011 2 748913</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right" style="color:#b29262; ">

				<p class="footer-company-about" style="color:#b29262; ">
					<span style="color:#b29262; ">About Us</span>
					Amalya Reach resort situated in homagama on morgahahena road away from 26km from Colombo this hotel can be accommodate up to 750 guests on a function.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>
    </form>
		</footer>
</html>