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
	  echo "FINACLE (CBS) || Database Administrator (Oracle, MSSQL, MYSQL) || Application Developer & Process Automation || Office365 Ecosystem || Toastmaster || MS Power Platform";
  }  ?>

</title>

  <meta name="desciption" content="FINACLE (CBS) || Database Administrator (Oracle, MSSQL, MYSQL) || Application Developer & Process Automation || Office365 Ecosystem || Toastmaster || MS Power Platform || Database Administrator in Nabil Bank Limited, one of the best commercial bank of Nepal, IT Expert in banking industry of Nepal, An IT Professional of Nepal, Web Developer of Nepal, Software Engineer in Nepal, Application Programmer-Nepal. Computer Engineer expert in SWIFT and FINACLE core banking software also Expert in Application development. Rajan offers web solution, web development, web programming and IT related solutions. Maharjan also provide software development. Engineer Maharjan Rajan has web portfolio on various automation tools, e-commerce, PHP frameworks, software development, database adminisrator, project management. Mr. Maharjan has good knowledge in various programming languages like PHP, JSP, JAVA and framework like ZEND Framework, CodeIgnitor, Joomla, Wordpress, Magento, Laravel, Angular JS etcetera. Maharjan is good at using javascript library like jQuery and AJAX" />

  <meta name="Keywords" content="Date Converter, Nepali Calender Converter - Rajan, IT Officer in Nabil Bank, Senior Developer in Dryice Solution, Application Programmer in ebPearls, A Senior Web Developer in Neolinx, Senior Software Engineer of WORXPro and Software Programmer Developer-Rajan Maharjan, IT expert in banking sector of Nepal" />
  <meta name="metatags" content="Engineer, Rajan, Maharjan, Computer Engineer, Rajan Maharjan, IT expert in banking sector of Nepal, Tribhuwan University" />

  <!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
<link rel="manifest" href="/images/favicons/site.webmanifest">
<link rel="mask-icon" href="/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="/images/favicons/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="/images/favicons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

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
  
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GMBRVJMXDV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GMBRVJMXDV');
</script>
<!-- google adsense -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3806824823543446"
     crossorigin="anonymous"></script>
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <?php 
   
  include "header.php";?>
  <!-- End Header -->
    
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Rajan Maharjan</h1>
      <p>I'm <span class="typed" data-typed-items="Robotic Process Automation(RPA) Engineer, Business Intelligence(BI) Developer, ORACLE DBA, Process Re-engineering Analyst, Freelancer, Application/Web Programmer"></span></p>
    </div>    
  </section>

  <main id="main"> 
  <section id="about" class="about">
    <div class="container">
      <div class="section-title">
        <h2 class="bx bxs-user">About Me</h2>
        <p>
            I, Rajan Maharjan, a core PHP developer who does web/app programming & software developments in different PHP frameworks like Laravel, CodeIgniter, etc. have completed a Master of Business Administration (MBA). This academic qualification has reinforced me to lead various projects with proper management and planning. Currently, I am a Robotic/Process Automation (RPA) cum Application Developer and Database Administrator (DBA) at Nabil Bank Limited, one of the renowned & leading financial institutions in Nepal. I have been working in Project Management, Business Process Management (BPM), Process Analysis, Data Analysis, Data Sanity, Process Re-engineering, and Process Automation with the help of tools like UI Path. My interest in visiting different places and meeting different people has always been a source of my learning.
Apart from database programming and software development, I also do AngularJs, Python, Powershell Scripting, MS Agent BOT, PowerApp, Power Automate, and many more under Microsoft 365 Ecosystem.
        </p>
      </div>
      <?php include "pages/about.php";?>
    </div>
  </section>

  <section id="skills" class="skills section-bg">
      <div class="container">
        <div class="section-title">
          <h2 class="bx bxs-book-reader">My Skills</h2>
          <p>Some more on my skills in detail</p>
        </div>
        <?php include "pages/my-skills.php"; ?>
    </div>
  </section>

  <section id="my-works" class="portfolio section-bg">
      <div class="container">
        <div class="section-title">
          <h2 class="bx bxs-image">My Works</h2>
          <p>Few of mine professional web projects from the past</p>
        </div>
        <?php include "pages/portfolio.php"; ?>
    </div>
  </section>

  <section id="technology" class="testimonials section-bg">
      <div class="container">
        <div class="section-title">
          <h2 class="bx bxs-server">Technology</h2>          
        </div>
        <?php include "pages/tech-talk.php";?>
    </div>
  </section>
      
  <section id="contact" class="contact">
    <div class="container">
      <div class="section-title">
        <h2 class="bx bxs-envelope">Contact</h2>
        <p>Get in touch with me by filling contact form below</p>
      </div>
      <?php  include "pages/contact.php"; ?>
    </div>
  </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "footer.php";
  
  ?>
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