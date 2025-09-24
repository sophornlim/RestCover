<?php
// Add FIle
// include common file
 $this->load->view('admin/include/common.php'); 
// include header file
  $this->load->view('admin/include/header.php'); 
// include sidebar file  
   $this->load->view('admin/include/sidebar.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Customer
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customer</li>
      </ol>
    </section>

     <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Edit</h3>
                <a href="<?php echo base_url().'index.php/customer'; ?>" class="btn btn-primary btn-small pull-right">Back to List</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <?php if(validation_errors() != false){ ?>
                  <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Error!</h4>
                      <?php echo validation_errors(); ?>
                  </div>
                <?php } ?>
              <?php 
                $attributes = array('id' => 'frm','name'=>'frm');
                  echo form_open('customer/update/'.$this->uri->segment(3),$attributes); ?>


					<div class="form-group">
                        <label>Customer first name :</label>
                        <input type="text" name="txt_customer_first_name" class="form-control " placeholder="Customer first name Here..." value="<?php echo $recored['customer_first_name']; ?>" />
                    </div>
					
					<div class="form-group">
                        <label>Customer email :</label>
                        <input type="text" name="txt_customer_email" class="form-control " placeholder="Customer email Here..." value="<?php echo $recored['customer_email']; ?>" />
                    </div>
				
					<div class="form-group">
                        <label>Customer address :</label>
                        <input type="text" name="txt_customer_address" class="form-control " placeholder="Customer address Here..." value="<?php echo $recored['customer_address']; ?>" />
                    </div>
					<div class="form-group">
                        <label>Customer city :</label>
                        <input type="text" name="txt_customer_city" class="form-control " placeholder="Customer city Here..." value="<?php echo $recored['customer_city']; ?>" />
                    </div>
					<div class="form-group">
                        <label>Customer zipcode :</label>
                        <input type="text" name="txt_customer_zipcode" class="form-control " placeholder="Customer zipcode Here..." value="<?php echo $recored['customer_zipcode']; ?>" />
                    </div>
					<div class="form-group">
                        <label>Customer phone :</label>
                        <input type="text" name="txt_customer_phone" class="form-control " placeholder="Customer phone Here..." value="<?php echo $recored['customer_phone']; ?>" />
                    </div>
					
					<div class="form-group">
                        <label>Contact person :</label>
                        <input type="text" name="txt_contact_person" class="form-control " placeholder="Contact person Here..." value="<?php echo $recored['contact_person']; ?>" />
                    </div>
					<div class="form-group">
                        <label>Contact person phone :</label>
                        <input type="text" name="txt_contact_person_phone" class="form-control " placeholder="Contact person phone Here..." value="<?php echo $recored['contact_person_phone']; ?>" />
                    </div>
					
					          
                    <div class="form-group">
                        <label>Customer is active :</label>
                        <input type="radio" name="txt_customer_is_active" <?php if($recored['customer_is_active'] == 'yes') echo 'checked'; ?> placeholder="Customer is active Here..." value="yes" /> Yes
                        <input type="radio" name="txt_customer_is_active" <?php if($recored['customer_is_active'] == 'no') echo 'checked'; ?> placeholder="Customer is active Here..." value="no" /> No
                    </div>

                    <div class="form-group">
                      <input type="submit" name="btnsubmit" class="btn btn-primary" value="Save"/>
                      <input type="button" title="Cancel" value="Cancel" class="btn btn-danger" onclick="javascript:window.location.href='<?php echo base_url().'index.php/customer' ?>'" />
                    </div>
              <?php echo form_close(); ?>
              </div>
            </div>
          </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php // include footer FIle 
 
 $this->load->view('admin/include/footer.php'); ?>			

