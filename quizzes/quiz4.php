<!-- Quiz 4 -->
<!-- B.A.D Design -->
<!-- Header PHP-->
<?php
	$path='../';
	$title='Quiz 4';
	$heading='Quiz';
	include $path.'assets/includes/header.php';
?>
	<div class="quiz">
		<h2>SFTP</h2>
		<form>
			<h3>Which side of the FileZilla application shows files on your computer?</h3>
			<div class="question">
				<input type="radio" name="answer1" id="a" value="0">
				<label for="a">left</label>
				<br>
				<input type="radio" name="answer1" id="b" value="1">
				<label for="b">right</label>
				<br> </div>
			<h3>What does SFTP stand for?</h3>
			<div class="question">
				<input type="radio" name="answer2" id="c" value="0">
				<label for="c">Separate File Transferring Protocol</label>
				<br>
				<input type="radio" name="answer2" id="d" value="1">
				<label for="d">Secret File Transmission Protocol</label>
				<br>
				<input type="radio" name="answer2" id="e" value="2">
				<label for="e">Secure File Transfer Protocol</label>
				<br>
				<input type="radio" name="answer2" id="f" value="3">
				<label for="f">Secure File Transmission Protocol</label>
				<br> </div>
			<h3>What is the port number for SFTP?</h3>
			<div class="question">
				<input type="radio" name="answer3" id="g" value="0">
				<label for="g">20</label>
				<br>
				<input type="radio" name="answer3" id="h" value="1">
				<label for="h">21</label>
				<br>
				<input type="radio" name="answer3" id="i" value="2">
				<label for="i">22</label>
				<br>
				<input type="radio" name="answer3" id="j" value="3">
				<label for="j">23</label>
				<br> </div>
			<h3>Which side of the FileZilla application shows files on the host?</h3>
			<div class="question">
				<input type="radio" name="answer4" id="k" value="0">
				<label for="k">left</label>
				<br>
				<input type="radio" name="answer4" id="l" value="1">
				<label for="l">right</label>
				<br> </div>
			<h3>Which of the selections below do you NOT need to know in order to connect to a file with SFTP?</h3>
			<div class="question">
				<input type="radio" name="answer5" id="m" value="0">
				<label for="m">Host name</label>
				<br>
				<input type="radio" name="answer5" id="n" value="1">
				<label for="n">Port</label>
				<br>
				<input type="radio" name="answer5" id="o" value="2">
				<label for="o">Password</label>
				<br>
				<input type="radio" name="answer5" id="p" value="3">
				<label for="p">Username</label>
				<br>
				<input type="radio" name="answer5" id="q" value="4">
				<label for="q">IP Address</label>
				<br> </div>
			<div class="buttonHolder">
				<input type="button" onclick="checkQuiz(4)" value="Submit"> </div>
		</form>
	</div>
	<!-- Footer PHP -->
	<?php
	include $path.'assets/includes/footer.php';
?>