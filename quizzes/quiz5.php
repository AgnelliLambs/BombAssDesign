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
				<input type="radio" name="5.1" id="a" value="0"><label for="a">chmod u+r file</label></br>
				<input type="radio" name="5.1" id="b" value="1"><label for="b"><!-- Correct -->chmod a+r file</label></br>
				<input type="radio" name="5.1" id="c" value="2"><label for="c">chmod a+w file</label></br>


		<!-- Question 2 -->	
			<h3 class ="question">Which permission set is typical for any folder</h3>

				<input type="radio" name="5.2" id="d" value="0"><label for="d">-rwxrwxrwx</label></br>
				<input type="radio" name="5.2" id="e" value="1"><label for="e">drw--wx---</label></br>
				<input type="radio" name="5.2" id="f" value="2"><label for="f"><!-- Correct -->drwxr-xr-x</label></br>
			
		<!-- Question 3 -->	
			<h3 class ="question">What command will give execute permission to everyone for meeting?</h3>
		
				<input type="radio" name="5.3" id="g" value="0"><label for="g">chmod a+r meeting</label></br>
				<input type="radio" name="5.3" id="h" value="1"><label for="h"><!-- Correct -->chmod a+x meeting</label></br>
				<input type="radio" name="5.3" id="i" value="2"><label for="i">chmod uo+x meeting</label></br>

		<!-- Question 4 -->
			<h3 class ="question">Your file is not able to be run, what are the permissions set to?</h3>
			
				<input type="radio" name="5.4" id="j" value="0"><label for="j">drw-r--r--</label></br>
				<input type="radio" name="5.4" id="k" value="1"><label for="k"><!-- correct -->-rw-r--r--</label></br>
				<input type="radio" name="5.4" id="l" value="2"><label for="l">-r-xrwxrwx</label></br>

		<!-- Question 5 -->	
			<h3 class ="question">What permission numbers would allow the owner to read, write, and execute;
			group to read, write, and execute; and any user to execute?</h3>
			
				<input type="radio" name="5.5" id="m" value="0"><label for="m">777</label></br>
				<input type="radio" name="5.5" id="n" value="1"><label for="n">141</label></br>
				<input type="radio" name="5.5" id="o" value="2"><label for="o"><!-- Correct -->771</label></br>

			<input type="button" onclick="checkQuiz(5)" value="Submit">
		</form>
		
<?php
	include $path.'assets/includes/footer.php';
?>