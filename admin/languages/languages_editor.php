<?php
 include("../template/header_popup.php");
?>
<script language="javascript" src="languages.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script	src="../../js/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../css/datepicker.css">

<a href="index.php?cmd=list&employee_id=<?=$_REQUEST['employee_id']?>" class="btn green">List</a> <br><br>
  <div class="portlet box blue">
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

								 <form name="frm_languages" method="post"  enctype="multipart/form-data" onSubmit="return checkRequired();">			
								  <div class="portlet-body">
						         <div class="table-responsive">	
					                <table class="table">
										<tr>
                                             <td>Languages</td>
                                             <td>
                                                <input type="text" name="languages" id="languages"  value="<?=$languages?>" class="textbox">
                                             </td>
                                         </tr><tr>
                                             <td>read_</td>
                                             <td>
                                                <input type="text" name="read_" id="read_"  value="<?=$read_?>" class="textbox">
                                             </td>
                                         </tr><tr>
                                             <td>write_</td>
                                             <td>
                                                <input type="text" name="write_" id="write_"  value="<?=$write_?>" class="textbox">
                                             </td>
                                         </tr><tr>
                                             <td>Speak</td>
                                             <td>
                                                <input type="text" name="speak" id="speak"  value="<?=$speak?>" class="textbox">
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

