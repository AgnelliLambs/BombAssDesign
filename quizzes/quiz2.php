<!-- Quiz 2 -->
<!-- B.A.D Design -->


<!-- Header PHP-->

<?php
	$path = '../';
	$title = 'Quiz 2';
	$heading = 'Quiz';
	include $path.'assets/includes/header.php';
?>
		<!-- Quiz -->
<div class="quiz">
	<h2>Navigation</h2>
	<form>

	<h3>In UNIX, how do you find your current directory?</h3>
	<div class ="question">
	
	<input type='radio' name='answer1' id='a' value='0'>
	<label for="a">pwd</label>
	<br/>
	<input type='radio' name='answer1' id='b' value='1'>
	<label for="b">print</label>
	 <br/>
	<input type='radio' name='answer1' id='c' value='2'>
	<label for="c">whereami</label>
	<br/>
</div>


	<h3>How do you list the files in your directory, using UNIX?</h3>
	<div class ="question">
	<input type='radio' name='answer2' id='d' value='0'>
	<label for="d">dir</label>
	<br/>
	<input type='radio' name='answer2' id='e' value='1'>
	<label for="e">ls</label>
	<br/>
	<input type='radio' name='answer2' id='f' value='2'>
	<label for="f">listfiles</label>
	<br/>
</div>

	<h3>How would you go up one directory?</h3>
	<div class ="question">
	<input type='radio' name='answer3' id='g' value='0'>
	<label for="g">cd up</label>
	<br/>
	<input type='radio' name='answer3' id='h' value='1'>
	<label for="h">cd ./</label>
	<br/>
	<input type='radio' name='answer3' id='i' value='2'>
	<label for="i">cd ../</label>
	<br/>
</div>

	<h3>How would you quickly navigate to the home directory?</h3>
	<div class ="question">
	<input type='radio' name='answer4' id='j' value='0'>
	<label for="j">cd /</label>
	<br/>
	<input type='radio' name='answer4' id='k' value='1'>
	<label for="k">cd .</label>
	<br/>
	<input type='radio' name='answer4' id='l' value='2'>
	<label for="l">cd home</label>
	<br/>
</div>

	<h3>How could you enter a subdirectory?</h3>
	<div class ="question">
	<input type='radio' name='answer5' id='m' value='0'>
	<label for="m">cd <i>directory name</i></label>
	<br/>
	<input type='radio' name='answer5' id='n' value='1'>
	<label for="n">goto child</label>
	<br/>
	<input type='radio' name='answer5' id='o' value='2'>
	<label for="o">Impossibe, you can't</label>
	<br/>
</div>
		<div class="buttonHolder"><input type="button" onclick="checkQuiz(2)" value="Submit"></div></div>
	</form>

<div class="row">
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
				<a id='quizLink' href="<?php echo $path;?>quizzes/quiz1.php">Previous Quiz</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
			<a id='quizLink' href="<?php echo $path;?>tutorial/tutorial2.php">Go to Tutorial</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
				<a id='quizLink' href="<?php echo $path;?>quizzes/quiz3.php">Next Quiz</a>
			</div></div>
</div>
<!-- Footer PHP-->
<?php
	include $path.'assets/includes/footer.php';
?>
