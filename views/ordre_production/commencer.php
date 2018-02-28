<?php $this->load->view('sidebar2');?>
<?php $this->load->view('header2');?>
    <!--link the bootstrap css file-->
    <link href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
    <!-- link jquery ui css-->
    <link href="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!--include jquery library-->
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.js'); ?>"></script>
    <!--load jquery ui js file-->
    <script src="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.min.js'); ?>"></script>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         <h2><i class="glyphicon glyphicon-edit"></i>Production</h2>
          <ol class="breadcrumb">
            <li><a href="Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            
            <li class="active">production</li>
          </ol>
        </section>

        <!-- Main content -->
        <!-- Main content -->
     <section class="content">

             <div class="box box-primary">
                <div class="box-header">
              <div class="col-md-6">
            <div class="box-header with-border">
              <?php if($this->input->get('m')=='add'){ ?>  <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4>  <i class="icon fa fa-thumbs-o-up"></i> Alert!</h4>.
                    Success alert preview. This alert is dismissable.
                  </div><?php }?>
            
            </div><!-- /.box-header -->
            <form action="#" method="POST">
             
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>reference</label>
                    <input type="text" class="form-control " name="reference" value="<?php echo $Ordre_Production->reference ;?>">
                     
                    <?php if(isset($errors)){ ?>  
                   <?php echo form_error('reference','<div class="alert alert-danger">','</div>');?>
                    <?php }?>
                  </div><!-- /.form-group -->
                   </div>
             </div>
           </div>
                   <div class="box-body">

                   <div class="row">
                <div class="col-md-6">
             <div class="form-group">
         
                    <label>Commande</label>
                    <input type="text" class="form-control "  name='commande' value="<?php echo $Ordre_Production->cmd;?>">
                       
                    <?php if(isset($errors)){ ?>  
                   <?php echo form_error('Commande','<div class="alert alert-danger">','</div>');?>
                    <?php }?>
                  </div><!-- /.form-group -->
                   </div>
                 </div><!-- /.box-header -->
             </div>
           
                <div class="box-body">

                   <div class="row">
                <div class="col-md-6">
             <div class="form-group">
                    <label>Opération</label>
                    <input type="text" class="form-control " name="operation" value="<?php echo $this->session->userdata('opr');?>">
                    <?php if(isset($errors)){ ?>  
                   <?php echo form_error('operation','<div class="alert alert-danger">','</div>');?>
                    <?php }?>
                 </div><!-- /.form-group -->
                   </div>
                 </div><!-- /.box-header -->
             </div>

              <div class="box-body">

                   <div class="row">
                <div class="col-md-6">
                      <!--     <div class="form-group">
                    <label>Temps Debut</label>
                    <input type="time" class="form-control "  name='tempsdebut'>
                      
                   <?php if(isset($errors)){ ?> 
                   <?php echo form_error('tempsdebut','<div class="alert alert-danger ">','</div>');?>
                   <?php }?>
                    </div>-->

                      
                        <input type="submit" class="btn btn-info" name="add" value="valider" >
            </div>
            </div>
           </div>
      
                </form>
              </div>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php $this->load->view('footer');?>