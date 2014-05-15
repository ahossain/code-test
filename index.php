<?php
$name = "";

if (isset($_POST['action']) & $_POST['action'] == 'save') {
	$name = $_POST['nm'];
	
	$conn = mysql_connect('localhost','root','') or die('error connecting to db server');
	mysql_select_db('test');
	
	mysql_query("INSERT INTO test_table (test_field) VALUES ('". mysql_escape_string($name) ."')");
}

$form = '<div>Input you name</div><form method="post" name="fm" action""><input type="hidden" name="action" value="save"><input type="text" name="nm" value=""><input type="submit" value="Submit"></form>';

echo $form;

if (!empty($name))
	echo "Hello, $name!";

exit;

class SomeClass
{
protected $_someMember;

public function __construct()
{
$this->_someMember = 5;
}

public function getMember() 
{
	return $this->_someMember;
}

public static function getSomethingStatic()
{
	
return $this->_someMember * 10;
}
}


$c = new SomeClass();

echo $c->getSomethingStatic();
exit;

$q = "SELECT * FROM DATA WHERE id = $_POST[id]";

print_r($q);

exit;

$barcode = '0021231123214';
if (is_numeric($barcode) && strlen($barcode) == 13)
	echo (string) $barcode;
	
echo 'ew';
exit;

	$msg = "";
	if(isset($_REQUEST['Submit']))
	{
		$msg = "Something was wrong! Please contact at "; 
	}

	echo $msg;
?>

<form name="this_form" action="" method="post">
<input type="text" name="txt">
<input type="submit" name="Submit" value="Submit!">
</form>

<script>
	document.this_form.action = "http://google.com";
</script>




<?php
	exit;
	if ( isset($_POST['user_input'] ) )
	{
		$input = $_POST['user_input'];
		
		if ( !ctype_alnum($input) )
		{
			echo 'Please enter only alphanumeric value.';
			exit;
		}
		
		if ( strlen($input) > 5 )
		{
			echo 'Please enter strings not more than 5 characters.';
			exit;
		}
			
		$im = imagecreatetruecolor(120, 25);
		$text_color = imagecolorallocate($im, 255, 255, 255);
		imagestring($im, 5, 15, 5, $input, $text_color);
		
		//header('Content-Type: image/jpeg');
//		imagejpeg($im);
		ob_start (); 
  		imagejpeg ($im);
  		$image_data = ob_get_contents (); 
		ob_end_clean (); 

		$base64 = base64_encode( $image_data );
		echo '<img src="data:image/jpeg;base64,'.$base64.'" />';
		imagedestroy($im);
		
		exit;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>TEXT to IMAGE</title>
<style>
	#input { background-color: #CCC; width: 200px; padding: 20px; }
	#output { position: absolute; left: 260px; top: 90px; }
	.signature { margin-top: 100px; }
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(e) {
	$('input[name="generate"]').hide();
	$('input[name="user_input"]').keyup(function(e) {
		$.post("index.php", { user_input: $('input[name="user_input"]').val() })
		.done(function(data) {
			$('#output').html(data);
		});
	});
});
</script>
</head>
<body>
<h1>TEXT -> IMAGE</h1>
<div id="input">
    <form name="picture_form" action="" method="post">
    <input type="text" name="user_input">
    <input type="submit" name="generate" value="Generate">
	</form>
</div>
<div id="output"></div>
<div class="signature">
Prepared by Codemen
</div>
</body>
</html>