<header id="header">
    <div class="d-flex flex-column">
      <div class="profile">
        <a href="<?php echo SITE_PATH ?>"><img src="<?php echo IMAGE_PATH?>profile.jpg" alt="" class="img-fluid rounded-circle"></a>
        <h1 class="text-light"><a href="<?php echo SITE_PATH?>">Rajan Maharjan</a></h1>
        <?php    
        $retDatea =  "वि.सं ";
        $arrayData = ($objectNepaliCal->eng_to_nep(date("Y"),date("m"),date("d")));
        $year = str_replace($replaceForCalendarNep, $replaceByCalendarNep, $arrayData['year']);
        $month = $arrayData['nmonth'];
        $day = $arrayData['day'];	
        $date = str_replace($replaceForCalendarNep, $replaceByCalendarNep, $arrayData['date']);
        $retDatea .= $year." ".$month." ".$date.", ".$day;
        ?>
        <div style="font-size:12px;background-color:#FFF;color:#367f6d;text-align:center;margin-top:10px;">
          <a href="<?php echo DATE_CONVERTOR_LINK?>">
            <?php echo date('j F Y, l')."<br />".$retDatea; ?>
          </a>
        </div>
        <div class="social-links mt-3 text-center">        
          <a href="https://twitter.com/rajan_maharjan" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="http://facebook.com/maharjan.rajan" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://linkedin.com/in/rajanmaharjan" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        
        
      </div>
      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="<?php echo SITE_PATH?>#about"><i class="bx bx-user"></i>About</a></li>  
          <li><a href="<?php echo SITE_PATH?>articles.html"><i class="bx bx-pencil"></i>Articles</a></li>
          <li><a href="<?php echo BLOG_LINK?>"><i class="bx bx-pen"></i>Blog/Solutions</a></li>
          <li><a href="<?php echo DATE_CONVERTOR_LINK?>"><i class="bx bx-calendar"></i>Date Converter</a></li>
          <li><a href="<?php echo SITE_PATH?>my-clicks.html"><i class="bx bx-image"></i>My Clicks</a></li>
          <li><a href="<?php echo SITE_PATH?>#skills"><i class="bx bx-book-reader"></i>My Skills</a></li>
          <li><a href="<?php echo SITE_PATH?>#my-works"><i class="bx bx-book"></i>My Works</a></li>
          <li><a href="<?php echo SITE_PATH?>#technology"><i class="bx bx-server"></i>Technologies</a></li>
          <li><a href="<?php echo SITE_PATH?>videos.html"><i class="bx bx-video"></i>Videos</a></li>
          <li><a href="<?php echo SITE_PATH?>#contact"><i class="bx bx-envelope"></i> Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
    </div>
  </header>