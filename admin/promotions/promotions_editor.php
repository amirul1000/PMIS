<?php
 include("../template/header_popup.php");
?>
<script language="javascript" src="promotions.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script	src="../../js/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../css/datepicker.css">

<a href="index.php?cmd=list&employee_id=<?=$_REQUEST['employee_id']?>" class="btn green">List</a> <br><br>
  <div class="portlet box blue">
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

								 <form name="frm_promotions" method="post"  enctype="multipart/form-data" onSubmit="return checkRequired();">			
								  <div class="portlet-body">
						         <div class="table-responsive">	
					                <table class="table">
										<tr>
                                             <td>Date Promotion</td>
                                             <td>
                                                <input type="text" name="date_promotion" id="date_promotion"  value="<?=$date_promotion?>" class="textbox">
                                                <a href="javascript:void(0);" onclick="displayDatePicker('date_promotion');"><img src="../../images/calendar.gif" width="16" height="16" border="0" /></a>
                                             </td>
                                         </tr><tr>
                                             <td>Designation</td>
                                             <td>
                                                <input type="text" name="designation" id="designation"  value="<?=$designation?>" class="textbox">
                                             </td>
                                         </tr><tr>
                                             <td>Pay Scale</td>
                                             <td>
                                                <input type="text" name="pay_scale" id="pay_scale"  value="<?=$pay_scale?>" class="textbox">
                                             </td>
                                         </tr><tr>
                                             <td>Nature Promotion</td>
                                             <td>
                                                <input type="text" name="nature_promotion" id="nature_promotion"  value="<?=$nature_promotion?>" class="textbox">
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

