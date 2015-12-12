<?php
$db_username = 'root';
$db_password = '';
$db_name = 'j3databox';
$db_host = 'localhost';
$item_per_page = 10;

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
$mysqli->set_charset("utf8");
//include config file
//sanitize post value
$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

//throw HTTP error if page number is not valid
if(!is_numeric($page_number)){
	header('HTTP/1.1 500 Invalid page number!');
	exit();
}
//get current starting point of records
$position = ($page_number * $item_per_page);

//Limit our results within a specified range.

//if(!isset($this->input->post("divis_id")){
if(isset($_POST['data_group'])){$temp = $_POST['data_group'];}else{$temp = "";} 
if(isset($_POST['divis_id'])){$temp2 = $_POST['divis_id'];}else{$temp2 = "";} 

$results = $mysqli->prepare("SELECT databox_id,date_upload,groupname,subject,divisname,short_division
	FROM databox_upload left join data_group on data_group.group_Id = databox_upload.group_Id left join division on division.divisId = data_group.group_id
	WHERE data_group.group_Id like '%".$temp."%' AND division.divisId like '%".$temp2."%' ORDER BY databox_upload.databox_id DESC LIMIT $position, $item_per_page");

//}else{$results = $mysqli->prepare("}

//if(!isset($this->input->post("divis_id")){
$results->execute(); //Execute prepared Query
//}else{$results = $mysqli->prepare("}

$results->bind_result($databox_id, $date_upload, $groupname,$subject,$divisname,$short_division); 


//$results->bind_result($id, $name, $message); //bind variables to prepared statement

//output results from database
                                                  echo "<table id='tableId' class='table table-hover tablesorter'>
                            <thead>
                                <tr>
                                    <th>เวลา</th>
                                    <th>ชื่องาน</th>
                  
                                </tr>
                            </thead>
                            <tbody> "; 
                             
							while($results->fetch()){  
							$hidden=$databox_id;
						echo "<tr >";
						echo "<td  onclick=\"chk(".$hidden.")\"  width='20%' >".$date_upload."</td>";	
						echo "<td  onclick=\"chk(".$hidden.")\" width='70%'>".$subject."</td>";
						echo "</tr>";
						} 

						echo "</tbody>
                        </table>";
						?>







