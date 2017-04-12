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
		<h1>Tutorial 2 - SFTP</h1>
		<!-- Quick walkthrough of what SFTP is -->
		<p>
			SFTP stands for SSH File Transfer Protocol, it can also be called Secure File Transfer Protocol. 
			SFTP is an encrypted command-line transfer of files between two systems. This transfer can be done
			through the command-line on your computer, or an SFTP graphical client software can be used to simplify
			the transferring process. SFTP requires the name of the host you are connecting to, as well as a username and password for the host.
			In this tutorial, you will be learning how to download and use the free SFTP software, FileZilla.
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
		
			<img src="../assets/imgs/windows_download.png" alt="FileZilla Download for Windows">
		
		<p>
			Click the green "Download FileZilla Client" button. Your download will be a .exe file.
			Run the file when the download is completed, and give it permission to run on your computer.
		</p>
			<img src="../assets/imgs/agreement_windows.png" alt="FileZilla Download Agreement">

		<h3>For Mac</h3>
		<p>
			Click the green "Download FileZilla Client" button. Choose where you would like to save the zip
			file. In this example, the zip file will be saved to the "Downloads" file.
		</p>
			<img src="../assets/imgs/mac_download.png" alt="FileZilla Download for Mac">
		<p>
			To unzip your downloaded file, go to the location of you download and double click the zipped file.
			A new application item called "FileZilla-Installer" will appear in the folder. Open this application
			and click "Open" to download.
		</p>
			<img src="../assets/imgs/accept_download.png" alt="FileZilla Download">
		<p>
			The Installer will open, read and agree to the software license terms to continue.
		</p>
			<img src="../assets/imgs/install.png" alt="FileZilla Download">
		<p>
			When the application has finished installing, select the "Done" button to complete your installation and
			FileZilla should run.
		</p>
		<!-- How to use FileZilla -->
		<h2>Using FileZilla</h2>
		
		<p>
			Congratulations on successfully downloading FileZilla!
		</p>
		
		<h2>Establishing the File Connection</h2>
		
		<p>
			In order to send files, you must know the name of the host you want to connect to, the username, and the password.
			The default port number for SFTP is '22'. To establish the connection enter the host name, username, password, 
			and port number in the fields at the top, then press the "Quickconnect" button.
		</p>
			<img src="../assets/imgs/login.png" alt="FileZilla Download">
		<p>
			If you have successfully connected to the host, you will see a connected message directly below your connection information.
			The content on the left is a listing of files and directories for your computer, content on the right is files and 
			directories for the host you are connected to.
		</p>
			<img src="../assets/imgs/loggedin.png" alt="FileZilla Download">
		<p>
			Transferring files from your computer to the host is as simple as selecting your files and dragging them to the host
			"www" folder. The files you want to transfer can be found on the left, which is the listing of files on your computer,
			or you can grab them directly from your computer and drop them to the host on the right.
		</p>
	</div>
<!-- Footer PHP-->
<?php
	include $path.'assets/includes/footer.php';
?>
