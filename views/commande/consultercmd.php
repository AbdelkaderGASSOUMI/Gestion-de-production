
<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         <h2><i class="glyphicon glyphicon-edit"></i> Commandes</h2>
          <ol class="breadcrumb">
            <li><a href="Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Commandes</li>
          </ol>
        </section>

         <section class="content">


             <div class="box box-primary">
                <div class="box-header">
              <div class="col-md-6">
            <div class="box-header with-border">
            <h3><i class="glyphicon glyphicon-edit"></i>Liste des commandes</h3>
              
            </div><!-- /.box-header -->
            </div><!-- /.box-header -->
            <div class="box-header with-border">
              <?php if($this->input->get('m')=='add'){ ?>  <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4>  <i class="icon fa fa-thumbs-o-up"></i> Alert!</h4>
                    Success alert preview. This alert is dismissable.
                  </div><?php }?>
            
            </div><!-- /.box-header -->
            <div class="box-body">
              
             <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr bgcolor="#EEFFF">
      <th> Id</th>
      <th>Libelle</th>
      <th>Article</th>
      <th>Date commande</th>
      <th>Date livraion</th>
      <th>quantite</th>
      
      <th>Actions <a class="btn btn-danger"  href="pdf/allcommandepdf.php" >
                <i class="glyphicon glyphicon-print icon-white"></i>
                Imprimer tous</a></th>
       
      
    </tr>  
            <?php foreach($commandes as $value):?>
    <tr>
    
   
  <td><?php echo $value->Id_cmd;?></td>
  <td><?php echo $value->libelle;?></td>
  <td><?php echo $value->art;?></td>
  <td><?php echo $value->datecommande;?></td>
  <td><?php echo $value->datelivraison;?></td>
  <td><?php echo $value->quantite;?></td>

    
        <td><a href="<?php echo site_url('Commande/'.$value->Id_cmd);?>"  class="btn btn-info" onclick="return confirm('voulez vous modifier cette commande?');">
                <i class="glyphicon glyphicon-edit"></i>Modifier </a>

               <a href="<?php echo site_url("Commande/delete/?act=del&id=".$value->Id_cmd);?>" class="btn btn-danger" onclick="return confirm('voulez vous supprimer cette commande?');">
               <i class="glyphicon glyphicon-trash"></i>Supprimer </a>

              <a href="<?php echo site_url('Commande/Details/'.$value->Id_cmd);?>" class="btn btn-success" >
              <i class="glyphicon glyphicon-zoom-in icon-white"></i> Details</a>
              </td>
</tr>
<?php endforeach;?>
     </thead>
                  
                  </table>

                   <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                      <li><?php echo $this->pagination->create_links();?></li>
                    </ul>

                  </div>
            
       

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php $this->load->view('footer');?>