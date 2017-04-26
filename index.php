<!-- Header PHP-->
<?php
	$path = '';
	$title = 'YouNix';
	$heading = 'Home';
	include $path.'assets/includes/header.php';
?>
		<div class="index">
			<h1><span id="iyellow">You</span><span id="ipink">Nix</span></h1>
			<div class="homeBox">
			<a href="tutorials/tutorial_home.php"><h1>Tutorials</h1></a>
			</div>
			<div class="homeBox"><a href="quizzes/quizzes_home.php">
			<h1>Quizzes</h1></a>
			</div>
			<div class="homeBox"><a href="glossary.php">
			<h1>Glossary</h1></a>
			</div>
		</div>

<!-- Footer PHP -->
<?php
	include $path.'assets/includes/footer.php';
?>

</html>