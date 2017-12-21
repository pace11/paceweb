<?php

 ?>

 <div class="user-panel">
         <div class="pull-left image">
           <img src="../dist/img/user2-160x160.png" class="img-circle" alt="User Image">
         </div>
         <div class="pull-left info">
           <p>M Iriansyah P Pratama</p>
           <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
         </div>
       </div>

<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MAIN SIDEBAR</li>
  <li class="<?php if ($_GET['tampil'] == 'dashboard'){ echo "active"; }?>">
    <a href="?tampil=dashboard">
      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
  </li>

  <li class="treeview <?php if ($_GET['tampil'] == 'about' || $_GET['tampil'] == 'skills' ||

                                $_GET['tampil'] == 'about_add' || $_GET['tampil'] == 'about_addpro' ||
                                $_GET['tampil'] == 'about_edit' || $_GET['tampil'] == 'about_editpro' ||
                                $_GET['tampil'] == 'about_delete' || $_GET['tampil'] == 'aboutlist_add' ||
                                $_GET['tampil'] == 'aboutlist_addpro' || $_GET['tampil'] == 'aboutlist_edit' ||
                                $_GET['tampil'] == 'aboutlist_editpro' || $_GET['tampil'] == 'aboutlist_delete' ||

                                $_GET['tampil'] == 'skills_add' || $_GET['tampil'] == 'skills_addpro' ||
                                $_GET['tampil'] == 'skills_edit' || $_GET['tampil'] == 'skills_editpro' ||
                                $_GET['tampil'] == 'skills_delete' || $_GET['tampil'] == 'skillslist_add' ||
                                $_GET['tampil'] == 'skillslist_addpro' || $_GET['tampil'] == 'skillslist_edit' ||
                                $_GET['tampil'] == 'skillslist_editpro' || $_GET['tampil'] == 'skillslist_delete' ||

                                $_GET['tampil'] == 'comment'

                                ){ echo "active"; }?>">
    <a href="#">
      <i class="fa fa-th"></i> <span>Edit Template</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">

      <li class="<?php if ($_GET['tampil'] == 'about' || $_GET['tampil'] == 'about_add' ||
                           $_GET['tampil'] == 'about_addpro' || $_GET['tampil'] == 'about_edit' ||
                           $_GET['tampil'] == 'about_editpro' || $_GET['tampil'] == 'about_delete' ||
                           $_GET['tampil'] == 'aboutlist_add' || $_GET['tampil'] == 'aboutlist_addpro' ||
                           $_GET['tampil'] == 'aboutlist_edit' || $_GET['tampil'] == 'aboutlist_editpro' ||
                           $_GET['tampil'] == 'aboutlist_delete'
                          ){ echo "active"; }?>">
        <a href="?tampil=about">
          <i class="fa fa-info-circle"></i> <span>About</span>
        </a>
      </li>

      <li class="<?php if ($_GET['tampil'] == 'skills' || $_GET['tampil'] == 'skills_add' ||
                           $_GET['tampil'] == 'skills_addpro' || $_GET['tampil'] == 'skills_edit' ||
                           $_GET['tampil'] == 'skills_editpro' || $_GET['tampil'] == 'skills_delete' ||
                           $_GET['tampil'] == 'skillslist_add' || $_GET['tampil'] == 'skillslist_addpro' ||
                           $_GET['tampil'] == 'skillslist_edit' || $_GET['tampil'] == 'skillslist_editpro' ||
                           $_GET['tampil'] == 'skillslist_delete'
                           ){ echo "active"; }?>">
        <a href="?tampil=skills">
          <i class="fa fa-code-fork"></i> <span>Skills</span>
        </a>
      </li>

      <li class="<?php if ($_GET['tampil'] == 'comment'){ echo "active"; }?>">
        <a href="?tampil=comment">
          <i class="fa fa-commenting"></i> <span>Comment </span>
        </a>
      </li>

    </ul>
  </li>

</ul>
