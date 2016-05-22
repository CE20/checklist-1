<?php
	$objConnect = mysql_connect("ap-cdbr-azure-southeast-b.cloudapp.net","b867729f77709e","b9e0253c");
	$objDB = mysql_select_db("foodcal");
	//require 'connect.php';

	//$_POST["imei"] = "355673062464107";

	//date_default_timezone_set("Asia/Bangkok");

	//$strIMEI = $_POST["imei"];

	//$strSQL = "SELECT * FROM food WHERE 1 AND Q_Tel = '".$strIMEI."'  AND Q_Date = '".$cur_date."' AND Q_Status = 0 ";
	$strSQL = "SELECT * FROM food WHERE 1 ORDER BY RAND() LIMIT 1" ;

	$objQuery = mysql_query($strSQL);
	$obResult = mysql_fetch_array($objQuery);
	//$intNumField = mysql_num_fields($objQuery);
	//$resultArray = array();

	$arr["f_name"] = $obResult["f_name"];
	$arr["f_pic"] = $obResult["f_pic"];
	$arr["f_cal"] = $obResult["f_cal"];


  mysql_close($objConnect);

  echo json_encode($arr);

	/*while($obResult = mysql_fetch_array($objQuery))
	{
		$arrCol = array();
		for($i=0;$i<$intNumField;$i++)
		{
			$arrCol[mysql_field_name($objQuery,$i)] = $obResult[$i];
		}
		array_push($resultArray,$arrCol);
	}

	mysql_close($objConnect);

	echo json_encode($resultArray);*/
?>
