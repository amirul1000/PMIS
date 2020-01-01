<?php
 include("../template/header.php");
?>
<script language="javascript" src="employee.js"></script>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script	src="../../js/main.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../css/datepicker.css">
 <div class="portlet box blue">
           <div class="portlet-title">
                <div class="caption"><i class="fa fa-globe"></i><b><?=ucwords(str_replace("_"," ","Search"))?></b>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>             
            <div class="portlet-body">
	         <div class="table-responsive">
                 <form name="search_frm" id="search_frm" method="post">
							<div class="portlet-body">
					         <div class="table-responsive">	
                                <label for="searchbar"><img src="../images/icon_searchbox.png" alt="Search"></label>
                                <table class="table">
                                     <tr>  
                                
                                        <td>Employee Name</td>
                                        <td>
                                        <input type="text" name="employee_name" id="employee_name"  value="<?=$_SESSION['employee_name']?>" class="form-control-static">
                                        </td>
                                        <td></td>
                                            <td>
                                            </td>
                                    </tr>
                                    <tr>
                                        <td>Fathers Name</td>
                                        <td>
                                        <input type="text" name="fathers_name" id="fathers_name"  value="<?=$_SESSION['fathers_name']?>" class="form-control-static">
                                        </td>
                                   
                                        <td>Mothers Name</td>
                                        <td>
                                        <input type="text" name="mothers_name" id="mothers_name"  value="<?=$_SESSION['mothers_name']?>" class="form-control-static">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Home District</td>
                                        <td>
                                        <input type="text" name="home_district" id="home_district"  value="<?=$_SESSION['home_district']?>" class="form-control-static">
                                        </td>
                                   
                                        <td>Dob</td>
                                        <td>
                                        <input type="text" name="dob" id="dob"  value="<?=$_SESSION['dob']?>" class="form-control-static">
                                        <a href="javascript:void(0);" onclick="displayDatePicker('dob');"><img src="../../images/calendar.gif" width="16" height="16" border="0" /></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sex</td>
                                        <td><?php
                                        $enumemployee = getEnumFieldValues('employee','sex');
                                        ?>
                                        <select  name="sex" id="sex"   class="form-control-static">
                                        <option value="">---</option>
										<?php
                                        foreach($enumemployee as $key=>$value)
                                        { 
                                        ?>
                                        <option value="<?=$value?>" <?php if($value==$_SESSION['sex']){ echo "selected"; }?>><?=$value?></option>
                                        <?php
                                        }
                                        ?> 
                                        </select>
                                        </td>
                                 
                                        <td>Is freedomfighter ?</td>
                                        <td>
										<?php
                                        	$enumfreedomfighter = getEnumFieldValues('employee','is_freedomfighter');
                                        ?>
                                        <select  name="is_freedomfighter" id="is_freedomfighter"   class="form-control-static">
                                        <option value="">---</option>
                                        <?php
                                        foreach($enumfreedomfighter as $key=>$value)
                                        { 
                                        ?>
                                        <option value="<?=$value?>" <?php if($value==$_SESSION['is_freedomfighter']){ echo "selected"; }?>><?=$value?></option>
                                        <?php
                                        }
                                        ?> 
                                        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mobile Phone</td>
                                        <td>
                                        <input type="text" name="mobile_phone" id="mobile_phone"  value="<?=$_SESSION['mobile_phone']?>" class="form-control-static">
                                        </td>
                                   
                                        <td>Email</td>
                                        <td>
                                        <input type="text" name="email" id="email"  value="<?=$_SESSION['email']?>" class="form-control-static">
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td>Nationalid</td>
                                        <td>
                                        <input type="text" name="nationalid" id="nationalid"  value="<?=$_SESSION['nationalid']?>" class="form-control-static">
                                        </td>
                                  
                                        <td>Blood Group</td>
                                        <td>
                                        <input type="text" name="blood_group" id="blood_group"  value="<?=$_SESSION['blood_group']?>" class="form-control-static">
                                        </td>
                                    </tr>
                                <tr>
                                    <td>Marital Status</td>
                                    <td>
                                    <input type="text" name="marital_status" id="marital_status"  value="<?=$_SESSION['marital_status']?>" class="form-control-static">
                                    </td>
                               
                                    <td>Name Spouse</td>
                                    <td>
                                    <input type="text" name="name_spouse" id="name_spouse"  value="<?=$_SESSION['name_spouse']?>" class="form-control-static">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Spouse Occupation</td>
                                    <td>
                                    <input type="text" name="spouse_occupation" id="spouse_occupation"  value="<?=$_SESSION['spouse_occupation']?>" class="form-control-static">
                                    </td>
                                    
                                    <td>Spouse District</td>
                                    <td>
                                    <input type="text" name="spouse_district" id="spouse_district"  value="<?=$_SESSION['spouse_district']?>" class="form-control-static">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Religion</td>
                                    <td>
                                    <input type="text" name="religion" id="religion"  value="<?=$_SESSION['religion']?>" class="form-control-static">
                                    </td>
                                    <td>Date Joining</td>
                                    <td>
                                    <input type="text" name="date_joining" id="date_joining"  value="<?=$_SESSION['date_joining']?>" class="form-control-static">
                                    <a href="javascript:void(0);" onclick="displayDatePicker('date_joining');"><img src="../../images/calendar.gif" width="16" height="16" border="0" /></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Entry Designation</td>
                                    <td>
                                    <input type="text" name="entry_designation" id="entry_designation"  value="<?=$_SESSION['entry_designation']?>" class="form-control-static">
                                    </td>
                                    <td>Entry Scale</td>
                                    <td>
                                    <input type="text" name="entry_scale" id="entry_scale"  value="<?=$_SESSION['entry_scale']?>" class="form-control-static">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" align="right">
                                       <input type="hidden" name="cmd" id="cmd" value="search_employee" >                                              
                                       <input type="submit" name="btn_submit" id="btn_submit"  value="Search" class="btn" />
                                    </td>
                                </tr> 
                             </table>
							</div>
							</div>
						  </form>
             
             </div>
            </div>          
