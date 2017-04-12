<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
		 <a class="navbar-brand" id="<?php if ($heading == 'Home'){echo 'active';}?>" href="<?php echo $path;?>index.php"><Span id="you">You</Span><Span id="nix">Nix</Span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
			<li class="dropdown">
        		<a class="dropdown-toggle" href="<?php echo $path;?>tutorials/tutorial_home.php" id="<?php if ($heading == 'Tutorial'){echo 'active';}?>">TUTORIALS<span class="caret" id="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $path;?>tutorials/tutorial1.php">SSH</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial2.php">Navigation</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial3.php">Creating and Deleting Files</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial4.php">SFTP</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial5.php">File Permissions</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial6.php">How The Internet Works</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial7.php">Apache</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial8.php">Unix Text Editors</a></li>
				</ul>
      	</li>
        <li class="dropdown">
			  	<a class="dropdown-toggle" href="<?php echo $path;?>quizzes/quiz_home.php"  id="<?php if ($heading == 'Quiz'){echo 'active';}?>">QUIZZES<span class="caret" id="caret1"></span></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $path;?>quizzes/quiz1.php">SSH</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz2.php">Navigation</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz3.php">Creating and Deleting Files</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz4.php">SFTP</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz5.php">File Permissions</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz6.php">How The Internet Works</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz7.php">Apache</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz8.php">Unix Text Editors</a></li>
				</ul>
			</li>
        <li><a href="<?php echo $path;?>glossary.php" id="<?php if ($heading == 'Glossary'){echo 'active';}?>">GLOSSARY</a></li>
      </ul>
    </div>
  </div>
</nav>

<script src="<?php echo $path;?>assets/js/dropdown.js"></script>