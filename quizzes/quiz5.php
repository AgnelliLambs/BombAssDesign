<!-- Quiz 5 -->
<!-- B.A.D. Design -->

<!-- Header -->
<?php
	$path = '../';
	$title = 'YouNix';
	$heading = 'quiz5';
	include $path.'assets/includes/header.php';
?>

	<!-- Quiz -->
	<h2>File Permissions</h2>
		
		
		<!-- Question 1 -->
			<h3 class ="question">Which command will change a file so it can be read by everyone</h3>
			<form action="">
				<input type="radio" name="5.1" value="0">chmod u+r file</br>
				<input type="radio" name="5.1" value="1"><!-- Correct -->chmod a+r file</br>
				<input type="radio" name="5.1" value="2">chmod a+w file</br>


		<!-- Question 2 -->	
			<h3 class ="question">Which permission set is typical for any folder</h3>

				<input type="radio" name="5.2" value="0">-rwxrwxrwx</br>
				<input type="radio" name="5.2" value="1">drw--wx---</br>
				<input type="radio" name="5.2" value="2"><!-- Correct -->drwxr-xr-x</br>
			
		<!-- Question 3 -->	
			<h3 class ="question">What command will give execute permission to everyone for meeting?</h3>
		
				<input type="radio" name="5.3" value="0">chmod a+r meeting</br>
				<input type="radio" name="5.3" value="1"><!-- Correct -->chmod a+x meeting</br>
				<input type="radio" name="5.3" value="2">chmod uo+x meeting</br>

		<!-- Question 4 -->
			<h3 class ="question">Your file is not able to be run, what are the permissions set to?</h3>
			
				<input type="radio" name="5.4" value="0">drw-r--r--</br>
				<input type="radio" name="5.4" value="1"><!-- correct -->-rw-r--r--</br>
				<input type="radio" name="5.4" value="2">-r-xrwxrwx</br>

		<!-- Question 5 -->	
			<h3 class ="question">What permission numbers would allow the owner to read, write, and execute;
			group to read, write, and execute; and any user to execute?</h3>
			
				<input type="radio" name="5.5" value="0">777</br>
				<input type="radio" name="5.5" value="1">141</br>
				<input type="radio" name="5.5" value="2"><!-- Correct -->771</br>

			<input type="button" onclick="checkQuiz(5)" value="Submit">
		</form>
		
<?php
	include $path.'assets/includes/footer.php';
?>