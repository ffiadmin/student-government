<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<title>Student Government Association</title>
<link rel="shortcut icon" href="<?php bloginfo('template_url');?>/img/favicon.ico" />
<link href="http://delfinicdn.ffstatic.com/stylesheets/delfini.all.min.css" rel="stylesheet" />
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css" rel="stylesheet" />
<link href="<?php bloginfo('stylesheet_directory');?>/css/style.min.css" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body>
<section class="login">
<div class="design">
<div class="login">
<form action="#" method="post">
<h2>Login</h2>
<p>Email address:</p><input autocomplete="off" name="username" type="email" />
<p>Password:</p><input autocomplete="off" name="password" type="password"/>
<input class="redirect" name="redirect" type="hidden" />
<input name="action" type="hidden" value="login" />
<br /><br />
<input class="red" type="submit" value="Login" />
<p><a href="#">Forgot your password?</a></p>
</form>
</div>

<span class="toggle"></span>

<div class="register">
<form action="#" method="get">
<h2>Register</h2>
<p>First and last name:</p><input autocomplete="off" name="name" type="text" />
<p>Email address:</p><input autocomplete="off" name="username" type="email" />
<p>Password:</p><input autocomplete="off" name="password" type="password" />
<input class="redirect" name="redirect" type="hidden" />
<input name="action" type="hidden" value="register" />
<br /><br />
<input class="green" type="submit" value="Register" />
</form>
</div>
</div>
</section>

<nav class="main">
<ul class="nav">
<li class="logo"><a href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo('template_url');?>/img/banner.png" /></a></li>
<?php wp_list_pages(array("depth" => 1, "title_li" => "")); ?>
</ul>

<ul class="breadcrumb">
<li><a href="#">Home</a></li>
<li><a href="#">Book Exchange</a></li>
<li>View my Books</li>
</ul>

<ul class="exchange">
<li><a href="#">Sell Books</a></li>
<li><a href="#">Search</a></li>
<li><a href="#">Browse</a></li>
<li class="myAccount"><a href="#">My Account</a></li>
<li class="admin"><a href="#">Administration</a></li>
</ul>

<section class="search">
<form action="#" method="get">
<input autocomplete="off" class="noMod search template" name="search" type="text" />
<input type="hidden" name="category" value="0" />
<input type="hidden" name="searchBy" value="title" />
<span class="performSearch"></span>
</form>
</section>

<section class="flag">
<img src="<?php bloginfo('template_url');?>/img/login.png" />
</section>
</nav>