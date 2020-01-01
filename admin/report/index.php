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
					$_SESSION["search"]="no";
				   
					unset($_SESSION['employee_name']); 
					unset($_SESSION['fathers_name']); 
					unset($_SESSION['mothers_name']); 
					unset($_SESSION['home_district']);
					unset($_SESSION['dob']);   
					unset($_SESSION['sex']);  
					unset($_SESSION['is_freedomfighter']); 
					unset($_SESSION['mobile_phone']);  
					unset($_SESSION['email']);  
					unset($_SESSION['nationalid']); 
					unset($_SESSION['blood_group']); 
					unset($_SESSION['marital_status']); 
					unset($_SESSION['name_spouse']); 
					unset($_SESSION['spouse_occupation']); 
					unset($_SESSION['spouse_district']);
					unset($_SESSION['religion']);   
					unset($_SESSION['date_joining']);  
					unset($_SESSION['entry_designation']); 
					unset($_SESSION['entry_scale']); 
				}
				include("employee_list.php");
				break; 
        case "search_employee":
				$_REQUEST['page'] = 1;  
				$_SESSION["search"]="yes";
				$_SESSION['employee_name'] = $_REQUEST['employee_name'];
				$_SESSION['fathers_name'] = $_REQUEST['fathers_name'];
				$_SESSION['mothers_name'] = $_REQUEST['mothers_name'];
				$_SESSION['home_district'] = $_REQUEST['home_district'];
				$_SESSION['dob'] = $_REQUEST['dob'];
				$_SESSION['sex'] = $_REQUEST['sex'];
				$_SESSION['is_freedomfighter'] = $_REQUEST['is_freedomfighter'];
				$_SESSION['mobile_phone'] = $_REQUEST['mobile_phone'];
				$_SESSION['email'] = $_REQUEST['email'];
				$_SESSION['nationalid'] = $_REQUEST['nationalid'];
				$_SESSION['blood_group'] = $_REQUEST['blood_group'];
				$_SESSION['marital_status'] = $_REQUEST['marital_status'];
				$_SESSION['name_spouse'] = $_REQUEST['name_spouse'];
				$_SESSION['spouse_occupation'] = $_REQUEST['spouse_occupation'];
				$_SESSION['spouse_district'] = $_REQUEST['spouse_district'];
				$_SESSION['religion'] = $_REQUEST['religion'];
				$_SESSION['date_joining'] = $_REQUEST['date_joining'];
				$_SESSION['entry_designation'] = $_REQUEST['entry_designation'];
				$_SESSION['entry_scale'] = $_REQUEST['entry_scale'];
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
