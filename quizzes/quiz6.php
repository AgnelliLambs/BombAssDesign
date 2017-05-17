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
	<h2>Directories</h2>
	<form>

	<h3>Question 1: Which choice is the correct way to create a directory?</h3>
	<div class ="question">
	
	<input type='radio' name='answer1' id='a' value='0'>
	<label for="a">create directory1</label>
	<br/>
	<input type='radio' name='answer1' id='b' value='1'>
	<label for="b">mkdir directory1</label>
	 <br/>
	<input type='radio' name='answer1' id='c' value='2'>
	<label for="c">vi directory1</label>
	<br/>
</div>


	<h3>Which choice is the correct way to delete a directory?</h3>
	<div class ="question">
	<input type='radio' name='answer2' id='d' value='0'>
	<label for="d">rm directory1</label>
	<br/>
	<input type='radio' name='answer2' id='e' value='1'>
	<label for="e">rmdir directory1</label>
	<br/>
	<input type='radio' name='answer2' id='f' value='2'>
	<label for="f">delete directory1</label>
	<br/>
</div>

	<h3>Which choice is the correct way to rename a directory?</h3>
	<div class ="question">
	<input type='radio' name='answer3' id='g' value='0'>
	<label for="g">mv directory1 directory2</label>
	<br/>
	<input type='radio' name='answer3' id='h' value='1'>
	<label for="h">rn directory1 directory2</label>
	<br/>
	<input type='radio' name='answer3' id='i' value='2'>
	<label for="i">rename directory1 directory2</label>
	<br/>
</div>

	<h3>Which choice is the correct way move to a directory?</h3>
	<div class ="question">
	<input type='radio' name='answer4' id='j' value='0'>
	<label for="j">vi directory1 directory2 newDestination</label>
	<br/>
	<input type='radio' name='answer4' id='k' value='1'>
	<label for="k">mv directory1 directory2 newDestination</label>
	<br/>
	<input type='radio' name='answer4' id='l' value='2'>
	<label for="l">move directory1 directory2 newDestination</label>
	<br/>
</div>

	<h3>Which choice is the correct way to copy a directory?</h3>
	<div class ="question">
	<input type='radio' name='answer5' id='m' value='0'>
	<label for="m">cp directory1 directory2</label>
	<br/>
	<input type='radio' name='answer5' id='n' value='1'>
	<label for="n">copy directory1 directory2</label>
	<br/>
	<input type='radio' name='answer5' id='o' value='2'>
	<label for="o">vi directory1 directory2</label>
	<br/>
</div>
		<div class="buttonHolder"><input type="button" onclick="checkQuiz(6)" value="Submit"></div>
	</form>

<!--<div class="row">
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
				<a id='quizLink' href="<?php echo $path;?>quizzes/quiz5.php">Previous Quiz</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
			<a id='quizLink' href="<?php echo $path;?>tutorials/tutorial6.php">Go to Tutorial</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
				<a id='quizLink' href="<?php echo $path;?>quizzes/quiz7.php">Next Quiz</a>
			</div></div>
</div>--></div>

<!-- Footer PHP-->
<?php
	$path = '../';
	$title = 'Quiz 6';
	include $path.'assets/includes/footer.php';
?>
