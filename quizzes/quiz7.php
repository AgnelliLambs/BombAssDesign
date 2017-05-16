<!-- Quiz 6 -->
<!-- B.A.D Design -->


<!-- Header PHP-->

<?php
	$path = '../';
	$title = 'Quiz 7';
	$heading = 'Quiz';
	include $path.'assets/includes/header.php';
?>
		<!-- Quiz -->
<div class="quiz">
	<h2>Apache</h2>
	<form>

	<h3>True or False: Apache is the most popular web server.</h3>
	<div class ="question">
	
	<input type='radio' name='answer1' id='a' value='0'>
	<label for="a">True</label>
	<br/>
	<input type='radio' name='answer1' id='b' value='1'>
	<label for="b">False</label>
	<br/>
</div>


	<h3>Which command updates the list of available programs?</h3>
	<div class ="question">
	<input type='radio' name='answer2' id='d' value='0'>
	<label for="d">sudo apt-get insstall apache2</label>
	<br/>
	<input type='radio' name='answer2' id='e' value='1'>
	<label for="e">sudo apt-get update</label>
	<br/>
	<input type='radio' name='answer2' id='f' value='2'>
	<label for="f">apt-get update</label>
	<br/>
</div>

	<h3>Which command installs apache?</h3>
	<div class ="question">
	<input type='radio' name='answer3' id='g' value='0'>
	<label for="g">sudo apt-get install apache2</label>
	<br/>
	<input type='radio' name='answer3' id='h' value='1'>
	<label for="h">sudo apt-get updatee</label>
	<br/>
	<input type='radio' name='answer3' id='i' value='2'>
	<label for="i">apt-get install apache2</label>
	<br/>
</div>

	<h3>Where is the default site located on the server?</h3>
	<div class ="question">
	<input type='radio' name='answer4' id='j' value='0'>
	<label for="j">/var/www/http</label>
	<br/>
	<input type='radio' name='answer4' id='k' value='1'>
	<label for="k">/var/www/html</label>
	<br/>
	<input type='radio' name='answer4' id='l' value='2'>
	<label for="l">var/http/html</label>
	<br/>
</div>

	<h3>Where is the apache settings file located?</h3>
	<div class ="question">
	<input type='radio' name='answer5' id='m' value='0'>
	<label for="m">/etc/apache/httpd.conf</label>
	<br/>
	<input type='radio' name='answer5' id='n' value='1'>
	<label for="n">/etc/apache/apache.conf</label>
	<br/>
	<input type='radio' name='answer5' id='o' value='2'>
	<label for="o">/etc/apache2/apache2.conf</label>
	<br/>
</div>
		<div class="buttonHolder"><input type="button" onclick="checkQuiz(7)" value="Submit"></div></div>
	</form>

<div class="row">
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
				<a id='quizLink' href="<?php echo $path;?>quizzes/quiz6.php">Previous Quiz</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
			<a id='quizLink' href="<?php echo $path;?>tutorial/tutorial7.php">Go to Tutorial</a>
			</div></div>
		<div class="col-md-4 col-sm-4 centered">
			<div class="circleButton">
				<a id='quizLink' href="<?php echo $path;?>quizzes/quiz8.php">Next Quiz</a>
			</div></div>
</div>

<!-- Footer PHP-->
<?php
	$path = '../';
	$title = 'Quiz 6';
	include $path.'assets/includes/footer.php';
?>
