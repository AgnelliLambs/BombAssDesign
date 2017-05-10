<!-- Quiz 6 -->
<!-- B.A.D Design -->


<!-- Header PHP-->

<?php
	$path = '../';
	$title = 'Quiz 6';
	include $path.'assets/includes/header.php';
?>
		<!-- Quiz -->
<div class="quiz">
	<h2>Directories Quiz</h2>
	<form>

	<h3>Question 1: Which choice is the correct way to create a directory?</h3>
	<div class ="question">
	
	<input type='radio' name='answer1' id='a' value='1'>
	<label for="a">create directory1</label>
	<br/>
	<input type='radio' name='answer1' id='b' value='2'>
	<label for="b">mkdir directory1</label>
	 <br/>
	<input type='radio' name='answer1' id='c' value='3'>
	<label for="c">vi directory1</label>
	<br/>
</div>


	<h3>Which choice is the correct way to delete a directory?</h3>
	<div class ="question">
	<input type='radio' name='answer2' id='d' value='1'>
	<label for="d">rm directory1</label>
	<br/>
	<input type='radio' name='answer2' id='e' value='2'>
	<label for="e">rmdir directory1</label>
	<br/>
	<input type='radio' name='answer2' id='f' value='3'>
	<label for="f">delete directory1</label>
	<br/>
</div>

	<h3>Which choice is the correct way to rename a directory?</h3>
	<div class ="question">
	<input type='radio' name='answer3' id='g' value='1'>
	<label for="g">mv directory1 directory2</label>
	<br/>
	<input type='radio' name='answer3' id='h' value='2'>
	<label for="h">rn directory1 directory2</label>
	<br/>
	<input type='radio' name='answer3' id='i' value='3'>
	<label for="i">rename directory1 directory2</label>
	<br/>
</div>

<div class = 'question4'>
	<h3>Which choice is the correct way move to a directory?</h3>
	<div class ="question">
	<input type='radio' name='answer4' id='j' value='1'>
	<label for="j">vi directory1 directory2 newDestination</label>
	<br/>
	<input type='radio' name='answer4' id='k' value='2'>
	<label for="k">mv directory1 directory2 newDestination</label>
	<br/>
	<input type='radio' name='answer4' id='l' value='3'>
	<label for="l">move directory1 directory2 newDestination</label>
	<br/>
</div>

<div class = 'question5'>
	<h3>Which choice is the correct way to copy a directory?</h3>
	<div class ="question">
	<input type='radio' name='answer5' id='m' value='1'>
	<label for="m">cp directory1 directory2</label>
	<br/>
	<input type='radio' name='answer5' id='n' value='2'>
	<label for="n">copy directory1 directory2</label>
	<br/>
	<input type='radio' name='answer5' id='o' value='3'>
	<label for="o">vi directory1 directory2</label>
	<br/>
</div>
	<input type="button" onclick="checkQuiz(6)" value="Submit"
	</form>
</div>
<!-- Footer PHP-->
<?php
	$path = '../';
	$title = 'Quiz 6';
	include $path.'assets/includes/footer.php';
?>
