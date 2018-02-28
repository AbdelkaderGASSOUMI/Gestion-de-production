
<?php $this->load->view('sidebar');?>
<?php $this->load->view('header');?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         <h2><i class="glyphicon glyphicon-edit"></i>Ajout d'un Agent</h2>
          <ol class="breadcrumb">
            <li><a href="Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            
            <li class="active">Ajout d'un Agent</li>
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
                    <input type="text" class="form-control " name="nom">
                     
                    <?php if(isset($errors)){ ?>  
                   <?php echo form_error('nom','<div class="alert alert-danger">','</div>');?>
                    <?php }?>
                  </div><!-- /.form-group -->

                  <div class="form-group">
                    <label>Prenom</label>
                    <input type="text" class="form-control "  name='prenom'>
                      
                   <?php if(isset($errors)){ ?> 
                   <?php echo form_error('prenom','<div class="alert alert-danger ">','</div>');?>
                   <?php }?>
                    
                   </div><!-- /.box-header -->
                      <div class="form-group">
                    <label>CIN</label>
                    <input type="text" class="form-control " name="cin">
                     <?php if(isset($errors)){ ?>  
                   <?php echo form_error('cin','<div class="alert alert-danger">','</div>');?>
                    <?php }?>
                  </div>
                   <div class="form-group">
                    <label>login</label>
                    <input type="text" class="form-control "  name='login'>
                      
                   <?php if(isset($errors)){ ?> 
                   <?php echo form_error('login','<div class="alert alert-danger ">','</div>');?>
                   <?php }?>
                    
                   </div><!-- /.box-header -->

                   <div class="form-group">
                    <label>mp</label>
                    <input type="text" class="form-control "  name='mp'>
                      
                   <?php if(isset($errors)){ ?> 
                   <?php echo form_error('mp','<div class="alert alert-danger ">','</div>');?>
                   <?php }?>
                    
                   </div><!-- /.box-header -->
                   <div class="form-group">
                    <label>telephone</label>
                    <input type="text" class="form-control " name="telephone">
                     <?php if(isset($errors)){ ?>  
                   <?php echo form_error('telephone','<div class="alert alert-danger">','</div>');?>
                    <?php }?>
                  </div>
                     <div class="form-group">
                    <label>Adresse</label>
                    <input type="text" class="form-control " name="adresse">
                     <?php if(isset($errors)){ ?>  
                   <?php echo form_error('adresse','<div class="alert alert-danger">','</div>');?>
                    <?php }?>
                  </div>
                   <div class="form-group">
                    <label>Type</label>
                    <input type="text" class="form-control " name="type" value="agent">
                   
                  </div>
                                     <div class="form-group">
                 
           <?php echo form_label('Opération');?>
    <select name="operation" class="text">
                         <option value=" ">Choisissez une opération</option>
                         
                            <?php 
                           foreach($operations as $row){?>
 <option value="<?php echo $row->designation ;?>" <?php if($row->Id_op==$row->Id_op) ;?>>
              <?php echo $row->designation ;?></option>
                           <?php }?>

                   
            
  
                       </select>
                     </div>


<div class="form-group">
                    <label for="inputtype" class="col-sm-2 control-label">Photo</label>
                    <input type="File" class="form-control " name="img">
                      </div>
                  </div><!-- /.form-group -->
             
 </div><!-- /.row -->        
       
 <input type="submit" class="btn btn-info" name="ok" value="valider" >
              </div><!-- /.row -->
               </div><!-- /.box-body -->
                </form>
              </div>
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php $this->load->view('footer');?>