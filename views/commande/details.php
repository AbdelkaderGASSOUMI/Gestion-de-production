
<?php $this->load->view('sidebar');?>
<?php $this->load->view('header');?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         <h2><i class="glyphicon glyphicon-edit"></i>Detais d'une Commande</h2>
          <ol class="breadcrumb">
            <li><a href="Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            
            <li class="active">Details d'une Commande</li>
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
                    <label>libelle </label>
                    <input type="text" class="form-control " name="libelle" value="<?php echo $Commande->libelle;?>">
                      <div class="box-header with-border">
              <?php if(isset($errors)){ ?>  <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                   <?php echo form_error('libelle','<div class="error">','</div>');?>
                  </div><?php }?>
            
                 </div><!-- /.box-header -->
                </div><!-- /.form-group -->

                  <div class="form-group">
                    <label>Date commande</label>
                    <input type="text" class="form-control " name="datecommande" value="<?php echo $Commande->datecommande;?>">
                      <div class="box-header with-border">
              <?php if(isset($errors)){ ?>  <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                   <?php echo form_error('datecommande','<div class="error">','</div>');?>
                  </div><?php }?>
            
                 </div><!-- /.box-header -->
                </div><!-- /.form-group -->

                  <div class="form-group">
                    <label>Date livraison</label>
                    <input type="text" class="form-control "  name='datelivraison' value="<?php echo $Commande->datelivraison;?>">
                       <div class="box-header with-border">
              <?php if(isset($errors)){ ?>  <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                   <?php echo form_error('datecommande','<div class="error">','</div>');?>
                  </div><?php }?>
                     </div>
                   </div><!-- /.box-header -->

                <div class="form-group">
                    <label>Quantite </label>
                    <input type="text" class="form-control " name="quantite" value="<?php echo $Commande->quantite;?>">
                      <div class="box-header with-border">
              <?php if(isset($errors)){ ?>  <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                   <?php echo form_error('quantite','<div class="error">','</div>');?>
                  </div><?php }?>
            
                 </div><!-- /.box-header -->
                </div><!-- /.form-group -->   

                <div class="form-group">
                    <label>Article </label>
                    <input type="text" class="form-control " name="article" value="<?php echo $Commande->art;?>">
                      <div class="box-header with-border">
              <?php if(isset($errors)){ ?>  <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                   <?php echo form_error('article','<div class="error">','</div>');?>
                  </div><?php }?>
            
                 </div><!-- /.box-header -->
                </div><!-- /.form-group -->   


              

               
               

                </div><!-- /.form-group -->   

                  </div><!-- /.form-group -->
             
 </div><!-- /.row -->        
       
 
 
              </div><!-- /.row -->
               </div><!-- /.box-body -->
                </form>
              </div>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php $this->load->view('footer');?>