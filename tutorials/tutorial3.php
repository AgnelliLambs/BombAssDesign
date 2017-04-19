<!-- Tutorial 3 -->
<!-- B.A.D Design -->


<!-- Header PHP-->

<?php
	$path = '../';
	$title = 'Tutorial 3';
	$heading = 'Tutorial';
	include $path.'assets/includes/header.php';
?>
	<div class="tutorial">
	<!-- &lt; - less than -->
	<!-- &gt; - greater than -->
		<h1>Tutorial Three - Creating, Deleting, and Moving Files and Directories</h1>
		<!-- Directories -->
		<h2>Directories</h2>
		<p>Directories are similar to folders, where files and other directories can be placed inside to create a hierarchy. This helps the user organize organize as well as manage the different files in the structure. </p>

		<!-- Creating directories -->
		<h2>Creating a Directory</h2>
		<p>Command: mkdir &lt;directoryName&gt;</p>
		<p>Example: mkdir directory1 </p>

		<!-- Removing Directories -->
		<h2>Removing a Directory </h2>
		<p>Command: rmdir &lt;directoryName&gt;</p>
		<p>Example: rmdir directory1 </p>

		<!-- Files -->
		<h2>Files</h2>
		<h2>Creating a File</h2>
		<p>Command: vi &lt;fileName&gt;</p>
		<p>Example: vi file1 </p>

		<!-- Deleting Files -->
		<h2>Deleting a File</h2>
		<p>Command: rm &lt;fileName&gt;</p>
		<p>Example: rm file1 </p>

		<!-- Copying Files -->
		<h2>Copying a File</h2>
		<p>Command: cp &lt;fileName1&gt; &lt;fileName2&gt;</p>
		<p>Example: cp file1 newFileName</p>

		<!-- Copying Files -->
		<h2>Moving Files</h2>
		<p>Command: mv &lt;fileName1&gt; &lt;fileName2&gt; &lt;newAddress&gt; </p>	
		<p>Example: mv file1 file2 assets/includes

		<!-- Renaming Files -->
		<h2>Renaming a File</h2>
		<p>Command: mv &lt;fileName1&gt; &lt;fileName2&gt;</p>
		<p>Example: mv file1 file2</p>


		<!-- Quiz -->

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
				<select id="3.3">
					<option>rn file1 file2</option>
					<option>rmdir file1</option>
					<option>delete file1</option>
				</select>
				<input type="button" onclick="checkAnswer()" value="Submit">

				<!-- Question 4 -->
				<h3 class ="question">Which choice is the correct way to a file?</h3>
				<select id="3.4">
					<option>rm file1</option>
					<option>rmdir file1</option>
					<option>delete file1</option>
				</select>
				<input type="button" onclick="checkAnswer()" value="Submit">

				<!-- Question 5 -->
				<h3 class ="question">Which choice is the correct way to rename a file?</h3>
				<select id="3.5">
					<option>rn file1 file2</option>
					<option>rmdir file1</option>
					<option>delete file1</option>
				</select>
				<input type="button" onclick="checkAnswer()" value="Submit">

			</form>
	</div>	
<!-- Footer PHP-->
<?php
	$path = '../';
	$title = 'Tutorial 3';
	include $path.'assets/includes/footer.php';
?>
