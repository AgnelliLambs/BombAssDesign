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
	<h2>Files</h2>
	
		<form>
			<!-- Question 1 -->
			<h3 class ="question">Question 1: Which choice is the correct way to create a file?</h3>
			<select id="3.1">
				<option>create file1</option>
				<option>mkdir file1</option>
				<option>vi file1</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
		
			<!-- Question 2 -->
			<h3 class ="question">Which choice is the correct way to delete a file?</h3>
			<select id="3.2">
				<option>rm file1</option>
				<option>rmdir file1</option>
				<option>delete file1</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
			
			<!-- Question 3 -->
			<h3 class ="question">Which choice is the correct way to rename a file?</h3>
			<select id="3.3">
				<option>mv file1 file2</option>
				<option>rn file1 file 2</option>
				<option>rename file1 file2</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
			
			<!-- Question 4 -->
			<h3 class ="question">Which choice is the correct way move to a file?</h3>
			<select id="3.4">
				<option>vi file1 file2 newDestination</option>
				<option>mv file1 file2 newDestination</option>
				<option>move file1 file2 newDestination</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
			
			<!-- Question 5 -->
			<h3 class ="question">Which choice is the correct way to copy a file?</h3>
			<select id="3.5">
				<option>cp file1 file2</option>
				<option>copy file1 file2</option>
				<option>vi file1 file2</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
		
		</form>
	
<!-- Footer PHP-->
<?php
	$path = '../';
	$title = 'Quiz 3';
	include $path.'assets/includes/footer.php';
?>
