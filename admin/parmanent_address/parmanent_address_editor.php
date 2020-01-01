<?php
 include("../template/header_popup.php");
?>
<script language="javascript" src="parmanent_address.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script	src="../../js/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../css/datepicker.css">

<a href="index.php?cmd=list&employee_id=<?=$_REQUEST['employee_id']?>" class="btn green">List</a> <br><br>
  <div class="portlet box blue">
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

								 <form name="frm_parmanent_address" method="post"  enctype="multipart/form-data" onSubmit="return checkRequired();">			
								  <div class="portlet-body">
						         <div class="table-responsive">	
					                <table class="table">
								<tr>
						 <td>Road Village</td>
						 <td>
						    <input type="text" name="road_village" id="road_village"  value="<?=$road_village?>" class="textbox">
						 </td>
				     </tr><tr>
						 <td>Postoffice</td>
						 <td>
						    <input type="text" name="postoffice" id="postoffice"  value="<?=$postoffice?>" class="textbox">
						 </td>
				     </tr><tr>
						 <td>Post Code</td>
						 <td>
						    <input type="text" name="post_code" id="post_code"  value="<?=$post_code?>" class="textbox">
						 </td>
				     </tr><tr>
						 <td>Police Station Thana</td>
						 <td>
						    <input type="text" name="police_station_thana" id="police_station_thana"  value="<?=$police_station_thana?>" class="textbox">
						 </td>
				     </tr><tr>
						 <td>Phone Mobile</td>
						 <td>
						    <input type="text" name="phone_mobile" id="phone_mobile"  value="<?=$phone_mobile?>" class="textbox">
						 </td>
				     </tr><tr>
							 <td>District</td>
							 <td><?php
	$info['table']    = "district";
	$info['fields']   = array("*");   	   
	$info['where']    =  "1=1 ORDER BY id DESC";
	$resdistrict  =  $db->select($info);
?>
<select  name="district_id" id="district_id"   class="textbox">
	<option value="">--Select--</option>
	<?php
	   foreach($resdistrict as $key=>$each)
	   { 
	?>
	  <option value="<?=$resdistrict[$key]['id']?>" <?php if($resdistrict[$key]['id']==$district_id){ echo "selected"; }?>><?=$resdistrict[$key]['name']?></option>
	<?php
	 }
	?> 
</select></td>
					  </tr>
										 <tr> 
											 <td align="right"></td>
											 <td>
												<input type="hidden" name="cmd" value="add">
                                                <input type="hidden" name="employee_id" value="<?=$_REQUEST['employee_id']?>">
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

