<section id="my-clicks" class="portfolio section-bg">
    <div class="container">
      <div class="section-title">
        <h2 class="bx bxs-image">My Clicks</h2>
        <p>Few clicks of photographs by passion with mobile and NOT by profession or as professional by high config cameras :).</p>
      </div>
        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php $arrayCategory =  $objectCategory->selectAll('Y',"category_for='C'");
              foreach($arrayCategory as $rowCategory){?>
                <li data-filter=".filter-<?php echo $rowCategory->category_id?>"><?php echo $rowCategory->category_name?></li>
            <?php } ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
        
        <?php $arrayClicks =  $objectClick->selectAll();
         foreach($arrayClicks as $rowClick){?>
          <div class="col-lg-2 col-md-2 portfolio-item filter-<?php echo $rowClick->category_id?>" style='border:1px solid #243665;margin:5px; height:200px;'>
            <div class="portfolio-wrap">
                <span><?php echo $rowClick->click_title?></span>
              <img src="<?php echo $rowClick->click_image_name?>" class="img-fluid" alt="" /></a>
              <div class="portfolio-links">
                <a href="<?php echo $rowClick->click_url?>" data-gall="portfolioGallery" class="venobox" title="<?php echo $rowClick->click_title?>"><i class="bx bx-zoom-in"></i></a>
                <!--a href="<?php echo $rowClick->click_url?>" title="More Details"><i class="bx bx-link"></i></a-->
              </div>
              
            </div>
          </div>
        <?php } ?>         

        </div>
</div>
  </section>
