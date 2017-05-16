<!-- Quiz 5 -->
<!-- B.A.D. Design -->
<!-- Header -->
<?php
	$path = '../';
	$title = 'Quiz 1';
	$heading = 'Quiz';
	include $path.'assets/includes/header.php';
?>
	<!-- Quiz -->
	<div class="quiz">
		<h2>SSH</h2>
		<!-- Question 1 -->
		<form>
			<h3>Which program on Windows allows you to SSH?</h3>
			<div class="question">
				<input type="radio" name="answer1" id="a" value="0">
				<label for="a">Terminal</label>
				<br>
				<input type="radio" name="answer1" id="b" value="1">
				<label for="b">PuTTY</label>
				<br>
				<input type="radio" name="answer1" id="c" value="2">
				<label for="c">SSHer</label>
				<br> </div>
			<!-- Question 2 -->
			<h3>What does SSH Stand for?</h3>
			<div class="question">
				<input type="radio" name="answer2" id="d" value="0">
				<label for="d">Secure Site Program</label>
				<br>
				<input type="radio" name="answer2" id="e" value="1">
				<label for="e">Saftey Shell Protocol</label>
				<br>
				<input type="radio" name="answer2" id="f" value="2">
				<label for="f">Secure Shell Protocol</label>
				<br> </div>
			<!-- Question 3 -->
			<h3>What command will connect to the server over SSH?</h3>
			<div class="question">
				<input type="radio" name="answer3" id="g" value="0">
				<label for="g">USERNAME@HOSTNAME</label>
				<br>
				<input type="radio" name="answer3" id="h" value="1">
				<label for="h">HOSTNAME@USERNAME</label>
				<br>
				<input type="radio" name="answer3" id="i" value="2">
				<label for="i">USERNAME/HOSTNAME</label>
				<br> </div>
			<!-- Question 4 -->
			<h3>What port does SSH use?</h3>
			<div class="question">
				<input type="radio" name="answer4" id="j" value="0">
				<label for="j">21</label>
				<br>
				<input type="radio" name="answer4" id="k" value="1">
				<label for="k">22</label>
				<br>
				<input type="radio" name="answer4" id="l" value="2">
				<label for="l">23</label>
				<br> </div>
			<!-- Question 5 -->
			<h3>What program on Mac or Linux allows you to SSH?</h3>
			<div class="question">
				<input type="radio" name="answer5" id="m" value="0">
				<label for="m">Terminal</label>
				<br>
				<input type="radio" name="answer5" id="n" value="1">
				<label for="n">PuTTY</label>
				<br>
				<input type="radio" name="answer5" id="o" value="2">
				<label for="o">SSHer</label>
				<br> </div>
			<div class="buttonHolder"><input type="button" onclick="checkQuiz(1)" value="Submit"></div> </form>
	</div>
<div class="row">
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
				<a id='quizLink' href="<?php echo $path;?>tutorials/tutorial_home.php">Tutorial Home</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
			<a id='quizLink' href="<?php echo $path;?>tutorial/tutorial1.php"></a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
				<a id='quizLink' href="<?php echo $path;?>quizzes/quiz2.php">Next Quiz</a>
			</div></div>
</div>
	<?php
	include $path.'assets/includes/footer.php';
?>
