
<?php $this->load->view('sidebar');?>
<?php $this->load->view('header');?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         <h2><i class="glyphicon glyphicon-edit"></i>Ajout d'un Article</h2>
          <ol class="breadcrumb">
            <li><a href="Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            
            <li class="active">Ajout d'un ordre Article</li>
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
             
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">

                  <div class="form-group">
                    <label>Designation</label>
                    <input type="text" class="form-control " name="designation" value="<?php echo $Article->designation ;?>">
                    <?php if(isset($errors)){ ?>  
                   <?php echo form_error('designation','<div class="alert alert-danger">','</div>');?>
                   <?php }?>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                    <label>Marque</label>
                    <input type="text" class="form-control " name="marque" value="<?php echo $Article->marque ;?>">
                    <?php if(isset($errors)){ ?>  
                   <?php echo form_error('marque','<div class="alert alert-danger">','</div>');?>
                   <?php }?>
                  </div><!-- /.form-group -->
                  <div class="form-group">
                    <label>Prix</label>
                    <input type="text" class="form-control "  name='prix' value="<?php echo $Article->prix ;?>">
                     <?php if(isset($errors)){ ?> 
                   <?php echo form_error('prix','<div class="alert alert-danger ">','</div>');?>
                    <?php }?>
                  </div><!-- /.box-header -->

           
                

             </div><!-- /.form-group -->
             
 </div><!-- /.row -->        
       
 <input type="submit" class="btn btn-info" name="update" value="modifier" >
              </div><!-- /.row -->
               </div><!-- /.box-body -->
                </form>
              </div>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php $this->load->view('footer');?>