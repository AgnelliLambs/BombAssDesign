<?php
	$path = '../';
	$title = 'Tutorial 1';
	$heading = 'tutorial';
	include $path.'assets/includes/header.php';
?>
	<div class="tutorial">
		<h1>Tutorial 2 - SFTP</h1>

		<p>
			SFTP stands for SSH File Transfer Protocol, but is sometimes called Secure File Transfer Protocol. 
			In this tutorial, you will be learning how to download and use the free software FileZilla. Filezilla
		</p>

		<!-- Link to correct computer thing -->

		<h2>Downloading FileZilla</h2>

		<p>
			To begin downloading, please select your operating system from the list below.
			Clicking the link below will takr you directly to the dowload page on FileZilla.
		</p>

		<ol>
			<li><a href="https://filezilla-project.org/download.php?type=client">Windows 64bit</a></li>
			<li><a href="https://filezilla-project.org/download.php?platform=win32">Windows 32bit</a></li>
			<li><a href="https://filezilla-project.org/download.php?platform=osx">Mac OS X</a></li>
		</ol>

		<p>Alternatively, you can go to FileZilla's homepage <a href="https://filezilla-project.org/">here</a>.</p>


		<h2>For Windows</h2>

		<!--Screenshot
			<img src="<\?php echo $path;?>/assets/imgs/windows_download.png" alt="FileZilla Download for Windows">
		-->
		<p>
			Click the green "Download FileZilla Client" button. Your download will be a .exe file.
			Run the file when the download is completed, and give it permission to run on your computer.
		</p>

		<!--Screenshot
			<img src="<\?php echo $path;?>/assets/imgs/agreement_windows.png" alt="FileZilla Download for Windows">
		-->

		<h2>For Mac</h2>
		<p>
			Click the green "Download FileZilla Client" button. Choose where you would like to save the zip
			file. In this example, the zip file will be saved to the "Downloads" file.
		</p>
		<!--Screenshot
			<img src="<\?php echo $path;?>/assets/imgs/mac_download.png" alt="FileZilla Download for Windows">
		-->
		<p>
			To unzip your downloaded file, go to the location of you download and double click the zipped file.
			A new application item called "FileZilla-Installer" will appear in the folder. Open this application
			and click "Open" to download.
		</p>
		<!--Screenshot
			<img src="<\?php echo $path;?>/assets/imgs/accept_download2.png" alt="FileZilla Download for Windows">
		-->
		<p>
			The Installer will open, read and agree to the software license terms to continue.
		</p>
		<!--Screenshot
			<img src="<\?php echo $path;?>/assets/imgs/install.png" alt="FileZilla Download for Windows">
		-->
		<p>
			When the application has finished installing, select the "Done" button to complete your installation and
			FileZilla should run.
		</p>
	</div>
	<!-- Quiz -->
	
<!-- Footer PHP-->
<?php
	include $path.'assets/includes/footer.php';
?>
