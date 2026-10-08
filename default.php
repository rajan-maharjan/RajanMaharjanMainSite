<?php 
$relativePath = '';
include "files.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>
   <?php if(isset($_GET['page']) && trim($_GET['page'])!=''){
      echo ucwords($_GET['page'])." - Rajan Maharjan, Software Programmer, RPA/Application Automation Developer, Database Engineer in Banking Industry";
    }
  else{
	  echo "Application Automation and Robotic Proccess Developer, Web/App Programmer, Database Engineer in Banking Industry of Nepal - Rajan Maharjan.";
  }  ?>

</title>

  <meta name="desciption" content="Database Administrator in Nabil Bank Limited, one of the best commercial bank of Nepal, IT Expert in banking industry of Nepal, An IT Professional of Nepal, Web Developer of Nepal, Software Engineer in Nepal, Application Programmer-Nepal. Computer Engineer expert in SWIFT and FINACLE core banking software also Expert in Application development. Rajan offers web solution, web development, web programming and IT related solutions. Maharjan also provide software development. Engineer Maharjan Rajan has web portfolio on various automation tools, e-commerce, PHP frameworks, software development, database adminisrator, project management. Mr. Maharjan has good knowledge in various programming languages like PHP, JSP, JAVA and framework like ZEND Framework, CodeIgnitor, Joomla, Wordpress, Magento, Laravel, Angular JS etcetera. Maharjan is good at using javascript library like jQuery and AJAX" />

  <meta name="Keywords" content="Date Converter, Nepali Calender Converter - Rajan, IT Officer in Nabil Bank, Senior Developer in Dryice Solution, Application Programmer in ebPearls, A Senior Web Developer in Neolinx, Senior Software Engineer of WORXPro and Software Programmer Developer-Rajan Maharjan, IT expert in banking sector of Nepal" />
  <meta name="metatags" content="Engineer, Rajan, Maharjan, Computer Engineer, Rajan Maharjan, IT expert in banking sector of Nepal, Tribhuwan University" />

  <!-- Favicons -->
  <link href="<?php echo SITE_PATH?>logo.png" rel="icon">
  <link href="<?php echo SITE_PATH?>logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo CSS_PATH?>bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo CSS_PATH?>icofont.min.css" rel="stylesheet">
  <link href="<?php echo CSS_PATH?>boxicons.min.css" rel="stylesheet">
  <link href="<?php echo CSS_PATH?>owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo CSS_PATH?>venobox.min.css" rel="stylesheet">
  <link href="<?php echo CSS_PATH?>aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo CSS_PATH?>style.css" rel="stylesheet">
  <script language="javascript">
  var _SITE_PATH = "<?php echo SITE_PATH?>";
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-8948168-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-8948168-2');
  </script>

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <?php include "header.php";?>
  <!-- End Header -->

  <?php if(!isset($_GET['page']) || trim($_GET['page'])==''){?>  
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Rajan Maharjan</h1>
      <p>I'm <span class="typed" data-typed-items="Robotic Automation Engineer, DBA Programmer, Web Developer,Automatic Application Developer, Freelancer"></span></p>
    </div>    
  </section>
  <?php } ?>

  <main id="main"> 
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo isset($_GET['page'])? strtoupper($_GET['page']):""; ?></h2>
          <ol>
            <li><a href="<?php echo SITE_PATH?>">Home</a></li>
            <li class="active"><?php echo isset($_GET['page'])? strtoupper($_GET['page']):""; ?></li>
				  </ol>
        </div>

      </div>
    </section>

    <section class="inner-page">
      <div class="container">
        <p>
        <?php 
          $pageName=$objectFunctions->filterPage();
          include "pages/$pageName.php";
        ?>
        </p>
      </div>
    </section>
      <?php 
      
	?>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "footer.php";?>
  <!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo JS_PATH?>jquery.min.js"></script>
  <script src="<?php echo JS_PATH?>bootstrap.bundle.min.js"></script>
  <script src="<?php echo JS_PATH?>jquery.easing.min.js"></script>  
  <script src="<?php echo JS_PATH?>jquery.waypoints.min.js"></script>
  <script src="<?php echo JS_PATH?>counterup.min.js"></script>
  <script src="<?php echo JS_PATH?>isotope.pkgd.min.js"></script>
  <script src="<?php echo JS_PATH?>owl.carousel.min.js"></script>
  <script src="<?php echo JS_PATH?>venobox.min.js"></script>
  <script src="<?php echo JS_PATH?>typed.min.js"></script>
  <script src="<?php echo JS_PATH?>aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo JS_PATH?>main.js"></script>

</body>

</html>