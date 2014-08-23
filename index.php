<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Rinconcito Piurano</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet"  href="css/component.css" />
  <link rel="stylesheet" type="text/css" href="css/tooltipster.css" />
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.2.1.js"></script>
     <script src="js/script.js"></script> 
     <script src="js/superfish.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/jquery.tooltipster.js"></script>
     <script src="js/camera.js"></script>
     <!--[if (gt IE 9)|!(IE)]><!-->
     <script src="js/jquery.mobile.customized.min.js"></script>
     <!--<![endif]-->
    <script src="js/modernizr.custom.js"></script>
     <script>
       $(document).ready(function(){
        jQuery('#camera_wrap').camera({
            loader: 'pie',
            pagination: true ,
            minHeight: '200',
            thumbnails: true,
            height: '40.85106382978723%',
            caption: true,
            navigation: true,
            fx: 'mosaic'
          });
        $().UItoTop({ easingType: 'easeOutQuart' });
               $('.tooltip').tooltipster();

        });
     </script>

    <!--[if lt IE 9]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">


    <![endif]-->
     </head>
     
     <body class="page1" id="top">
     
<!--==============================header=================================--> 
<header>  
  <div class="container_12">
    <div class="grid_12">
        <h1>
        <a href="index.php">
          <img src="images/logo_rp.jpg" alt="Rinconcito Piurano" title ="Rinconcito Piurano">
        </a>
        <a href="../menu3d/" style="background:#000; width:190px"><img src="images/lmenu.jpg" alt="Lista Menu" title ="Lista Menu"></a>
      </h1>
        <div class="menu_block ">
          <nav class="horizontal-nav full-width horizontalNav-notprocessed">
            <ul class="sf-menu">
                 <li class="current"><a href="index.html">
                    <b style="color:#000">I</b><b style="color:#F6821F">nicio</b></a>
                 </li>
                 <li><a href="index-1.html">
                    <b style="color:#000">S</b><b style="color:#F6821F">ervicios</b></a>
                 </li>
                 <li><a href="index-2.html">
                    <b style="color:#000">G</b><b style="color:#F6821F">aleria</b></a></li>
                 <li><a href="index-3.html"><b style="color:#000">C</b><b style="color:#F6821F">arta</b></a></li>
                 <li><a href="index-4.html"><b style="color:#000">C</b><b style="color:#F6821F">ont&aacute;ctenos</b></a></li>
               </ul>
            </nav>
           <div class="clear"></div>
        </div>
      </div>      
   </div>
</header>
<div class="container_12">
  <div class="grid_12">
    <div class="slider_wrapper ">
       <div class="camera_wrap" id="camera_wrap">
            <div data-thumb="images/th1.jpg" data-src="images/s1.jpg">
                <div class="caption fadeFromBottom">
                    Alimentar de la sabana
                </div>
            </div>
            <div data-thumb="images/th2.jpg" data-src="images/s2.jpg">
                <div class="caption fadeFromBottom">
                     Cebiche de mero
                </div>
            </div>
            <div data-thumb="images/th3.jpg" data-src="images/s3.jpg">
                <div class="caption fadeFromBottom">
                    Sudado de tramboyo
                </div>
            </div>
            <div data-thumb="images/th4.jpg" data-src="images/s4.jpg">
                <div class="caption fadeFromBottom">
                  Chicha de jora
                </div>
            </div>           
        </div>
    </div>
  </div>
</div>
<div class="page1_block">
  <div class="container_12">
    <div class="grid_12">
      <div class="center">
        <h2><b style="color:#000">B</b><b style="color:#F6821F">ienvenidos</b></h2>
        Ven y disfruta de todos los deliciosos platos que tenemos para usted.
       <!-- <div class="alright">
          <a href="#" class="btn">M&aacute;s</a>
        </div> -->
      </div>
    </div>
  </div>
