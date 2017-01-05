<?php include 'header.php'; ?>
	<div class="page-wrap contact-page inside-page">
		<section class="banner boxed" id="banner">
			<div class="banner-wrap">
				<div class="page-head" id="page-head">
					<h1><span>Contact</span><br><span>Us</span></h1>
				</div>
				<div class="page-img">
					<img src="images/contact-banner.jpg" alt="">
				</div>
			</div>
			<div class="nav-open">
				<i class="fa fa-bars"></i>
			</div>
		</section>

		<section class="contact-form row">
			<div class="wrap">
				<p class="flow">Say Hello! Get to know the creative people that make the organization run smooth or drop us a line of your suggestions.  We will invite you and believe me you will enjoy it</p>

				<div class="contact-details form-div">
					<div class="form-head">
						<h4>Contact details</h4>
						<p>Visit our office</p>
					</div>
					<div class="row">
						<ul>
							<li><a href="#"><i class="fa fa-phone"></i> 01-5547326</a></li>
							<li><a href="#"><i class="fa fa-phone"></i> 01-5547320</a></li>
							<li><a href="#"><i class="fa fa-fax"></i> 01-5547326</a></li>
							<li><a href="#"><i class="fa fa-envelope"></i> info@axle.com.np</a></li>
							<li><a href="#"><i class="fa fa-globe"></i> www.alxe.com.np</a></li>
							<li><i class="fa fa-map"></i> GPO 3259, Jawalakhel.</li>
						</ul>
						<div class="map-div">
							<div id="map"></div>
						</div>
					</div>
				</div>


				<div class="form-div">
					<div class="form-head">
						<h4>Contact Us</h4>
						<p>Drop us a line</p>
					</div>
					<form id="contact-form" method="post" >
						<div class="row">
					        <div class="input-field col s12">
					          <input placeholder="Your Name Please" id="first_name" type="text" class="validate" required>
					          <label for="first_name">Name</label>
					        </div>
					        <div class="">
					        	<input type="text" id="honey" name="honey" style="display: none;visibility: hidden;" value="0">
					        </div>
					        <div class="input-field col s12">
					          <input placeholder="Your Email@domain.com" id="email" type="text" class="validate" required>
					          <label for="email">Email</label>
					        </div>
					        <!-- <div class="input-field col s12">
					          <input placeholder="What you wanna talk about?" id="subject" type="text" class="validate">
					          <label for="subject">Subject</label>
					        </div> -->
					        <div class="input-field col s12">
					          <textarea id="textarea1" class="materialize-textarea" required></textarea>
					          <label for="textarea1">Say Something</label>
					        </div>
						</div>
						<div class="submit-div">
							<button type="submit">Submit</button>
						</div>			
					</form>
				</div>

			</div>
		</section>
	</div>

<?php include 'footer.php'; ?>