</div>
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
								
								if(!empty($_SESSION['employee_name']))
								{
									$whrstr .=" AND employee_name  LIKE '%".$_SESSION["employee_name"]."%'";
								}
								if(!empty($_SESSION['fathers_name']))
								{
									$whrstr .=" AND fathers_name LIKE '%".$_SESSION["fathers_name"]."%'";
								}
								if(!empty($_SESSION['mothers_name']))
								{
									$whrstr .=" AND mothers_name LIKE '%".$_SESSION["mothers_name"]."%'";
								}
								if(!empty($_SESSION['home_district']))
								{
									$whrstr .=" AND home_district LIKE '%".$_SESSION["home_district"]."%'";
								}
								if(!empty($_SESSION['dob']))
								{
									$whrstr .=" AND dob LIKE '%".$_SESSION["dob"]."%'";
								}
								if(!empty($_SESSION['sex']))
								{
									$whrstr .=" AND sex LIKE '%".$_SESSION["sex"]."%'";
								}
								if(!empty($_SESSION['is_freedomfighter']))
								{
									$whrstr .=" AND is_freedomfighter LIKE '%".$_SESSION["is_freedomfighter"]."%'";
								}
								if(!empty($_SESSION['mobile_phone']))
								{
									$whrstr .=" AND mobile_phone LIKE '%".$_SESSION["mobile_phone"]."%'";
								}
								if(!empty($_SESSION['email']))
								{
									$whrstr .=" AND email LIKE '%".$_SESSION["email"]."%'";
								}
								if(!empty($_SESSION['nationalid']))
								{
									$whrstr .=" AND nationalid LIKE '%".$_SESSION["nationalid"]."%'";
								}
								if(!empty($_SESSION['blood_group']))
								{
									$whrstr .=" AND blood_group LIKE '%".$_SESSION["blood_group"]."%'";
								}
								if(!empty($_SESSION['marital_status']))
								{
									$whrstr .=" AND marital_status LIKE '%".$_SESSION["marital_status"]."%'";
								}
								if(!empty($_SESSION['name_spouse']))
								{
									$whrstr .=" AND name_spouse LIKE '%".$_SESSION["name_spouse"]."%'";
								}
								if(!empty($_SESSION['spouse_occupation']))
								{
									$whrstr .=" AND spouse_occupation LIKE '%".$_SESSION["spouse_occupation"]."%'";
								}
								if(!empty($_SESSION['spouse_district']))
								{
									$whrstr .=" AND spouse_district LIKE '%".$_SESSION["spouse_district"]."%'";
								}
								if(!empty($_SESSION['religion']))
								{
									$whrstr .=" AND religion LIKE '%".$_SESSION["religion"]."%'";
								}
								if(!empty($_SESSION['date_joining']))
								{
									$whrstr .=" AND date_joining LIKE '%".$_SESSION["date_joining"]."%'";
								}
								if(!empty($_SESSION['entry_designation']))
								{
									$whrstr .=" AND entry_designation LIKE '%".$_SESSION["entry_designation"]."%'";
								}
								if(!empty($_SESSION['entry_scale']))
								{
									$whrstr .=" AND entry_scale LIKE '%".$_SESSION["entry_scale"]."%'";
								}
								
								$whrstr .= " AND archive_status='No'";
						 
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
										$info2['fields']   = array("*");	   	   
										$info2['where']    =  "1 AND id='".$arr[$i]['users_id']."' LIMIT 0,1";
										$res2  =  $db->select($info2);
										echo $res2[0]['first_name'].' '.$res2[0]['last_name'];	
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









