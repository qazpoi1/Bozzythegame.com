<?php
require_once ("config/configuration.php");
// require_once ("");
?>
<html>
<head>
<link rel="stylesheet" href="http://media.bozzythegame.com/css/style1.css" >
<link rel="stylesheet" href="http://media.bozzythegame.com/css/bootstrap.min.css" >
<script src="http://media.bozzythegame.com/js/jquery.js" type="text/javascript"></script>
<script src="http://media.bozzythegame.com/js/jpicker-1.1.6.min.js" type="text/javascript"></script>
<script src="http://media.bozzythegame.com/js/bootstrap.min.js" type="text/javascript"></script>
<title>Bozzy the Game - Браузерная игра - Раздел поощерений</title>
</head>
<body>
<div class="body">
	<div class="wrapper">
		<div class="header">
			<div class="logo">
				<a href="<?echo $link?>" class="logo_button"><img src="http://media.bozzythegame.com/images/logo_3.png"></img></a>
			</div>
		</div>
		<div class="subheader">
			<div class="navigation">
		<section id="navbar" style="position:relative; top:-3px;border-top:10px;">
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" style="width: auto;">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
		<a class="brand" href="http://bozzythegame.com">Bozzy the Game</a>
        <div class="nav-collapse">
			<ul class="nav">
				<li>
					<a href="http://bozzythegame.com">Главная</a>
				</li>
				<li>
					<a href="http://about.bozzythegame.com">Об игре</a>
				</li>
				<li>
					<a href="http://db.bozzythegame.com">База знаний</a>
				</li>
				<li>
					<a href="forum.http://bozzythegame.com">Форумы</a>
				</li>
            <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b> Дополнительная информация</a>
					<ul class="dropdown-menu">
						<li>
							<a href="http://support.bozzythegame.com">Техническая поддержка</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="http://bozzythegame.com/url.php?redirect=youtube&from=navi">You Tube</a>
						</li>
						<li>
							<a href="http://bozzythegame.com/url.php?redirect=facebook&from=navi">facebook</a>
						</li>
						<li>
							<a href="http://bozzythegame.com/url.php?redirect=twitter&from=navi">Twitter</a>
						</li>
						<li>
							<a href="http://bozzythegame.com/url.php?redirect=vk&from=navi">Vk</a>
						</li>
					</ul>
            </li>
			<li><a></a></li>
			<li><a></a></li>
			<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b> Chose language</a>
						<ul class="dropdown-menu">
							<li>
								<a href="?lang=ru&locale=ru">Russian</a>
							</li>
							<li>
								<a href="?lang=en&locale=en">English</a>
							</li>
						</ul>
				</li>
			</ul>
			<ul class="nav pull-right">
				<li>
					<a href="http://armory.bozzythegame.com?id=&from=nav&lang=<?php echo $_COOKIE['lang']?>&locale=<?php echo $_COOKIE['locale']?>"><b style="font-size:18px; text-align:justify">%nickname%</b></a>
				</li>
				<li><a></a></li>
				<li class="dropdown active">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Игровая валюта <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li style="color:#999 !important"><p style="text-align:center"><b style="padding:1px 20px;">%gold%</b> <br>&nbsp;<span>золотых монет</span></p>&nbsp;
								<p style="text-align:center"><b style="padding:1px 20px;">%bonus%</b> <br>&nbsp;<span>бонусных баллов</span></p>
				<hr>
								<a href="<?php echo $donate_link?>?from=navi&lang=<?php echo $_COOKIE['lang']?>&locale=<?php echo $_COOKIE['locale']?>&act=buy_gold&ref=1">Приобрести золото</a>
							</li>
							<li>
								<a href="<?php echo $donate_link?>?from=navi&lang=<?php echo $_COOKIE['lang']?>&locale=<?php echo $_COOKIE['locale']?>&act=buy_bonus&ref=1">Бонусные балы</a>
							</li>
							<li>
								<a href="<?php echo $donate_link?>?from=navi&lang=<?php echo $_COOKIE['lang']?>&locale=<?php echo $_COOKIE['locale']?>&act=referal_system">Реферальная система</a>
							</li>
							<li>
								<a href="<?php echo $donate_link?>?from=navi&lang=<?php echo $_COOKIE['lang']?>&locale=<?php echo $_COOKIE['locale']?>&act=invite">Пригласи друга</a>
							</li>
						</ul>
				</li>
							<li>
								<a href="http://play.bozzythegame.com"><b>Играть</b></a>
							</li>
							<li class="divider-vertical"></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Учётная запись <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="divider"></li>
							<li>
								<a href="#login_form_show">Регистрация</a>
							</li>
							<li>
								<a href="#redirect_auth_form_show">Авторизация</a>
							</li>
							<li class="divider"></li>
						</ul>
				</li>
          </ul>
        </div>
		<!-- /.nav-collapse -->
			</div>
		</div>
	</div>
