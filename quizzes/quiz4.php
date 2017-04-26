<?php
	$path='../';
	$title='Quiz 4';
	$heading='Quiz';
	include $path.'assets/includes/header.php';
?>
	<div class="quiz">
		<h1>SFTP Quiz</h1>
		<div class="question1">
			<h3 class="question">Question 1: Which side of the FileZilla application shows files on your computer?</h3>
			<form action"">
				<input type="radio" name="answer1" value="0">left</input> <!-- Correct answer -->
				<input type="radio" name="answer1" value="1">right</input>
		</div>
		<div class="question2">
			<h3 class="question">Question 2: What does SFTP stand for?</h3>
			<input type="radio" name="answer2" value="0">Separate File Transferring Protocol</input>
			<input type="radio" name="answer2" value="1">Secret File Transmission Protocol </input>
			<input type="radio" name="answer2" value="2">Secure File Transfer Protocol</input> <!-- Correct answer -->
			<input type="radio" name="answer2" value="3">Secure File Transmission Protocol</input>
		</div>
		<div class="question3">
		<h3 class="question">Question 3: What is the port number for SFTP?</h3>
			<input type="radio" name="answer3" value="0">20</input>
			<input type="radio" name="answer3" value="1">21</input>
			<input type="radio" name="answer3" value="2">22</input> <!-- Correct answer -->
			<input type="radio" name="answer3" value="3">23</input>
		</div>
		<div class="question4">
		<h3 class="question">Question 4: Which side of the FileZilla application shows files on the host?</h3>

			<input type="radio" name="answer4" value="0">left</input>
			<input type="radio" name="answer4" value="1">right</input><!-- Correct answer -->
		</div>
		<div class="question5">
		<h3 class="question">Question 5: Which of the selections below do you NOT need to know in order to
			connect to a file with SFTP?</h3>
			<input type="radio" name="answer5" value="0">Host name</input> 
			<input type="radio" name="answer5" value="1">Port</input>
			<input type="radio" name="answer5" value="2">Password</input>
			<input type="radio" name="answer5" value="3">Username</input>
			<input type="radio" name="answer5" value="4">IP Address</input> <!-- Correct answer -->
		</div>
			<button onclick="checkQuiz(4)">Submit</button>
		</form>
	</div>
<?php
	$path='../';
	$title='Quiz 4';
	include $path.'assets/includes/footer.php';
?>
