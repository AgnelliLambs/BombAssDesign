<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo $path;?>index.php">YouNix</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
			<li class="dropdown">
        		<a class="dropdown-toggle" href="google.com">Tutorials<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Navigation</a></li>
					<li><a href="<?php echo $path;?>tutorials/ssh.php">SSH</a></li>
					<li><a href="#">SFTP</a></li>
					<li><a href="#">Creating and deleting files</a></li>
					<li><a href="#">File Permissions</a></li>
					<li><a href="#">Publishing a website</a></li>
					<li><a href="#">UNIX applications</a></li>
					<li><a href="#">Advanced terminal commands</a></li>
					<li><a href="#">Simple Scripting</a></li>
					<li><a href="#">Advanced Scripting</a></li>
				</ul>
      	</li>
        <li><a href="#">Quizzes</a></li>
        <li><a href="#">Glossary</a></li>
      </ul>
    </div>
  </div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    $(function() {
		 var isMobile = /Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
		 if (!isMobile) {
			  $(".dropdown").hover(
					function(){ $(this).addClass('open') },
					function(){ $(this).removeClass('open') }
			  );
    	}
	 });
</script>