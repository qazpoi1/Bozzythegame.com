<?php
// require_once ("");

$user = $_GET['user'];
$link = "http://bozzythegame.com";

?>
<link rel="stylesheet" href="http://media.bozzythegame.com/css/style1.css" >
<link rel="stylesheet" href="http://media.bozzythegame.com/css/bootstrap.min.css" >
<script src="http://media.bozzythegame.com/js/jquery.js" type="text/javascript"></script>
<script src="http://media.bozzythegame.com/js/jpicker-1.1.6.min.js" type="text/javascript"></script>
<script src="http://media.bozzythegame.com/js/bootstrap.min.js" type="text/javascript"></script>
<div class="span2 well">
	<div class="row">
		<div class="span1"><a href="<? echo $user_link;?>?user=<?echo $user?>" class="thumbnail"><img src="http://media.bozzythegame.com/images/standart.jpg" alt=""></a></div>
		<div class="span3">
			<p><? echo $user?></p>
          	<strong><p>First Last Name</p></strong>
			<li class="dropdown" style="list-style:none">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class=" badge badge-info">2 follower (s)</span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<? echo $user_link;?>?user=Bomva">Bomva</a></li>
                <li><a href="<? echo $user_link;?>?user=Admin">Admin</a></li>
				<li class="divider"></li>
				<li><a href="<?echo $link?>">На главную</a></li>
              </ul>
            </li>
		</div>
	</div>
</div>