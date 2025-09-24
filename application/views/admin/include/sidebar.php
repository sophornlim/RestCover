<?php $page_name =  $this->uri->segment(1);  ?>
<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url() ?>_template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $this->session->userdata('username'); ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li <?php if($page_name == '') echo 'class="active"'; ?> >
              <a href="<?php echo base_url() ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
          <?php
            if($this->session->userdata('userid') == 1)
            {
          ?> 
            <li class="treeview <?php if($page_name == 'users_group' || $page_name == 'users' ) echo 'active'; ?>">
              <a href="#">
                <i class="fa fa-sitemap"></i> <span>User Management</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li <?php if($page_name == 'users_group') echo 'active'; ?> >
                  <a href="<?php echo base_url() ?>index.php/users_group"><i class="fa fa-tasks"></i>User Department</a>
                </li>
                <li <?php if($page_name == 'users') echo 'active'; ?>>
                  <a href="#"><i class="fa fa-user-md"></i>User<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="<?php echo base_url() ?>index.php/users"><i class="fa fa-angle-double-right"></i>List</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/users/create"><i class="fa fa-angle-double-right"></i>Add New</a></li>
                  </ul>
                </li>
                
              </ul>
            </li>

            <li class="treeview <?php if($page_name == 'customer') echo 'active'; ?>">
              <a href="#"><i class="fa fa-user"></i><span>Customer</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo base_url() ?>index.php/customer"><i class="fa fa-angle-double-right"></i>List</a>
                  <a href="<?php echo base_url() ?>index.php/customer/create"><i class="fa fa-angle-double-right"></i>Add New</a>
                </li>
              </ul>
            </li>

            <li  class="treeview <?php if($page_name == 'category') echo 'active'; ?>" >
              <a href="#"><i class="fa fa-database"></i><span>Product Category</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>index.php/category"><i class="fa fa-angle-double-right"></i>List</a></li>
                <li><a href="<?php echo base_url() ?>index.php/category/create"><i class="fa fa-angle-double-right"></i>Add New</a></li>
              </ul>
            </li>
            <li class="treeview <?php if($page_name == 'options') echo 'active'; ?>" >
              <a href="#"><i class="fa fa-map-signs"></i><span>Product Option</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>index.php/options"><i class="fa fa-angle-double-right"></i>List</a></li>
                <li><a href="<?php echo base_url() ?>index.php/options/create"><i class="fa fa-angle-double-right"></i>Add New</a></li>
              </ul>
            </li>

            <li class="treeview <?php if($page_name == 'product') echo 'active'; ?>">
              <a href="#"><i class="fa fa-cubes"></i><span>Product</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>index.php/product"><i class="fa fa-angle-double-right"></i>List</a></li>
                <li><a href="<?php echo base_url() ?>index.php/product/create"><i class="fa fa-angle-double-right"></i>Add New</a></li>
              </ul>
            </li>

            <li class="treeview <?php if($page_name == 'sales') echo 'active'; ?>">
              <a href="#"><i class="fa fa-calendar-check-o"></i><span>Sales</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>index.php/sales"><i class="fa fa-angle-double-right"></i>List</a></li>
                <li><a href="<?php echo base_url() ?>index.php/sales/create"><i class="fa fa-angle-double-right"></i>Add New</a></li>
                <li><a href="<?php echo base_url() ?>index.php/sales/return_sales"><i class="fa fa-angle-double-right"></i>Sales Return</a></li>
                <li><a href="<?php echo base_url() ?>index.php/sales/order_view"><i class="fa fa-angle-double-right"></i>Chef monitoring Screen</a></li>
              </ul>
            </li>

            <li class="treeview <?php if($page_name == 'report') echo 'active'; ?>">
              <a href="#"><i class="fa fa-table"></i><span>Report</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>index.php/report"><i class="fa fa-angle-double-right"></i>Selling Report</a></li>
                <li><a href="<?php echo base_url() ?>index.php/report/table"><i class="fa fa-angle-double-right"></i>Table Report</a></li>
              </ul>
            </li>

            <li class="treeview <?php if($page_name == 'company') echo 'active'; ?>">
              <a href="<?php echo base_url() ?>index.php/company/edit"><i class="fa fa-cog"></i><span>Setup</span></a>
            </li>
          <?php } 
            else
            {
              $CI =& get_instance();
              $check_rights = $CI->check_rights();
              ?>
              <?php if (in_array('customer/',$check_rights) || in_array('customer/create',$check_rights)) { ?>
                <li class="treeview <?php if($page_name == 'customer') echo 'active'; ?>">
                  <a href="#"><i class="fa fa-user"></i><span>Customer</span><i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li>
                    <?php if(in_array('customer/', $check_rights)) { ?>
                        <a href="<?php echo base_url() ?>index.php/customer"><i class="fa fa-angle-double-right"></i>List</a>
                    <?php }
                    if(in_array('customer/create', $check_rights))
                    {
                    ?>
                        <a href="<?php echo base_url() ?>index.php/customer/create"><i class="fa fa-angle-double-right"></i>Add New</a>
                    <?php } ?>
                    </li>
                  </ul>
                </li>
              <?php } ?>

              <?php if (in_array('category/',$check_rights) || in_array('category/create',$check_rights)) { ?>
              <li  class="treeview <?php if($page_name == 'category') echo 'active'; ?>" >
                <a href="#"><i class="fa fa-database"></i><span>Product Category</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <?php if(in_array('category/', $check_rights)) { ?>
                    <li><a href="<?php echo base_url() ?>index.php/category"><i class="fa fa-angle-double-right"></i>List</a></li>
                  <?php }
                    if(in_array('category/create', $check_rights))
                    {
                  ?>
                    <li><a href="<?php echo base_url() ?>index.php/category/create"><i class="fa fa-angle-double-right"></i>Add New</a></li>
                  <?php } ?>
                </ul>
              </li>
              <?php } ?>

              <?php if (in_array('options/',$check_rights) || in_array('options/create',$check_rights)) { ?>
              <li class="treeview <?php if($page_name == 'options') echo 'active'; ?>" >
                <a href="#"><i class="fa fa-map-signs"></i><span>Product Option</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <?php if(in_array('options/', $check_rights)) { ?>
                    <li><a href="<?php echo base_url() ?>index.php/options"><i class="fa fa-angle-double-right"></i>List</a></li>
                  <?php }
                    if(in_array('options/create', $check_rights))
                    {
                  ?>
                    <li><a href="<?php echo base_url() ?>index.php/options/create"><i class="fa fa-angle-double-right"></i>Add New</a></li>
                  <?php } ?>
                </ul>
              </li>
              <?php } ?>


              <?php if (in_array('product/',$check_rights) || in_array('options/create',$check_rights)) { ?>
              <li class="treeview <?php if($page_name == 'product') echo 'active'; ?>">
                <a href="#"><i class="fa fa-cubes"></i><span>Product</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <?php if(in_array('product/', $check_rights)) { ?>
                    <li><a href="<?php echo base_url() ?>index.php/product"><i class="fa fa-angle-double-right"></i>List</a></li>
                  <?php }
                    if(in_array('product/create', $check_rights))
                    {
                  ?>
                    <li><a href="<?php echo base_url() ?>index.php/product/create"><i class="fa fa-angle-double-right"></i>Add New</a></li>
                  <?php } ?>
                </ul>
              </li>
              <?php } ?>

              <?php if (in_array('sales/',$check_rights) || in_array('sales/create',$check_rights) || in_array('sales/order-view',$check_rights)) { ?>
              <li class="treeview <?php if($page_name == 'sales') echo 'active'; ?>">
                <a href="#"><i class="fa fa-calendar-check-o"></i><span>Sales</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <?php if(in_array('sales/', $check_rights)) { ?>
                    <li><a href="<?php echo base_url() ?>index.php/sales"><i class="fa fa-angle-double-right"></i>List</a></li>
                  <?php }
                    if(in_array('sales/create', $check_rights))
                    {
                  ?>
                    <li><a href="<?php echo base_url() ?>index.php/sales/create"><i class="fa fa-angle-double-right"></i>Add New</a></li>
                  <?php }
                    if(in_array('sales/return_sales', $check_rights))
                    {
                  ?>
                    <li><a href="<?php echo base_url() ?>index.php/sales/return_sales"><i class="fa fa-angle-double-right"></i>Sales Return</a></li>
                  <?php } 
                    if(in_array('sales/order-view', $check_rights))
                    {
                  ?>
                     <li><a href="<?php echo base_url() ?>index.php/sales/order_view"><i class="fa fa-angle-double-right"></i>Chef monitoring Screen</a></li>
                  <?php } ?>
                </ul>
              </li>
              <?php } ?>

              <?php if (in_array('report/',$check_rights) || in_array('report/table',$check_rights)) { ?>
              <li class="treeview <?php if($page_name == 'report') echo 'active'; ?>">
                <a href="#"><i class="fa fa-table"></i><span>Report</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <?php if(in_array('report/', $check_rights)) { ?>
                    <li><a href="<?php echo base_url() ?>index.php/report"><i class="fa fa-angle-double-right"></i>Selling Report</a></li>
                  <?php }
                    if(in_array('report/table', $check_rights))
                    {
                  ?>
                    <li><a href="<?php echo base_url() ?>index.php/report/table"><i class="fa fa-angle-double-right"></i>Table Report</a></li>
                  <?php } ?>
                </ul>
              </li>
              <?php } ?>

              <?php if (in_array('company/edit',$check_rights)) { ?>
              <li class="treeview <?php if($page_name == 'company') echo 'active'; ?>">
                <a href="<?php echo base_url() ?>index.php/company/edit"><i class="fa fa-cog"></i><span>Setup</span></a>
              </li>
              <?php } ?>

              <?php
            }
          ?>  
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
