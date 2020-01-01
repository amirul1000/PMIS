<?php
 include("../template/header.php");
?>

<script type="text/javascript" src="../../tinybox2/tinybox.js"></script>
<link rel="stylesheet" type="text/css" href="../../tinybox2/style.css" />
<script type="text/javascript">
	function popUp(url)
	{ 
	  var parentWindow = window;
	  TINY.box.show({iframe:url,closejs:function(){return false;},boxid:'frameless',width:850,height:650,fixed:false,maskid:'bluemask',maskopacity:40});
	} 
</script>
<a href="index.php?cmd=list" class="btn green">Back</a> 
<a href="index.php?cmd=pdf&id=<?=$_REQUEST['id']?>" class="btn green">Pdf</a>              

<div class="portlet box green">
           <div class="portlet-title">
                <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","Employee Information"))?></b>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div> 
                         
            <div class="portlet-body">
	         <div class="table-responsive">
                   
                <table class="table">
				   <tr>
				   <td> 
				    
					<div class="portlet-body">
				      <div class="table-responsive">	
         <?php
		     $info["table"] = "employee";
			 $info["fields"] = array("employee.*"); 
			 $info["where"]   = "1 AND id='".$_REQUEST['id']."'";
			 $arr =  $db->select($info);
			 foreach($arr[0] as $key=>$value)
			 {
				$$key = $value; 
			 }
		 ?>
	     <table class="table">
                    <tr>
						 <td>File Image</td>
						 <td><img src="../../<?=$file_image?>" style="width:100px;">
						 </td>
				     </tr>
		            <tr>
						 <td>Employee Name</td>
						 <td>
						    <?=$employee_name?>
						 </td>
				     </tr><tr>
						 <td>Fathers Name</td>
						 <td>
						    <?=$fathers_name?>
						 </td>
				     </tr><tr>
						 <td>Mothers Name</td>
						 <td>
						    <?=$mothers_name?>
						 </td>
				     </tr><tr>
						 <td>Home District</td>
						 <td>
						    <?=$home_district?>
						 </td>
				     </tr><tr>
						 <td>Dob</td>
						 <td>
						    <?=$dob?>
						 </td>
				     </tr><tr>
		           		 <td>Sex</td>
				   		 <td> <?=$sex?>
						</td>
				  </tr><tr>
						 <td>Mobile Phone</td>
						 <td>
						    <?=$mobile_phone?>
						 </td>
				     </tr><tr>
						 <td>Email</td>
						 <td>
						    <?=$email?>
						 </td>
				     </tr><tr>
							 <td>Country</td>
							 <td><?php
							$info['table']    = "country";
							$info['fields']   = array("*");   	   
							$info['where']    =  "1=1 AND id='".$country_id."'";
							$rescountry  =  $db->select($info);
							echo $rescountry[0]['country'];
						?>
						</td>
					  </tr><tr>
						 <td>Nationalid</td>
						 <td>
						    <?=$nationalid?>
						 </td>
				     </tr><tr>
						 <td>Blood Group</td>
						 <td>
						    <?=$blood_group?>
						 </td>
				     </tr><tr>
						 <td>Marital Status</td>
						 <td>
						    <?=$marital_status?>
						 </td>
				     </tr><tr>
						 <td>Name Spouse</td>
						 <td>
						    <?=$name_spouse?>
						 </td>
				     </tr><tr>
						 <td>Spouse Occupation</td>
						 <td>
						    <?=$spouse_occupation?>
						 </td>
				     </tr><tr>
						 <td>Spouse District</td>
						 <td>
						    <?=$spouse_district?>
						 </td>
				     </tr><tr>
						 <td>Religion</td>
						 <td>
						    <?=$religion?>
						 </td>
				     </tr><tr>
						 <td>Date Joining</td>
						 <td>
						    <?=$date_joining?>
						 </td>
				     </tr><tr>
						 <td>Entry Designation</td>
						 <td>
						    <?=$entry_designation?>
						 </td>
				     </tr><tr>
						 <td>Entry Scale</td>
						 <td>
						   <?=$entry_scale?>
						 </td>
				     </tr>
		   </table>
		   </div>
		  </div>

    </td>
   </tr>
    
	  
  </table>    
