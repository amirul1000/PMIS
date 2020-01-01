<?php
 include("../template/header_popup.php");
?>
<script language="javascript" src="disciplinary_action.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script	src="../../js/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../css/datepicker.css">

<a href="index.php?cmd=edit&employee_id=<?=$_REQUEST['employee_id']?>" class="btn green">List</a> <br><br>
  <div class="portlet box blue">
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

								 <form name="frm_disciplinary_action" method="post"  enctype="multipart/form-data" onSubmit="return checkRequired();">			
								  <div class="portlet-body">
						         <div class="table-responsive">	
					                <table class="table">
										<tr>
                                             <td>Nature Offence</td>
                                             <td>
                                                <input type="text" name="nature_offence" id="nature_offence"  value="<?=$nature_offence?>" class="textbox">
                                             </td>
                                         </tr><tr>
                                             <td>Punishment</td>
                                             <td>
                                                <input type="text" name="punishment" id="punishment"  value="<?=$punishment?>" class="textbox">
                                             </td>
                                         </tr><tr>
                                             <td>Date</td>
                                             <td>
                                                <input type="text" name="date" id="date"  value="<?=$date?>" class="textbox">
                                                <a href="javascript:void(0);" onclick="displayDatePicker('date');"><img src="../../images/calendar.gif" width="16" height="16" border="0" /></a>
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

