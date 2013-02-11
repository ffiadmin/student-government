<?php
//Perform user registrations
	if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['action']) && $_POST['action'] == "register") {
		define("WP_USE_THEMES", false);
		require_once("../../../wp-blog-header.php");
		require_once("includes/Validate.php");
		
		$displayName = $_POST['name'];
		$name = explode(" ", $displayName);
		$firstName = Validate::required($name[0]);
		$lastName = Validate::required($name[1]);
		$email = Validate::isEmail($_POST['username']);
		$password = Validate::required($_POST['password']);
		
	//Has this user name already been taken?
		if (username_exists($email)) {
			die("This username already exists.");
		}
		
	//Is this email from the gcc.edu email domain?
		$emailSplit = explode("@", $email);
		
		if (strtolower($emailSplit[1]) != "gcc.edu") {
			die("Sorry, sign-ups are only permitted using the GCC.edu email domain.");
		}
		
	//Complete resitration
		$registration = array("display_name" => $displayName, "first_name" => $firstName, "last_name" => $lastName, "user_email" => $email, "user_login" => $email, "user_pass" => $password);
		wp_insert_user($registration);
		wp_redirect(site_url() . "/wp-login.php");
		exit;
	}

//Register the request for a remotely hosted jQuery script
	/*function sg_remote_jquery() {
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
	}*/
	
//Add the above script registrations into an action hook
	//add_action("wp_enqueue_scripts", "sg_remote_jquery");
	//add_action("wp_enqueue_scripts", "sg_remote_jquery_ui");
	//add_action("wp_enqueue_scripts", "sg_delfini");
	//add_action("wp_enqueue_scripts", "sg_uservoice");
	//add_action("wp_enqueue_scripts", "sg_html5shiv");
	//add_action("wp_enqueue_scripts", "sg_template_script");
?>