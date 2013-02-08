<footer>
<?php
	$pages = get_pages(array("sort_column" => "menu_order"));
	$info = array("0" => array()); //The inner array with a key of 0 is for top-level pages
	
	for ($i = 0; $i < count($pages); $i++) {
		$parent = $pages[$i]->post_parent;
		$ID = $pages[$i]->ID;
		$title = $pages[$i]->post_title;
		$URL = $pages[$i]->guid;
		
	//Create the array which will hold the child pages whose parent is indicated by the key
		!array_key_exists($parent, $info) ? $info[$parent] = array() : TRUE;
		
	//Push the page data onto the info array
		array_push($info[$parent], array("ID" => $ID,"title" => $title, "URL" => $URL));
	}
?>
<section class="main">
<nav>
<ul>
<?php
	$TLPages = $info[0];
	
	for ($i = 0; $i < count($TLPages); $i++) {
		echo "<li>
<ul>
<li><a class=\"item" . ($i + 1) . "\" href=\"" . $TLPages[$i]['URL'] . "\">" . $TLPages[$i]['title'] . "</a></li>
";

	//Display subpages
		if (array_key_exists($TLPages[$i]['ID'], $info)) {
			$data = $info[$TLPages[$i]['ID']];
			
			for($j = 0; $j < count($data); $j++) {
				echo "<li><a href=\"" . $data[$j]['URL'] . "\">" . $data[$j]['title'] . "</a></li>
";
			}
		}

echo "</ul>
</li>
";
	}
?>
</ul>
</nav>

<section>
<h2>About Us</h2>
<p>We are a representative government that strives for intellectual, moral, spiritual, and social development of the student body.</p>
<p class="networking">
<a href="http://www.facebook.com/pages/Student-Government-Association-at-Grove-City-College/149828851728032" target="_blank"><img src="<?php bloginfo('template_url');?>/img/facebook.png" /></a>
<a href="http://twitter.com/sgaatgcc" target="_blank"><img src="<?php bloginfo('template_url');?>/img/twitter.png" /></a>
</p>
</section>
</section>

<section class="footer">
<p>&copy; <?php echo date("Y"); ?> Grove City College Student Government Association</p>

<ul class="footerDetails">
<li><a class="highlight" href="http://www2.gcc.edu/ITS/policy/web/disclaimer.htm" target="_blank">Disclaimer</a></li>
<li>Site developed by <a class="highlight" href="mailto:sprynoj1@gcc.edu">Oliver Spryn</a> and maintained by <a class="highlight" href="mailto:sga@gcc.edu">SGA members</a></li>
</ul>
</section>
</footer>
<?php wp_footer(); ?>
</body>
</html>