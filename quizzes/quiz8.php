<!-- Quiz 8 -->
<!-- B.A.D. Design -->
<!-- Header -->

<?php
	$path = '../';
	$title = 'Quiz 8';
	$heading = 'Quiz';
	include $path.'assets/includes/header.php';
?>

<!-- Quiz -->
<div class="quiz">
	<h2>Text Editors</h2>
	<!-- Question 1 -->
	<form>
		<h3>QUESTION</h3>
		<div class="question">
			<input type="radio" name="answer1" id="a" value="0">
			<label for="a">ANSWER<label>
			</br>
			<input type="radio" name="answer1" id="b" value="1">
			<label for="b">ANSWER<label>
			<input type="radio" name="answer1" id="c" value="2">
			<label for="c">ANSWER<label>
			</br>
			</br>
		</div>
		<h3>QUESTION</h3>
		<div class="question">
			<input type="radio" name="answer2" id="b" value="0">
			<label for="b">ANSWER<label>
			</br>
			<input type="radio" name="answer2" id="c" value="1">
			<label for="c">ANSWER<label>
			</br>
			<input type="radio" name="answer2" id="d" value="2">
			<label for="d">ANSWER<label>
			</br>
		</div>
		<h3>QUESTION</h3>
		<div class="question">
			<input type="radio" name="answe3" id="" value="0">
			<label for="">ANSWER<label>
			</br>
			<input type="radio" name="answer3" id="" value="1">
			<label for="">ANSWER<label>
			</br>
			<input type="radio" name="answer3" id="" value="2">
			<label for="">ANSWER<label>
			</br>
		</div>
		<h3>QUESTION</h3>
		<div class="question">
			<input type="radio" name="answer4" id="" value="0">
			<label for="">ANSWER<label>
			</br>
			<input type="radio" name="answer4" id="" value="1">
			<label for="">ANSWER<label>
			</br>
		</div>
		<h3>QUESTION</h3>
		<div class="question">
			<input type="radio" name="answe5" id="" value="0">
			<label for="">ANSWER<label>
			</br>
			<input type="radio" name="answer5" id="" value="1">
			<label for="">ANSWER<label>
			</br>
			<input type="radio" name="answer5" id="" value="2">
			<label for="">ANSWER<label>
			</br>
		</div>
		
		<div class="button" onclick="checkQuiz(8)" value="Submit"></div>
	</form>
</div>
<?php
	include $path.'assets/includes/footer.php';
?>
