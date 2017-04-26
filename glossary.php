<!-- Glossary -->
<!-- B.A.D Design -->


<!-- Header PHP-->

<?php
	$path = '';
	$title = 'Glossary';
	$heading = 'Glossary';
	include $path.'assets/includes/header.php';
?>
<!-- Glossary -->
<div class="glossary">
<h2>Glossary</h2>
	<p>Apache: A foundation that develops open source projects. This tutorial refers to specifically, their HTTP servers, used to host a website.</p>
	
	<p>FileZilla: Open source Program used to transfer files between Client and Server</p>
	
	<p>FTP: File Transfer Protocol, FileZilla uses it for its core functions.</p>
	
	<p>PuTTY: Program that can be used to connect to other servers via SSH</p>
	
	<p>SSH: Secure SHell, it’s a protocol used to communicate over unsecured networks.</p>
	
	<p>SFTP: Secure File Transfer Protocol, It’s FTP, and SSH, combined. You can send files securely over unsecured networks.</p> 
	
	<p>Terminal: The command window used to type in the linux commands.</p>

<!-- Commands -->
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

		</div>
<!-- Footer PHP-->
<?php
	include $path.'assets/includes/footer.php';
?>
