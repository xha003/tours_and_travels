<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Travel and Tour !!</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="Travel and tour" />
<!-- css -->
<link href="../../application/assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="../../application/assets/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="../../application/assets/css/jcarousel.css" rel="stylesheet" />
<link href="../../application/assets/css/flexslider.css" rel="stylesheet" />
<link href="../../application/assets/css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link href="../../application/assets/css/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><span>T</span>ravel & <span>T</span>our</a>
                </div>
					        <div class="navbar-collapse collapse ">
					          <ul class="nav navbar-nav">
					            <li><?php echo anchor(base_url(), 'Home') ?></li>
					            <li class="dropdown">
					                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Trekking <b class=" icon-angle-down"></b></a>
					                 <ul class="dropdown-menu">
					                    <li><?php echo anchor('ToursAndTravels/trekking_with_us', 'Trekking with us') ?></li>
							                <li><?php echo anchor('ToursAndTravels/what_to_bring', 'What to bring') ?></li>
					                </ul>
					            </li>
					            <li><?php echo anchor('ToursAndTravels/gallery', 'Gallery') ?></li>
					            <li><?php echo anchor('ToursAndTravels/other_services', 'Other Services') ?></li>
					            <li class="active"><?php echo anchor('ToursAndTravels/contact', 'Contact us') ?></li>
					          </ul>
					        </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Contact</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d3532.8161384504842!2d85.31971111903644!3d27.692077000420348!3m2!1i1024!2i768!4f13.1!2m1!1sbritish+college+nepal!5e0!3m2!1sen!2s!4v1427166381938" width="600" height="450" frameborder="0" style="border:0"></iframe>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Get in touch with us by filling <strong>contact form below</strong></h4>
				<form id="contactform" action="contact/contact.php" method="post" class="validateform" name="send-contact">
					<div id="sendmessage">
						 Your message has been sent. Thank you!
					</div>
					<div class="row">
						<div class="col-lg-4 field">
							<input type="text" name="name" placeholder="* Enter your full name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="email" placeholder="* Enter your email address" data-rule="email" data-msg="Please enter a valid email" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="subject" placeholder="Enter your subject" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
							<div class="validation">
							</div>
							<p>
								<button class="btn btn-theme margintop10 pull-left" type="submit">Submit message</button>
								<span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</section>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Get in touch with us</h5>
					<address>
					<strong>Travel & Tour</strong><br>
					 Chakrapath<br>
					Kathmandu ,Nepal </address>
					<p>
						<i class="icon-phone"></i> 9841185613 <br>
						<i class="icon-envelope-alt"></i> Info@travelandtour.com
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Pages</h5>
					<ul class="link-list">
						<li><a href="#">Home</a></li>
						<li><a href="#">Trekking</a></li>
						<li><a href="#">Contact</a></li>

					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a href="#">Coming Soon</a></li>
						<li><a href="#">Coming Soon</a></li>
						<li><a href="#">Coming Soon</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Gallery</h5>
					<div class="flickr_badge">
						<p><a href="gallery.html">Go to Gallery</a></p>
					</div>
					<div class="clear">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Travel and Tour All right reserved. By </span><a href="http://www.ajayajit.com" target="_blank">Ajit Gurung</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>

					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../../application/assets/js/jquery.js"></script>
<script src="../../application/assets/js/jquery.easing.1.3.js"></script>
<script src="../../application/assets/js/bootstrap.min.js"></script>
<script src="../../application/assets/js/jquery.fancybox.pack.js"></script>
<script src="../../application/assets/js/jquery.fancybox-media.js"></script>
<script src="../../application/assets/js/google-code-prettify/prettify.js"></script>
<script src="../../application/assets/js/portfolio/jquery.quicksand.js"></script>
<script src="../../application/assets/js/portfolio/setting.js"></script>
<script src="../../application/assets/js/jquery.flexslider.js"></script>
<script src="../../application/assets/js/animate.js"></script>
<script src="../../application/assets/js/custom.js"></script>
<script src="../../application/assets/js/validate.js"></script>
</body>
</html>