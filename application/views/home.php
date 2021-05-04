<!--cover section slider -->
<div class="container-fluid">
    <div class="row" style="background-color: #ffffff;font-family: Montserrat Alternates Medium;">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="cover_slider owl-carousel owl-theme" style="width: 100%; margin-top: 10px;margin-bottom: 10px;border: 1px solid;box-shadow: 5px 5px;">
                        <?php
                        $i = 1;
                        foreach ($slide as $row) {
                            if ($row->jenis == "image") {
                        ?>
                                <div id="slide<?php echo $i ?>" class="item" data-value="image">
                                    <img src="<?php echo base_url() ?>assets/slide/<?php echo $row->nama_file ?>" class="img-fluid">
                                </div>
                            <?php
                            } else if ($row->jenis == "video") {
                            ?>
                                <div id="slide<?php echo $i ?>" class="item" data-value="video">
                                    <center>
                                        <video controls id="my-video<?php echo $i ?>" class="video-js" width="1980" height="1080" data-setup='{"controls": false,"fluid":true}'>
                                            <source src="<?php echo base_url() ?>assets/slide/<?php echo $row->nama_file ?>" type="video/mp4" />
                                            <p class="vjs-no-js">
                                                To view this video please enable JavaScript, and consider upgrading to a
                                                web browser that
                                                <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                            </p>
                                        </video>
                                    </center>
                                </div>
                        <?php }
                            $i++;
                        } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="cover_slider2 owl-carousel owl-theme" style="border: 1px solid;box-shadow: 5px 5px;">
                        <div class="item">
                            <img src="<?php echo base_url() ?>assets/berita/Template_medinfo_bka.png" class="img-fluid">
                        </div>
                        <?php
                        foreach ($berita_kemahasiswaan as $row) {
                        ?>
                            <div class="item">
                                <img src="<?php echo base_url() ?>assets/berita/<?php echo $row->nama_file ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div id="calendar" style="width: 100%; margin-top: 10px;margin-bottom: 10px;border: 1px solid;padding: 10px;box-shadow: 5px 5px;"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="cover_slider2 owl-carousel owl-theme" style="border: 1px solid;box-shadow: 5px 5px;">
                        <div class="item">
                            <img src="<?php echo base_url() ?>assets/berita/Template_medinfo_bka.png" class="img-fluid">
                        </div>
                        <?php
                        foreach ($berita_karir as $row) {
                        ?>
                            <div class="item">
                                <img src="<?php echo base_url() ?>assets/berita/<?php echo $row->nama_file ?>" class="img-fluid">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>