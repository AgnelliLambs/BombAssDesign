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
	<a href = "quiz1.php"><div class = 'tut'><h3>SSH</h3><p>In this tutorial you will learn how
		to ... </p></div></a>
	</div>
	<div class="rightAlign">
	<a href = "quiz2.php"><div class = 'tut'><h3>Navigation</h3><p>In this tutorial you will learn how
		to ... </p></div></a> 
	</div>
	<div class="leftAlign">
	<a href = "quiz3.php"><div class = 'tut'><h3>Files</h3><p>In this tutorial you will learn how
		to ... </p></div></a>
	</div>
	<div class="rightAlign">
	<a href = "quiz4.php"><div class = 'tut'><h3>SFTP</h3><p>In this tutorial you will learn how
		to ... </p></div></a>
	</div>
	<div class="leftAlign">
	<a href = "quiz5.php"><div class = 'tut'><h3>Permissions</h3><p>In this tutorial you will learn how
		to ... </p></div></a>
	</div>
	<div class="rightAlign">	
	<a href = "quiz6.php"><div class = 'tut'><h3>Directories</h3><p>In this tutorial you will learn how
		to ... </p></div></a> 
	</div>
	<div class="leftAlign">
	<a href = "quiz7.php"><div class = 'tut'><h3>Apache</h3><p>In this tutorial you will learn how
		to ... </p></div></a> 
	</div>
	<div class="rightAlign">
	<a href = "quiz8.php"><div class = 'tut'><h3>Text Editors</h3><p>In this tutorial you will learn how
		to ... </p></div></a> 
	</div><!-- End of Align divs -->
	<div class='median'></div>
</div> <!-- end of content -->
<!-- Footer PHP -->
<?php
	include $path.'assets/includes/footer.php';
?>