</div>
<!--==============================Content=================================-->
<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - March 10, 2014!</div>
  <div class="container_12">
    <div class="grid_12 center">
      <h3>Actividad del dia</h3>
      <?php echo date('d/m/Y');?>
      <section class="tt-grid-wrapper">
        <ul class="tt-grid tt-effect-stackback tt-effect-delay">
          
          <li><a href="#"><img src="images/actividades/a1.jpg" alt="img01"></a></li>
          <li><iframe width="300px" height="229px" src="//www.youtube.com/embed/aM84NjPEGSA" frameborder="0" allowfullscreen></iframe></li>
          <li><a href="#"><img src="images/actividades/a2.jpg" alt="img03"></a></li>
          <li><a href="#"><img src="images/actividades/a3.jpg" alt="img04"></a></li>
          <li><a href="#"><img src="images/actividades/a4.jpg" alt="img05"></a></li>
          <li><iframe width="300px" height="229px" src="//www.youtube.com/embed/aM84NjPEGSA" frameborder="0" allowfullscreen></iframe></li>
        </ul>
        <nav>
          <a class="tt-current"></a>
          <a></a>
          <a></a>
          <a></a>
        </nav>
      </section>
      <div class="clear"></div>
      <div class="alright">
      <a href="#" class="btn">M&aacute;s</a>
      </div>
    </div>
  </div>
  <div class="hor"></div>

      

  <!--
  <div class="container_12">
    <div class="grid_12 center">
      <h3>Nuestras Comidas</h3>
    </div>
    
    <div class="grid_3">
      <h4>A la carta</h4>
      <ul class="list">
       <li><a href="#">Estofado de pollo</a></li>
        <li><a href="#">Lomito Saltado</a></li>
        <li><a href="#">aaaa xxxxxxxxx cccc </a></li>
        <li><a href="#">aaa vvv ggg</a></li>
        <li><a href="#">gagag bababa nanna </a></li>
        <li><a href="#"> anana hahha vava </a></li>
        <li><a href="#">baba vava babba </a></li>
      </ul>
      <div class="alright"><a href="#" class="btn">More</a></div>
    </div>
    <div class="grid_3">
      <h4>De la casa</h4>
      <ul class="list">
        <li><a href="#">El seco de chabelo</a></li>
        <li><a href="#">Cebiche de Mero</a></li>
        <li><a href="#">Cabrito a la norteña </a></li>
        <li><a href="#">Sudado de Mariscos o Cachema</a></li>
        <li><a href="#">Majado o Majao </a></li>
        <li><a href="#">La Malarrabia</a></li>
        <li><a href="#">Tamalitos Verdes </a></li>
      </ul>
       <div class="alright"><a href="#" class="btn">More</a></div> 
    </div>
    <div class="grid_3">
      <h4>Menu</h4>
      <ul class="list">
        <li><a href="#">Estofado de pollo</a></li>
        <li><a href="#">Lomito Saltado</a></li>
        <li><a href="#">aaaa xxxxxxxxx cccc </a></li>
        <li><a href="#">aaa vvv ggg</a></li>
        <li><a href="#">gagag bababa nanna </a></li>
        <li><a href="#"> anana hahha vava </a></li>
        <li><a href="#">baba vava babba </a></li>
      </ul>    
     
    </div>

    <div class="grid_3">
      <h4>Bebidas</h4>
      <ul class="list">
        <li><a href="#">Chicha de Jora</a></li>
        <li><a href="#">Gaseosa</a></li>
        <li><a href="#">Cerveza </a></li>
        <li><a href="#">aaa vvv ggg</a></li>
        <li><a href="#">gagag bababa nanna </a></li>
        <li><a href="#"> anana hahha vava </a></li>
        <li><a href="#">baba vava babba </a></li>
      </ul>
       <div class="alright"><a href="#" class="btn">Lista Completa</a></div>    
    </div>

  </div>
</div> -->
<!--==============================footer=================================-->
<footer>   
    <div class="container_12">
      
      <div class="grid_12">
      <div class="socials">
      <section id="facebook">
        <a href="https://www.facebook.com/profile.php?id=100007922805438&fref=ts" target="_blank"><span id="fackbook" class="tooltip" title="Rinconcito Piurano">f</span></a>
        </section>
        <section id="twitter">
        <a href="#" target="_blank"><span id="twitter-default" class="tooltip" title="Follow us on Twitter">t</span></a>
        </section>      
        <section id="google">
        <a href="#" target="_blank"><span id="google-default" class="tooltip" title="Follow us on Google Plus">g<span>+</span></span></a>
        </section>        
        <section id="rss">
        <a href="#" target="_blank"><span id="rss-default" class="tooltip" title="Follow us on Dribble">d</span></a>
        </section>      
        </div>
        <div class="copy">
        Tarapoto  |  San Martin <br> Rinconcito Piurano Telefono: (042)-xxxx  <br> Jr. Sinchi Roca N°. xxxx
        </div>
         
      </div>
    </div>  
</footer>
    <script src="js/classie.js"></script>

    <script src="js/thumbnailGridEffects.js"></script>

</body>
</html>

