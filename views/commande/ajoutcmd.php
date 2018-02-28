
<?php $this->load->view('sidebar');?>
<?php $this->load->view('header');?>

   

    
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         <h2><i class="glyphicon glyphicon-edit"></i>Ajout d'une commande</h2>
          <ol class="breadcrumb">
            <li><a href="Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            
            <li class="active">Ajout commande</li>
          </ol>
        </section>

        <!-- Main content -->
        <!-- Main content -->
         <section class="content">

             <div class="box box-primary">
                <div class="box-header">
              <div class="col-md-6">
                
          <div class="box-body">
            <div class="box-header with-border">
              <?php if($this->input->get('m')=='add'){ ?>  <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4>  <i class="icon fa fa-thumbs-o-up"></i> Alert!</h4>
                    Success alert preview. This alert is dismissable.
                  </div><?php }?>
            
                  <form action="#" method="POST">

                  <div class="form-group">
                    <label>Libelle</label>
                    <input type="text" class="form-control "  name='libelle'>
                      
              <?php if(isset($errors)){ ?> 
                   <?php echo form_error('libelle','<div class="alert alert-danger ">','</div>');?>
                  <?php }?>
                 </div>
                 
            

                   <div class="form-group">
                    <label>date commande</label>
                    <input type="date" class="form-control "  name='datecommande'>
                      
                   <?php if(isset($errors)){ ?> 
                   <?php echo form_error('datecommande','<div class="alert alert-danger ">','</div>');?>
                   <?php }?>
                    </div>

                      <div class="form-group">
                    <label>date livraison</label>
                    <input type="date" class="form-control "  name='datelivraison'>
                      
                   <?php if(isset($errors)){ ?> 
                   <?php echo form_error('datelivraison','<div class="alert alert-danger ">','</div>');?>
                   <?php }?>
                    </div>
                    <div class="form-group">
                 
           <?php echo form_label('Article');?>
    <select name="article" class="text">
                         <option value=" ">Choisissez une article</option>
                         
                            <?php 
                           foreach($articles as $row){?>
 <option value=" <?php echo $row->designation?>&nbsp;<?php echo $row->marque; ?>" <?php if($row->Id_art==$row->Id_art) ;?>>
              <?php echo $row->designation?>&nbsp;<?php echo $row->marque; ?></option>
                           <?php }?>
                                    

                       </select>
                     </div>


     
        


                   <div class="form-group">
                    <label>quantite</label>
                    <input type="text" class="form-control "  name='quantite'>
                      
              <?php if(isset($errors)){ ?> 
                   <?php echo form_error('quantite','<div class="alert alert-danger ">','</div>');?>
                  <?php }?>
                 </div>
                 
 <input type="submit" class="btn btn-info" name="add" value="ajouter" class=" fa-plus-square"  >
                </form>
                  
                </div><!-- /.box-body -->
           </form>
           </div>
         </div>
       </div>
     </section>
</div>

<?php $this->load->view('footer');?>