<style>
	  .btn + .btn {
	   margin-left: 0px; 
	}
	
	.btn-block+.btn-block {
	     margin-top: 1px; 
	}
</style>
<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<?php
			  $b_name_file = basename($_SERVER['SCRIPT_FILENAME']);
			  $b_name_arr  = explode(".",$b_name_file);
			  $b_name      = $b_name_arr[0];
			?>
                        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				
              
                                <li class="start">
					<a href="../home">
					<i class="icon-home"></i>
					<span class="title">Home</span>
					</a>
				</li>
              
				<li class="start active open">
					<a href="javascript:;">
					<i class="fa fa-cogs"></i>
					<span class="title">Menu</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>					
				</li>
			 <?php
			 if($_SESSION["roles"]['LeftMenu-Logo']== "LeftMenu-Logo")
			 {
			?> 	
			<li class="start"><a href="../logo/index.php?cmd=list"><i class="icon-rocket"></i>Logo</a></li>	
			  <?php
			 }
			?> 
            
            
             <?php
			 if($_SESSION["roles"]['LeftMenu-Country']== "LeftMenu-Country")
			 {
			?> 	
            <li class="start"><a href="../country/index.php?cmd=list"><i class="icon-rocket"></i>Country</a></li>
             <?php
			 }
			?> 
            
             
             <?php
			 if($_SESSION["roles"]['LeftMenu-District']== "LeftMenu-District")
			 {
			?> 	
            <li class="start"><a href="../district/index.php?cmd=list"><i class="icon-rocket"></i>District</a></li>
               <?php
			 }
			?> 
            
             <?php
			 if($_SESSION["roles"]['LeftMenu-Users']== "LeftMenu-Users")
			 {
			?> 	
            <li class="start"><a href="../users/index.php?cmd=list"><i class="icon-rocket"></i>Users</a></li>
             <?php
			 }
			?> 
             
             <?php
			 if($_SESSION["roles"]['LeftMenu-Roles']== "LeftMenu-Roles")
			 {
			?> 	
            <li class="start"><a href="../roles/index.php?cmd=list"><i class="icon-rocket"></i>Roles</a></li>
            <?php
			 }
			?> 
             
             <?php
			 if($_SESSION["roles"]['LeftMenu-Employee']== "LeftMenu-Employee")
			 {
			?> 	 
            <li class="start"><a href="../employee/index.php?cmd=list"><i class="icon-rocket"></i>Employee</a></li>
             <?php
			 }
			?> 
             
             <?php
			 if($_SESSION["roles"]['LeftMenu-Archive']== "LeftMenu-Archive")
			 {
			?> 	
            <li class="start"><a href="../archive/index.php?cmd=list"><i class="icon-rocket"></i>Archived Employee</a></li>
             <?php
			 }
			?> 
           
            <li class="start"><a href="../report/index.php?cmd=list"><i class="icon-rocket"></i>Report</a></li>
            
            
            <!--
			<li class="start"><a href="../disciplinary_action/index.php?cmd=list"><i class="icon-rocket"></i>Disciplinary Action</a></li>
            <li class="start"><a href="../children/index.php?cmd=list"><i class="icon-rocket"></i>Children</a></li>
			<li class="start"><a href="../education/index.php?cmd=list"><i class="icon-rocket"></i>Education</a></li>
			<li class="start"><a href="../foreign_training/index.php?cmd=list"><i class="icon-rocket"></i>Foreign Training</a></li>
			<li class="start"><a href="../languages/index.php?cmd=list"><i class="icon-rocket"></i>Languages</a></li>
			<li class="start"><a href="../local_training/index.php?cmd=list"><i class="icon-rocket"></i>Local Training</a></li>
			<li class="start"><a href="../parmanent_address/index.php?cmd=list"><i class="icon-rocket"></i>Parmanent Address</a></li>
			<li class="start"><a href="../present_address/index.php?cmd=list"><i class="icon-rocket"></i>Present Address</a></li>
			<li class="start"><a href="../promotions/index.php?cmd=list"><i class="icon-rocket"></i>Promotions</a></li>
			<li class="start"><a href="../rest_of_recreation/index.php?cmd=list"><i class="icon-rocket"></i>Rest Of Recreation</a></li>
			<li class="start"><a href="../retirement_year/index.php?cmd=list"><i class="icon-rocket"></i>Retirement Year</a></li>
			<li class="start"><a href="../service_history/index.php?cmd=list"><i class="icon-rocket"></i>Service History</a></li>
			-->  
			</ul>
			<!-- END SIDEBAR MENU -->
           
	
          
			
		</div>
	</div>
