<?php
 include("../template/header.php");
?>
<a href="index.php?cmd=list" class="btn green">List</a>
<div id="dialog-token-points" title="Token points">
     <p>
         <span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
        <div id="inner_data_token"></div>
    </p>
</div>
<div id="dialog-prizes-points" title="Prizes points">
    <p>
         <span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
        <div id="inner_data_prizes"></div>
    </p>
</div>	
<div id="spinner"></div>	

<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption"><i class="fa fa-globe"></i>Roles</div>
        <!--<div style="float:right;">
        	<a href="member_archive?cmd=list" class="btn default btn-xs blue">Archive</a>
        </div>-->
        <div class="tools">
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
        </div>
    </div>
<div class="portlet-body flip-scroll">
<table class="table table-bordered table-striped table-condensed flip-content">
 <tr>
  <td>  
     
	 <form name="frm_roles" method="post"  enctype="multipart/form-data" onSubmit="return checkRequired();">			
		<table cellspacing="3" cellpadding="3" border="0" align="center" class="bodytext" width="100%">  
		 <tr>
						 <td>Name</td>
						 <td>
						    <input type="text" name="name" id="name"  value="<?=$name?>" class="textbox">
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
	</form>
  </td>
 </tr>
</table>
</div>
</div>

<?php
include("../template/footer.php");
?>




