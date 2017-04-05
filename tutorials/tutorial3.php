<!-- Tutorial 3 -->
<!-- B.A.D Design -->


<!-- Header PHP-->
<?php
	$path = '../';
	$title = 'Tutorial 3';
	include $path.'assets/includes/header.php';
?>
	<h1>Tutorial Three - Creating, Deleting, and Moving Files and Directories</h1>
	
	<h2>Creating a Directory</h2>
	<p>mkdir <directoryName></p>
	<p>Example: mkdir directory1 </p>
		
	<h2>Removing a Directory </h2>
	<p>rmdir <directoryName></p>
	<p>Example: rmdir directory1 </p>
	
	<h2>Deleting a File</h2>
	<p>rm <fileName></p>
	<p>Example: rm file1 </p>
	
	<h2>Copying a File</h2>
	<p>cp <fileName1> <fileName2></p>
	<p>Example: cp file1 newFileName</p>
	
	<h2>Moving a File</h2>
	<p>mv <fileName1> <fileName2> <address> </p>	
	<p>Example: mv file1 file2 assets/includes
	<p>can be used to change file name</p>
	
	
	<!-- Quiz -->
	
<!-- Footer PHP-->
<?php
	$path = '../';
	$title = 'Tutorial 1';
	include $path.'assets/includes/footer.php';
?>