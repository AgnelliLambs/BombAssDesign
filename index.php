<!-- Header PHP-->
<?php
	$path = '';
	$title = 'YouNix';
	$heading = 'Home';
	include $path.'assets/includes/header.php';
?>

		<h1>Home</h1>
		<a href="tutorials/tutorial_home.php"><div class="homeBox">
		<h1>Tutorials</h1>
		</div></a>
		<a href="quizzes/quizzes_home.php"><div class="homeBox">
		<h1>Quizzes</h1>
		</div></a>
		<a href="glossary.php"><div class="homeBox">
		<h1>Glossary</h1>
		</div></a>

<!-- Footer PHP -->
<?php
	include $path.'assets/includes/footer.php';
?>

</html>