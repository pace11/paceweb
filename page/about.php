<div class="container">
    <div class="row">
        <div class="main_about">
            <div class="col-md-6">
                <div class="about_content">
                    <h2>About Us</h2>
                    <div class="separator_left"></div>

                    <?php
                    $about1 = mysqli_query($koneksi, "SELECT * FROM tbl_descabout")
                               or die(mysqli_error($koneksi));
                    while ($dataab1 = mysqli_fetch_array($about1)) {
                     ?>

                     <p><i class="fa fa-arrow-circle-right"></i> <?php echo $dataab1['description']; ?></p>

                     <?php
                     }
                     ?>

                </div>
            </div>
            <div class="col-md-6">
                <div class="about_accordion wow fadeIn">
                    <div id="faq_main_content" class="faq_main_content">

                      <?php
                      $about2 = mysqli_query($koneksi, "SELECT * FROM tbl_about")
                                 or die(mysqli_error($koneksi));
                      while($dataab2 = mysqli_fetch_array($about2)){
                       ?>

                        <h6><i class="fa fa-chevron-circle-right"></i><?php echo strtoupper($dataab2['title']); ?></h6>
                        <div>
                            <div class="content">
                                <p><?php echo $dataab2['description']; ?></p>
                            </div>
                        </div>

                        <?php
                        }
                         ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
