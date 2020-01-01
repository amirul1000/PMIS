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
				$info['table']    = "disciplinary_action";
				$data['employee_id']   = $_REQUEST['employee_id'];
                $data['nature_offence']   = $_REQUEST['nature_offence'];
                $data['punishment']   = $_REQUEST['punishment'];
                $data['date']   = $_REQUEST['date'];
                
				
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
				
				include("disciplinary_action_list.php");						   
				break;    
		case "edit":      
				$Id               = $_REQUEST['id'];
				if( !empty($Id ))
				{
					$info['table']    = "disciplinary_action";
					$info['fields']   = array("*");   	   
					$info['where']    =  "id=".$Id;
				   
					$res  =  $db->select($info);
				   
					$Id        = $res[0]['id'];  
					$employee_id    = $res[0]['employee_id'];
					$nature_offence    = $res[0]['nature_offence'];
					$punishment    = $res[0]['punishment'];
					$date    = $res[0]['date'];
					
				 }
						   
				include("disciplinary_action_editor.php");						  
				break;
						   
         case 'delete': 
				$Id               = $_REQUEST['id'];
				
				$info['table']    = "disciplinary_action";
				$info['where']    = "id='$Id'";
				
				if($Id)
				{
					$db->delete($info);
				}
				include("disciplinary_action_list.php");						   
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
				include("disciplinary_action_list.php");
				break; 
        case "search_disciplinary_action":
				$_REQUEST['page'] = 1;  
				$_SESSION["search"]="yes";
				$_SESSION['field_name'] = $_REQUEST['field_name'];
				$_SESSION["field_value"] = $_REQUEST['field_value'];
				include("disciplinary_action_list.php");
				break;  								   
						
	     default :    
		       include("disciplinary_action_list.php");		         
	   }

//Protect same image name
 function getMaxId($db)
 {	  
   $sql    = "SHOW TABLE STATUS LIKE 'disciplinary_action'";
	$result = $db->execQuery($sql);
	$row    = $db->resultArray();
	return $row[0]['Auto_increment'];	   
 } 	 
?>
