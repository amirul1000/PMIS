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
				$info['table']    = "promotions";
				$data['employee_id']   = $_REQUEST['employee_id'];
                $data['date_promotion']   = $_REQUEST['date_promotion'];
                $data['designation']   = $_REQUEST['designation'];
                $data['pay_scale']   = $_REQUEST['pay_scale'];
                $data['nature_promotion']   = $_REQUEST['nature_promotion'];
                
				
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
				
				include("promotions_list.php");						   
				break;    
		case "edit":      
				$Id               = $_REQUEST['id'];
				if( !empty($Id ))
				{
					$info['table']    = "promotions";
					$info['fields']   = array("*");   	   
					$info['where']    =  "id=".$Id;
				   
					$res  =  $db->select($info);
				   
					$Id        = $res[0]['id'];  
					$employee_id    = $res[0]['employee_id'];
					$date_promotion    = $res[0]['date_promotion'];
					$designation    = $res[0]['designation'];
					$pay_scale    = $res[0]['pay_scale'];
					$nature_promotion    = $res[0]['nature_promotion'];
					
				 }
						   
				include("promotions_editor.php");						  
				break;
						   
         case 'delete': 
				$Id               = $_REQUEST['id'];
				
				$info['table']    = "promotions";
				$info['where']    = "id='$Id'";
				
				if($Id)
				{
					$db->delete($info);
				}
				include("promotions_list.php");						   
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
				include("promotions_list.php");
				break; 
        case "search_promotions":
				$_REQUEST['page'] = 1;  
				$_SESSION["search"]="yes";
				$_SESSION['field_name'] = $_REQUEST['field_name'];
				$_SESSION["field_value"] = $_REQUEST['field_value'];
				include("promotions_list.php");
				break;  								   
						
	     default :    
		       include("promotions_list.php");		         
	   }

//Protect same image name
 function getMaxId($db)
 {	  
   $sql    = "SHOW TABLE STATUS LIKE 'promotions'";
	$result = $db->execQuery($sql);
	$row    = $db->resultArray();
	return $row[0]['Auto_increment'];	   
 } 	 
?>
