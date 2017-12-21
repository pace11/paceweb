<div class="container">
    <div class="row">
        <div class="main_skill">
            <div class="col-md-6">
                <div class="skill_content wow fadeIn">
                    <h2>My Skill</h2>
                    <div class="separator_left"></div>

                    <?php
                    $myskill = mysqli_query($koneksi, "SELECT * FROM tbl_descskills")
                               or die(mysqli_error($koneksi));
                    while ($data1 = mysqli_fetch_array($myskill)){
                     ?>

                     <p><i class="fa fa-arrow-circle-right"></i> <?php echo $data1['description']; ?></p>

                     <?php
                     }
                     ?>

                </div>
            </div>
            <div class="col-md-6">
                <div class="skill_bar sm-m-top-50">

                <?php
                $skill = mysqli_query($koneksi, "SELECT * FROM tbl_skills")
                       or die(mysqli_error($koneksi));
                while ($data2 = mysqli_fetch_array($skill)) {

                ?>
                <div class="teamskillbar clearfix m-top-50" data-percent="<?php echo $data2['percent'];?>%">
                    <h6><?php echo $data2['description']." <b>".$data2['percent']."%</b>"; ?></h6>
                    <div class="teamskillbar-bar"></div>
                </div>
                <?php
                }
                 ?>

                </div>
            </div>
        </div>
    </div><!--End off row-->
</div>
