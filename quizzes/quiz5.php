<!-- Quiz 5 -->
<!-- B.A.D. Design -->

<!-- Header -->
<?php
	$path = '';
	$title = 'YouNix';
	$heading = 'Home';
	include $path.'assets/includes/header.php';
?>

	<!-- Quiz -->
	<h2>File Permissions</h2>
		
		<form>
		<!-- Question 1 -->
			<h3 class ="question">Which command will change a file so it can be read by everyone</h3>
			<select id="5.1">
				<option>chmod u+r file</option>
				<option><!-- Correct -->chmod a+r file</option>
				<option>chmod a+w file</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
		<!-- Question 2 -->	
			<h3 class ="question">Which permission set is typical for any folder</h3>
			<select id="5.2">
				<option>-rwxrwxrwx</option>
				<option>d---------</option>
				<option><!-- Correct -->drwxr-xr-x</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
		<!-- Question 3 -->	
			<h3 class ="question">What command will give execute permission to everyone for meeting?</h3>
			<select id="5.3">
				<option>chmod a+r meeting</option>
				<option><!-- Correect -->chmod a+x meeting</option>
				<option>chmod uo+x meeting</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
		<!-- Question 4 -->
			<h3 class ="question">Your file is not able to be run, what are the permissions set to?</h3>
			<select id="5.4">
				<option><!-- wrong -->drw-r--r--</option>
				<option><!-- Correct -->-rw-r--r--</option>
				<option><!-- Wrong -->-r-xrwxrwx</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
		<!-- Question 5 -->	
			<h3 class ="question">What permission numbers would allow the owner to read, write, and execute;
			group to read, write, and execute; and any user to execute?</h3>
			<select id="5.5">
				<option>777</option>
				<option>141</option>
				<option><!-- Correct -->771</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
		</form>
		
<?php
	include $path.'assets/includes/footer.php';
?>