<?php
	ini_set('display_errors', 'On');
	header('Content-type: application/json');
	mysql_connect(localhost, "lf", "mitka");

	mysql_select_db("db_note");
	//$result = [];
	$category_id = $_GET["category_id"];
	$result["subcategories"] = array();
	$result = mysql_query("SELECT id, name FROM subcategories WHERE category_id = $category_id;");
	if ($row = mysql_fetch_array($result)) {
		//echo json_encode($row);
	//}
		$result["subcategories"][] = array("id" => $row["id"], "name" => $row["name"]);
		
		if ($row = mysql_fetch_array($result)) {
			do {
				$result["subcategories"][] = array("id" => $row["id"], "name" => $row["name"]);
			} while($row = mysql_fetch_array($result));
		}
	} else {
		$result =  "Sorry, no records were found!";
	}
	$response['status'] = 200;
	echo json_encode($result);
?>

