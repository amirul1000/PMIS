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
				$info['table']    = "rest_of_recreation";
				$data['employee_id']   = $_REQUEST['employee_id'];
                $data['from_date']   = $_REQUEST['from_date'];
                $data['to_date']   = $_REQUEST['to_date'];
                $data['coming_date']   = $_REQUEST['coming_date'];
                
				
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
				
				include("rest_of_recreation_list.php");						   
				break;    
		case "edit":      
				$Id               = $_REQUEST['id'];
				if( !empty($Id ))
				{
					$info['table']    = "rest_of_recreation";
					$info['fields']   = array("*");   	   
					$info['where']    =  "id=".$Id;
				   
					$res  =  $db->select($info);
				   
					$Id        = $res[0]['id'];  
					$employee_id    = $res[0]['employee_id'];
					$from_date    = $res[0]['from_date'];
					$to_date    = $res[0]['to_date'];
					$coming_date    = $res[0]['coming_date'];
					
				 }
						   
				include("rest_of_recreation_editor.php");						  
				break;
						   
         case 'delete': 
				$Id               = $_REQUEST['id'];
				
				$info['table']    = "rest_of_recreation";
				$info['where']    = "id='$Id'";
				
				if($Id)
				{
					$db->delete($info);
				}
				include("rest_of_recreation_list.php");						   
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
				include("rest_of_recreation_list.php");
				break; 
        case "search_rest_of_recreation":
				$_REQUEST['page'] = 1;  
				$_SESSION["search"]="yes";
				$_SESSION['field_name'] = $_REQUEST['field_name'];
				$_SESSION["field_value"] = $_REQUEST['field_value'];
				include("rest_of_recreation_list.php");
				break;  								   
						
	     default :    
		       include("rest_of_recreation_list.php");		         
	   }

//Protect same image name
 function getMaxId($db)
 {	  
   $sql    = "SHOW TABLE STATUS LIKE 'rest_of_recreation'";
	$result = $db->execQuery($sql);
	$row    = $db->resultArray();
	return $row[0]['Auto_increment'];	   
 } 	 
?>
