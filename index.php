<!-- Header PHP-->
<?php
	$path = '';
	$title = 'YouNix';
	$heading = 'Home';
	include $path.'assets/includes/header.php';
?>
		<div class="index">
		<!-- Twitter -->
		<div class="hidden-sm hidden-xs">	
		<div class="sidebar-nav-absolute pull-right" style="float:right;">
               	 <div class="well">
                         	<a class="twitter-timeline" href="https://twitter.com/therealbadesign" 
							data-tweet-limit="3"
							data-width="200px"
							>
							Tweets by @therealbadesign</a> 
							<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
             	   </div>
                	<!--/.well -->
			</div>
          	  </div>
			<h1 id="logo"><span class="you">You</span><span class="nix">Nix</span></h1>
			<p>Welcome to YouNix, an interactive UNIX learning experience. Whether you are new to UNIX 
				or you already have some experience, these tutorials can help you host your website for all 
				the world to see.</p>
			<p>YouNix was created by web developers, for web developers, and it's here to give you
				all the tools you need to put your site onto a server. You can 
				<a href="<?php echo $path?>tutorials/tutorial_home.php">start the tutorials</a>
		</div>
		<img src="assets/imgs/happy.jpg" alt="People laughing" />
<!-- Footer PHP -->
<?php
	include $path.'assets/includes/footer.php';
?>
