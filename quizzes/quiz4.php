<?php
	$path='../';
	$title='Quiz 4';
	$heading='Quiz';
	include $path.'assets/includes/header.php';
?>
	<div class="quiz">
		<h1>SFTP Quiz</h1>
		<form>
			<h3>Question 1: </h3>
			<select id="4.1">
				<option> </option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
			
			<h3>Question 2: </h3>
			<select id="4.2">
				<option> </option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
			
			<h3>Question 3: </h3>
			<select id="4.3">
				<option> </option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
			
			<h3>Question 4: </h3>
			<select id="4.4">
				<option> </option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
			
			<h3>Question 5: </h3>
			<select id="4.5">
				<option> </option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
		</form>
	</div>
<?php
	$path='../';
	$title='Quiz 4';
	include $path.'assets/includes/footer.php';
?>