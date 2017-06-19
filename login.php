<div class="container">

	<div id="modal" class="popupContainer" style="display:none;">
			<header class="popupHeader">

				<div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>	
				<div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
					
			</header>

			<section class="popupBody">

					<div class="social_login">

					</div>

					<!-- Username & Password Login form -->
					<div class="user_login">
							<form action="login-process.php" method="post">
									<label>Email</label>
									<input type="text" name="email">
									<br >

									<label>Password</label>
									<input type="password" name="pwd">
									<br >

									<div class="checkbox">
											<input id="remember" type="checkbox" >
											<label for="remember">Remember me</label>
									</div>

									<div class="action_btns">
										<input type="submit" name="submit" class="btn btn_red">
									</div>
							</form>

							<a href="#" class="forgot_password">Forgot password?</a>
					</div>

					<!-- Register Form -->
					<div class="user_register">
							<form action="sign-up-process.php" method="post">
									<label>Full Name</label>
									<input type="text" name="firstname" required>
									<br>

									<label>Email Address</label>
									<input type="email" name="email" required>
									<br>

									<label>Password</label>
									<input type="password" name="pwd" required>
									<br>

									<label>Confirm Password</label>
									<input type="password" name="conpwd" required>
									<br>

									<div class="checkbox">
											<input id="send_updates" type="checkbox" required>
											<label for="send_updates">Agree To <a href="#">Terms and Conditions</a></label>

									</div>

									<div class="action_btns">
										<input type="submit" name="submit" class="btn btn_red">
										
									</div>
							</form>
					</div>
			</section>
	</div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://andwecode.com/wp-content/uploads/2015/10/jquery.leanModal.min_.js'></script>
<script src="js/index.js"></script>