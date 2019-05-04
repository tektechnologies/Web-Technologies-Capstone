<!--Code reuse in progress: career pathways here-->
<?php include('library/head_section.inc');?>
<?php include('library/nav_section.inc');?>

<body>
	<div class="container" id="main">
	<div class="page-text">
		<h1>Contact Us</h1>
	<div class="row">
		<div class="col">
		<form>
			<legend>Send an Email</legend>
			<p>Have any thoughts, questions, or concerns?<br>Drop us an email. We'll get back to you as soon as we can.</p>
			<div class="form-group">
				<label for="name">Name*</label>
				<input type="text" class="form-control" id="name" required>
			  </div>
			  <div class="form-group">
				<label for="email">Email address*</label>
				<input type="email" class="form-control" id="email" required>
			  </div>
			  <div class="form-group">
				<label for="business">Business/Organization</label>
				<input type="text" class="form-control" id="business">
			  </div>
			  <div class="form-group">
				<label for="subject">Subject*</label>
				<input type="text" class="form-control" id="subject" required>
			  </div>
			  <div class="form-group">
				<label for="message">Message*</label>
				<textarea class="form-control" id="message" required></textarea>
			  </div>
			  <div class="custom-control custom-checkbox">
				  <input type="checkbox" class="custom-control-input" id="customCheck1">
				  <label class="custom-control-label" for="customCheck1">I am not a robot</label>
				</div><br>
			
			  <button type="submit" class="btn btn-primary" id="send">Send email</button>
		</form>
		</div>
		<div class="col">
			
		<form method="post" action="mailingList_processor.php">
			
			<legend>Newsletter Sign-Up</legend>
			<p>Submit your info here to be added to our email list. We'll send you updates and will never spam you. You can opt out at any time.<p>
			<div class="form-group">
				<label for="fullname">Name*</label>
				<input type="text" class="form-control" name="fullname" required>
			</div>
			<div class="form-group">
				<label for="email">Email address*</label>
				<input type="text" class="form-control" name="email" required>
			</div>
			
			 <input type="reset"  class="btn btn-primary" name="reset" value="Clear Form!">
			 <input type="submit" class="btn btn-primary" id="sign-up" value="Sign up!">
			
			
		</form>
		</div>
	</div>
	</div>
	</div>


<?php include('library/footer_section_two.inc');?>

