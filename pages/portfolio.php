

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
          <?php $arrayCategory =  $objectCategory->selectAll('Y',"category_for='W'"); ?>
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php 
              foreach($arrayCategory as $rowCategory){?>
                <li data-filter=".work-<?php echo $rowCategory->category_id?>"><?php echo $rowCategory->category_name?></li>
            <?php } ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

        <?php $arrayWorks =  $objectWork->selectAll();
         foreach($arrayWorks as $rowWork){?>
          <div class="col-lg-4 col-md-6 portfolio-item work-<?php echo $rowWork->category_id?>">
            <div class="portfolio-wrap">
              <img src="<?php echo IMAGE_PATH."works/".$rowWork->work_image_name?>" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?php echo IMAGE_PATH."works/".$rowWork->work_image_name?>" data-gall="portfolioGallery" class="venobox" title="<?php echo $rowWork->work_title?>"><i class="bx bx-plus"></i></a>
                <a href="<?php echo $rowWork->work_url?>" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        <?php } ?> 

        </div>