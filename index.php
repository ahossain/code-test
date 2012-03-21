<?      
	ini_set('display_errors','0');
	error_reporting(0);
	
	require_once ( dirname(__FILE__).'/_include/main_file.php' );

	$request_uri = $_SERVER['REQUEST_URI'];

	if (!auth::is_user()  
		&& $_SERVER['REQUEST_URI'] != "/home/login"
		&& $_SERVER['REQUEST_URI'] != "/home/doLogin" 
		&& $_SERVER['REQUEST_URI'] != "/home/forget_password"
		&& $_SERVER['REQUEST_URI'] != "/home/create_account"
		&& $_SERVER['REQUEST_URI'] != "/account/request_psss"
		&& $_SERVER['REQUEST_URI'] != "/account/create_account"
		&& $_SERVER['REQUEST_URI'] != "/account/account_create"
		&& substr_count($_SERVER['REQUEST_URI'] , "/software/") == 0)
		{
			header("location:http://".$_SERVER['HTTP_HOST']."/home/login");
			exit();
		} 
	
	app::run();
?>