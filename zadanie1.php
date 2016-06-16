$in = $_GET["key"]; 
$md5 - md5($in); 
echo $md5; 
$a = Array("md5"=>"$_GET["key"]"); 
echo json_encode($a);