
<?php $this->load->view('sidebar');?>
<?php $this->load->view('header');?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         <h2><i class="glyphicon glyphicon-edit"></i>Detais d'un Ordre_production</h2>
          <ol class="breadcrumb">
            <li><a href="Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            
            <li class="active">Detais d'un Ordre_production</li>
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
                    <h4>  <i class="icon fa fa-thumbs-o-up"></i> Alert!</h4>
                    Success alert preview. This alert is dismissable.
                  </div><?php }?>
            
            </div><!-- /.box-header -->
            <form action="#" method="POST">
             
            
                  <div class="form-group">
                    <label>Reference</label>
                    <input type="text" class="form-control " name="reference" value="<?php echo $Ordre_Production->reference;?>">
                    <div class="box-header with-border">
                    <?php if(isset($errors)){ ?>  <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                   <?php echo form_error('reference','<div class="error">','</div>');?>
                  </div><?php }?>
            
            </div><!-- /.box-header -->
          </div><!-- /.form-group -->

                 <div class="form-group">
         
                    <label>Commande</label>
                    <input type="text" class="form-control "  name='commande' value="<?php echo $Ordre_Production->cmd;?>">
                    <div class="box-header with-border">
                     <?php if(isset($errors)){ ?>  <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                   <?php echo form_error('commande','<div class="error">','</div>');?>
                   </div><?php }?>
                   </div>
                 </div><!-- /.box-header -->

                 

                </form>
              </div>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php $this->load->view('footer');?>