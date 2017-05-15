<!-- Tutorial 8 -->
<!-- B.A.D Design -->

<!-- Header PHP -->
 <?php
  	$path = '../';
  	$title = 'Tutorial 8';
 	$heading = 'Tutorial';
  	include $path.'assets/includes/header.php';
  ?>
  <div class="tutorial">
	<h1>Unix Text Editors</h1>
	<p>
		The text editors in Unix will allow you to make changes to the a file through command line.
		In this tutorial, we will be looking at two text editors; Vi, and Pico. These two editors both
		come with Unix, you do not need any extra downloads.
	</p>
	<h2>Vi</h2>
	<p>
		To run Vi, input in the command line "vi" and then the filename that you want to edit.
	</p>
	<p class="code">$ vi &lt;filename&gt;</p>
	<h3>Editing a File</h3>
	<h3>Saving Your Work</h3>
	<h3>Exiting the Editor</h3>
	<h2>Pico</h2>
	<p>
		To run Pico, input in the command line "pico" and then the filename that you want to edit.
	</p>
	<p class="code">$ pico &lt;filename&gt;</p>
	<h3>Editing a File</h3>
	<h3>Saving Your Work</h3>
	<h3>Exiting the Editor</h3>
  </div>
<!-- Footer PHP-->
<?php
	include $path.'assets/includes/footer.php';
?>
