<!-- Tutorial 5 -->
<!-- B.A.D Design -->

<!-- Header PHP-->

<?php
	$path = '../';
	$title = 'Tutorial 5';
	$heading = 'Tutorial';
	include $path.'assets/includes/header.php';
?>
	<div class="tutorial">
		<h1>File Permissions</h1>
		
		<h2>File Permissions Layout</h2>
		
		<!-- Screenshot of home directory permissions (ls -l) -->
		<img src="<?php echo $path;?>assets/imgs/tutorial5/HomeDirectoryExample.PNG" alt="Home Directory">
		
		<p>The file permissions are at the very start of the line.
		The first space within the file directory determine whether the file is
		a file or if it is a directory. The next three spaces are for the User (u), then
		the next three spaces are for the Group (g), and the last three spaces are for 
		Other (o). The three spaces can consist of an r, w, or x which stand for
		read = r, write = w, and execute = x.</p>
		<!-- Use picture to highligh focus areas during the tutorial reading -->
		
		<img src="<?php echo $path;?>assets/imgs/tutorial5/FilePermissionsLocation.PNG" alt="File Permissions Location">
		
		<h2>Changing specific permissions</h2>
		
		<p>The command to change permissions is chmod.</p>
		
		<p>In order to use chmod, you must have the paremeters for 
		the files permissions and the file you are changing permissions for.
		Create a new file to mess around with permission settings.
		(touch 'file name').</p>
		
		<p>Begin by removing all permissions from the file you have created.
		To do this you use "chmod ugo-rwx 'file name'". It is not recommended to
		change permissions of files that are unknown.</p>
		
		<!-- Screenshot of chmod example -->
		<img src="<?php echo $path;?>assets/imgs/tutorial5/RemovePermissions.PNG" alt="Removing Permissions">
		
		<p>With your knowledge so far, change the files permissions to allow for
		you the user to read, write, and execute, the group to read and write, and other
		to read and write.
		
		<!-- Hidden Screenshot of answer? -->
		<form>
		<img src="<?php echo $path;?>/assets/imgs/tutorial5/ChangePermissionsCorrect.PNG" alt="Change of Permissions" id="hiddenA">
			<div class="buttonHolder"><input class="circleButton" type="button" onclick="document.getElementById('hiddenA').style.display = 'block';" value="Show Answer"></div>
		</form>
		<h2>Permissions using numbers</h2>
		
		<p>The three letters, rwx, all stand for different octal numbers which can be used
		in the terminal command line to change file permissions. This consists of:
		r = 4, w = 2, and x = 1. In order to change the file permissions using octal numbers
		it requires three numbers ranging from 0-7. For example 000 would remove all permissions
		from the file you chose.</p>
		
		<h2>Common File Permission settings</h2>
		<p>The most common file permissions for the web are:</p>
		<p>644 for files</p>
		<p>755 for folders/directories</p>
	
		
		<!-- Quiz -->
		<div class="row centered">
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton buttonHolder">
				<a  href="<?php echo $path;?>tutorials/tutorial4.php">Previous Tutorial</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton buttonHolder">
			<a  href="<?php echo $path;?>quizzes/quiz5.php">Take the Quiz</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton buttonHolder">
				<a  href="<?php echo $path;?>tutorials/tutorial6.php">Next Tutorial</a>
			</div></div>
		</div></div>
<!-- Footer PHP-->
<?php
	include $path.'assets/includes/footer.php';
?>
