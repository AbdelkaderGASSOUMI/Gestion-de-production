<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title;?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.min.css");?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.min.css");?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
         
    <link rel="stylesheet" href="<?php echo base_url("assets/css/skins/_all-skins.min.css");?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url("plugins/iCheck/flat/blue.css");?>">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url("plugins/jvectormap/jquery-jvectormap-1.2.2.css");?>">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url("plugins/datepicker/datepicker3.css");?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url("plugins/daterangepicker/daterangepicker-bs3.css");?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css");?>">

 


  
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  


       
       <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         <h2><i class="glyphicon glyphicon-edit"></i>Accueil
          <small>Gestion De Production</small></h2>

          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <!-- Main content -->
         <section class="content">

                 <div class="box box-primary">
           
<img   src="<?php echo base_url("assets/img/img.jpeg");?>"alt="user image" >  


                </div><!-- /.box-body -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
  <!-- Bootstrap JS -->
  


       
 <?php $this->load->view('footer');?>
