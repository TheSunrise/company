<!-- Navigation -->	
	<div class="navbar-wrapper">
		<div class="container">
			
    	<div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><?php $settings->getCompany(); ?></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li <?php echo ($settings->getSite() == 'Home') ? 'class="active"' : ''; ?> ><a href="index.php">Home</a></li>
              <li <?php echo ($settings->getSite() == 'About') ? 'class="active"' : ''; ?> ><a href="about.php">About</a></li>
              <li <?php echo ($settings->getSite() == 'Services') ? 'class="active"' : ''; ?> ><a href="services.php">Services</a></li>
              <li <?php echo ($settings->getSite() == 'Contact') ? 'class="active"' : ''; ?> ><a href="contact.php">Contact</a></li>             
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
            	<li><a href="login.php">Login</a></li>
              <li <?php echo ($settings->getSite() == 'Register') ? 'class="active"' : ''; ?> ><a href="register.php">Register</a></li> 
           	</ul>	
          </div>
        </div>
      </div>
      
		</div>
  </div>