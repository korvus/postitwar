<?phpsession_start();if(!isset($_GET['f'])){	_404();}else{	if($_GET['f'] === '')	{		$_filename = 'index.php';	}	else if(file_exists($_GET['f']))	{		$_filename = $_GET['f'];	}	else	{			_404();	}}if(isset($_SESSION['lang'])){	$lang = $_SESSION['lang'];}else{	$lang = 'fr';}$langfile = 'lang/' . $lang . '.txt';if(!file_exists($langfile)){	mkdir($langfile);}else{	$translation = parse_ini_file($langfile);}ob_start();include($_filename);$sContent = ob_get_contents();ob_end_clean();//$mtimeStart = microtime();$hasChanges = false;$sContent = preg_replace_callback('#{tr id=([0-9a-z_]+)}(.*){/tr}#sUi', function($matches){	$id = $matches[1];	$text = $matches[2];	return translate($id, $text);}, $sContent);echo $sContent;if($hasChanges){	include 'r/php/write_ini.php';		ksort($translation);		write_ini_file($translation, $langfile);}/*$mtimeEnd = microtime();echo 'preg time : ' . ($mtimeEnd - $mtimeStart);*/function translate($id, $text){	global $hasChanges, $translation;		// If translation exists	if(isset($translation[$id]))	{		/* If it's not a new translation, we can translate it		 * Else, we use default text		 */		if(strpos($translation[$id], '#new# ') === false)		{			return $translation[$id];		}		else		{			return substr($translation[$id], 6);		}	}	else	{		$hasChanges = true;		$translation[$id] = addcslashes('#new# ' . $text , '"');	}		return $text;}function _404(){	require '/r/404.html';	die;}