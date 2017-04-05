<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
		 <a class="navbar-brand" href="<?php echo $path;?>index.php"><Span id="you">You</Span><Span id="nix">Nix</Span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
			<li class="dropdown">
        		<a class="dropdown-toggle" href="google.com">TUTORIALS<span class="caret" id="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $path;?>tutorials/tutorial1.php">SSH</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial2.php">Navigation</a></li>
					<li><a href="#">Creating and deleting files</a></li>
					<li><a href="#">SFTP</a></li>
					<li><a href="#">File Permissions</a></li>
					<li><a href="#">How the internet works</a></li>
					<li><a href="#">Apache</a></li>
					<li><a href="#">Unix text editors</a></li>
				</ul>
      	</li>
        <li class="dropdown">
			  	<a class="dropdown-toggle" href="#">QUIZZES<span class="caret" id="caret1"></span></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $path;?>tutorials/tutorial1.php">SSH</a></li>
					<li><a href="<?php echo $path;?>tutorials/tutorial2.php">Navigation</a></li>
					<li><a href="#">Creating and deleting files</a></li>
					<li><a href="#">SFTP</a></li>
					<li><a href="#">File Permissions</a></li>
					<li><a href="#">How the internet works</a></li>
					<li><a href="#">Apache</a></li>
					<li><a href="#">Unix text editors</a></li>
				</ul>
			</li>
        <li><a href="#">GLOSSARY</a></li>
      </ul>
    </div>
  </div>
</nav>


<script src="<?php echo $path;?>assets/js/dropdown.js"></script>