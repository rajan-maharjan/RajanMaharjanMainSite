

        <div class="owl-carousel testimonials-carousel">          
         <?php $arrayTechnology =  $objectTechnology->selectAll();

         foreach($arrayTechnology as $rowTechnology){?>
          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <?php echo $rowTechnology->description?>
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="<?php echo IMAGE_PATH.'icons/'.$rowTechnology->icon?>" class="testimonial-img" alt="">
            <h3><?php echo $rowTechnology->title?></h3>
            <em>Source: <a href="<?php echo $rowTechnology->source?>" traget="_blank"><?php echo $rowTechnology->source?></a></em>
          </div>
        <?php } ?>

        </div>
