<!-- Tutorial 3 -->
<!-- B.A.D Design -->


<!-- Header PHP-->

<?php
	$path = '../';
	$title = 'Tutorial 3';
	include $path.'assets/includes/header.php';
?>


<!-- &lt; - less than -->
<!-- &gt; - greater than -->
	<h1>Tutorial Three - Files</h1>

	<!-- Files -->
	<h2>Files</h2>
		<p>Linux stores all of it data in files. Things such as programs, texts, and images are examples of files. These files can be found in directories.</p>
	
	<!-- Commands -->
	<h2>Creating a File</h2>
	<p>To Create a file in Linux the "vi" command is used, followed by the name of the file being created</p>
	<p>Command: vi &lt;fileName&gt;</p>
	<img src="<?php echo $path;?>/assets/imgs/tutorial3/vi.PNG" alt="vi/create file">
	
	<!-- Deleting Files -->
	<h2>Deleting a File</h2>
	<p>To Delete a file in Linux the "rm" command is used, followed by the name of the file being deleted</p>
	<p>Command: rm &lt;fileName&gt;</p>
	<img src="<?php echo $path;?>/assets/imgs/tutorial3/rm.PNG" alt="remove file">
	
	<!-- Copying Files -->
	<h2>Copying a File</h2>
	<p>To Copy a file in Linux the "cp" command is used, followed by the name of the file being copied, and then the name of the new copy being created</p>
	<p>Command: cp &lt;fileName1&gt; &lt;fileName2&gt;</p>
	<img src="<?php echo $path;?>/assets/imgs/tutorial3/cp.PNG" alt="copy">
	
	<!-- Moving Files-->
	<h2>Moving a File</h2>
	<p>To Move a file in Linux the "mv" command is used, followed by the name of the file being moved, the new name if the moved file(Can be the same name), and then the new address</p>
	<p>Command: mv &lt;fileName1&gt; &lt;fileName2&gt; &lt;newAddress&gt; </p>	
	<img src="<?php echo $path;?>/assets/imgs/tutorial3/mv.PNG" alt="move ">
	
	<!-- Renaming Files-->
	<h2>Renaming a File</h2>
	<p>The Rename command is similar to the move command, in that it uses the same command "mv". The difference with it is that there is no address at the end of the command </p>
	<p>Command: mv &lt;fileName1&gt; &lt;fileName2&gt;</p>
	<img src="<?php echo $path;?>/assets/imgs/tutorial3/rename.PNG" alt="rename">
	
	
	<!-- Quiz -->
	
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
	$title = 'Tutorial 3';
	include $path.'assets/includes/footer.php';
?>