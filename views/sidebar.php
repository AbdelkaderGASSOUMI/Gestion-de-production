<!--sidebar -->
     <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url("assets/img/abdelkader.jpg");?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $this->session->userdata('nom')?>&nbsp;<?php echo $this->session->userdata('prenom')?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU PRINCIPALE</li>
             <li class=" treeview">
              <a href="<?php echo site_url("Dashboard");?>">
                
                  <li class="ajax-link" href="pageprinc.php?pn=table"><i class="glyphicon glyphicon-home"></i><span> Acceuil</span>
                        </li>
              </a>
               <li <?php cActive('Commande',$this->uri->segment(1));?> class=" treeview" >
              <a href="#">
                <i class="glyphicon glyphicon-list-alt"></i> <span>Commandes</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
               <ul class="treeview-menu">
                <li <?php cActive('Commande',$this->uri->segment(1));?>><a href="<?php echo site_url("Commande/Add");?>"><i class="fa fa-circle-o"></i> ajouter</a></li>
                <li <?php cActive('Commande',$this->uri->segment(1));?>><a href="<?php echo site_url("Commande/index");?>"><i class="fa fa-circle-o"></i> consulter</a></li>
                
              </ul>
            </li>
            <li <?php cActive('Article',$this->uri->segment(1));?> class=" treeview" >
              <a href="#">
                <i class="glyphicon glyphicon-picture"></i> <span>Articles</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
               <ul class="treeview-menu">
                <li <?php cActive('Article',$this->uri->segment(1));?>><a href="<?php echo site_url("Article/Add");?>"><i class="fa fa-circle-o"></i> ajouter</a></li>
                <li <?php cActive('Article',$this->uri->segment(1));?>><a href="<?php echo site_url("Article/index");?>"><i class="fa fa-circle-o"></i> consulter</a></li>
                
              </ul>
            </li>
            
               <li <?php cActive('Operation',$this->uri->segment(1));?> class=" treeview" >
              <a href="#">
                <i class="fa fa-cog"></i> <span>Opération</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
               <ul class="treeview-menu">
                <li <?php cActive('Operation',$this->uri->segment(1));?>><a href="<?php echo site_url("Operation/Add");?>"><i class="fa fa-circle-o"></i> ajouter</a></li>
                <li <?php cActive('Operation',$this->uri->segment(1));?>><a href="<?php echo site_url("Operation/index");?>"><i class="fa fa-circle-o"></i> consulter</a></li>
                
              </ul>
            </li>
            
            <li  class=" treeview" >
              <a href="#">
                <i class="glyphicon glyphicon-th"></i> <span>ordre_productions</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
               <ul class="treeview-menu">
                <li <?php cActive('Ordre_Production',$this->uri->segment(1));?>><a href="<?php echo site_url("Ordre_Production/Add");?>"><i class="fa fa-circle-o"></i> ajouter</a></li>
              <li <?php cActive('Ordre_Production',$this->uri->segment(1));?>><a href="<?php echo site_url("Ordre_Production/index");?>"><i class="fa fa-circle-o"></i> consulter</a></li>
                
              </ul>
            </li>
              
             <li <?php cActive('Admin',$this->uri->segment(1));?> class=" treeview" >
              <a href="#">
                <i class="glyphicon glyphicon-user"></i> <span>Agents</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
               <ul class="treeview-menu">
                <li <?php cActive('Admin',$this->uri->segment(1));?>><a href="<?php echo site_url("Admin/Add");?>"><i class="fa fa-circle-o"></i> ajouter</a></li>
                <li <?php cActive('Admin',$this->uri->segment(1));?>><a href="<?php echo site_url("Admin/index");?>"><i class="fa fa-circle-o"></i> consulter</a></li>
                
              </ul>
            </li>
          
              <li  class=" treeview">
              <a href="#">
                <i class="glyphicon glyphicon-check"></i> <span>Tache</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li> ><a href="<?php echo site_url("Ordre_Production/index3");?>"><i class="fa fa-circle-o"></i>Controler</a></li>
                 </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
<!--fin sidebar -->