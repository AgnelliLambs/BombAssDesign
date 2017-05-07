<!-- Header PHP-->
<?php
	$path = '../';
	$title = 'Tutorial 2';
	$heading = 'Tutorial';
	include $path.'assets/includes/header.php';
?>
	<div class="tutorial">
		<h1>Navigating Terminal</h1>
		<p>Navigating through files in UNIX is one of the most common things you will ever do. There are only a few simple commands you'll need to remember: ls, cd, and pwd.</p>
		<p>The first thing you need to do is open Terminal, or another application that will let you enter UNIX commands.</p>
		
		<img src="<?php echo $path;?>assets/imgs/tutorial1/Mac_Terminal.png" alt="Mac terminal">
		
		<h2>Where are you?</h2>
		
		<p>We'll start with pwd: pwd stands for <u>P</u>rint <u>W</u>orking <u>D</u>irectory. This will display the path from the ROOT directory (usually C:\) to wherever you are now. Entering the pwd command should look something like this:</p>
		<p class="code">$ pwd
			<br>/Users/Username</p>
		<p>Remember, if you are ever unsure where you are, just type pwd and you can find your location.</p>
		
		<h2>Where can you go?</h2>
		
		<p>To list the files and directories that are in your current directory just type the command ls and your terminal will display all of the files in your current directory.</p>
		<p class="code">$ ls
			<br> bin dev home tmp var root sys usr</p>
		
		<h2>How to move</h2>
		
		<p>The cd command, which stands for change directory, allows you to move up and down through files in Unix. To start, lets go all the way back to our root directory, to do this type "cd /".</p>
		<p class="code">$ cd /
			<br />C:/</p>
		<p>The cd part of the statement tells Unix to change our directory, the slash tells it which directo to go to, '/' is always your root directory.</p>
		<p>Now lets go down, if you type cd, followed by the name of a directory, you will move into that directory. Use ls to see which directories are available from your location and use cd <i>filename</i> to move into one of them.</p>
		<p class="code">$ cd Users
			<br />C:/Users</p>
		<p>To go up one level, you type "cd ../". The "../" goes up one level.</p>
		<p>If you wanted, you could even combine multiple directories together, each seperated by a slash, to traverse through them all in one command. For instance: if your desktop has two directories, one called myDir and one called myOtherDir, then to navigate from the first to the second you could use either the commamd.</p>
				<p class="code">$ cd ../myOtherDir
					<br />C:/Users/YouNix/desktop/myOtherDir</p>
				<p>or you could do it on two lines by writing</p>
				<p class="code">$ cd ../
					<br>C:/Users/YouNix/desktop
					<br>$ cd myOtherDir
					<br>C:/Users/YouNix/desktop/myOtherDir</p>
	</div>
	<!-- Quiz -->
	<!-- Footer PHP-->
	<?php
	include $path.'assets/includes/footer.php';
?>