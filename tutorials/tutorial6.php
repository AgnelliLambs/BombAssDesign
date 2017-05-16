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
		<p class="code">$ mkdir &lt;directoryName&gt;</p>
		<img src="<?php echo $path;?>assets/imgs/tutorial10/mkdir.PNG" alt="make directory">

		<!-- Removing Directories -->
		<h2>Removing a Directory </h2>
		<p>To Remove a directory in Linux the "rmdir" command is used, followed by the name of the directory being deleted</p>
		<p class="code">$ rmdir &lt;directoryName&gt;</p>
		<img src="<?php echo $path;?>assets/imgs/tutorial10/rmdir.PNG" alt="make directory">

		<!-- Copying directory -->
		<h2>Copying a Directory</h2>
		<p>To Copy a directory in Linux the "cp" command is used, followed by the name of the directory being copied, and then the name of the new copy being created</p>
		<p class="code">$ cp &lt;directoryName1&gt; &lt;directoryName2&gt;</p>
		<img src="<?php echo $path;?>assets/imgs/tutorial10/Cp.PNG" alt="copy">

		<!-- Moving Directories -->
		<h2>Moving a Directory</h2>
		<p>To Move a directory in Linux the "mv" command is used, followed by the name of the directory being moved, the new name if the moved directory, and then the new address</p>
		<p class="code">$ mv &lt;directoryName1&gt; &lt;directoryName2&gt; &lt;newDestination&gt; </p>	
		<img src="<?php echo $path;?>assets/imgs/tutorial10/mv.PNG" alt="move ">

		<!-- Renaming Directories -->
		<h2>Renaming a directory</h2>
		<p>The Rename command is similar to the move command, in that it uses the same command "mv". The difference with it is that there is no address at the end of the command </p>
		<p class="code">$ mv &lt;directoryName1&gt; &lt;directoryName2&gt;</p>
		<img src="<?php echo $path;?>assets/imgs/tutorial10/rename.PNG" alt="rename">
	
	<div class="row">
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
				<a id='quizLink' href="<?php echo $path;?>tutorials/tutorial5.php">Previous Tutorial</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
			<a id='quizLink' href="<?php echo $path;?>quizzes/quiz6.php">Take the Quiz</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
				<a id='quizLink' href="<?php echo $path;?>tutorials/tutorial7.php">Next Tutorial</a>
			</div></div>
</div></div>
	
<!-- Footer PHP-->
<?php
	include $path.'assets/includes/footer.php';
?>
