
<?php $this->load->view('sidebar');?>
<?php $this->load->view('header');?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         <h2><i class="glyphicon glyphicon-edit"></i>Detais d'un Agent</h2>
          <ol class="breadcrumb">
            <li><a href="Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            
            <li class="active">Detais d'un Agent</li>
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
                    <label>Nom</label>
                    <input type="text" class="form-control " name="nom" value="<?php echo $Admin->nom ;?>">
                     
                    <?php if(isset($errors)){ ?>  
                   <?php echo form_error('nom','<div class="alert alert-danger">','</div>');?>
                    <?php }?>
                  </div><!-- /.form-group -->

                  <div class="form-group">
                    <label>Prenom</label>
                    <input type="text" class="form-control "  name='prenom'value="<?php echo $Admin->prenom ;?>">
                      
                   <?php if(isset($errors)){ ?> 
                   <?php echo form_error('prenom','<div class="alert alert-danger ">','</div>');?>
                   <?php }?>
                    
                   </div><!-- /.box-header -->
                      <div class="form-group">
                    <label>CIN</label>
                    <input type="text" class="form-control " name="cin"value="<?php echo $Admin->nom ;?>">
                     <?php if(isset($errors)){ ?>  
                   <?php echo form_error('cin','<div class="alert alert-danger">','</div>');?>
                    <?php }?>
                  </div>
                   <div class="form-group">
                    <label>login</label>
                    <input type="text" class="form-control "  name='login'value="<?php echo $Admin->login ;?>">
                      
                   <?php if(isset($errors)){ ?> 
                   <?php echo form_error('login','<div class="alert alert-danger ">','</div>');?>
                   <?php }?>
                    
                   </div><!-- /.box-header -->

                   <div class="form-group">
                    <label>mp</label>
                    <input type="text" class="form-control "  name='mp'value="<?php echo $Admin->mp ;?>">
                      
                   <?php if(isset($errors)){ ?> 
                   <?php echo form_error('mp','<div class="alert alert-danger ">','</div>');?>
                   <?php }?>
                    
                   </div><!-- /.box-header -->
                   <div class="form-group">
                    <label>telephone</label>
                    <input type="text" class="form-control " name="telephone"value="<?php echo $Admin->telephone ;?>">
                     <?php if(isset($errors)){ ?>  
                   <?php echo form_error('telephone','<div class="alert alert-danger">','</div>');?>
                    <?php }?>
                  </div>
                     <div class="form-group">
                    <label>Adresse</label>
                    <input type="text" class="form-control " name="adresse"value="<?php echo $Admin->adresse ;?>">
                     <?php if(isset($errors)){ ?>  
                   <?php echo form_error('adresse','<div class="alert alert-danger">','</div>');?>
                    <?php }?>
                  </div>
                   <div class="form-group">
                    <label>Type</label>
                    <input type="text" class="form-control " name="type" value="agent">
                   
                  </div>
                  </div><!-- /.form-group -->
             
 </div><!-- /.row -->        
                </form>
              </div>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php $this->load->view('footer');?>