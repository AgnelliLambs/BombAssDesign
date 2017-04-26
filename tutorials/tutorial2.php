<!-- Header PHP-->
<?php
	$path = '../';
	$title = 'Tutorial 1';
	$heading = 'Tutorial';
	include $path.'assets/includes/header.php';
?>
	<div class="tutorial">
		<h1>Navigating Terminal</h1>

		<p>Navigating through files in UNIX is one of the most common things you will ever do. There are only
			a few simple commands you'll need to remember: ls, cd, and pwd.</p>

		<h2>Step 1</h2>

		<p>The first thing you need to do is open Terminal, or another application that will let you 
			enter UNIX commands.</p>	

		<!--Screenshot of terminal
			<img src="<\?php echo $path;?>/assets/imgs/terminal.jpg" alt="Terminal">
		-->

		<p>We'll start with pwd: pwd stands for <u>P</u>rint <u>W</u>orking <u>D</u>irectory. This will display the path from the ROOT directory
			(usually C:\) to wherever you are now. Entering the pwd command should look something like this:</p>

		<p class="code">$ pwd<br />/Users/Username</p>

		<p>Remember, if you are ever unsure where you are, just type pwd and you can find your location.</p>

		<p class="code">$ SSH bad@192.168.55.4's password: </p>
		
		<p>You now have control of the remote server through the bash shell. This will be how you connect to you server to setup your website in later tutorials.</p>

		<h2>Open your bash terminal (Windows)</h2>

		<p>Since Windows is not based on UNIX, we have to install a program to interface with a UNIX computer from a windows computer.We will use PuTTY to SSH. PuTTY can be downloaded <a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/latest.html">here.</a> </p>

		<p>When you open putty, enter USERNAME@HOSTNAME into the "Host Name" box, replacing USERNAME with your account name and replacing HOSTNAME with the hostname or ip address of your linux machine. Enter port 22, and then press "Open".</p>

		<img src="<?php echo $path;?>/assets/imgs/putty.jpg" alt="PuTTY">

		<p>PuTTY will then open a terminal window connected to your server. The server will then ask for your password. As you enter your password, no text will apear on the screen, this is normal. Press enter when it's typed.</p>

		<p class="code">$ SSH bad@192.168.55.4's password: </p>
		
		<p>You now have control of the remote server through the bash shell. This will be how you connect to you server to setup your website in later tutorials.</p>
</div>
	
	<!-- Quiz -->
	
<!-- Footer PHP-->
<?php
	include $path.'assets/includes/footer.php';
?>
