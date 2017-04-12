<?php
	$path='../';
	$title='Quiz 4';
	$heading='Quizes';
	include $path.'assets/includes/header.php';
?>
	<div class="quiz">
		<h1>SFTP Quiz</h1>
		<form>
			<h3>Question 1: Which side of the FileZilla application shows files on your computer?</h3>
			<select id="4.1">
				<option>left</option> <!-- Correct answer -->
				<option>right</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
			
			<h3>Question 2: What does SFTP stand for?</h3>
			<select id="4.2">
				<option>Separate File Transferring Protocol</option>
				<option>Secret File Transmission Protocol </option>
				<option>Secure File Transfer Protocol</option> <!-- Correct answer -->
				<option>Secure File Transmission Protocol</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
			
			<h3>Question 3: What is the port number for SFTP?</h3>
			<select id="4.3">
				<option>20</option>
				<option>21</option>
				<option>22</option> <!-- Correct answer -->
				<option>23</option>
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
			
			<h3>Question 4: Which side of the FileZilla application shows files on the host?</h3>
			<select id="4.4">
				<option>left</option>
				<option>right</option><!-- Correct answer -->
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
			
			<h3>Question 5: What 4 things do you need to know in order to connect to a file with SFTP?</h3>
			<select id="4.5">
				<option>Host name</option> <!-- Correct answer -->
				<option>IP Address</option> 
				<option>Directory path</option>
				<option>Port</option> <!-- Correct answer -->
				<option>Password</option> <!-- Correct answer -->
				<option>File name</option>
				<option>Username</option> <!-- Correct answer -->
			</select>
			<input type="button" onclick="checkAnswer()" value="Submit">
		</form>
	</div>
<?php
	include $path.'assets/includes/footer.php';
?>
