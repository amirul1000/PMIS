<?php
 include("../template/header_popup.php");
?>
<script language="javascript" src="service_history.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script	src="../../js/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../css/datepicker.css">

<a href="index.php?cmd=list&employee_id=<?=$_REQUEST['employee_id']?>" class="btn green">List</a> <br><br>
  <div class="portlet box blue">
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

								 <form name="frm_service_history" method="post"  enctype="multipart/form-data" onSubmit="return checkRequired();">			
								  <div class="portlet-body">
						         	<div class="table-responsive">	
					               	 <table class="table">
                                          <tr>
                                             <td>Designation</td>
                                             <td>
                                                <input type="text" name="designation" id="designation"  value="<?=$designation?>" class="textbox">
                                             </td>
                                         </tr>
                                         <tr>
                                             <td>Office Name</td>
                                             <td>
                                                <input type="text" name="office_name" id="office_name"  value="<?=$office_name?>" class="textbox">
                                             </td>
                                         </tr>
                                         <tr>
                                             <td>Section</td>
                                             <td>
                                                <input type="text" name="section" id="section"  value="<?=$section?>" class="textbox">
                                             </td>
                                         </tr>
                                         <tr>
                                             <td>From Date</td>
                                             <td>
                                                <input type="text" name="from_date" id="from_date"  value="<?=$from_date?>" class="textbox">
                                                <a href="javascript:void(0);" onclick="displayDatePicker('from_date');"><img src="../../images/calendar.gif" width="16" height="16" border="0" /></a>
                                             </td>
                                         </tr>
                                         <tr>
                                             <td>To Date</td>
                                             <td>
                                                <input type="text" name="to_date" id="to_date"  value="<?=$to_date?>" class="textbox">
                                                <a href="javascript:void(0);" onclick="displayDatePicker('to_date');"><img src="../../images/calendar.gif" width="16" height="16" border="0" /></a>
                                             </td>
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

