<?php
 include("../template/header.php");
?>
<a href="index.php?cmd=edit" class="btn green">Add an employee</a> <br><br>
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
						<td align="center" valign="top">
						  <form name="search_frm" id="search_frm" method="post">
							<div class="portlet-body">
					         <div class="table-responsive">	
				                <table class="table">
									  <TR>
										<TD  nowrap="nowrap">
										  <?php
											  $hash    =  getTableFieldsName("employee");
											  $hash    = array_diff($hash,array("id"));
										  ?>
										  Search Key:
										  <select   name="field_name" id="field_name"  class="textbox">
											<option value="">--Select--</option>
											<?php
											foreach($hash as $key=>$value)
											{
										    ?>
											<option value="<?=$key?>" <?php if($_SESSION['field_name']==$key) echo "selected"; ?>><?=str_replace("_"," ",$value)?></option>
											<?php
										    }
										  ?>
										  </select>
										</TD>
										<TD  nowrap="nowrap" align="right"><label for="searchbar"><img src="../../images/icon_searchbox.png" alt="Search"></label>
										   <input type="text"    name="field_value" id="field_value" value="<?=$_SESSION["field_value"]?>" class="textbox"></TD>
										<td nowrap="nowrap" align="right">
										  <input type="hidden" name="cmd" id="cmd" value="search_employee" >
										  <input type="submit" name="btn_submit" id="btn_submit"  value="Search" class="button" />
										</td>
									  </TR>
									</table>
							</div>
							</div>
						  </form>
						</td>
				   </tr>
				   <tr>
				   <td> 
				
						<div class="portlet-body">
				      <div class="table-responsive">	
				          <table class="table">
							<tr bgcolor="#ABCAE0">
							  <td>Users</td>
                              <td>Employee Name</td>
                              <td>Fathers Name</td>
                              <td>Mothers Name</td>
                              <td>Home District</td>
                              <td>Dob</td>
                              <td>Sex</td>
                              <td>Mobile Phone</td>
                              <td>Email</td>
                              <!--<td>Country</td>
                              <td>Nationalid</td>
                              <td>Blood Group</td>
                              <td>Marital Status</td>
                              <td>Name Spouse</td>
                              <td>Spouse Occupation</td>
                              <td>Spouse District</td>
                              <td>Religion</td>-->
                              <td>Date Joining</td>
                              <td>Entry Designation</td>
                              <td>Entry Scale</td>
                              <td>File Image</td>
			                  <td>Action</td>
							</tr>
						 <?php
								
								if($_SESSION["search"]=="yes")
								  {
									$whrstr = " AND ".$_SESSION['field_name']." LIKE '%".$_SESSION["field_value"]."%'";
								  }
								  else
								  {
									$whrstr = "";
								  }
								  
								$whrstr .= " AND archive_status='Yes'";
						 
								$rowsPerPage = 10;
								$pageNum = 1;
								if(isset($_REQUEST['page']))
								{
									$pageNum = $_REQUEST['page'];
								}
								$offset = ($pageNum - 1) * $rowsPerPage;  
						 
						 
											  
								$info["table"] = "employee";
								$info["fields"] = array("employee.*"); 
								$info["where"]   = "1   $whrstr ORDER BY id DESC  LIMIT $offset, $rowsPerPage";
													
								
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
							 <td>
		                            <?php
									    unset($info2);        
										$info2['table']    = users;	
										$info2['fields']   = array("email");	   	   
										$info2['where']    =  "1 AND id='".$arr[$i]['users_id']."' LIMIT 0,1";
										$res2  =  $db->select($info2);
										echo $res2[0]['email'];	
					                ?>
							  </td>
                              <td><?=$arr[$i]['employee_name']?></td>
                              <td><?=$arr[$i]['fathers_name']?></td>
                              <td><?=$arr[$i]['mothers_name']?></td>
                              <td><?=$arr[$i]['home_district']?></td>
                              <td><?=$arr[$i]['dob']?></td>
                              <td><?=$arr[$i]['sex']?></td>
                              <td><?=$arr[$i]['mobile_phone']?></td>
                              <td><?=$arr[$i]['email']?></td>
                              <!--
                              <td>
		                            <?php
									    unset($info2);        
										$info2['table']    = country;	
										$info2['fields']   = array("country");	   	   
										$info2['where']    =  "1 AND id='".$arr[$i]['country_id']."' LIMIT 0,1";
										$res2  =  $db->select($info2);
										echo $res2[0]['country'];	
					                ?>
							   </td>
                              <td><?=$arr[$i]['nationalid']?></td>
                              <td><?=$arr[$i]['blood_group']?></td>
                              <td><?=$arr[$i]['marital_status']?></td>
                              <td><?=$arr[$i]['name_spouse']?></td>
                              <td><?=$arr[$i]['spouse_occupation']?></td>
                              <td><?=$arr[$i]['spouse_district']?></td>
                              <td><?=$arr[$i]['religion']?></td>-->
                              <td><?=$arr[$i]['date_joining']?></td>
                              <td><?=$arr[$i]['entry_designation']?></td>
                              <td><?=$arr[$i]['entry_scale']?></td>
                              <td><img src="../../<?=$arr[$i]['file_image']?>" style="width:100px;"></td>
			  
							  <td nowrap >
							    <?php
								 if($_SESSION["roles"]['edit']== "edit")
								 {
                                ?>  
								  <a href="index.php?cmd=edit&id=<?=$arr[$i]['id']?>"  class="btn default btn-xs purple"><i class="fa fa-edit"></i>Edit</a>
								 <?php
								 }
								?> 
                                 <?php
								 if($_SESSION["roles"]['delete']== "delete")
								 {
                                ?> 
								  <a href="index.php?cmd=delete&id=<?=$arr[$i]['id']?>" class="btn btn-sm red filter-cancel"  onClick=" return confirm('Are you sure to delete this item ?');"><i class="fa fa-times"></i>Delete</a> 
                                 <?php
								 }
								?> 
                                  <?php
								 if($_SESSION["roles"]['live']== "live")
								 {
                                ?> 
                                  <a href="index.php?cmd=live&id=<?=$arr[$i]['id']?>" class="btn btn-sm red filter-cancel"  onClick=" return confirm('Are you sure to archive this item ?');"><i class="fa fa-times"></i>send to live</a> 
                                  <?php
								 }
								?> 
                               <a href="index.php?cmd=detail&id=<?=$arr[$i]['id']?>" class="btn default btn-xs purple"><i class="fa fa-edit"></i>Detail</a> 
							 </td>
						
							</tr>
						<?php
								  }
						?>
						
						<tr>
						   <td colspan="10" align="center">
							  <?php              
									  unset($info);
					
									   $info["table"] = "employee";
									   $info["fields"] = array("count(*) as total_rows"); 
									   $info["where"]   = "1  $whrstr ORDER BY id DESC";
									  
									   $res  = $db->select($info);  
					
												
										$numrows = $res[0]['total_rows'];
										$maxPage = ceil($numrows/$rowsPerPage);
										$self = 'index.php?cmd=list';
										$nav  = '';
										
										$start    = ceil($pageNum/5)*5-5+1;
										$end      = ceil($pageNum/5)*5;
										
										if($maxPage<$end)
										{
										  $end  = $maxPage;
										}
										
										for($page = $start; $page <= $end; $page++)
										//for($page = 1; $page <= $maxPage; $page++)
										{
											if ($page == $pageNum)
											{
												$nav .= "<li>$page</li>"; 
											}
											else
											{
												$nav .= "<li><a href=\"$self&&page=$page\" class=\"nav\">$page</a></li>";
											} 
										}
										if ($pageNum > 1)
										{
											$page  = $pageNum - 1;
											$prev  = "<li><a href=\"$self&&page=$page\" class=\"nav\">[Prev]</a></li>";
									
										   $first = "<li><a href=\"$self&&page=1\" class=\"nav\">[First Page]</a></li>";
										} 
										else
										{
											$prev  = '<li>&nbsp;</li>'; 
											$first = '<li>&nbsp;</li>'; 
										}
									
										if ($pageNum < $maxPage)
										{
											$page = $pageNum + 1;
											$next = "<li><a href=\"$self&&page=$page\" class=\"nav\">[Next]</a></li>";
									
											$last = "<li><a href=\"$self&&page=$maxPage\" class=\"nav\">[Last Page]</a></li>";
										} 
										else
										{
											$next = '<li>&nbsp;</li>'; 
											$last = '<li>&nbsp;</li>'; 
										}
										
										if($numrows>1)
										{
										  echo '<ul id="navlist">';
										   echo $first . $prev . $nav . $next . $last;
										  echo '</ul>';
										}
									?>     
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
<?php
include("../template/footer.php");
?>









