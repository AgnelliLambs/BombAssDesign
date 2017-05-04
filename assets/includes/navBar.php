<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
		 <a class="navbar-brand" <?php if ($heading == 'Home'){echo 'id="active"';}?> href="<?php echo $path;?>index.php"><span class="you">You</span><span class="nix">Nix</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
			<li class="dropdown">
        		<a class="dropdown-toggle" href="<?php echo $path;?>tutorials/tutorial_home.php" <?php if ($heading == 'Tutorial'){echo 'id="active"';}?>>TUTORIALS<span class="caret" id="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $path;?>tutorials/tutorial1.php" <?php if ($title == 'Tutorial 1'){echo 'id="active"';}?>>SSH</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial2.php" <?php if ($title == 'Tutorial 2'){echo 'id="active"';}?>>Navigation</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial3.php" <?php if ($title == 'Tutorial 3'){echo 'id="active"';}?>>Files</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial4.php" <?php if ($title == 'Tutorial 4'){echo 'id="active"';}?>>SFTP</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial5.php" <?php if ($title == 'Tutorial 5'){echo 'id="active"';}?>>File Permissions</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial6.php" <?php if ($title == 'Tutorial 6'){echo 'id="active"';}?>>Directories</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial7.php" <?php if ($title == 'Tutorial 7'){echo 'id="active"';}?>>Apache</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial8.php" <?php if ($title == 'Tutorial 8'){echo 'id="active"';}?>>Unix text editors</a></li>
				</ul>
      	</li>
        <li class="dropdown">
			  	<a class="dropdown-toggle" href="<?php echo $path;?>quizzes/quiz_home.php"  <?php if ($heading == 'Quiz'){echo 'id="active"';}?>>QUIZZES<span class="caret" id="caret1"></span></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $path;?>quizzes/quiz1.php" <?php if ($title == 'Quiz 1'){echo 'id="active"';}?>>SSH</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz2.php" <?php if ($title == 'Quiz 2'){echo 'id="active"';}?>>Navigation</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz3.php" <?php if ($title == 'Quiz 3'){echo 'id="active"';}?>>Files</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz4.php" <?php if ($title == 'Quiz 4'){echo 'id="active"';}?>>SFTP</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz5.php" <?php if ($title == 'Quiz 5'){echo 'id="active"';}?>>File Permissions</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz6.php" <?php if ($title == 'Quiz 6'){echo 'id="active"';}?>>Directories</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz7.php" <?php if ($title == 'Quiz 7'){echo 'id="active"';}?>>Apache</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz8.php" <?php if ($title == 'Quiz 8'){echo 'id="active"';}?>>Unix text editors</a></li>
				</ul>
			</li>
        <li><a href="<?php echo $path;?>glossary.php" <?php if ($heading == 'Glossary'){echo 'id="active"';}?>>GLOSSARY</a></li>
      </ul>
    </div>
  </div>
</nav>

<script src="<?php echo $path;?>assets/js/dropdown.js"></script>