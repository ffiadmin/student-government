<aside class="sidebar right">
<?php
//Generate the sidebar links
	$links = "";
	
	if (!empty($post->post_parent)) {
		$links = "<li class=\"up\"><a href=\"" . get_permalink($post->post_parent) . "\">Back up to " . get_the_title($post->post_parent) . "</a></li>\n";
	}
	
	$links .= wp_list_pages('title_li=&depth=1&child_of='.$post->ID.'&echo=0');
	
	if (!empty($links)) {
?>
<section class="menu">
<ul>
<?php echo $links; ?>
</ul>
</section>
<?php
	}
?>

<section class="item1">
<h2>New Site Launched</h2>
<p>The Student Government Association is proud to present a completly redesigned web site and book exchange. We invite you to explore our new site, and stay tuned as update our content and use it to your advantage.</p>
</section>

<section class="item2">
<h2>Book Exchange is Live!</h2>
<p>We have just launched a reimagined and redesiged <a href="http://sgagcc.co.cc/book-exchange/">Book Exchange</a>. The inventory of books has been refreshed and is ready for your books! Open a <a href="http://sgagcc.co.cc/login/">new account</a> and head over to the <a href="http://sgagcc.co.cc/book-exchange/">new exchange</a> to begin selling and buying books.</p>
</section>

<section class="item3">
<h2>Feedback</h2>
<p>If you have any ideas on how we can improve our site, or if you have come across a problem in on our site, please let us know. There is a "Feedback" button on the center-right side of each page. Put your comments there, and we will do what we can to accommodate your request.</p>
</section>
</aside>