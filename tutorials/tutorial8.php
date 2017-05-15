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
		In this tutorial, we will be looking at two text editors; vi, and pico. These two editors both
		come with Unix, you do not need any extra downloads.
	</p>
	<h2>Vi</h2>
	<p>
		It is important to know that vi is a case-sensitive text editor.
		To run Vi, input in the command line "vi" and then the filename that you want to edit.
		If the filename does not exist, a new file will be created with this name.
	</p>
	<p class="code">$ vi &lt;filename&gt;</p>
	<h3>Editing a File</h3>
	<p>
		A file can be edited through command mode or insert mode. On start, vi will automatically
		start in command mode. To enter insert mode, which will let you make edits to file text, 
		simply enter "i" into the command line. To exit insert mode, press the escape key on 
		your keyboard.
	</p>
	<p>
		Once entering command mode, you can move around the file by using your arrow
		keys. Another way to move around is by using the following characters; k, j, h, l. Using
		"h" will move the cursor left one character, while "l" will move it right one character.
		Using "k" will move your cursor up one line, and "j" will move it down one line. These
		commands will not work upon entering insert mode.
	</p>
	<p class="code">$ i</p>
	<h3>Saving Your Work</h3>
	<p>
		Changes cannot be save while in insert mode. To save a change in command
		mode, enter the command ":w". If you quit without saving first, your changes
		will be lost.
	</p>
	<h3>Exiting the Editor</h3>
	<p>
		To exit insert mode, simply press the escape key on your keyboard. To exit vi altogether,
		type ":q". You can also save and quit at the same time by combining the save and quit 
		commands ":wq". Another way to save and quit is to type "ZZ".
	</p>
	<h2>Pico</h2>
	<p>
		To run Pico, input in the command line "pico" and then the filename that you want to edit.
		If a file with that name does not exist, a new file will be made.
	</p>
	<p class="code">$ pico &lt;filename&gt;</p>
	<h3>Editing a File</h3>
	<p>
		Unlike vi, pico is always in insert mode and does not have a command mode.
	</p>
	<h3>Saving Your Work</h3>
	<p>
	
	</p>
	<h3>Exiting the Editor</h3>
	<p>
	
	</p>
  </div>
<!-- Footer PHP-->
<?php
	include $path.'assets/includes/footer.php';
?>
