
<?php $this->load->view('header2');?>
<?php $this->load->view('sidebar2');?>

<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Profil  <?php echo $this->session->userdata('nom')?>&nbsp;
                    <?php echo $this->session->userdata('prenom')?>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
            
            <li class="active">profil</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url("assets/img/marwen.jpg");?>"  alt="User profile picture">
                  <h3 class="profile-username text-center"><?php echo $this->session->userdata('nom')?>&nbsp;
                    <?php echo $this->session->userdata('prenom')?></h3>
                  <p class="text-muted text-center">Web Developer</p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Followers</b> <a class="pull-right">1,322</a>
                    </li>
                    <li class="list-group-item">
                      <b>Following</b> <a class="pull-right">543</a>
                    </li>
                    <li class="list-group-item">
                      <b>Friends</b> <a class="pull-right">13,287</a>
                    </li>
                  </ul>

                  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- About Me Box -->

              
            
            </div><!-- /.col -->
           <div class="col-md-9">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                

                  <li ><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
                <div class="tab-content">
                
                   <h2><i class="fa fa-meh-o"></i>&nbsp;&nbsp;BienVennue
                     <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url("assets/img/marwen.jpg");?>"  alt="User profile picture">
                  <h3 class="profile-username text-center"><?php echo $this->session->userdata('nom')?>&nbsp;
                    <?php echo $this->session->userdata('prenom')?></h3>
          <small ><?php echo $this->session->userdata('nom')?>&nbsp;<?php echo $this->session->userdata('prenom')?></small></h2>
                 
                  <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">About Me</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <strong><i class="fa fa-book margin-r-5"></i>  Education</strong>
                  <p class="text-muted">
                    étudié à FSS
                  </p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                  <p class="text-muted">Tunis Sfax</p>

                 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
                   
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
             
              </div><!-- /.nav-tabs-custom -->

            </div><!-- /.col -->
             
             
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php $this->load->view('footer');?>