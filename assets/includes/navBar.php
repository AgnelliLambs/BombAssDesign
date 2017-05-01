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
					<li><a href="<?php echo $path;?>tutorials/tutorial1.php">SSH</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial2.php">Navigation</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial3.php">Files</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial4.php">SFTP</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial5.php">File Permissions</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial6.php">Directories</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial7.php">Apache</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial8.php">Unix text editors</a></li>
				</ul>
      	</li>
        <li class="dropdown">
			  	<a class="dropdown-toggle" href="<?php echo $path;?>quizzes/quiz_home.php"  <?php if ($heading == 'Quiz'){echo 'id="active"';}?>>QUIZZES<span class="caret" id="caret1"></span></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $path;?>quizzes/quiz1.php">SSH</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz2.php">Navigation</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz3.php">Files</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz4.php">SFTP</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz5.php">File Permissions</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz6.php">Directories</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz7.php">Apache</a></li>
					<li><a href="<?php echo $path;?>quizzes/quiz8.php">Unix text editors</a></li>
				</ul>
			</li>
        <li><a href="<?php echo $path;?>glossary.php" <?php if ($heading == 'Glossary'){echo 'id="active"';}?>>GLOSSARY</a></li>
      </ul>
		 <?php if($heading == 'Glossary'){
			echo '
		<div class="col-sm-3 col-md-3 pull-right">
		<form class="navbar-form" role="search">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
			<dfiv class="input-group-btn">
				<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			</div>
			';} ?>
    </div>
  </div>
</nav>

<script src="<?php echo $path;?>assets/js/dropdown.js"></script>