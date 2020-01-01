<?php
 include("../template/header_popup.php");
?>
<script language="javascript" src="foreign_training.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script	src="../../js/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../css/datepicker.css">

<a href="index.php?cmd=list&employee_id=<?=$_REQUEST['employee_id']?>" class="btn green">List</a> <br><br>
  <div class="portlet box blue">
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

								 <form name="frm_foreign_training" method="post"  enctype="multipart/form-data" onSubmit="return checkRequired();">			
								  <div class="portlet-body">
						         <div class="table-responsive">	
					                <table class="table">
										<tr>
                                             <td>Title Training</td>
                                             <td>
                                                <input type="text" name="title_training" id="title_training"  value="<?=$title_training?>" class="textbox">
                                             </td>
                                         </tr><tr>
                                             <td>Institution</td>
                                             <td>
                                                <input type="text" name="institution" id="institution"  value="<?=$institution?>" class="textbox">
                                             </td>
                                         </tr><tr>
                                             <td>from_</td>
                                             <td>
                                                <input type="text" name="from_" id="from_"  value="<?=$from_?>" class="textbox">
                                                <a href="javascript:void(0);" onclick="displayDatePicker('from_');"><img src="../../images/calendar.gif" width="16" height="16" border="0" /></a>
                                             </td>
                                         </tr><tr>
                                             <td>to_</td>
                                             <td>
                                                <input type="text" name="to_" id="to_"  value="<?=$to_?>" class="textbox">
                                                <a href="javascript:void(0);" onclick="displayDatePicker('to_');"><img src="../../images/calendar.gif" width="16" height="16" border="0" /></a>
                                             </td>
                                         </tr>
										 <tr> 
											 <td align="right"></td>
											 <td>
												<input type="hidden" name="cmd" value="add">
                                                <input type="hidden" name="employee_id" value="<?=$_REQUEST['employee_id']?>">
												<input type="hidden" name="id" value="<?=$Id?>">			
												<input type="submit" name="btn_submit" id="btn_submit" value="submit" class="butto_n_blue">
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

