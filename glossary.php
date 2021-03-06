<!-- Glossary -->
<!-- B.A.D Design -->


<!-- Header PHP-->

<?php
	$path = '';
	$title = 'Glossary';
	$heading = 'Glossary';
	include $path.'assets/includes/header.php';
	
	include '../../dbConn.php';
	
	
?>
	<!-- SEARCH BAR -->
	

	   <form id="search" class="navbar-form" action='' method='POST'>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
	<!-- SEARCH BAR -->
	<?php
		
		
		
		

	?>
<!-- Glossary -->
<div class="glossary">
	
	<?php
	
	echo "<div id='back'>";
	$result = $conn->query('SELECT * FROM glossaryDB WHERE type = "program" ORDER BY commandName');
	if($result->num_rows>0){
		echo '<h2>Glossary</h2>';
		while($row = $result->fetch_assoc()){
			echo '<p>'.$row['commandName'].': '.$row['commandInfo'] . '</p>';
		}
	}
	elseif($_POST['term']==""){
		echo '<h3><i>No Results Found</i></h3>';
		
	}
		
	echo '<h3>Unix Commands</h3>';
	$result = $conn->query('SELECT * FROM glossaryDB WHERE type != "program" ORDER BY commandName');
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			echo '<p>'.$row['commandName'].': '.$row['commandInfo'] . '</p>';
		}
	}
	else{
		echo '<h3><i>No Results Found</i></h3>';
	}
	echo "</div>";
	
	if($_POST['term']!=""){
		//search for the term
		$likeVar = '%'.trim($_POST['term'], "\t.").'%';
		$stmt = $conn->stmt_init();
		$stmt->prepare('SELECT commandName,commandInfo FROM glossaryDB WHERE commandName LIKE ? or commandInfo LIKE ?');
		//$stmt->bind_param('s',$_POST['term']);
		$stmt->bind_param('ss',$likeVar,$likeVar);
		$stmt->execute();
		$stmt->bind_result($commandName,$commandInfo);
		
		echo '<div id = "cover"></div> <!-- add stlyes to make this cover the background, but only if a user searched a term -->';
		
		echo '<div id="popUp"><br />';
		while($stmt->fetch()){
			echo '<p class = "result">'.$commandName.": ". $commandInfo.'</p>';
		}
		echo '<br /></div>';
	
	}
		
		?>
		<!--
	<p>Apache: A foundation that develops open source projects. This tutorial refers to specifically, their HTTP servers, used to host a website.</p>
	
	<p>FileZilla: Open source Program used to transfer files between Client and Server</p>
	
	<p>FTP: File Transfer Protocol, FileZilla uses it for its core functions.</p>
	
	<p>PuTTY: Program that can be used to connect to other servers via SSH</p>
	
	<p>SSH: Secure SHell, it’s a protocol used to communicate over unsecured networks.</p>
	
	<p>SFTP: Secure File Transfer Protocol, It’s FTP, and SSH, combined. You can send files securely over unsecured networks.</p> 
	
	<p>Terminal: The command window used to type in the linux commands.</p>
	
	-->

<!-- Commands -->
<!--
<h2>List of Commands</h2>
	
	<p>cd &lt;path&gt; - change directory, changes where your cursor is ‘cd ..’ returns you to the directory that your directory is located in.</p>
	
	<p>Chmod &lt;file&gt; &lt;new permissions&gt; - Change the file permissions to <new permissions> refer to Tutorial Four for more.</p>
	
	clear - clears the text from the Terminal.
	
	<p>cp &lt;file1&gt; &lt;file2&gt; - copies a file (file1) to a new location (file2), you can also rename the file.</p>

	
	Grep &lt;word&gt; &lt;file&gt; - searches for a specific in a file and displays the line it’s in. Adding -i ignores upper/lower cases, using -i’<phrase>’ allows it to search for phrases.
		
	<p>ls - Lists information about the files in the current directory. -a shows all files, -l shows more information</p>
	
	Man &lt;command&gt; - the help command, use this to get more information about a particular command
	
	<p>mkdir &lt;directory name&gt; - makes a new directory</p>
	
	<p>mv &lt;file1&gt; &lt;file2&gt; - moves a file (file1) to a new location (file2), this command can also be used to change the file name.</p>
	
	<p>pico - opens up a text editor, this can be used to change file content in real time.</p>
	
	<p>pwd - Print Working Directory, lists where your cursor is on the computer.</p>
	
	<p>rm &lt;filename&gt; - removes the file</p>
	
	<p>rmdir &lt;directory name&gt; - removes the directory. This would only remove empty directories, to remove nonempty directories, use rmdir -p <filename></p>
	
	<p>vi - opens up the text editor, this can be used to change file contents.</p>
	wc &lt;filename&gt; - Gives you a word count of the file. Adding ‘-w’ prints a list of the words, ‘-l’ prints the number of lines.
	-->
		</div>
<!-- Footer PHP-->
<!-- </div>  end contentwrapper, remove/add if header php is different-->
<div id="Fullscreen"> </div>
<div id="dimBackground"></div>
</div>
<script src="<?php echo $path;?>assets/js/fullscreen_photos.js"></script>
<script src="<?php echo $path;?>assets/js/quizscripts.js"></script>
<script src="<?php echo $path;?>assets/js/tutorial5unhide.js"></script>
</body>

</html>
