<!-- Tutorial 4 -->
<!-- B.A.D Design -->

<!-- Header PHP -->
 <?php
  	$path = '../';
  	$title = 'Tutorial 4';
 	$heading = 'Tutorial';
  	include $path.'assets/includes/header.php';
  ?>
  <div class="tutorial">
		<h1>SFTP</h1>
		<!-- Quick walkthrough of what SFTP is -->
		<p>
			SFTP stands for SSH File Transfer Protocol, it can also be called Secure File Transfer Protocol. 
			SFTP is an encrypted command-line transfer of files between two systems. This transfer can be done
			through the command-line on your computer, or an SFTP graphical client software can be used to simplify
			the transferring process. SFTP requires the name of the host you are connecting to, as well as a username and password for the host.
			In this tutorial, you will be learning how to download and use the free SFTP software, FileZilla, as well as
			how to use SFTP through command line.
		</p>
		<!-- Walkthrough for Windows and Mac -->
		<h2>Downloading FileZilla</h2>
		
		<p>
			To begin downloading, please select your operating system from the list below.
			Clicking the link below will take you directly to the dowload page on FileZilla.
		</p>
		<!-- Links to downloads -->
		<ol>
			<li><a href="https://filezilla-project.org/download.php?type=client">Windows 64bit</a></li>
			<li><a href="https://filezilla-project.org/download.php?platform=win32">Windows 32bit</a></li>
			<li><a href="https://filezilla-project.org/download.php?platform=osx">Mac OS X</a></li>
		</ol>
		
		<p>Alternatively, you can go to FileZilla's homepage <a href="https://filezilla-project.org/">here</a>.</p>
		
		<h3>For Windows</h3>

		<p>
			Click the green "Download FileZilla Client" button. Your download will be a .exe file.
			Run the file when the download is completed, and give it permission to run on your computer.
		</p>
	  
		<h3>For Mac</h3>
		<p>
			Click the green "Download FileZilla Client" button. Choose where you would like to save the zip
			file.
		</p>
		<p>
			To unzip your downloaded file, go to the location of you download and double click the zipped file.
			A new application item called "FileZilla-Installer" will appear in the folder. Open this application
			and click "Open" to download.
		</p>
		<p>
			The Installer will open, read and agree to the software license terms to continue.
		</p>
			<img src="<?php echo $path;?>assets/imgs/tutorial4/install.png" alt="FileZilla Download">
		<p>
			When the application has finished installing, select the "Done" button to complete your installation and
			FileZilla should run.
		</p>
		<!-- How to use FileZilla -->
		<h2>Using FileZilla</h2>
		
		<p>
			Congratulations on successfully downloading FileZilla!
		</p>
		
		<h3>Establishing the File Connection</h3>
		
		<p>
			In order to send files, you must know the name of the host you want to connect to, the username, and the password.
			The default port number for SFTP is '22'. To establish the connection enter the host name, username, password, 
			and port number in the fields at the top, then press the "Quickconnect" button.
		</p>
			<img src="../assets/imgs/tutorial4/login.png" alt="FileZilla Download">
		<p>
			If you have successfully connected to the host, you will see a connected message directly below your connection information.
			The content on the left is a listing of files and directories for your computer, content on the right is files and 
			directories for the host you are connected to.
		</p>
			<img src="../assets/imgs/tutorial4/loggedin.png" alt="FileZilla Download">
		<p>
			Transferring files from your computer to the host is as simple as selecting your files and dragging them to the host
			"www" folder. The files you want to transfer can be found on the left, which is the listing of files on your computer,
			or you can grab them directly from your computer and drop them to the host on the right.
		</p>
		
		<h2>SFTP Through Command Line</h2>
		
		<p>
			Using SFTP through command line is very similar to using using SSH. To learn how to use SSH, go
			to the <a href="tutorial1.php">SSH tutorial here</a>. Once you have connected to the folder with SFTP or 
			SSH, you will need to know UNIX commands to navigate.
		</p>
		<p>
			 To learn commands for navigating through the connected file, check out the <a href="tutorial2.php">Navigating Termminal tutorial</a>.
			 For information on commands that will let you make a new file, delete a file, copy a file, move a file, or rename a file,
			 go to the <a href="tutorial3.php">Files tutorial</a>.
		</p>
		
		<h3>Combining What You've Learned</h3>
		
		<p>
			First, you need to use SFTP to access the file. As with SSH, you will need to know your 
			username and the website URL or the IP address. You will also need to know the password.
		</p>
		<p class="code">$ SFTP username@host_website_or_IP</p>
		<p class="code">$ SFTP username@host_website_or_IP's password:</p>
		
		<p>
			You can see that using SFTP and SSH to connect to a file are very similar.
			If you used the correct username and password, you should be connected to the file. From here, you
			can begin navigating, creating, deleting, and editing the connected folders. The commands are the same
			as if you were to use SSH. If you want to know specfic commands you can use type "?" or "help".
		</p>
		<p class="code"> $ ?</p>
		or
		<p class="code"> $ help</p>
		<img src="../assets/imgs/tutorial4/help.jpg" alt="Command options">
	</div>
<!-- Footer PHP-->
<?php
	include $path.'assets/includes/footer.php';
?>
