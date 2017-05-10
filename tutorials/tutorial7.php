<!-- Tutorial 1 -->
<!-- B.A.D Design -->

<!-- Header PHP-->
<?php
	$path = '../';
	$title = 'Tutorial 7';
	$heading = 'Tutorial';
	include $path.'assets/includes/header.php';
?>
	<div class="tutorial">
		<h1>Apache</h1>
		
		<p>Apache is the server application that we will be using to host our website. Apache is the most popular web server and can run on any operating system. We'll be installing it on a linux server through terminal.</p>
		
		<h2>Download and install Apache</h2>
		
		<p>First we need to update the list of all available programs. Enter The following code:</p>
		
		<p class="code">$ sudo apt-get update</p>
		
		<p>Since we are using "sudo" it will prompt you for your administrative password, enter it and then it will update.</p>
		
		<p>Next we can install the program using this line:</p>
		
		<p class="code">$ sudo apt-get install apache2</p>
		
		<p>Some text will pass through, and then it will ask you if you want to continue. enter "y" to continue and it will install apache.</p>
		
		<h2>Test your first website</h2>
		
		<p>You can test to see if apache is up and running by opening your browser and going to the ip address of your server. It should load up this:</p>
		
		<img src="<?php echo $path;?>assets/imgs/tutorial7/apache_test.JPG" alt="Apache test page">
		
		<h2>Add your own files</h2>
		
		<p>This is where we finally get to publish your website. We're going to go in and put our own website in there instead.</p>
		
		<p>The easiest way to move files is though using <a href="tutorial4.php">SFTP</a> with FileZilla.</p>
		
		<p>You'll want to navigate to "C:/var/www/html", delete "index.html", and then put your site files there. Once your files are there, your server ip address should show your website instead of the test page.</p>
		
		<img src="<?php echo $path;?>assets/imgs/tutorial7/filezilla.PNG" alt="filezilla">
		
		<h2>Configuration settings</h2>
		
		<p>For more advanced users, apace settings can be changed by edditing hte file located at /etc/apache2/apache2.conf. You'll learn how to open and edit that in a text editor in the <a href="tutorial8.php">next tutorial.</a></p>
	
	</div>
	
	<!-- Quiz -->
	
<!-- Footer PHP-->
<?php
	include $path.'assets/includes/footer.php';
?>
