<?php
 include("../template/header.php");
?>
<script language="javascript" src="employee.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script	src="../../js/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../css/datepicker.css">

<a href="index.php?cmd=list" class="btn green">List</a> <br><br>
  <div class="portlet box blue">
      <div class="portlet-title">
          <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","employee"))?></b>
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

								 <form name="frm_employee" method="post"  enctype="multipart/form-data" onSubmit="return checkRequired();">			
								  <div class="portlet-body">
						         <div class="table-responsive">	
					                <table class="table">
										 <tr>
							 <td>Users</td>
							 <td><?php
	$info['table']    = "users";
	$info['fields']   = array("*");   	   
	$info['where']    =  "1=1 ORDER BY id DESC";
	$resusers  =  $db->select($info);
?>
<select  name="users_id" id="users_id"   class="textbox">
	<option value="">--Select--</option>
	<?php
	   foreach($resusers as $key=>$each)
	   { 
	?>
	  <option value="<?=$resusers[$key]['id']?>" <?php if($resusers[$key]['id']==$users_id){ echo "selected"; }?>><?=$resusers[$key]['first_name']?> <?=$resusers[$key]['last_name']?></option>
	<?php
	 }
	?> 
</select></td>
					  </tr>
                      <tr>
						 <td>Employee Name</td>
						 <td>
						    <input type="text" name="employee_name" id="employee_name"  value="<?=$employee_name?>" class="textbox">
						 </td>
				     </tr>
                     <tr>
						 <td>Fathers Name</td>
						 <td>
						    <input type="text" name="fathers_name" id="fathers_name"  value="<?=$fathers_name?>" class="textbox">
						 </td>
				     </tr>
                     <tr>
						 <td>Mothers Name</td>
						 <td>
						    <input type="text" name="mothers_name" id="mothers_name"  value="<?=$mothers_name?>" class="textbox">
						 </td>
				     </tr>
                     <tr>
						 <td>Home District</td>
						 <td>
						    <input type="text" name="home_district" id="home_district"  value="<?=$home_district?>" class="textbox">
						 </td>
				     </tr>
                     <tr>
						 <td>Dob</td>
						 <td>
						    <input type="text" name="dob" id="dob"  value="<?=$dob?>" class="textbox">
							<a href="javascript:void(0);" onclick="displayDatePicker('dob');"><img src="../../images/calendar.gif" width="16" height="16" border="0" /></a>
						 </td>
				     </tr>
                     <tr>
		           		 <td>Sex</td>
				   		 <td><?php
								$enumemployee = getEnumFieldValues('employee','sex');
							?>
							<select  name="sex" id="sex"   class="textbox">
							<?php
							   foreach($enumemployee as $key=>$value)
							   { 
							?>
							  <option value="<?=$value?>" <?php if($value==$sex){ echo "selected"; }?>><?=$value?></option>
							 <?php
							  }
							?> 
							</select>
                            </td>
				  </tr>
                  <tr>
		           		 <td>Is freedomfighter ?</td>
				   		 <td><?php
								$enumfreedomfighter = getEnumFieldValues('employee','is_freedomfighter');
							?>
							<select  name="is_freedomfighter" id="is_freedomfighter"   class="textbox">
							<?php
							   foreach($enumfreedomfighter as $key=>$value)
							   { 
							?>
							  <option value="<?=$value?>" <?php if($value==$is_freedomfighter){ echo "selected"; }?>><?=$value?></option>
							 <?php
							  }
							?> 
							</select>
                            </td>
				  </tr>
                  <tr>
						 <td>Mobile Phone</td>
						 <td>
						    <input type="text" name="mobile_phone" id="mobile_phone"  value="<?=$mobile_phone?>" class="textbox">
						 </td>
				     </tr><tr>
						 <td>Email</td>
						 <td>
						    <input type="text" name="email" id="email"  value="<?=$email?>" class="textbox">
						 </td>
				     </tr><tr>
							 <td>Country</td>
							 <td><?php
	$info['table']    = "country";
	$info['fields']   = array("*");   	   
	$info['where']    =  "1=1 ORDER BY id DESC";
	$rescountry  =  $db->select($info);
?>
<select  name="country_id" id="country_id"   class="textbox">
	<option value="">--Select--</option>
	<?php
	   foreach($rescountry as $key=>$each)
	   { 
	?>
	  <option value="<?=$rescountry[$key]['id']?>" <?php if($rescountry[$key]['id']==$country_id){ echo "selected"; }?>><?=$rescountry[$key]['country']?></option>
	<?php
	 }
	?> 
</select></td>
					  </tr><tr>
						 <td>Nationalid</td>
						 <td>
						    <input type="text" name="nationalid" id="nationalid"  value="<?=$nationalid?>" class="textbox">
						 </td>
				     </tr><tr>
						 <td>Blood Group</td>
						 <td>
						    <input type="text" name="blood_group" id="blood_group"  value="<?=$blood_group?>" class="textbox">
						 </td>
				     </tr><tr>
						 <td>Marital Status</td>
						 <td>
						    <input type="text" name="marital_status" id="marital_status"  value="<?=$marital_status?>" class="textbox">
						 </td>
				     </tr><tr>
						 <td>Name Spouse</td>
						 <td>
						    <input type="text" name="name_spouse" id="name_spouse"  value="<?=$name_spouse?>" class="textbox">
						 </td>
				     </tr><tr>
						 <td>Spouse Occupation</td>
						 <td>
						    <input type="text" name="spouse_occupation" id="spouse_occupation"  value="<?=$spouse_occupation?>" class="textbox">
						 </td>
				     </tr><tr>
						 <td>Spouse District</td>
						 <td>
						    <input type="text" name="spouse_district" id="spouse_district"  value="<?=$spouse_district?>" class="textbox">
						 </td>
				     </tr><tr>
						 <td>Religion</td>
						 <td>
						    <input type="text" name="religion" id="religion"  value="<?=$religion?>" class="textbox">
						 </td>
				     </tr><tr>
						 <td>Date Joining</td>
						 <td>
						    <input type="text" name="date_joining" id="date_joining"  value="<?=$date_joining?>" class="textbox">
							<a href="javascript:void(0);" onclick="displayDatePicker('date_joining');"><img src="../../images/calendar.gif" width="16" height="16" border="0" /></a>
						 </td>
				     </tr><tr>
						 <td>Entry Designation</td>
						 <td>
						    <input type="text" name="entry_designation" id="entry_designation"  value="<?=$entry_designation?>" class="textbox">
						 </td>
				     </tr><tr>
						 <td>Entry Scale</td>
						 <td>
						    <input type="text" name="entry_scale" id="entry_scale"  value="<?=$entry_scale?>" class="textbox">
						 </td>
				     </tr><tr>
						 <td>File Image</td>
						 <td><input type="file" name="file_image" id="file_image"  value="<?=$file_image?>" class="textbox">
						 </td>
				     </tr>
										 <tr> 
											 <td align="right"></td>
											 <td>
												<input type="hidden" name="cmd" value="add">
												<input type="hidden" name="id" value="<?=$Id?>">			
												<input type="submit" name="btn_submit" id="btn_submit" value="submit" class="button_blue">
											 </td>     
										 </tr>
										</table>
										</div>
										</div>
								</form>
							  </td>
							 </tr>
							</table>
			      </div>
			</div>
  </div>			
<?php
 include("../template/footer.php");
?>

