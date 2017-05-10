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
		<h2>Files Quiz</h2>
		<form>
			
				<h3>Which choice is the correct way to create a file?</h3>
				<div class="question">
					<input type='radio' name='answer1' id="a" value='1'>
					<label for="a">create file1</label>
					<br/>
					<input type='radio' name='answer1' id="b" value='2'>
					<label for="b">mkdir file1</label>
					<br/>
					<input type='radio' name='answer1' id="c" value='3'>
					<label for="c">vi file1</label>
					<br/> 
				</div>
			
			
					<h3>Which choice is the correct way to delete a file?</h3>
					<div class="question">
					<input type='radio' name='answer2' id="d" value='1'>
					<label for="d">rm file1</label>
					<br/>
					<input type='radio' name='answer2' id="e" value='2'>
					<label for="e">rmdir file1</label>
					<br/>
					<input type='radio' name='answer2' id="f" value='3'>
					<label for="f">delete file1</label>
					<br/> 
			</div>
			
				<h3>Which choice is the correct way to rename a file?</h3>
				<div class="question">
					<input type='radio' name='answer3' id="h" value='1'>
					<label for="h">mv file1 file2</label>
					<br/>
					<input type='radio' name='answer3' id="i" value='2'>
					<label for="i">rn file1 file 2</label>
					<br/>
					<input type='radio' name='answer3' id="j" value='3'>
					<label for="j">rename file1 file2</label>
					<br/> 
			</div>
			
				<h3>Which choice is the correct way move to a file?</h3>
				<div class="question">
					<input type='radio' name='answer4' id="h" value='1'>
					<label for="k">vi file1 file2 newDestination</label>
					<br/>
					<input type='radio' name='answer4' id="i" value='2'>
					<label for="l">mv file1 file2 newDestination</label>
					<br/>
					<input type='radio' name='answer4' id="j" value='3'>
					<label for="m">move file1 file2 newDestination</label>
					<br/> 
			</div>
			
				<h3>Which choice is the correct way to copy a file?</h3>
				<div class="question">
					<input type='radio' name='answer5' id="k" value='1'>
					<label for="n">cp file1 file2</label>
					<br/>
					<input type='radio' name='answer5' id="l" value='2'>
					<label for="o">copy file1 file2</label>
					<br/>
					<input type='radio' name='answer5' id="m" value='3'>
					<label for="p">vi file1 file2</label>
					<br/> 
			</div>
			<button onclick="checkQuiz(x)">SUBMIT</button>
		</form>
	</div>
	<!-- Footer PHP-->
	<?php
	include $path.'assets/includes/footer.php';
?>
