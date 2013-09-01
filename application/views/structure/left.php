<script type="text/javascript" src="assets/js/login.js"></script>
	<h3 class="text-center">Login Panel</h3>
    <form name="loginform" id="loginform" method="post" action="">	
		<input type="text" name="username" maxlength="12" class="form-control" placeholder="Username" id="username" required/>
		<input type="password" name="password" maxlength="12" class="form-control" placeholder="Password" id="password" required style="margin-top:10px;"/>
		<p>
		<div class="btn-group btn-group-justified">
            <a type="button" id="login" name="login" class="btn btn-primary">Login</a>
			<a type="button" class="btn btn-info" href="Register">Register</a>
		</div>
    </form>
		<div id="message"></div>
</div>
	<div class="col-md-8">