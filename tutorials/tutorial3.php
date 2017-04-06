<!-- Tutorial 3 -->
<!-- B.A.D Design -->

WILL ADD MORE DETAILS LATER
<!-- Header PHP-->
<!-- &lt; - less than -->
<!-- &gt; - greater than -->
<?php
	$path = '../';
	$title = 'Tutorial 3';
	$heading = 'turotial';
	include $path.'assets/includes/header.php';
?>
	<div class="tutorial">
		<h1>Tutorial Three - Creating, Deleting, and Moving Files and Directories</h1>
		<h2>Directories</h2>
		<p>.......</p>
		<h2>Creating a Directory</h2>
		<p>mkdir &lt;directoryName&gt;</p>
		<p class="code">$ mkdir directory1 </p>

		<h2>Removing a Directory </h2>
		<p>rmdir &lt;directoryName&gt;</p>
		<p>Example: rmdir directory1 </p>

		<h2>Files</h2>
		<p>.......</p>

		<h2>Deleting a File</h2>
		<p>rm &lt;fileName&gt;</p>
		<p class="code">$ rm file1 </p>

		<h2>Copying a File</h2>
		<p>cp &lt;fileName1&gt; &lt;fileName2&gt;</p>
		<p class="code">$ cp file1 newFileName</p>

		<h2>Moving a File</h2>
		<p>cp &lt;fileName1&gt; &lt;fileName2&gt;</p>	
		<p class="code">$ mv file1 file2 assets/includes</p>
		<p>can be used to change file name</p>

		<h2>vi </h2>


		<!-- Quiz -->
		<form>
			<h3 class ="question">Question 1</h3>
			<select id="5.1">
				<option>a</option>
				<option>b</option>
				<option>c</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
		</form>
	</div>
	
<!-- Footer PHP-->
<?php
	include $path.'assets/includes/footer.php';
?>
