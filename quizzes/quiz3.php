<!-- Quiz 3 -->
<!-- B.A.D Design -->


<!-- Header PHP-->

<?php
	$path = '../';
	$title = 'Quiz 3';
	include $path.'assets/includes/header.php';
?>
	<!-- Quiz -->
	<h2>Files and Directories</h2>
	
	<form>
			<!-- Question 1 -->
			<h3 class ="question">Question 1: Which choice is the correct way to create a directory?</h3>
			<select id="3.1">
				<option>create directory1</option>
				<option>mkdir directory1</option>
				<option>vi directory1</option>
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
			<select id="3.2">
				<option>rn file1 file2</option>
				<option>rmdir file1</option>
				<option>delete file1</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
			
			<!-- Question 4 -->
			<h3 class ="question">Which choice is ?</h3>
			<select id="3.4">
				<option></option>
				<option></option>
				<option></option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
			
			<!-- Question 5 -->
			<h3 class ="question">Which choice ?</h3>
			<select id="3.5">
				<option></option>
				<option></option>
				<option></option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
		
		</form>
	
<!-- Footer PHP-->
<?php
	$path = '../';
	$title = 'Quiz 3';
	include $path.'assets/includes/footer.php';
?>