 <!DOCTYPE html>
 <html lang="en">

 <head>
   <!-- Google analytics goes here-->
   <title>Fleetnostic</title>
   <meta name="description" content="" />
   <meta name="keywords" content="" />

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <script src="//code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

   <?php include 'includes/includes.php'; ?>
   <!-- this is for showing and hiding a section within the page - make sure the slidetoggle id is set to "display: none;" in the css if you want it to start closed-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/jquery.scrollto/2.1.2/jquery.scrollTo.min.js"></script>


   <script>
     $(document).ready(function() {
       $("#ohio1").click(function() {
         $("#ohio1a").slideToggle("slow")
       });
     });
   </script>

   <script>
     $(document).ready(function() {
       $("#ohio2").click(function() {
         $("#ohio2a").slideToggle("slow")
       });
     });
   </script>

   <!-- end slidetoggle-->
   <style>
     /* Make the image fully responsive */
     .carousel-inner img {
       width: 100%;
       height: 100%;
     }
   </style>

 </head>

 <body>
   <div id="sticky" class=" sticky-top">
     <?php include 'includes/head.php'; ?>

     <?php include 'includes/menu.php'; ?>
   </div>
   <div id="main">
     <div id="section1">
       <div id="section1Content">
         <h1 class="text-center"><span class="font60caps ">Website Title Goes Here</span><br><span class="font24"><em>Tagline, slider text or plain copy</em></span></h1>
       </div>
     </div>

     <div id="section2" class="animFade2">
       <div class="Flex21600">
         <div class="twoCol marginRight30 under767">
           <div class="text-center"><img src="images/pics/intropic.jpg" class="img-fluid" alt="The Tulip Festival Photography Contest"></div>
         </div>

         <div class="twoCol">
           <h2 class="font42 marginTop40">Fleetnostic</h2>
           <p class="">Fleetnostic provides in-ground, portable, and above-ground roller brake dynamometers and ABS test systems in North America. </p>
           <p>When integrated into the maintenance procedures of a transit fleet organization, these systems provide great potential for improving safety, cost savings, and brake maintenance efficiency.</p>
           <p>
             Additionally, these systems can be used for roadside enforcement of brake systems and end-of-line testing in a manufacturing setting.</p>
         </div>
         <div class="twoCol marginRight30 over767">
           <div class="text-center"><img src="images/pics/intropic.jpg" class="img-fluid" alt="The Tulip Festival Photography Contest"></div>
         </div>

       </div>
     </div>


     <div id="section3">
       <div id="section3Content">

         <div class="container mt-3">

           <div id="myCarousel" class="carousel slide" data-ride="carousel">

             <!-- Indicators -->
             <ul class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
             </ul>

             <!-- The slideshow -->
             <div class="carousel-inner">
               <div class="carousel-item active">
                 <h4>PSTA Joe Cheney, Deputy Director of Fleet Operations </h4>
                 <p>Pinellas Suncoast Transit Authority (PSTA) utilizes the LINK Performance Based Brake Testing (PBBT) equipment and software as part of regular scheduled, mileage based, preventive maintenance inspections on our 220-bus fleet. Since implementation in 2018, the maintenance department has been able to reduce related maintenance costs and increase vehicle reliability. We feel confident that our fleet is always operating with balanced braking systems that are functioning to the standards they were designed. </p>
               </div>
               <div class="carousel-item">
                 <h4>PSTA Joe Cheney, Deputy Director of Fleet Operations </h4>
                 <p>Pinellas Suncoast Transit Authority (PSTA) utilizes the LINK Performance Based Brake Testing (PBBT) equipment and software as part of regular scheduled, mileage based, preventive maintenance inspections on our 220-bus fleet. Since implementation in 2018, the maintenance department has been able to reduce related maintenance costs and increase vehicle reliability. We feel confident that our fleet is always operating with balanced braking systems that are functioning to the standards they were designed. </p>
               </div>
               <div class="carousel-item">
                 <h4>PSTA Joe Cheney, Deputy Director of Fleet Operations </h4>
                 <p>Pinellas Suncoast Transit Authority (PSTA) utilizes the LINK Performance Based Brake Testing (PBBT) equipment and software as part of regular scheduled, mileage based, preventive maintenance inspections on our 220-bus fleet. Since implementation in 2018, the maintenance department has been able to reduce related maintenance costs and increase vehicle reliability. We feel confident that our fleet is always operating with balanced braking systems that are functioning to the standards they were designed. </p>
               </div>
             </div>

             <!-- Left and right controls -->
             <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
               <span class="carousel-control-prev-icon"></span>
             </a>
             <a class="carousel-control-next" href="#myCarousel" data-slide="next">
               <span class="carousel-control-next-icon"></span>
             </a>
           </div>

         </div>

       </div>
     </div>

     <div id="section4">
       <div id="section4Content">
         <p>form </p>
       </div>
     </div>
   </div>
   <script src="./js/fleetnostic.js"></script>
   <?php include 'includes/footer.php'; ?>
 </body>

 </html>