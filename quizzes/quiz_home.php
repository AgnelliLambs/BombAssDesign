<!-- Homepage for quizzes-->

<!-- Header PHP-->
<?php
	$path = '../';
	$title = 'Quizzes';
	$heading = 'Quiz';
	include $path.'assets/includes/header.php';
?>


<div id='content'>
	<h1>Quizzes</h1>
	
	<div class="leftAlign">
	<a href = "quiz1.php"><div class = 'tut'>SSH<p>Test your knowledge in how
				to securely connect to a remote computer. </p></div></a>
	</div>
	<div class="rightAlign">
	<a href = "quiz2.php"><div class = 'tut'>Navigation<p>Test your knowledge in how
				to navigate the linux file system. </p></div></a> 
	</div>
	<div class="leftAlign">
	<a href = "quiz3.php"><div class = 'tut'>Files<p>Test your knowledge in how
		to manipulate files on the computer. </p></div></a>
	</div>
	<div class="rightAlign">
	<a href = "quiz4.php"><div class = 'tut'>SFTP<p>Test your knowledge in how
		to securely connect to a remote server. </p></div></a>
	</div>
	<div class="leftAlign">
	<a href = "quiz5.php"><div class = 'tut'>Permissions<p>Test your knowledge in how
		to view and change file permissions. </p></div></a>
	</div>
	<div class="rightAlign">	
	<a href = "quiz6.php"><div class = 'tut'>Directories<p>Test your knowledge in how
		to manipulate directorie within the file system. </p></div></a> 
	</div>
	<div class="leftAlign">
	<a href = "quiz7.php"><div class = 'tut'>Apache<p>Test your knowledge in how
		to download and install Apache. </p></div></a> 
	</div>
	<div class="rightAlign">
	<a href = "quiz8.php"><div class = 'tut'>Text Editors<p>Test your knowledge in how
		to use the text editors within linux. </p></div></a> 
	</div><!-- End of Align divs -->
	<div class='median'></div>
</div> <!-- end of content -->
<!-- Footer PHP -->
<?php
	include $path.'assets/includes/footer.php';
?>
