<!-- Tutorial 3 -->
<!-- B.A.D Design -->


<!-- Header PHP-->

<?php
	$path = '../';
	$title = 'Tutorial 3';
	$heading = 'Tutorial';
	include $path.'assets/includes/header.php';
?>


<!-- &lt; - less than -->
<!-- &gt; - greater than -->
	<div class='tutorial'>
		<h1>Files</h1>

		<!-- Files -->
			<p>Linux stores all of it data in files. Things such as programs, texts, and images are examples of files. These files can be found in directories.</p>

		<!-- Commands -->
		<h2>Creating a File</h2>
		<p>To Create a file in Linux the "vi" command is used, followed by the name of the file being created</p>
		<p class="code">$ vi &lt;fileName&gt;</p>
		<img src="<?php echo $path;?>assets/imgs/tutorial3/vi.PNG" alt="vi/create file">

		<!-- Deleting Files -->
		<h2>Deleting a File</h2>
		<p>To Delete a file in Linux the "rm" command is used, followed by the name of the file being deleted</p>
		<p class="code">$ rm &lt;fileName&gt;</p>
		<img src="<?php echo $path;?>assets/imgs/tutorial3/rm.PNG" alt="remove file">

		<!-- Copying Files -->
		<h2>Copying a File</h2>
		<p>To Copy a file in Linux the "cp" command is used, followed by the name of the file being copied, and then the name of the new copy being created</p>
		<p class="code">$ cp &lt;fileName1&gt; &lt;fileName2&gt;</p>
		<img src="<?php echo $path;?>assets/imgs/tutorial3/Cp.PNG" alt="copy">

		<!-- Moving Files-->
		<h2>Moving a File</h2>
		<p>To Move a file in Linux the "mv" command is used, followed by the name of the file being moved, the new name if the moved file (Can be the same name), and then the new address</p>
		<p class="code">$ mv &lt;fileName1&gt; &lt;fileName2&gt; &lt;newAddress&gt; </p>	
		<img src="<?php echo $path;?>assets/imgs/tutorial3/mv.PNG" alt="move ">

		<!-- Renaming Files-->
		<h2>Renaming a File</h2>
		<p>The Rename command is similar to the move command, in that it uses the same command "mv". The difference with it is that there is no address at the end of the command </p>
		<p class="code">$ mv &lt;fileName1&gt; &lt;fileName2&gt;</p>
		<img src="<?php echo $path;?>assets/imgs/tutorial3/rename.PNG" alt="rename">
	</div>

<div class="row">
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
				<a id='quizLink' href="<?php echo $path;?>tutorials/tutorial2.php">Previous Tutorial</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
			<a id='quizLink' href="<?php echo $path;?>quizzes/quiz3.php">Take the Quiz</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
				<a id='quizLink' href="<?php echo $path;?>tutorials/tutorial4.php">Next Tutorial</a>
			</div></div>
</div>
	
	
<!-- Footer PHP-->
<?php
	include $path.'assets/includes/footer.php';
?>
