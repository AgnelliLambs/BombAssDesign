<!-- Tutorial 10 -->
<!-- B.A.D Design -->


<!-- Header PHP-->

<?php
	$path = '../';
	$title = 'Tutorial 6';
	$heading = 'Tutorial';
	include $path.'assets/includes/header.php';
?>


<!-- &lt; - less than -->
<!-- &gt; - greater than -->
<!-- Directories -->
	<div class="tutorial">
		<h1>Directories</h1>
		<p>Directories are similar to folders, where files and other directories can be placed inside to create a hierarchy. This helps the user organize organize as well as manage the different files in the structure. </p>

		<!-- Creating directories -->
		<h2>Creating a Directory</h2>
		<p>To Create a directory in Linux the "mkdir" command is used, followed by the name of the directory being created</p>
		<p class="code">mkdir &lt;directoryName&gt;</p>
		<img src="<?php echo $path;?>/assets/imgs/tutorial10/mkdir.PNG" alt="make directory">

		<!-- Removing Directories -->
		<h2>Removing a Directory </h2>
		<p>To Remove a directory in Linux the "rmdir" command is used, followed by the name of the directory being deleted</p>
		<p class="code">rmdir &lt;directoryName&gt;</p>
		<img src="<?php echo $path;?>/assets/imgs/tutorial10/rmdir.PNG" alt="make directory">

		<!-- Copying directory -->
		<h2>Copying a Directory</h2>
		<p>To Copy a directory in Linux the "cp" command is used, followed by the name of the directory being copied, and then the name of the new copy being created</p>
		<p class="code">cp &lt;directoryName1&gt; &lt;directoryName2&gt;</p>
		<img src="<?php echo $path;?>/assets/imgs/tutorial10/Cp.PNG" alt="copy">

		<!-- Moving Directories -->
		<h2>Moving a Directory</h2>
		<p>To Move a directory in Linux the "mv" command is used, followed by the name of the directory being moved, the new name if the moved directory, and then the new address</p>
		<p class="code">mv &lt;directoryName1&gt; &lt;directoryName2&gt; &lt;newDestination&gt; </p>	
		<img src="<?php echo $path;?>/assets/imgs/tutorial10/mv.PNG" alt="move ">

		<!-- Renaming Directories -->
		<h2>Renaming a directory</h2>
		<p>The Rename command is similar to the move command, in that it uses the same command "mv". The difference with it is that there is no address at the end of the command </p>
		<p class="code">mv &lt;directoryName1&gt; &lt;directoryName2&gt;</p>
		<img src="<?php echo $path;?>/assets/imgs/tutorial10/rename.PNG" alt="rename">
	</div>
	
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
			<h3 class ="question">Which choice is the correct way to delete a directory?</h3>
			<select id="3.2">
				<option>rm directory1</option>
				<option>rmdir directory1</option>
				<option>delete directory1</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
			
			<!-- Question 3 -->
			<h3 class ="question">Which choice is the correct way to rename a directory?</h3>
			<select id="3.3">
				<option>mv directory1 directory2</option>
				<option>rn directory1 directory2</option>
				<option>rename directory1 directory2</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
			
			<!-- Question 4 -->
			<h3 class ="question">Which choice is the correct way move to a directory?</h3>
			<select id="3.4">
				<option>vi directory1 directory2 newDestination</option>
				<option>mv directory1 directory2 newDestination</option>
				<option>move directory1 directory2 newDestination</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
			
			<!-- Question 5 -->
			<h3 class ="question">Which choice is the correct way to copy a directory?</h3>
			<select id="3.5">
				<option>cp directory1 directory2</option>
				<option>copy directory1 directory2</option>
				<option>vi directory1 directory2</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
		
		</form>
	
<!-- Footer PHP-->
<?php
	$path = '../';
	$title = 'Tutorial 10';
	include $path.'assets/includes/footer.php';
?>
