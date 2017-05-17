<!-- Quiz 5 -->
<!-- B.A.D. Design -->
<!-- Header -->
<?php
	$path = '../';
	$title = 'Quiz 5';
	$heading = 'Quiz';
	include $path.'assets/includes/header.php';
?>
	<!-- Quiz -->
	<div class="quiz">
		<h2>File Permissions</h2>
		<!-- Question 1 -->
		<form>
			<h3>Which command will change a file so it can be read by everyone</h3>
			<div class="question">
				<input type="radio" name="answer1" id="a" value="0">
				<label for="a">chmod u+r file</label>
				<br>
				<input type="radio" name="answer1" id="b" value="1">
				<label for="b">chmod a+r file</label>
				<br>
				<input type="radio" name="answer1" id="c" value="2">
				<label for="c">chmod a+w file</label>
				<br> </div>
			<!-- Question 2 -->
			<h3>Which permission set is typical for any folder</h3>
			<div class="question">
				<input type="radio" name="answer2" id="d" value="0">
				<label for="d">-rwxrwxrwx</label>
				<br>
				<input type="radio" name="answer2" id="e" value="1">
				<label for="e">drw--wx---</label>
				<br>
				<input type="radio" name="answer2" id="f" value="2">
				<label for="f">drwxr-xr-x</label>
				<br> </div>
			<!-- Question 3 -->
			<h3>What command will give execute permission to everyone for meeting?</h3>
			<div class="question">
				<input type="radio" name="answer3" id="g" value="0">
				<label for="g">chmod a+r meeting</label>
				<br>
				<input type="radio" name="answer3" id="h" value="1">
				<label for="h">chmod a+x meeting</label>
				<br>
				<input type="radio" name="answer3" id="i" value="2">
				<label for="i">chmod uo+x meeting</label>
				<br> </div>
			<!-- Question 4 -->
			<h3>Your file is not able to be run, what are the permissions set to?</h3>
			<div class="question">
				<input type="radio" name="answer4" id="j" value="0">
				<label for="j">drw-r--r--</label>
				<br>
				<input type="radio" name="answer4" id="k" value="1">
				<label for="k">-rw-r--r--</label>
				<br>
				<input type="radio" name="answer4" id="l" value="2">
				<label for="l">-r-xrwxrwx</label>
				<br> </div>
			<!-- Question 5 -->
			<h3>What permission numbers would allow the owner to read, write, and execute;
			group to read, write, and execute; and any user to execute?</h3>
			<div class="question">
				<input type="radio" name="answer5" id="m" value="0">
				<label for="m">777</label>
				<br>
				<input type="radio" name="answer5" id="n" value="1">
				<label for="n">141</label>
				<br>
				<input type="radio" name="answer5" id="o" value="2">
				<label for="o">771</label>
				<br> </div>
			<div class="buttonHolder"><input type="button" onclick="checkQuiz(5)" value="Submit"></div> </form>
	</div>

	<!--<div class="row centered">
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
				<a id='quizLink' href="<?php echo $path;?>quizzes/quiz4.php">Previous Quiz</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
			<a id='quizLink' href="<?php echo $path;?>tutorials/tutorial5.php">Go to Tutorial</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
				<a id='quizLink' href="<?php echo $path;?>quizzes/quiz6.php">Next Quiz</a>
			</div></div>
</div>--></div>
	<?php
	include $path.'assets/includes/footer.php';
?>
