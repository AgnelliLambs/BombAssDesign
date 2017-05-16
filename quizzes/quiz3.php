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
	<div class="quiz">
		<h2>Files</h2>
		<form>
			
				<h3>Which choice is the correct way to create a file?</h3>
				<div class="question">
					<input type='radio' name='answer1' id="a" value='0'>
					<label for="a">create file1</label>
					<br/>
					<input type='radio' name='answer1' id="b" value='1'>
					<label for="b">mkdir file1</label>
					<br/>
					<input type='radio' name='answer1' id="c" value='2'>
					<label for="c">vi file1</label>
					<br/> 
				</div>
			
			
					<h3>Which choice is the correct way to delete a file?</h3>
					<div class="question">
					<input type='radio' name='answer2' id="d" value='0'>
					<label for="d">rm file1</label>
					<br/>
					<input type='radio' name='answer2' id="e" value='1'>
					<label for="e">rmdir file1</label>
					<br/>
					<input type='radio' name='answer2' id="f" value='2'>
					<label for="f">delete file1</label>
					<br/> 
			</div>
			
				<h3>Which choice is the correct way to rename a file?</h3>
				<div class="question">
					<input type='radio' name='answer3' id="g" value='0'>
					<label for="g">mv file1 file2</label>
					<br/>
					<input type='radio' name='answer3' id="h" value='1'>
					<label for="h">rn file1 file 2</label>
					<br/>
					<input type='radio' name='answer3' id="i" value='2'>
					<label for="i">rename file1 file2</label>
					<br/> 
			</div>
			
				<h3>Which choice is the correct way move to a file?</h3>
				<div class="question">
					<input type='radio' name='answer4' id="j" value='0'>
					<label for="j">vi file1 file2 newDestination</label>
					<br/>
					<input type='radio' name='answer4' id="k" value='1'>
					<label for="k">mv file1 file2 newDestination</label>
					<br/>
					<input type='radio' name='answer4' id="l" value='2'>
					<label for="l">move file1 file2 newDestination</label>
					<br/> 
			</div>
			
				<h3>Which choice is the correct way to copy a file?</h3>
				<div class="question">
					<input type='radio' name='answer5' id="m" value='0'>
					<label for="m">cp file1 file2</label>
					<br/>
					<input type='radio' name='answer5' id="n" value='1'>
					<label for="n">copy file1 file2</label>
					<br/>
					<input type='radio' name='answer5' id="o" value='2'>
					<label for="o">vi file1 file2</label>
					<br/> 
			</div>
			<div class="buttonHolder"><input type="button" onclick="checkQuiz(3)" value="Submit"></div></form>
	
		<div class="row">
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
				<a id='quizLink' href="<?php echo $path;?>quizzes/quiz2.php">Previous Quiz</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
			<a id='quizLink' href="<?php echo $path;?>tutorial/tutorial3.php"></a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
				<a id='quizLink' href="<?php echo $path;?>quizzes/quiz4.php">Next Quiz</a>
			</div></div>
</div>
	<!-- Footer PHP-->
	<?php
	include $path.'assets/includes/footer.php';
?>
