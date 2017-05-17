<!-- Tutorial 1 -->
<!-- B.A.D Design -->

<!-- Header PHP-->
<?php
	$path = '../';
	$title = 'Tutorial 1';
	$heading = 'Tutorial';
	include $path.'assets/includes/header.php';
?>
	<div class="tutorial">
		<h1>SSH</h1>

		<p>SSH stands for Secure Shell. It is a secure (encrypted) way to remotely log into and control unix computers through the bash command line. In order to control your Unix server from your computer, you'll need to use SSH.</p>

		<h2>Open your bash terminal (Mac or linux)</h2>

		<!-- Start of Terminal -->
		<p>Open "Terminal" using Finder.</p>	

			<img src="<?php echo $path;?>assets/imgs/tutorial1/Mac_Terminal.png" alt="Mac terminal">

		<p>Use SSH to connect to your Linux machine by typing "SSH" followed by USERNAME@HOSTNAME replacing USERNAME with your account name and replacing HOSTNAME with the hostname or ip address of your linux machine. Press enter to execute the line.</p>

		<p class="code">$ SSH bad@server.website.com</p>

		<p>The server will then ask for your password. As you enter your password, no text will apear on the screen, this is normal. Press enter after you've typed it in.</p>

		<p class="code">bad@server.website.com's password: </p>
		
		<p>You now have control of the remote server through the bash shell. This will be how you connect to you server to setup your website in later tutorials.</p>
		<!-- End of Terminal -->
		
		<!-- Start of PuTTY explanation -->
		<h2>Open your bash terminal (Windows)</h2>

		<p>Since Windows is not based on UNIX, we have to install a program to interface with a UNIX computer from a windows computer. We will use PuTTY to SSH. PuTTY can be downloaded <a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/latest.html">here.</a> You'll want to select the corect downloiad for you comptuer, 32 or 64-bit. If you don't know, then just download the 32-bit version.</p>

		<img src="<?php echo $path;?>assets/imgs/tutorial1/Putty_download.PNG" alt="PuTTY download">
		
		<p>When you open putty, enter USERNAME@HOSTNAME into the "Host Name" box, replacing USERNAME with your account name and replacing HOSTNAME with the hostname or ip address of your linux machine. Enter port 22, and then press "Open".</p>

		<img src="<?php echo $path;?>assets/imgs/tutorial1/putty.jpg" alt="PuTTY">

		<p>PuTTY will then open a terminal window connected to your server. The server will then ask for your password. As you enter your password, no text will apear on the screen, this is normal. Press enter when it's typed.</p>

		<p class="code">bad@192.168.55.4's password: </p>
		
		<p>You now have control of the remote server through the bash shell. This will be how you connect to you server to setup your website in later tutorials.</p>
		<!-- End of PuTTY -->


<div class="row">
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton buttonHolder">
				<a id='quizLink' href="<?php echo $path;?>tutorials/tutorial_home.php">Tutorial Home</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			
			<div class="circleButton buttonHolder">
			<a id='quizLink' href="<?php echo $path;?>quizzes/quiz1.php">Take the Quiz</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			
			<div class="circleButton buttonHolder">
				<a id='quizLink' href="<?php echo $path;?>tutorials/tutorial2.php">Next Tutorial</a>
				</div></div>
</div></div>
	
	<!-- Quiz -->
	
<!-- Footer PHP-->
<?php
	include $path.'assets/includes/footer.php';
?>
