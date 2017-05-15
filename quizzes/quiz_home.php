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
	
	<div class="lefttAlign">
	<a href = "quiz1.php"><div class = 'tut'>SSH<p>In this tutorial you will learn how
		to ... </p></div></a>
	</div>
	<div class="rightAlign">
	<a href = "quiz2.php"><div class = 'tut'>Navigation<p>In this tutorial you will learn how
		to ... </p></div></a> 
	</div>
	<div class="leftAlign">
	<a href = "quiz3.php"><div class = 'tut'>Files<p>In this tutorial you will learn how
		to ... </p></div></a>
	</div>
	<div class="rightAlign">
	<a href = "quiz4.php"><div class = 'tut'>SFTP<p>In this tutorial you will learn how
		to ... </p></div></a>
	</div>
	<div class="leftAlign">
	<a href = "quiz5.php"><div class = 'tut'>Permissions<p>In this tutorial you will learn how
		to ... </p></div></a>
	</div>
	<div class="rightAlign">	
	<a href = "quiz6.php"><div class = 'tut'>Directories<p>In this tutorial you will learn how
		to ... </p></div></a> 
	</div>
	<div class="leftAlign">
	<a href = "quiz7.php"><div class = 'tut'>Apache<p>In this tutorial you will learn how
		to ... </p></div></a> 
	</div>
	<div class="rightAlign">
	<a href = "quiz8.php"><div class = 'tut'>Text Editors<p>In this tutorial you will learn how
		to ... </p></div></a> 
	</div><!-- End of Align divs -->
	<div class='median'></div>
</div> <!-- end of content -->
<!-- Footer PHP -->
<?php
	include $path.'assets/includes/footer.php';
?>
