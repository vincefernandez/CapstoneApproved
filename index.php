<?php
include('templates/login-header.html');
include('app/class.php');
$student->loginUser();


if (isset($_SESSION['Account']) && !empty($_SESSION['Position'])) {
	echo 'Hi ', $_SESSION["Account"];
} else {
	echo "No Session";
}
// include('app/sample.php');
?>

<body class="img js-fullheight" style="background: linear-gradient(to right, blue 0%, blue 50%, white 50%, white 0%);">
	<section class="ftco-section">

		<div class="container border shadow-lg p-3 mb-5 rounded">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="heading-section">RECORDS MANAGEMENT</h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<!-- titLE  -->
						<form action="index.php" method="post" class="signin-form ">
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control text-muted bg-transparent" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" name="password" class="form-control text-muted bg-transparent" id="exampleInputPassword1" placeholder="Password" required>
							</div>
							<!-- <select name="Reciever" class="form-group">
								<option value="volvo">Reciever</option>
								<option value="saab">Releasing</option>
								
							</select> -->

							<div class="form-group">
								<button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>
							<div class="form-check d-md-flex">

								<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
								<label class="form-check-label" for="flexCheckChecked">
									Remember me
								</label>
								<div class="w-100 text-md-right">
									<a href="#" style="color: #fff" onclick="alert('We will create a form where user can request to technical assistant to create an a account')">Contact US</a>

								</div>
							</div>
							
						</form>

					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="page-footer font-small blue text-center fixed-bottom bg-white">

		<!-- Copyright -->
		<div class="footer-copyright text-center py-3">© 2020 Copyright:
			<a href="https://mdbootstrap.com/">Cerberus</a>
		</div>
		<!-- Copyright -->

	</footer>
	<?php

	include('templates/footer.html');
	?>

	<script>

	</script>
</body>

</html>