</div>
</div>
</div>



         <a  href="javascript:void();"  onClick="popUp('../education/index.php?cmd=list&employee_id=<?=$_REQUEST['id']?>')" class="btn blue button-next">Detail
                   <i class="m-icon-swapright m-icon-white"></i>                  
         </a> 
         <div class="portlet box green">
           <div class="portlet-title">
                <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","education"))?></b>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div> 
                         
            <div class="portlet-body">
	         <div class="table-responsive">
                   
                <table class="table">
				   <tr>
				   <td> 
				    
					<div class="portlet-body">
				      <div class="table-responsive">	
				          <table class="table">
							<tr bgcolor="#ABCAE0">
                                  <td>Name Institution</td>
                                  <td>Principals Subject</td>
                                  <td>Degree</td>
                                  <td>Year</td>
                                  <td>Division</td>
							</tr>
						 <?php
								
							
								$info["table"] = "education";
								$info["fields"] = array("education.*"); 
								$info["where"]   = "1  AND employee_id='".$_REQUEST['id']."'";
								$arr =  $db->select($info);
								
								for($i=0;$i<count($arr);$i++)
								{
								
								   $rowColor;
						
									if($i % 2 == 0)
									{
										
										$row="#C8C8C8";
									}
									else
									{
										
										$row="#FFFFFF";
									}
								
						 ?>
							<tr bgcolor="<?=$row?>" onmouseover=" this.style.background='#ECF5B6'; " onmouseout=" this.style.background='<?=$row?>'; ">
							 <td><?=$arr[$i]['name_institution']?></td>
                              <td><?=$arr[$i]['principals_subject']?></td>
                              <td><?=$arr[$i]['degree']?></td>
                              <td><?=$arr[$i]['year']?></td>
                              <td><?=$arr[$i]['division']?></td>
							</tr>
						<?php
								  }
						?>
						</table>
						</div>
					 </div>				
				</td>
				</tr>
				</table>
				</div>
			</div>
		</div>



        <a  href="javascript:void();"  onClick="popUp('../parmanent_address/index.php?cmd=list&employee_id=<?=$_REQUEST['id']?>')" class="btn blue button-next">Detail
                   <i class="m-icon-swapright m-icon-white"></i>                  
        </a> 
        <div class="portlet box green">
           <div class="portlet-title">
                <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","parmanent_address"))?></b>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>             
            <div class="portlet-body">
	         <div class="table-responsive">	
                <table class="table">
				   <tr>
				   <td> 
				
						<div class="portlet-body">
				      <div class="table-responsive">	
				          <table class="table">
							<tr bgcolor="#ABCAE0">
                                  <td>Road Village</td>
                                  <td>Postoffice</td>
                                  <td>Post Code</td>
                                  <td>Police Station Thana</td>
                                  <td>Phone Mobile</td>
                                  <td>District </td>
							</tr>
						 <?php
									  
								$info["table"] = "parmanent_address";
								$info["fields"] = array("parmanent_address.*"); 
								$info["where"]   = "1   AND employee_id='".$_REQUEST['id']."'";
													
								
								$arr =  $db->select($info);
								
								for($i=0;$i<count($arr);$i++)
								{
								
								   $rowColor;
						
									if($i % 2 == 0)
									{
										
										$row="#C8C8C8";
									}
									else
									{
										
										$row="#FFFFFF";
									}
								
						 ?>
							<tr bgcolor="<?=$row?>" onmouseover=" this.style.background='#ECF5B6'; " onmouseout=" this.style.background='<?=$row?>'; ">							
                                  <td><?=$arr[$i]['road_village']?></td>
                                  <td><?=$arr[$i]['postoffice']?></td>
                                  <td><?=$arr[$i]['post_code']?></td>
                                  <td><?=$arr[$i]['police_station_thana']?></td>
                                  <td><?=$arr[$i]['phone_mobile']?></td>
                                  <td>
		                            <?php
									    unset($info2);        
										$info2['table']    = district;	
										$info2['fields']   = array("name");	   	   
										$info2['where']    =  "1 AND id='".$arr[$i]['district_id']."' LIMIT 0,1";
										$res2  =  $db->select($info2);
										echo $res2[0]['name'];	
					                ?>
							   </td>
							</tr>
						<?php
								  }
						?>
						</table>
						</div>
					 </div>				
				</td>
				</tr>
				</table>
				</div>
			</div>
		</div>
        
        <a  href="javascript:void();"  onClick="popUp('../present_address/index.php?cmd=list&employee_id=<?=$_REQUEST['id']?>')" class="btn blue button-next">Detail
                   <i class="m-icon-swapright m-icon-white"></i>                  
        </a> 
        <div class="portlet box green">
           <div class="portlet-title">
                <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","present_address"))?></b>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>             
            <div class="portlet-body">
	         <div class="table-responsive">	
                <table class="table">
				   <tr>
				   <td> 
				
						<div class="portlet-body">
				      <div class="table-responsive">	
				          <table class="table">
                           <tr bgcolor="#ABCAE0">
                              <td>Road Village</td>
                              <td>House No</td>
                              <td>Flat No</td>
                              <td>Police Station Thana</td>
                              <td>District</td>
							</tr>
						 <?php
							
											  
								$info["table"] = "present_address";
								$info["fields"] = array("present_address.*"); 
								$info["where"]   = "1  AND employee_id='".$_REQUEST['id']."'";
													
								
								$arr =  $db->select($info);
								
								for($i=0;$i<count($arr);$i++)
								{
								
								   $rowColor;
						
									if($i % 2 == 0)
									{
										
										$row="#C8C8C8";
									}
									else
									{
										
										$row="#FFFFFF";
									}
								
						 ?>
							<tr bgcolor="<?=$row?>" onmouseover=" this.style.background='#ECF5B6'; " onmouseout=" this.style.background='<?=$row?>'; ">
							
                              <td><?=$arr[$i]['road_village']?></td>
                              <td><?=$arr[$i]['House_no']?></td>
                              <td><?=$arr[$i]['Flat_no']?></td>
                              <td><?=$arr[$i]['police_station_thana']?></td>
                              <td><?=$arr[$i]['district']?></td>
							</tr>
						<?php
								  }
						?>
						
						
						</table>
						</div>
					 </div>				
				</td>
				</tr>
				</table>
				</div>
			</div>
		</div>
        
        
        
        <a  href="javascript:void();"  onClick="popUp('../local_training/index.php?cmd=list&employee_id=<?=$_REQUEST['id']?>')" class="btn blue button-next">Detail
                   <i class="m-icon-swapright m-icon-white"></i>                  
        </a> 
        <div class="portlet box green">
           <div class="portlet-title">
                <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","local_training"))?></b>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>             
            <div class="portlet-body">
	         <div class="table-responsive">	
                <table class="table">
				   <tr>
				   <td> 
				
						<div class="portlet-body">
				      <div class="table-responsive">	
				          <table class="table">
							<tr bgcolor="#ABCAE0">
                              <td>Title Training</td>
                              <td>Institition</td>
                              <td>From</td>
                              <td>To</td>
							</tr>
						 <?php
										  
								$info["table"] = "local_training";
								$info["fields"] = array("local_training.*"); 
								$info["where"]   = "1  AND employee_id='".$_REQUEST['id']."'";
													
								
								$arr =  $db->select($info);
								
								for($i=0;$i<count($arr);$i++)
								{
								
								   $rowColor;
						
									if($i % 2 == 0)
									{
										
										$row="#C8C8C8";
									}
									else
									{
										
										$row="#FFFFFF";
									}
								
						 ?>
							<tr bgcolor="<?=$row?>" onmouseover=" this.style.background='#ECF5B6'; " onmouseout=" this.style.background='<?=$row?>'; ">
							  <td><?=$arr[$i]['title_training']?></td>
                              <td><?=$arr[$i]['institition']?></td>
                              <td><?=$arr[$i]['from_']?></td>
                              <td><?=$arr[$i]['to_']?></td>
							</tr>
						<?php
								  }
						?>
						
						
						</table>
						</div>
					 </div>				
				</td>
				</tr>
				</table>
				</div>
			</div>
		</div>
        
        
        <a  href="javascript:void();"  onClick="popUp('../foreign_training/index.php?cmd=list&employee_id=<?=$_REQUEST['id']?>')" class="btn blue button-next">Detail
                   <i class="m-icon-swapright m-icon-white"></i>                  
        </a> 
        <div class="portlet box green">
           <div class="portlet-title">
                <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","foreign_training"))?></b>
                </div>
                <div class="to_ols">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>             
            <div class="portlet-body">
	         <div class="table-responsive">	
                <table class="table">
                 
				   <tr>
				   <td> 
				
						<div class="portlet-body">
				      <div class="table-responsive">	
				          <table class="table">
							<tr bgcolor="#ABCAE0">
                                  <td>Title Training</td>
                                  <td>Institution</td>
                                  <td>from_</td>
                                  <td>to_</td>
							</tr>
						 <?php
								
							
											  
								$info["table"] = "foreign_training";
								$info["fields"] = array("foreign_training.*"); 
								$info["where"]   = "1    AND employee_id='".$_REQUEST['id']."'";
													
								
								$arr =  $db->select($info);
								
								for($i=0;$i<count($arr);$i++)
								{
								
								   $rowColor;
						
									if($i % 2 == 0)
									{
										
										$row="#C8C8C8";
									}
									else
									{
										
										$row="#FFFFFF";
									}
								
						 ?>
							<tr bgcolor="<?=$row?>" onmouseover=" this.style.background='#ECF5B6'; " onmouseout=" this.style.background='<?=$row?>'; ">
							  <td><?=$arr[$i]['title_training']?></td>
                              <td><?=$arr[$i]['institution']?></td>
                              <td><?=$arr[$i]['from_']?></td>
                              <td><?=$arr[$i]['to_']?></td>
							</tr>
						<?php
								  }
						?>
						
						
						</table>
						</div>
					 </div>				
				</td>
				</tr>
				</table>
				</div>
			</div>
		</div>
        
        
        <a  href="javascript:void();"  onClick="popUp('../languages/index.php?cmd=list&employee_id=<?=$_REQUEST['id']?>')" class="btn blue button-next">Detail
                   <i class="m-icon-swapright m-icon-white"></i>                  
        </a> 
        <div class="portlet box green">
           <div class="portlet-title">
                <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","languages"))?></b>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>             
            <div class="portlet-body">
	         <div class="table-responsive">	
                <table class="table">
                 
				   <tr>
				   <td> 
				
						<div class="portlet-body">
				      <div class="table-responsive">	
				          <table class="table">
							<tr bgcolor="#ABCAE0">
                              <td>Languages</td>
                              <td>Read</td>
                              <td>Write</td>
                              <td>Speak</td>
							</tr>
						 <?php
									  
								$info["table"] = "languages";
								$info["fields"] = array("languages.*"); 
								$info["where"]   = "1  AND employee_id='".$_REQUEST['id']."'";
													
								
								$arr =  $db->select($info);
								
								for($i=0;$i<count($arr);$i++)
								{
								
								   $rowColor;
						
									if($i % 2 == 0)
									{
										
										$row="#C8C8C8";
									}
									else
									{
										
										$row="#FFFFFF";
									}
								
						 ?>
							<tr bgcolor="<?=$row?>" onmouseover=" this.style.background='#ECF5B6'; " onmouseout=" this.style.background='<?=$row?>'; ">
							 
                              <td><?=$arr[$i]['languages']?></td>
                              <td><?=$arr[$i]['read_']?></td>
                              <td><?=$arr[$i]['write_']?></td>
                              <td><?=$arr[$i]['speak']?></td>
							</tr>
						<?php
								  }
						?>
						
						</table>
						</div>
					 </div>				
				</td>
				</tr>
				</table>
				</div>
			</div>
		</div>
        
        
        <a  href="javascript:void();"  onClick="popUp('../promotions/index.php?cmd=list&employee_id=<?=$_REQUEST['id']?>')" class="btn blue button-next">Detail
                   <i class="m-icon-swapright m-icon-white"></i>                  
        </a> 
        <div class="portlet box green">
           <div class="portlet-title">
                <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","promotions"))?></b>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>             
            <div class="portlet-body">
	         <div class="table-responsive">	
                <table class="table">
                 
				   <tr>
				   <td> 
				
						<div class="portlet-body">
				      <div class="table-responsive">	
				          <table class="table">
							<tr bgcolor="#ABCAE0">
                              <td>Date Promotion</td>
                              <td>Designation</td>
                              <td>Pay Scale</td>
                              <td>Nature Promotion</td>
			  
							</tr>
						 <?php
											  
								$info["table"] = "promotions";
								$info["fields"] = array("promotions.*"); 
								$info["where"]   = "1  AND employee_id='".$_REQUEST['id']."'";
													
								
								$arr =  $db->select($info);
								
								for($i=0;$i<count($arr);$i++)
								{
								
								   $rowColor;
						
									if($i % 2 == 0)
									{
										
										$row="#C8C8C8";
									}
									else
									{
										
										$row="#FFFFFF";
									}
								
						 ?>
							<tr bgcolor="<?=$row?>" onmouseover=" this.style.background='#ECF5B6'; " onmouseout=" this.style.background='<?=$row?>'; ">
							 
                              <td><?=$arr[$i]['date_promotion']?></td>
                              <td><?=$arr[$i]['designation']?></td>
                              <td><?=$arr[$i]['pay_scale']?></td>
                              <td><?=$arr[$i]['nature_promotion']?></td>
			  
							</tr>
						<?php
								  }
						?>
						
						</table>
						</div>
					 </div>				
				</td>
				</tr>
				</table>
				</div>
			</div>
		</div>
        
        <a  href="javascript:void();"  onClick="popUp('../service_history/index.php?cmd=list&employee_id=<?=$_REQUEST['id']?>')" class="btn blue button-next">Detail
                   <i class="m-icon-swapright m-icon-white"></i>                  
        </a> 
        <div class="portlet box green">
           <div class="portlet-title">
                <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","service_history"))?></b>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>             
            <div class="portlet-body">
	         <div class="table-responsive">	
                <table class="table">
                 
				   <tr>
				   <td> 
				
						<div class="portlet-body">
				      <div class="table-responsive">	
				          <table class="table">
							<tr bgcolor="#ABCAE0">
                              <td>Designation</td>
                              <td>Office Name</td>
                              <td>Section</td>
                              <td>From Date</td>
                              <td>To Date</td>
			  
							</tr>
						 <?php
											  
								$info["table"] = "service_history";
								$info["fields"] = array("service_history.*"); 
								$info["where"]   = "1  AND employee_id='".$_REQUEST['id']."'";
													
								
								$arr =  $db->select($info);
								
								for($i=0;$i<count($arr);$i++)
								{
								
								   $rowColor;
						
									if($i % 2 == 0)
									{
										
										$row="#C8C8C8";
									}
									else
									{
										
										$row="#FFFFFF";
									}
								
						 ?>
							<tr bgcolor="<?=$row?>" onmouseover=" this.style.background='#ECF5B6'; " onmouseout=" this.style.background='<?=$row?>'; ">
							 
                                <td><?=$arr[$i]['designation']?></td>
                                <td><?=$arr[$i]['office_name']?></td>
                                <td><?=$arr[$i]['section']?></td>
                                <td><?=$arr[$i]['from_date']?></td>
                                <td><?=$arr[$i]['to_date']?></td>
			  
							</tr>
						<?php
								  }
						?>
						
						</table>
						</div>
					 </div>				
				</td>
				</tr>
				</table>
				</div>
			</div>
		</div>
        
        
        
        <a  href="javascript:void();"  onClick="popUp('../disciplinary_action/index.php?cmd=list&employee_id=<?=$_REQUEST['id']?>')" class="btn blue button-next">Detail
                   <i class="m-icon-swapright m-icon-white"></i>                  
        </a> 
        <div class="portlet box green">
           <div class="portlet-title">
                <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","disciplinary_action"))?></b>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>             
            <div class="portlet-body">
	         <div class="table-responsive">	
                <table class="table">
                 
				   <tr>
				   <td> 
				
						<div class="portlet-body">
				      <div class="table-responsive">	
				          <table class="table">
							<tr bgcolor="#ABCAE0">
                                <td>Nature Offence</td>
                                <td>Punishment</td>
                                <td>Date</td>
							</tr>
						 <?php
											  
								$info["table"] = "disciplinary_action";
								$info["fields"] = array("disciplinary_action.*"); 
								$info["where"]   = "1  AND employee_id='".$_REQUEST['id']."'";
													
								
								$arr =  $db->select($info);
								
								for($i=0;$i<count($arr);$i++)
								{
								
								   $rowColor;
						
									if($i % 2 == 0)
									{
										
										$row="#C8C8C8";
									}
									else
									{
										
										$row="#FFFFFF";
									}
								
						 ?>
							<tr bgcolor="<?=$row?>" onmouseover=" this.style.background='#ECF5B6'; " onmouseout=" this.style.background='<?=$row?>'; ">
							 	<td><?=$arr[$i]['nature_offence']?></td>
                                <td><?=$arr[$i]['punishment']?></td>
                                <td><?=$arr[$i]['date']?></td>
							</tr>
						<?php
								  }
						?>
						
						</table>
						</div>
					 </div>				
				</td>
				</tr>
				</table>
				</div>
			</div>
		</div>
        
         <a  href="javascript:void();"  onClick="popUp('../children/index.php?cmd=list&employee_id=<?=$_REQUEST['id']?>')" class="btn blue button-next">Detail
                   <i class="m-icon-swapright m-icon-white"></i>                  
        </a> 
        <div class="portlet box green">
           <div class="portlet-title">
                <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","children"))?></b>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>             
            <div class="portlet-body">
	         <div class="table-responsive">	
                <table class="table">
                 
				   <tr>
				   <td> 
				
						<div class="portlet-body">
				      <div class="table-responsive">	
				          <table class="table">
							<tr bgcolor="#ABCAE0">
                                <td>Name</td>
                                <td>Sex</td>
                                <td>Dob</td>
							</tr>
						 <?php
											  
								$info["table"] = "children";
								$info["fields"] = array("children.*"); 
								$info["where"]   = "1  AND employee_id='".$_REQUEST['id']."'";
													
								
								$arr =  $db->select($info);
								
								for($i=0;$i<count($arr);$i++)
								{
								
								   $rowColor;
						
									if($i % 2 == 0)
									{
										
										$row="#C8C8C8";
									}
									else
									{
										
										$row="#FFFFFF";
									}
								
						 ?>
							<tr bgcolor="<?=$row?>" onmouseover=" this.style.background='#ECF5B6'; " onmouseout=" this.style.background='<?=$row?>'; ">
							  <td><?=$arr[$i]['name']?></td>
                              <td><?=$arr[$i]['sex']?></td>
                              <td><?=$arr[$i]['dob']?></td>
							</tr>
						<?php
								  }
						?>
						
						</table>
						</div>
					 </div>				
				</td>
				</tr>
				</table>
				</div>
			</div>
		</div>
        
        
        <a  href="javascript:void();"  onClick="popUp('../rest_of_recreation/index.php?cmd=list&employee_id=<?=$_REQUEST['id']?>')" class="btn blue button-next">Detail
                   <i class="m-icon-swapright m-icon-white"></i>                  
        </a> 
        <div class="portlet box green">
           <div class="portlet-title">
                <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","rest_of_recreation"))?></b>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>             
            <div class="portlet-body">
	         <div class="table-responsive">	
                <table class="table">
                 
				   <tr>
				   <td> 
				
						<div class="portlet-body">
				      <div class="table-responsive">	
				          <table class="table">
							<tr bgcolor="#ABCAE0">
                                <td>From Date</td>
                                <td>To Date</td>
                                <td>Coming Date</td>
							</tr>
						 <?php
											  
								$info["table"] = "rest_of_recreation";
								$info["fields"] = array("rest_of_recreation.*"); 
								$info["where"]   = "1  AND employee_id='".$_REQUEST['id']."'";
													
								
								$arr =  $db->select($info);
								
								for($i=0;$i<count($arr);$i++)
								{
								
								   $rowColor;
						
									if($i % 2 == 0)
									{
										
										$row="#C8C8C8";
									}
									else
									{
										
										$row="#FFFFFF";
									}
								
						 ?>
							<tr bgcolor="<?=$row?>" onmouseover=" this.style.background='#ECF5B6'; " onmouseout=" this.style.background='<?=$row?>'; ">
							  <td><?=$arr[$i]['from_date']?></td>
                              <td><?=$arr[$i]['to_date']?></td>
                              <td><?=$arr[$i]['coming_date']?></td>		
							</tr>
						<?php
								  }
						?>
						
						</table>
						</div>
					 </div>				
				</td>
				</tr>
				</table>
				</div>
			</div>
		</div>
        
        <a  href="javascript:void();"  onClick="popUp('../retirement_year/index.php?cmd=list&employee_id=<?=$_REQUEST['id']?>')" class="btn blue button-next">Detail
                   <i class="m-icon-swapright m-icon-white"></i>                  
        </a> 
        <div class="portlet box green">
           <div class="portlet-title">
                <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","retirement_year"))?></b>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>             
            <div class="portlet-body">
	         <div class="table-responsive">	
                <table class="table">
                 
				   <tr>
				   <td> 
				
						<div class="portlet-body">
				      <div class="table-responsive">	
				          <table class="table">
							<tr bgcolor="#ABCAE0">
                                 <td>Year</td>
			                     <td>Date</td>
							</tr>
						 <?php
											  
								$info["table"] = "retirement_year";
								$info["fields"] = array("retirement_year.*"); 
								$info["where"]   = "1  AND employee_id='".$_REQUEST['id']."'";
													
								
								$arr =  $db->select($info);
								
								for($i=0;$i<count($arr);$i++)
								{
								
								   $rowColor;
						
									if($i % 2 == 0)
									{
										
										$row="#C8C8C8";
									}
									else
									{
										
										$row="#FFFFFF";
									}
								
						 ?>
							<tr bgcolor="<?=$row?>" onmouseover=" this.style.background='#ECF5B6'; " onmouseout=" this.style.background='<?=$row?>'; ">
							  <td><?=$arr[$i]['year']?></td>
							  <td><?=$arr[$i]['date']?></td>
							</tr>
						<?php
								  }
						?>
						
						</table>
						</div>
					 </div>				
				</td>
				</tr>
				</table>
				</div>
			</div>
		</div>


<?php
include("../template/footer.php");
?>
