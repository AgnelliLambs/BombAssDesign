<!-- Header PHP-->
<?php
	$path = '../';
	$title = 'Tutorial 1';
	include $path.'assets/header.php';
?>
	<h1>Tutorial One - SSH</h1>
	
	<p>Insert what SSH is</p>
	
	<!- Link to correct computer thing ->
	
	<h2>Open your bash terminal (Mac)</h2>
	
	<p>Open "Terminal"</p>
	
	<!-Screenshot of terminal->
	
	<h2>How to SSH</h2>
	
	<p>Use SSH to connect to your Linux machine by typing "SSH" followed by USERNAME@HOSTNAME replacing USERNAME with your account name and replacing HOSTNAME with the hostname or ip address of your linux machine.</p>
	
	<p class="code">SSH tim@192.168.55.4</p>
	
	<h2>Open your bash terminal (Windows)</h2>
	
	<p>Since Windows is not based on UNIX, we have to install a program to interface with a UNIX computer from a windows computer.We will use PuTTY to SSH. PuTTY can be downloaded <a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/latest.html">here.</a> </p>
	
	<!-Quiz ->
	
	<form>
		<h3 class="question">What is SSH?</h3>
		<select id="1.1">
			<option>a</option>
			<option>b</option>
			<option>c</option>
		</select>
		<input type="button" onclick="checkAnswer()" value="Submit"> </form>

<!-- Footer PHP-->
<?php
	$path = '../';
	$title = 'Tutorial 1';
	include $path.'assets/footer.php';
?>
