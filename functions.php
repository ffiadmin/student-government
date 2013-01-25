<?php
//Register the request for a remotely hosted jQuery script
	function sg_remote_jquery() {
		wp_register_script("jquery-remote", "//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js");
		wp_enqueue_script("jquery-remote");
	}
	
//Register the request for a remotely hosted jQuery UI script
	function sg_remote_jquery_ui() {
		wp_register_script("jquery-ui-remote", "//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js");
		wp_enqueue_script("jquery-ui-remote");
	}
	
//Register the request for the Delfini UI script
	function sg_delfini() {
		wp_register_script("delfini", "//delfinicdn.ffstatic.com/javascripts/delfini.all.min.js", array("jquery-remote"));
		wp_enqueue_script("delfini");
	}
	
//Register the request for the UserVoice script
	function sg_uservoice() {
		wp_register_script("uservoice", "//widget.uservoice.com/JkKcZfC4qw8m0wz3PeMf5Q.js");
		wp_enqueue_script("uservoice");
	}
	
//Register the request for the HTML5Shiv script
	function sg_html5shiv() {
		wp_register_script("html5shiv", "//html5shiv.googlecode.com/svn/trunk/html5.js");
		wp_enqueue_script("html5shiv");
	}
	
//Register the request for the template script
	function sg_template_script() {
		wp_register_script("template-script", get_template_directory_uri() . "/js/template.min.js.php", array("jquery-remote"));
		wp_enqueue_script("template-script");
	}
	
//Add the above script registrations into an action hook
	add_action("wp_enqueue_scripts", "sg_remote_jquery");
	add_action("wp_enqueue_scripts", "sg_remote_jquery_ui");
	add_action("wp_enqueue_scripts", "sg_delfini");
	add_action("wp_enqueue_scripts", "sg_uservoice");
	add_action("wp_enqueue_scripts", "sg_html5shiv");
	add_action("wp_enqueue_scripts", "sg_template_script");
?>