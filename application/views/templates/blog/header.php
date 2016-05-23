<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" />
        <title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="/static/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/static/css/blog/base.css" />
	</head>
    </head>
    <body>
    	<input type="hidden" id="curIndex" value="<?php echo $curIndex ?>">
        <nav id="topbar">
        	<div class="tb-link">
        		<a href="/index.php/blog/index">首页</a>
        		<a href="">生活</a>
        		<a href="">闲谈</a>
        		<a href="">技术</a>
        		<a href="">收集</a>
        		<a href="/index.php/blog/words">留言</a>
        	</div>
        </nav>

        <h1 class="my_words"><?php echo $sayhi; ?></h1>