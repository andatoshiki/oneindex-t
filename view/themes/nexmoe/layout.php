<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />
		<title><?php e($title.' - '.config('site_name'));?></title>
		<!-- safari browser icon support -->
		<link rel="apple-touch-icon" sizes="64x64" href="/assets/favicon.ico">
		<!-- chromium based browsers icon support -->
		<link rel="icon" href="/assets/favicon.ico">
		
		<!-- javascripts -->
		<script src="/assets/js/flv.min.js"></script>
		<script src="/assets/js/aplayer.min.js"></script>
		<script src="/assets/js/meting.min.js"></script>
		<script src="/assets/js/mdui.min.js"></script>
		<script src="/assets/js/custom.js"></script>

		<!-- css stylesheets -->
		<link rel="stylesheet" href="/assets/css/aplayer.min.css">
		<link rel="stylesheet" href="/assets/css/mdui.min.css">
		<link rel="stylesheet" href="/assets/css/oneindext.css">
	</head>
	<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">
	<header class="nav">
		<div class="navSize">
			<!-- avatar image -->
			<a href="/">
				<img class="avatar" src="//q.qlogo.cn/g?b=qq&nk=1959796501&s=100"/>
			</a>
			
			<!-- navbar extra links-->
			<div class="navRight">
				<ul class="navul">
					<!--
					<li class="navli"><a href="/images">图床</a></li>
					<li class="navli"><a href="https://blog.toshiki.top/" target="_blank">博客</a></li>
					-->
					<li class="navli"><a href="/images">图床</a></li>
					<li class="navli"><a href="/login" target="_blank">登陆</a></li>
				</ul>
				<div class="icon"></div>
			</div>
		</div>
	</header>
	<!-- github corner -->
	<a href="https://github.com/andatoshiki/oneindex-t/" class="github-corner" aria-label="View source on GitHub"><svg width="80" height="80" viewBox="0 0 250 250" style="fill:#70B7FD; color:#fff; position: absolute; top: 0; border: 0; right: 0;" aria-hidden="true"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>
		<div class="mdui-container">
			<div class="mdui-container-fluid">
				<div class="mdui-toolbar nexmoe-item">
					<a href="/"><?php e(config('site_name'));?></a>
					<?php foreach((array)$navs as $n=>$l):?>
					<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
					<a href="<?php e($l);?>"><?php e($n);?></a>
					<?php endforeach;?>
					<!--<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>-->
				</div>
			</div>
			<?php view::section('content');?>
		</div>

		<div id="blog">
		<div id="comeIn">
			<center><a href="https://drive.toshiki.top" target="_blank" class="links" id="a1">🍭主站</a><a class="links"> ・ </a><a class="links" href="https://image.toshiki.top/" target="_blank" id="a2">🍢图床</a><a class="links" id="a4"> ・ </a><a class="links" href="https://lab.toshiki.top/" target="_blank" id="a3">🍡实验室</a></center>
		</div>
		</div>

		<script src="/assets/js/urusai.js" async></script>

		<script>
			function delay(j) {
				var start = new Date().getTime();
				while (true)
					if (new Date().getTime() - start > j) break;
			}
			var links = document.getElementsByClassName("fileLinks");

			function downall() {
				for (i = 0; i < links.length; i++) {
					window.open(links[i].href, "download" + i)
					delay(2000);
				}
			}
		</script>
		<!-- meting.js change yoru prefered music provider platform, types and id in regard to https://github.com/metowolf/MetingJS's official doc-->
		<!--
		<meting-js server="netease" type="playlist" id="2485662712" fixed="true"></meting-js>
		-->

		<!-- nexmoe js -->
		<script src="/assets/js/nexmoe.js"></script>
	</body>
</html>
