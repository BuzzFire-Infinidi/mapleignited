<legend>Register to MapleIgnited</legend>
<?php
$attributes = array('role' => 'form');
$subattributes = array('class' => 'btn btn-primary');
echo form_open('Register', $attributes); ?>
	<div class="form-group">
		<label for="inputUser">Username</label>
		<?php echo form_error('username'); ?>
		<input type="text" name="username" maxlength="45" value="<?php echo set_value('username'); ?>" class="form-control" id="inputUser" required autocomplete="off" placeholder="Username"/>
	</div>
	<div class="form-group">
		<label for="inputPass">Password</label>
		<?php echo form_error('password'); ?>
		<input type="password" name="password" maxlength="45" class="form-control" id="inputPass" value="<?php echo set_value('password'); ?>" required autocomplete="off" placeholder="Password">
	</div>
	<div class="form-group">
		<label for="inputConfirm">Confirm Password</label>
		 <?php echo form_error('confirm_password'); ?>
		<input type="password" name="confirm_password" maxlength="45" class="form-control" id="inputConfirm" value="<?php echo set_value('confirm_password'); ?>" required autocomplete="off" placeholder="Confirm Password">
	</div>
	<div class="form-group">
		<label for="inputEmail">Email</label>
		<?php echo form_error('email'); ?>
		<input type="email" name="email" maxlength="50" class="form-control" id="inputEmail" value="<?php echo set_value('email'); ?>" required autocomplete="off" placeholder="Email">
	</div>
	<b>reCaptcha</b>
<?php echo $recaptcha_html; ?>
<?php
if($captcha_status == 1){echo "<br/><div class=\"alert alert-info\">Please make sure to enter the correct reCaptcha code!</div>";}?>
<?php echo form_submit( $subattributes, 'Submit'); ?>
<?php echo form_close(); ?>
