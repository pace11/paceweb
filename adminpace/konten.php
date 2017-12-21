<?php

  if (isset($_GET['tampil'])) $tampil=$_GET['tampil'];
  else $tampil="dashboard";

  if ($tampil == "dashboard") include("dashboard.php");
  elseif ($tampil == "keluar") include("keluar.php");

  // ------------------------ ABOUT ------------------------
  elseif ($tampil == "about") include("about/about_show.php");
  elseif ($tampil == "about_add") include("about/tamp_about/about_add.php");
  elseif ($tampil == "about_addpro") include("about/tamp_about/about_addpro.php");
  elseif ($tampil == "about_edit") include("about/tamp_about/about_edit.php");
  elseif ($tampil == "about_editpro") include("about/tamp_about/about_editpro.php");
  elseif ($tampil == "about_delete") include("about/tamp_about/about_delete.php");

  // ------------------------ ABOUT LIST ------------------------
  elseif ($tampil == "about") include("about/about_show.php");
  elseif ($tampil == "aboutlist_add") include("about/tamp_aboutlist/aboutlist_add.php");
  elseif ($tampil == "aboutlist_addpro") include("about/tamp_aboutlist/aboutlist_addpro.php");
  elseif ($tampil == "aboutlist_edit") include("about/tamp_aboutlist/aboutlist_edit.php");
  elseif ($tampil == "aboutlist_editpro") include("about/tamp_aboutlist/aboutlist_editpro.php");
  elseif ($tampil == "aboutlist_delete") include("about/tamp_aboutlist/aboutlist_delete.php");

  // ------------------------ SKILLS ------------------------
  elseif ($tampil == "skills") include("skills/skills_show.php");
  elseif ($tampil == "skills_add") include("skills/tamp_skills/skills_add.php");
  elseif ($tampil == "skills_addpro") include("skills/tamp_skills/skills_addpro.php");
  elseif ($tampil == "skills_edit") include("skills/tamp_skills/skills_edit.php");
  elseif ($tampil == "skills_editpro") include("skills/tamp_skills/skills_editpro.php");
  elseif ($tampil == "skills_delete") include("skills/tamp_skills/skills_delete.php");

  // ------------------------ SKILLS LIST ------------------------
  elseif ($tampil == "skills") include("skills/skills_show.php");
  elseif ($tampil == "skillslist_add") include("skills/tamp_skillslist/skillslist_add.php");
  elseif ($tampil == "skillslist_addpro") include("skills/tamp_skillslist/skillslist_addpro.php");
  elseif ($tampil == "skillslist_edit") include("skills/tamp_skillslist/skillslist_edit.php");
  elseif ($tampil == "skillslist_editpro") include("skills/tamp_skillslist/skillslist_editpro.php");
  elseif ($tampil == "skillslist_delete") include("skills/tamp_skillslist/skillslist_delete.php");

  // ------------------------ COMMENT ------------------------
  elseif ($tampil == "comment") include("comment/comment_show.php");
  elseif ($tampil == "comment_add") include("skills/tamp_skillslist/skillslist_add.php");
  elseif ($tampil == "comment_addpro") include("skills/tamp_skillslist/skillslist_addpro.php");
  elseif ($tampil == "comment_edit") include("skills/tamp_skillslist/skillslist_edit.php");
  elseif ($tampil == "comment_editpro") include("skills/tamp_skillslist/skillslist_editpro.php");
  elseif ($tampil == "comment_delete") include("skills/tamp_skillslist/skillslist_delete.php");


else echo"Konten tidak ada";

?>
