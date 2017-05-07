<!-- Quiz 6 -->
<!-- B.A.D Design -->
<!-- Header PHP-->
<?php
	$path = '../';
	$title = 'Quiz 6';
	$heading = 'Quiz';
	include $path.'assets/includes/header.php';
?>
	<!-- Quiz -->
	<div class="quiz">
		<h2>Directories Quiz</h2>
		<form>
			<div class='question1'>
				<h3>Question 1: Which choice is the correct way to create a directory?</h3>
				<div class="question">
					<input type='radio' name='answer1' value='1'>create directory1
					<br>
					<input type='radio' name='answer1' value='2'>mkdir directory1
					<br>
					<input type='radio' name='answer1' value='3'>vi directory1
					<br> </div>
			</div>
			<div class='question2'>
				<h3>Which choice is the correct way to delete a directory?</h3>
				<div class="question">
					<input type='radio' name='answer2' value='1'>rm directory1
					<br>
					<input type='radio' name='answer2' value='2'>rmdir directory1
					<br>
					<input type='radio' name='answer2' value='3'>delete directory1
					<br> </div>
			</div>
			<div class='question3'>
				<h3>Which choice is the correct way to rename a directory?</h3>
				<div class="question">
					<input type='radio' name='answer3' value='1'>mv directory1 directory2
					<br>
					<input type='radio' name='answer3' value='2'>rn directory1 directory2
					<br>
					<input type='radio' name='answer3' value='3'>rename directory1 directory2
					<br> </div>
			</div>
			<div class='question4'>
				<h3>Which choice is the correct way move to a directory?</h3>
				<div class="question">
					<input type='radio' name='answer4' value='1'>vi directory1 directory2 newDestination
					<br>
					<input type='radio' name='answer4' value='2'>mv directory1 directory2 newDestination
					<br>
					<input type='radio' name='answer4' value='3'>move directory1 directory2 newDestination
					<br> </div>
			</div>
			<div class='question5'>
				<h3>Which choice is the correct way to copy a directory?</h3>
				<div class="question">
					<input type='radio' name='answer5' value='1'>cp directory1 directory2
					<br>
					<input type='radio' name='answer5' value='2'>copy directory1 directory2
					<br>
					<input type='radio' name='answer5' value='3'>vi directory1 directory2
					<br> </div>
				<button onclick="checkQuiz(x)">SUBMIT</button>
			</div>
		</form>
</div>
			<!-- Footer PHP-->
<?php
	include $path.'assets/includes/footer.php';
?>