<?php
 include("../template/header_popup.php");
?>
<script language="javascript" src="education.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script	src="../../js/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../css/datepicker.css">

<a href="index.php?cmd=list&employee_id=<?=$_REQUEST['employee_id']?>" class="btn green">List</a> <br><br>
  <div class="portlet box blue">
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

								 <form name="frm_education" method="post"  enctype="multipart/form-data" onSubmit="return checkRequired();">			
								  <div class="portlet-body">
						         <div class="table-responsive">	
					                <table class="table">
										<tr>
                                             <td>Name Institution</td>
                                             <td>
                                                <input type="text" name="name_institution" id="name_institution"  value="<?=$name_institution?>" class="textbox">
                                             </td>
                                         </tr><tr>
                                             <td>Principals Subject</td>
                                             <td>
                                                <input type="text" name="principals_subject" id="principals_subject"  value="<?=$principals_subject?>" class="textbox">
                                             </td>
                                         </tr><tr>
                                             <td>Degree</td>
                                             <td>
                                                <input type="text" name="degree" id="degree"  value="<?=$degree?>" class="textbox">
                                             </td>
                                         </tr><tr>
                                             <td>Year</td>
                                             <td>
                                                <input type="text" name="year" id="year"  value="<?=$year?>" class="textbox">
                                             </td>
                                         </tr><tr>
                                             <td>Division</td>
                                             <td>
                                                <input type="text" name="division" id="division"  value="<?=$division?>" class="textbox">
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

