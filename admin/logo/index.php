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
				$info['table']    = "logo";
				     
				if(strlen($_FILES['file_logo']['name'])>0 && $_FILES['file_logo']['size']>0)
				{
					
					if(!file_exists("../../images"))
					{ 
					   mkdir("../../images",0755);	
					}
					if(empty($_REQUEST['id']))
					{
					  $file=getMaxId($db)."_".str_replace(" ","_",strtolower(trim($_FILES['file_logo']['name'])));
					}
					else
					{
					  $file=trim($_REQUEST['id'])."_".str_replace(" ","_",strtolower(trim($_FILES['file_logo']['name'])));
					}
					$filePath="../../images/logo.png";
					move_uploaded_file($_FILES['file_logo']['tmp_name'],$filePath);
					$data['file_logo']="images/logo.png";
				}
                
				
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
				
				include("logo_list.php");						   
				break;    
		case "edit":      
				$Id               = $_REQUEST['id'];
				if( !empty($Id ))
				{
					$info['table']    = "logo";
					$info['fields']   = array("*");   	   
					$info['where']    =  "id=".$Id;
				   
					$res  =  $db->select($info);
				   
					$Id        = $res[0]['id'];  
					$file_logo    = $res[0]['file_logo'];
					
				 }
						   
				include("logo_editor.php");						  
				break;
						   
         case 'delete':
		 
		        $filePath = "../../images/logo.png";
				unlink($filePath); 
				$Id               = $_REQUEST['id'];
				
				$info['table']    = "logo";
				$info['where']    = "id='$Id'";
				
				if($Id)
				{
					$db->delete($info);
				}
				include("logo_list.php");						   
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
				include("logo_list.php");
				break; 
        case "search_logo":
				$_REQUEST['page'] = 1;  
				$_SESSION["search"]="yes";
				$_SESSION['field_name'] = $_REQUEST['field_name'];
				$_SESSION["field_value"] = $_REQUEST['field_value'];
				include("logo_list.php");
				break;  								   
						
	     default :    
		       include("logo_list.php");		         
	   }

//Protect same image name
 function getMaxId($db)
 {	  
   $sql    = "SHOW TABLE STATUS LIKE 'logo'";
	$result = $db->execQuery($sql);
	$row    = $db->resultArray();
	return $row[0]['Auto_increment'];	   
 } 	 
?>
