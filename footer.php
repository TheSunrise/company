<?php if($settings->getSite() != "Login"): ?>
<div class="container">
	<!-- Footer class -->
	<div class="footer">
  	<p>&copy; <?php $settings->getCompany(); ?> <?php $settings->getYear(); ?></p>
  </div>
  <!-- Footer class ending -->
</div>
<?php endif; ?>
<!-- Include all the scripts -->
<?php require_once("includes/scripts.php"); ?>
</body>
</html>