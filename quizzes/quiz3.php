<!-- Quiz 3 -->
<!-- B.A.D Design -->


<!-- Header PHP-->

<?php
	$path = '../';
	$title = 'Quiz 3';
	$heading = 'Quiz';
	include $path.'assets/includes/header.php';
?>
	<!-- Quiz -->
	<h2>Files</h2>
	
		<form>
			<!-- Question 1 -->
			<h3 class ="question">Question 1: Which choice is the correct way to create a file?</h3>
			<select id="3.1">
				<option>create file1</option>
				<option>mkdir file1</option>
				<option>vi file1</option>
			</select>
		
			<!-- Question 2 -->
			<h3 class ="question">Which choice is the correct way to delete a file?</h3>
			<select id="3.2">
				<option>rm file1</option>
				<option>rmdir file1</option>
				<option>delete file1</option>
			</select>
			
			<!-- Question 3 -->
			<h3 class ="question">Which choice is the correct way to rename a file?</h3>
			<select id="3.3">
				<option>mv file1 file2</option>
				<option>rn file1 file 2</option>
				<option>rename file1 file2</option>
			</select>
		
			
			<!-- Question 4 -->
			<h3 class ="question">Which choice is the correct way move to a file?</h3>
			<select id="3.4">
				<option>vi file1 file2 newDestination</option>
				<option>mv file1 file2 newDestination</option>
				<option>move file1 file2 newDestination</option>
			</select>
			
			<!-- Question 5 -->
			<h3 class ="question">Which choice is the correct way to copy a file?</h3>
			<select id="3.5">
				<option>cp file1 file2</option>
				<option>copy file1 file2</option>
				<option>vi file1 file2</option>
			</select>
			
			<button onclick="checkQuiz(x)">SUBMit</button>
		
		</form>
	<div class = 'question1'>
	<p>This is a question?</p>
	<input type='radio' name='answer1' value='1'>Answer1</input>
	<input type='radio' name='answer1' value='2'>Answer1</input>
	<input type='radio' name='answer1' value='3'>Answer1</input>
	<input type='radio' name='answer1' value='4'>Answer1</input>
</div>

<div class = 'question2'>
	<p>This is a question?</p>
	<input type='radio' name='answer2' value='1'>Answer1</input>
	<input type='radio' name='answer2' value='2'>Answer1</input>
	<input type='radio' name='answer2' value='3'>Answer1</input>
	<input type='radio' name='answer2' value='4'>Answer1</input>
</div>

<div class = 'question3'>
	<p>This is a question?</p>
	<input type='radio' name='answer3' value='1'>Answer1</input>
	<input type='radio' name='answer3' value='2'>Answer1</input>
	<input type='radio' name='answer3' value='3'>Answer1</input>
	<input type='radio' name='answer3' value='4'>Answer1</input>
</div>
<button onclick="checkQuiz(x)">SUBMit</button>
<!-- Footer PHP-->
<?php
	$path = '../';
	$title = 'Quiz 3';
	include $path.'assets/includes/footer.php';
?>
