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
				$info['table']    = "employee";
				$data['users_id']   = $_REQUEST['users_id'];
                $data['employee_name']   = $_REQUEST['employee_name'];
                $data['fathers_name']   = $_REQUEST['fathers_name'];
                $data['mothers_name']   = $_REQUEST['mothers_name'];
                $data['home_district']   = $_REQUEST['home_district'];
                $data['dob']   = $_REQUEST['dob'];
                $data['sex']   = $_REQUEST['sex'];
				$data['is_freedomfighter']   = $_REQUEST['is_freedomfighter'];
                $data['mobile_phone']   = $_REQUEST['mobile_phone'];
                $data['email']   = $_REQUEST['email'];
                $data['country_id']   = $_REQUEST['country_id'];
                $data['nationalid']   = $_REQUEST['nationalid'];
                $data['blood_group']   = $_REQUEST['blood_group'];
                $data['marital_status']   = $_REQUEST['marital_status'];
                $data['name_spouse']   = $_REQUEST['name_spouse'];
                $data['spouse_occupation']   = $_REQUEST['spouse_occupation'];
                $data['spouse_district']   = $_REQUEST['spouse_district'];
                $data['religion']   = $_REQUEST['religion'];
                $data['date_joining']   = $_REQUEST['date_joining'];
                $data['entry_designation']   = $_REQUEST['entry_designation'];
                $data['entry_scale']   = $_REQUEST['entry_scale'];
				$data['archive_status'] = 'No';
                     
				if(strlen($_FILES['file_image']['name'])>0 && $_FILES['file_image']['size']>0)
				{
					
					if(!file_exists("../../employee_images"))
					{ 
					   mkdir("../../employee_images",0755);	
					}
					if(empty($_REQUEST['id']))
					{
					  $file=getMaxId($db)."_".str_replace(" ","_",strtolower(trim($_FILES['file_image']['name'])));
					}
					else
					{
					  $file=trim($_REQUEST['id'])."_".str_replace(" ","_",strtolower(trim($_FILES['file_image']['name'])));
					}
					$filePath="../../employee_images/".$file;
					move_uploaded_file($_FILES['file_image']['tmp_name'],$filePath);
					$data['file_image']="employee_images/".trim($file);
				}
                
				
				$info['data']     =  $data;
				
				if(empty($_REQUEST['id']))
				{
					  $db->insert($info);
					 
					  $employee_id = $db->lastInsert($result);
					 
					 ////////////////////////Retirement Year///////////////////////////					
					
						 $date =  date("Y-m-d", strtotime(date("Y-m-d", strtotime($_REQUEST['date_joining'])) . " + 3 year"));
						  
					  
					      unset($info);
						  unset($data);  
					    $info['table']    = "retirement_year";
						$data['employee_id']   = $employee_id;
						$data['year']   = date("Y",strtotime($date));
						$data['date']   = $date;
						
						$info['data']     =  $data;
						
						if(empty($_REQUEST['id']))
						{
							 $db->insert($info);
						}
					 //////////////////////////////////////////////////////////////////
					 
				}
				else
				{
					$Id            = $_REQUEST['id'];
					$info['where'] = "id=".$Id;
					
					$db->update($info);
				}
				
				include("employee_list.php");						   
				break;    
		case "edit":      
				$Id               = $_REQUEST['id'];
				if( !empty($Id ))
				{
					$info['table']    = "employee";
					$info['fields']   = array("*");   	   
					$info['where']    =  "id=".$Id;
				   
					$res  =  $db->select($info);
				   
					$Id        = $res[0]['id'];  
					$users_id    = $res[0]['users_id'];
					$employee_name    = $res[0]['employee_name'];
					$fathers_name    = $res[0]['fathers_name'];
					$mothers_name    = $res[0]['mothers_name'];
					$home_district    = $res[0]['home_district'];
					$dob    = $res[0]['dob'];
					$sex    = $res[0]['sex'];
					$is_freedomfighter = $res[0]['is_freedomfighter'];
					$mobile_phone    = $res[0]['mobile_phone'];
					$email    = $res[0]['email'];
					$country_id    = $res[0]['country_id'];
					$nationalid    = $res[0]['nationalid'];
					$blood_group    = $res[0]['blood_group'];
					$marital_status    = $res[0]['marital_status'];
					$name_spouse    = $res[0]['name_spouse'];
					$spouse_occupation    = $res[0]['spouse_occupation'];
					$spouse_district    = $res[0]['spouse_district'];
					$religion    = $res[0]['religion'];
					$date_joining    = $res[0]['date_joining'];
					$entry_designation    = $res[0]['entry_designation'];
					$entry_scale    = $res[0]['entry_scale'];
					$file_image    = $res[0]['file_image'];
					
				 }
						   
				include("employee_editor.php");						  
				break;
						   
         case 'delete': 
				$Id               = $_REQUEST['id'];
				
				$info['table']    = "employee";
				$info['where']    = "id='$Id'";
				
				if($Id)
				{
					$db->delete($info);
				}
				include("employee_list.php");						   
				break;
		 case "live":
		        $info['table']    = "employee";
				$data['archive_status'] = 'No';
				$info['data']     =  $data;
				
				if(!empty($_REQUEST['id']))
				{
					$Id            = $_REQUEST['id'];
					$info['where'] = "id=".$Id;
					
					$db->update($info);
				}
				  
			   include("employee_list.php");						   
			   break;		
		 case "detail":   
				 include("employee_detail.php");						   
				break;    						   
		 case "pdf":   
				 // get the HTML
					    ob_start();
					    include(dirname(__FILE__).'/employee_template.php');
					    $html = ob_get_clean();
		           
			       	    include("../../mpdf60/mpdf.php");					
						$mpdf=new mPDF('','A4'); 
						
						//$mpdf=new mPDF('c','A4','','',32,25,27,25,16,13); 
						//$mpdf->mirrorMargins = true;

                       $mpdf->SetDisplayMode('fullpage');
						//==============================================================
						$mpdf->autoScriptToLang = true;
						$mpdf->baseScript = 1;	// Use values in classes/ucdn.php  1 = LATIN
						$mpdf->autoVietnamese = true;
						$mpdf->autoArabic = true;
						
						$mpdf->autoLangToFont = true;
						
						$mpdf->setAutoBottomMargin = 'stretch'; 
						
						/* This works almost exactly the same as using autoLangToFont:
							$stylesheet = file_get_contents('../lang2fonts.css');
							$mpdf->WriteHTML($stylesheet,1);
						*/
						//$mpdf->SetWatermarkImage('../../images/logo.png', 0.20, 'F');
						//$mpdf->showWatermarkImage = true;
						
						$stylesheet = file_get_contents('../../mpdf60/lang2fonts.css');
						$mpdf->WriteHTML($stylesheet,1);
						
						$mpdf->WriteHTML($html);
						//$mpdf->AddPage();
						
						
						$mpdf->Output();
						//$mpdf->Output( $filePath,'S');
						exit;	
				 
				 					   
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
				include("employee_list.php");
				break; 
        case "search_employee":
				$_REQUEST['page'] = 1;  
				$_SESSION["search"]="yes";
				$_SESSION['field_name'] = $_REQUEST['field_name'];
				$_SESSION["field_value"] = $_REQUEST['field_value'];
				include("employee_list.php");
				break;  								   
						
	     default :    
		       include("employee_list.php");		         
	   }

//Protect same image name
 function getMaxId($db)
 {	  
   $sql    = "SHOW TABLE STATUS LIKE 'employee'";
	$result = $db->execQuery($sql);
	$row    = $db->resultArray();
	return $row[0]['Auto_increment'];	   
 } 	 
?>
