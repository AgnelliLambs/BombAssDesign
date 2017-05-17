<!-- Homepage for tutorials-->

<!-- Header PHP-->
<?php
	$path = '../';
	$title = 'Tutorials';
	$heading = 'Tutorial';
	include $path.'assets/includes/header.php';
?>

<div id='content'><!-- Holds the two tutorial columns -->
	<h1>Tutorials</h1>
	<div class="leftAlign">
	<a href = "tutorial1.php"><div class = 'tut'>SSH<p>In this tutorial you will learn how
				to securely connect to a remote computer. </p></div></a>
	</div>
	<div class="rightAlign">
	<a href = "tutorial2.php"><div class = 'tut'>Navigation<p>In this tutorial you will learn how
				to navigate the linux file system. </p></div></a> 
	</div>
	<div class="leftAlign">
	<a href = "tutorial3.php"><div class = 'tut'>Files<p>In this tutorial you will learn how
				to manipulate files on the computer. </p></div></a>
	</div>
	<div class="rightAlign">
	<a href = "tutorial4.php"><div class = 'tut'>SFTP<p>In this tutorial you will learn how
				to securely connect to a remote server. </p></div></a>
	</div>
	<div class="leftAlign">
	<a href = "tutorial5.php"><div class = 'tut'>Permissions<p>In this tutorial you will learn how
				to view and change file permissions. </p></div></a>
	</div>
	<div class="rightAlign">	
	<a href = "tutorial6.php"><div class = 'tut'>Directories<p>In this tutorial you will learn how
				to manipulate directorie within the file system. </p></div></a> 
	</div>
	<div class="leftAlign">
	<a href = "tutorial7.php"><div class = 'tut'>Apache<p>In this tutorial you will learn how
				to download and install Apache. </p></div></a> 
	</div>
	<div class="rightAlign">
	<a href = "tutorial8.php"><div class = 'tut'>Text Editors<p>In this tutorial you will learn how
				to use the text editors within linux. </p></div></a> 
	</div><!-- End of Align divs -->
</div> <!-- end of content -->
	<div class='median'></div>
<!-- Footer PHP -->
<?php
	include $path.'assets/includes/footer.php';
?>
