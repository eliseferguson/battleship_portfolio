<div class="container-photo">
	<img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/resume-image-large.jpg" alt="" class="bg" />
</div>
<div class="container-page">

	<div class="container-primary">
		<div class="container-content">
			<header class="header">
				<!-- Content header area -->
				<img src="<?php global $base_path; print $base_path.path_to_theme(); ?>/images/avatar-nogun.jpg" alt="" class="battleship-avatar screenElement"/>
				<h1>Elise Ferguson</h1>
				<h3>Front End Web Developer</h3>
				<span>Farmington, Minnesota</span>
				<span class="phone" title="Click to call on Mobile">612-234-1627</span>
				<div class="menu clearfix">
				  <?php echo theme('links__system_main_menu', array('links' => $main_menu)); ?>
				</div>
				<a href="mailto:ferguson.elise@gmail.com" class="email"><span class="fa fa-bullseye screenElement"></span><span class="screenElement">Hire Me</span> <span class="printElement">ferguson.elise@gmail.com</span></a>
				<br/>
				<a href="https://www.linkedin.com/in/eliseferguson" target="_blank" class="printElement">https://www.linkedin.com/in/eliseferguson</a>
				<?php if ($page['header']): ?>    
				  <?php print render($page['header']); ?>
				<?php endif; ?>
			</header>
			<section class="primary">
				<!-- Main content area -->
				<?php if ($page['content']): ?>    
				  <?php print render($page['content']); ?>
				<?php endif; ?>
			</section>
		</div>
		<div class="container-sidebar">
			<!-- optional sidebar -->
			<?php if ($page['sidebar_first']): ?>    
			  <?php print render($page['sidebar_first']); ?>
			<?php endif; ?>
		</div>
		<footer class="container-footer">
			<!-- main footer area -->
			<section class="social-links screenElement">
				<a href="https://www.linkedin.com/in/eliseferguson" target="_blank" class="fa fa-linkedin-square fa-3x"></a>
			</section>
			<div class="footer">
				<?php if ($page['footer']): ?>    
				  <?php print render($page['footer']); ?>
				<?php endif; ?>	
			</div>	
		</footer>
	</div>
	<div class="container-secondary">
		<!-- optional secondary area -->
	</div>
</div>