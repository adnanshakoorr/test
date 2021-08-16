 <aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo !empty($this->session->userdata('master_admin_image'))?base_url('uploads/admin/').$this->session->userdata('master_admin_image'):base_url('admin/assets/admin/img/placeholder.png');?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo !empty($this->session->userdata('master_admin_name'))?$this->session->userdata('master_admin_name'):'Name';?></p>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="<?php echo base_url('admin');?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="javascript">
          <i class="fa fa-gear"></i>
          <span>Settings</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('admin/settings/general');?>"><i class="fa fa-circle-o"></i>General</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="javascript">
          <i class="fa fa-file"></i>
          <span>General Search Content</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">  
          <li><a href="<?php echo base_url('admin/payment_method');?>"><i class="fa fa-circle-o"></i>Add payment method</a></li>
          <li><a href="<?php echo base_url('admin/general_auction');?>"><i class="fa fa-circle-o"></i>Add auction</a></li>
          <li><a href="<?php echo base_url('admin/general_branch');?>"><i class="fa fa-circle-o"></i>Add branch</a></li>
          <li><a href="<?php echo base_url('admin/general_destination');?>"><i class="fa fa-circle-o"></i>Add destination</a></li>
          <li><a href="<?php echo base_url('admin/general_location');?>"><i class="fa fa-circle-o"></i>Add location</a></li>
          <li><a href="<?php echo base_url('admin/general_from_port');?>"><i class="fa fa-circle-o"></i>Add port</a></li>
          <li><a href="<?php echo base_url('admin/general_cargo_type');?>"><i class="fa fa-circle-o"></i>Add cargo type</a></li>
        </ul>
      </li>


      <li class="treeview">
        <a href="javascript">
          <i class="fa fa-file"></i>
          <span>New Order Content</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">  
          <li><a href="<?php echo base_url('admin/add_vin');?>"><i class="fa fa-circle-o"></i>Add New Vin</a></li>
          <li><a href="<?php echo base_url('admin/create_order_commodity_type');?>"><i class="fa fa-circle-o"></i>Add order commodity type</a></li>
          <li><a href="<?php echo base_url('admin/create_order_consolidate');?>"><i class="fa fa-circle-o"></i>Add order consolidate</a></li>
          <li><a href="<?php echo base_url('admin/create_order_consignee');?>"><i class="fa fa-circle-o"></i>Add order consignee</a></li>
          <li><a href="<?php echo base_url('admin/create_order_end_use_type');?>"><i class="fa fa-circle-o"></i>Add order end use type</a></li>
          <li><a href="<?php echo base_url('admin/create_order_off_site_location');?>"><i class="fa fa-circle-o"></i>Add order off site location</a></li>
          <li><a href="<?php echo base_url('admin/create_order_original_title');?>"><i class="fa fa-circle-o"></i>Add order original title</a></li>
          <li><a href="<?php echo base_url('admin/create_order_sale_origin');?>"><i class="fa fa-circle-o"></i>Add order sale origin</a></li>
          <li><a href="<?php echo base_url('admin/create_order_trucking');?>"><i class="fa fa-circle-o"></i>Add order trucking</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="javascript">
          <i class="fa fa-file"></i>
          <span>Vehicle Search Content</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">  
          <li><a href="<?php echo base_url('admin/vehicles_final_city');?>"><i class="fa fa-circle-o"></i>Add Vehicles final city</a></li>
          <li><a href="<?php echo base_url('admin/vehicles_status');?>"><i class="fa fa-circle-o"></i>Add Vehicles status</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="javascript">
          <i class="fa fa-file"></i>
          <span>Container Search Content</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">  
          <li><a href="<?php echo base_url('admin/containers_loading_status');?>"><i class="fa fa-circle-o"></i>Add Containers loading status</a></li>
          <li><a href="<?php echo base_url('admin/containers_shipping_line');?>"><i class="fa fa-circle-o"></i>Add Containers shipping line</a></li>
          <li><a href="<?php echo base_url('admin/containers_vessel_name');?>"><i class="fa fa-circle-o"></i>Add Containers vessel name</a></li>
        </ul>
      </li>
     <!-- <li class="treeview">
        <a href="javascript">
          <i class="fa fa-envelope"></i>
          <span>Users</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
         <li><a href="<?php echo base_url('admin/user');?>"><i class="fa fa-circle-o"></i>Add Users</a></li> 
       </ul>
     </li> -->
  </ul>

</section>
</aside>
<?php if(isset($output)):?>
  <div class="content-wrapper">    
    <?php echo $output;?> 
  </div>
  <?php endif;?>