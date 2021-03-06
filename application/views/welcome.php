<?php echo doctype('html5');?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>

	<!-- Set the viewport width to device width for mobile -->
 	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
 	<meta name="description" content="Document Management System for the engineering departments of the 7 atlantic universities." />
  <meta name="author" content="Dalhousie Engineering Department" />
  <meta name="copyright" content="Maavis, Group. Copyright (c) 2012" />

  <!-- Included CSS Files -->
  <?php echo link_tag('stylesheets/foundation.css')."\n";?>
  <?php echo link_tag('stylesheets/ie.css')."\n";?>
  <?php echo link_tag('stylesheets/app.css')."\n";?>
  <link href='http://fonts.googleapis.com/css?family=Marmelad' rel='stylesheet' type='text/css'>

  <!-- Included JS Files -->
  <?php foreach ($scripts as $script): ?>
  <script type='text/javascript' src = '<?php echo $base_url.$script;?>'></script>
  <?php endforeach;?>

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<div class="container" id="login">
	<div class="row">
		<div class="six columns centered info">  
			<h1><img src="./images/maavis_black.png" alt="image">DalDMS</h1>  
			<h6>Document Management System</h6>
      <?php
        $form = array(
          'class'=>'custom'
        );
        $email = array(
          'name'=>'email',
          'type'=>'text',
          'placeholder'=>'Username or Email',
        );
        $password = array(
          'name'=>'password',
          'placeholder'=>'password',
        );
        $login = array(
          'name'=>'loginsubmit',
          'value'=>'.',
          'class'=>'medium radius button icons'
        );
        $forgot = array(
          'name'=>'forgotsubmit',
          'value'=>'Forgot Password?',
          'class'=>'medium radius secondary button'
        );
      ?>
      <?php echo $error;?>
      <?php echo form_open('oauth/login', $form)."\n";?>
      <label>Username:</label>
			<div class="row" id="user">
  				<div class="twelve columns">
    				<div class="row collapse">
      					<div class="one mobile-one columns">
        					<span class="prefix icons">U</span>
      					</div>
      					<div class="eleven mobile-three columns">
        					<?php echo form_input($email)."\n";?>
      					</div>
    				</div>
  				</div>
			</div>

      <label>Password:</label>
			<div class="row" id="pass">
  				<div class="twelve columns">
    				<div class="row collapse">
      					<div class="one mobile-one columns">
        					<span class="prefix icons">x</span>
      					</div>
      					<div class="eleven mobile-three columns">
        					<?php echo form_password($password)."\n";?>
      					</div>
    				</div>
  				</div>
			</div>

      <div class="row choice">
        <div class="twelve mobile-four columns">
          <?php echo form_submit($login)."\n";?>
          <?php echo anchor('#', 'Forgot your password?', 'title="Forgot password"', 'class="forgot"')."\n";?>
        </div>
      </div>
      <div class="row">
        <div class="twelve mobile-two columns">
          <p>Version v0.01</p>
        </div>
      </div>
      <?php //echo form_submit($forgot);?>
      <?php echo form_close()."\n";?>
		</div>
	</div>
</div>
</body>
</html>