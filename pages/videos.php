    <div class="resume container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
            <?php 
            $counter=1;
            $arrayVideos =  $objectVideo->selectAll('Y');
              foreach($arrayVideos as $rowVideo){?>
                <div class="resume-item">
                    <h4><a href='https://www.youtube.com/embed/<?php echo $rowVideo->youtube_code?>' target='_blank'><?php echo $rowVideo->title?></a></h4>
                    <p><a href='https://www.youtube.com/embed/<?php echo $rowVideo->youtube_code?>' target='_blank'><img src='https://img.youtube.com/vi/<?php echo $rowVideo->youtube_code?>/sddefault.jpg' style='width:350px'/></a></p>
                </div>
            <?php 
                  if($counter++%2==0){
                        echo '</div><div class="col-lg-6" data-aos="fade-up">';
                    }
              }
            ?>
            </div>
        </div>
    </div>