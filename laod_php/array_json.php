<?php
	
	echo "----------------file_img2";
	print_r($_FILE['img2']);
	die();
	date_default_timezone_set('America/Mexico_City');
	$date=date('Y-m-d_H-i-s'); 
	echo "----------------->post";
	if (isset($_POST['imgs']))
	{
		$string         = $_POST['imgs'];
		$img_array_json = json_decode($string);
		$contador=1;
		$can_valores=0;
		foreach ($img_array_json->img_array as &$valor) {
			$can_valores+=strlen($valor);
			$filteredData=substr($valor, strpos($valor,",")+1);
			//$filteredData=str_replace(' ', "+", $filteredData);
			$unencodedData=base64_decode($filteredData);
			$fp = fopen( ''.$date.'_'.$contador.'.jpg', 'wb' );
			$contador+=$contador;
			fwrite($fp, $unencodedData);
			fclose($fp);
		}
	}
	echo "$can_valores";
	
?>