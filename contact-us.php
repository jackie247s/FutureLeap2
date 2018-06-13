<?php include 'includes/header.php' ?>

<?php include 'includes/navbar.php' ?>

		<section class="page-title parallax bgimage-contactus">
			<div class="title-heading">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="box-title style1">
								<h1>
									Contact Us
								</h1>
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.html" title="">Home</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
										<li><a href="#" title="">Contact Us</a></li>
									</ul>
								</div><!-- /.breadcrumbs -->
							</div><!-- /.box-title -->
						</div><!-- /.col-md-12 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.title-heading -->
		<div class="overlay-black"></div>
		</section><!-- /.page-title parallax -->

		<div class="divider105"></div>

		<div class="flat-contact-classic">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="contact-classic">
							<p class="color-default">OUR OFFICES</p>
							<h2 class="font-weight-3">Get in touch with us</h2>
							<ul class="flat-contact">
								<li class="phone">
									<p class="phone">Tel: +971 4887 3353</p>
									<p class="phone">Fax: +971 4282 3590</p>
									<p class="email">info@futureleap.ae</p>
								</li>
								<li class="address">
									<p>Office 656, Acico Business Park, Port Saeed<br/>Deira, Dubai</p>
								</li>
								<li class="open-hours">
									<p>Open hours: 8.00-18.00 Mon-Fri</p>
								</li>
							</ul><!-- /.flat-contact -->
						</div><!-- /.contact-classic -->
					</div><!-- /.col-md-6 -->
					<div class="col-md-6">
						<!-- <section class="pdmap" id="flat-map">
				            <div class="flat-maps" data-address="25.2519659,55.3328027" data-height="370" data-image="images/icons/map.png" data-name="Themesflat Map"></div>
				            <div class="gm-map">                
				                <div class="map box-shadow"></div>                        
				            </div>
						</section>/#flat-map -->
						
						<div class="" id="googleMap">

           				</div>
					</div><!-- /.col-md-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.flat-contact-classic -->

		<section class="flat-contact-form style4">
			<div class="container">
				<div class="row">
					<div class="form-contact-form style3 three v3">
						<form id="contactform" action="./contact/contact-process.php" method="post" accept-charset="utf-8">
							<div class="subscribe-content">
								<div class="contact-form-name contact-form one-third">
									<input type="text" id="name" name="name" placeholder="Name |" required="" />
								</div>
								<div class="contact-form-email contact-form one-third">
									<input type="text" id="email" name="email" placeholder="Email" required="" />
								</div>
								<div class="contact-form-url contact-form one-third">
									<input type="text" id="url" name="url" placeholder="Website" required="" />
								</div>
								<div class="contact-form-comment contact-form">
									<textarea name="message" id="message" placeholder="Messages" required=""></textarea>
								</div>
								<div class="btn-contact-form center">
									<button type="submit" class="border-radius-2">SEND MESSAGES</button>
								</div>
							</div>
							<div id="subscribe-msg">
								
							</div>
						</form><!-- /form -->
					</div><!-- /.form-contact-form -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-contact-form -->

		<!-- Google Maps Script -->
		<script type="text/javascript">
		function myMap(){
			var mapProp= {
			center:new google.maps.LatLng(25.2519659,55.3328027),
			zoom:16,
			};

			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		}
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5hpLymL6YSJ3vdXpqlLFAnTvRvxsN4cc&callback=myMap" charset="utf-8"></script>


<?php include 'includes/footer.php' ?>