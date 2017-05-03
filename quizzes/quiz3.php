<!-- Quiz 3 -->
<!-- B.A.D Design -->


<!-- Header PHP-->

<?php
	$path = '../';
	$title = 'Quiz 3';
	include $path.'assets/includes/header.php';
?>
	<!-- Quiz -->
	<h2>Files Quiz</h2>
	<form>
	
<div class = 'question1'>
	<p>Question 1: Which choice is the correct way to create a file?</p>
	<input type='radio' name='answer1' value='1'>create file1</input>
	<input type='radio' name='answer1' value='2'>mkdir file1</input>
	<input type='radio' name='answer1' value='3'>vi file1</input>
</div>

<div class = 'question2'>
	<p>Which choice is the correct way to delete a file?</p>
	<input type='radio' name='answer2' value='1'>rm file1</input>
	<input type='radio' name='answer2' value='2'>rmdir file1</input>
	<input type='radio' name='answer2' value='3'>delete file1</input>
</div>

<div class = 'question3'>
	<p>Which choice is the correct way to rename a file?</p>
	<input type='radio' name='answer3' value='1'>mv file1 file2</input>
	<input type='radio' name='answer3' value='2'>rn file1 file 2</input>
	<input type='radio' name='answer3' value='3'>rename file1 file2</input>
</div>

<div class = 'question4'>
	<p>Which choice is the correct way move to a file?</p>
	<input type='radio' name='answer4' value='1'>vi file1 file2 newDestination</input>
	<input type='radio' name='answer4' value='2'>mv file1 file2 newDestination</input>
	<input type='radio' name='answer4' value='3'>move file1 file2 newDestination</input>
</div>

<div class = 'question5'>
	<p>Which choice is the correct way to copy a file?</p>
	<input type='radio' name='answer5' value='1'>cp file1 file2</input>
	<input type='radio' name='answer5' value='2'>copy file1 file2</input>
	<input type='radio' name='answer5' value='3'>vi file1 file2</input>
</div>
<button onclick="checkQuiz(x)">SUBMIT</button>
	
<!-- Footer PHP-->
<?php
	$path = '../';
	$title = 'Quiz 3';
	include $path.'assets/includes/footer.php';
?>
