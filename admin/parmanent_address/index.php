<?php
       session_start();
       include("../../common/lib.php");
	   include("../../lib/class.db.php");
	   include("../../common/config.php");
	   
	    if(empty($_SESSION['users_id'])) 
	   {
	     Header("Location: ../login/");
	   }
	  
	   $cmd = $_REQUEST['cmd'];
	   switch($cmd)
	   {
	     
		  case 'add': 
				$info['table']    = "parmanent_address";
				$data['employee_id']   = $_REQUEST['employee_id'];
                $data['road_village']   = $_REQUEST['road_village'];
                $data['postoffice']   = $_REQUEST['postoffice'];
                $data['post_code']   = $_REQUEST['post_code'];
                $data['police_station_thana']   = $_REQUEST['police_station_thana'];
                $data['phone_mobile']   = $_REQUEST['phone_mobile'];
                $data['district_id']   = $_REQUEST['district_id'];
                
				
				$info['data']     =  $data;
				
				if(empty($_REQUEST['id']))
				{
					 $db->insert($info);
				}
				else
				{
					$Id            = $_REQUEST['id'];
					$info['where'] = "id=".$Id;
					
					$db->update($info);
				}
				
				include("parmanent_address_list.php");						   
				break;    
		case "edit":      
				$Id               = $_REQUEST['id'];
				if( !empty($Id ))
				{
					$info['table']    = "parmanent_address";
					$info['fields']   = array("*");   	   
					$info['where']    =  "id=".$Id;
				   
					$res  =  $db->select($info);
				   
					$Id        = $res[0]['id'];  
					$employee_id    = $res[0]['employee_id'];
					$road_village    = $res[0]['road_village'];
					$postoffice    = $res[0]['postoffice'];
					$post_code    = $res[0]['post_code'];
					$police_station_thana    = $res[0]['police_station_thana'];
					$phone_mobile    = $res[0]['phone_mobile'];
					$district_id    = $res[0]['district_id'];
					
				 }
						   
				include("parmanent_address_editor.php");						  
				break;
						   
         case 'delete': 
				$Id               = $_REQUEST['id'];
				
				$info['table']    = "parmanent_address";
				$info['where']    = "id='$Id'";
				
				if($Id)
				{
					$db->delete($info);
				}
				include("parmanent_address_list.php");						   
				break; 
						   
         case "list" :    	 
			  if(!empty($_REQUEST['page'])&&$_SESSION["search"]=="yes")
				{
				  $_SESSION["search"]="yes";
				}
				else
				{
				   $_SESSION["search"]="no";
					unset($_SESSION["search"]);
					unset($_SESSION['field_name']);
					unset($_SESSION["field_value"]); 
				}
				include("parmanent_address_list.php");
				break; 
        case "search_parmanent_address":
				$_REQUEST['page'] = 1;  
				$_SESSION["search"]="yes";
				$_SESSION['field_name'] = $_REQUEST['field_name'];
				$_SESSION["field_value"] = $_REQUEST['field_value'];
				include("parmanent_address_list.php");
				break;  								   
						
	     default :    
		       include("parmanent_address_list.php");		         
	   }

//Protect same image name
 function getMaxId($db)
 {	  
   $sql    = "SHOW TABLE STATUS LIKE 'parmanent_address'";
	$result = $db->execQuery($sql);
	$row    = $db->resultArray();
	return $row[0]['Auto_increment'];	   
 } 	 
?>