</div>
<div class="page">
	<div class="span12">
		<h1>Донат</h1>
			<p>'You ought to be ashamed of yourself for asking such a simple question,' added the Gryphon; and then they both sat silent and looked at poor Alice, who felt ready to sink into the earth. At last the Gryphon said to the Mock Turtle, 'Drive on, old fellow! Don't be all day about it!' and he went on in these words:
			'Yes, we went to school in the sea, though you mayn't believe it—'
			'I never said I didn't!' interrupted Alice.
    '		You did,' said the Mock Turtle.</p>
			<div>
			<p>
				<a href="<?echo $search_link?>?q=snipp&type=node"><span class="label label-info">Snipp</span></a> 
				<a href="<?echo $search_link?>?q=bootstrap&type=node"><span class="label label-info">Bootstrap</span></a> 
				<a href="<?echo $search_link?>?q=ui&type=node"><span class="label label-info">UI</span></a> 
				<a href="<?echo $search_link?>?q=growth&type=node"><span class="label label-info">growth</span></a>
				| <i class="icon-user"></i> <a href="<?echo $user_link?>?user=admin">Admin</a> 
				| <i class="icon-calendar"></i> Sept 16th, 2012 at 4:20 pm
				| <i class="icon-comment"></i> <a href="<?echo $node_link?>?comment=1&act=view">3 Comments</a>
				| <i class="icon-share"></i> <a href="<?echo $share_link?>?node_id=1&share_window=open">39 Shares</a>
			</p>
		</div> 
		
	</div>
	<div class="footer">
		<div class="subfooter">
			<div class="left_col">
				<span>
					<a href="<?echo $link?>"><img src="http://media.bozzythegame.com/images/arrow-curve.png" align="left"></img>Bozzy the Game</a>
				</span>
				<br>
				<span>
					<img src="http://media.bozzythegame.com/images/arrow-curve.png" align="left"></img><a href="<?echo $support_link?>">Служба поддержки</a>
				</span>
				<br>
				<span>
					<img src="http://media.bozzythegame.com/images/arrow-curve.png" align="left"></img><a href="<?echo $forum_link?>">Форумы</a>
				</span>
				<br>
				<span>
					<img src="http://media.bozzythegame.com/images/arrow-curve.png" align="left"></img><a href="<?echo $play_link?>">Играть</a>
				</span>
				<br>
				<span>
					<img src="http://media.bozzythegame.com/images/arrow-curve.png" align="left"></img><a href="<?echo $db_link?>">База знаний</a>
				</span>
				<br>
				<span>
					<img src="http://media.bozzythegame.com/images/arrow-curve.png" align="left"></img><a href="<?echo $armory_link?>">Armory</a>
				</span>
				<br>
				<span>
					<img src="http://media.bozzythegame.com/images/arrow-curve.png" align="left"></img><a href="<?echo $about_link?>">Об игре</a>
				</span>
				<br>
				<span>
					<img src="http://media.bozzythegame.com/images/arrow-curve.png" align="left"></img><a href="<?echo $donate_link?>">Donate</a>
				</span>
			</div>
			<div class="right_col" style="float:right; position:relative; top:-15px; left:-10px;">
				<span class="copyright">Bozzylab Entertainment</span>
				<span class="date_project">2012 год</span>
				<div class="counter" style="position:relative; top:-10px; left:100px; font-size:10px;">version: 1.0.0.0.1 beta</div>
			</div>
		</div>
	</div>
</div>
		</div>
</body>
</html>