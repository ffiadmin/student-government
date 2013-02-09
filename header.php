<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<title><?php is_front_page() ? bloginfo("name") : wp_title(""); ?></title>
<link rel="shortcut icon" href="<?php bloginfo('template_url');?>/img/favicon.ico" />
<link href="//delfinicdn.ffstatic.com/stylesheets/delfini.all.min.css" rel="stylesheet" />
<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css" rel="stylesheet" />
<link href="<?php bloginfo('template_directory'); ?>/css/style.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="//delfinicdn.ffstatic.com/javascripts/delfini.all.min.js"></script>
<script src="//widget.uservoice.com/JkKcZfC4qw8m0wz3PeMf5Q.js"></script>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/template.min.js.php"></script>
<?php wp_head(); ?>
</head>

<body>
<?php if (!is_user_logged_in()) { ?>
<section class="login">
<div class="design">
<div class="login">
<form action="<?php echo wp_login_url($_SERVER['REQUEST_URI']);?>" method="post">
<h2>Login</h2>
<p>Email address:</p><input autocomplete="off" name="log" type="email" />
<p>Password:</p><input autocomplete="off" name="pwd" type="password"/>
<input class="redirect" name="redirect_old" type="hidden" />
<input name="action" type="hidden" value="login" />
<br /><br />
<input class="red" name="wp-submit" type="submit" value="Login" />
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
<?php } ?>
<nav class="main">
<ul class="nav">
<li class="logo"><a href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo('template_url');?>/img/banner.png" /></a></li>
<?php wp_list_pages(array("depth" => 1, "title_li" => "")); ?>
</ul>

<ul class="breadcrumb">
<?php echo is_front_page() ? "<li class=\"noLink\">Home</li>" : "<li><a href=\"" . get_bloginfo("url") . "\">Home</a></li>"; ?></li>
</ul>

<ul class="exchange">
<li><a href="<?php echo get_bloginfo("url") . "/book-exchange/sell-books"; ?>">Sell Books</a></li>
<li><a href="<?php echo get_bloginfo("url") . "/book-exchange/search"; ?>">Search</a></li>
<li><a href="<?php echo get_bloginfo("url") . "/book-exchange/listings"; ?>">Browse</a></li>
<li class="myAccount"><a href="<?php echo get_bloginfo("url") . "/book-exchange/account"; ?>">My Account</a></li>
<?php if (current_user_can("manage_options")) {echo "<li class=\"admin\"><a href=\"" . get_bloginfo("url") . "/admin\">Administration</a></li>";} ?>
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
<?php
	if (is_user_logged_in()) {
		echo "<a href=\"" . wp_logout_url(home_url()) . "\"><img src=\"" . get_bloginfo('template_url') . "/img/logout.png\" /></a>";
	} else {
		echo "<img src=\"" . get_bloginfo('template_url') . "/img/login.png\"/>";
	}
?>
</section>
</nav>