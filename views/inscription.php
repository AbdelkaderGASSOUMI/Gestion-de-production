<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title;?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.css");?>">
        
        <!-- Main Style -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/main.css");?>">

        <!-- Responsive Style -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/responsive.css");?>">

        <!--Icon Font-->
        <link rel="stylesheet" media="screen" href="<?php echo base_url("assets/fonts/font-awesome/font-awesome.min.css");?>" />


        <!-- Extras -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/extras/animate.css");?>">


        <!-- jQuery Load -->
        <script src="<?php echo base_url("assets/js/jquery-min.js");?>"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

      </head>

    <body>
    <!-- Nav Menu Section -->
    
<!-- Nav Menu Section End -->

<!-- Hero Area Section -->

<section id="sign-in-area">

<div class="container">
    <div class="row">
<div class="col-md-12">
        
        <h1 class="title-big wow fadeIn"></h1>
          <i> <h2 class="form-group col-md-offset-4 col-md-4 col-md-offset-4 wow fadeInDown">Gestion de Production</h2></i>
</div>


<div class="col-md-12 text-center">

<form method="post">
       <div class="form-group col-md-offset-4 col-md-4 col-md-offset-4 wow fadeInDown">
            <div class="box-body">
             
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
                    <input type="text" class="form-control " name="type" value="chef">
                   
                  </div>
         
       
 <input type="submit" class="btn btn-info" name="ok" value="valider" >
</div>
        </form>
</div>
</div>
</div>

</section>

    </body>
    </html>