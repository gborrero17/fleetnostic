 <!DOCTYPE html>
 <html lang="en">

 <head>
   <!-- Google analytics goes here-->
   <title>Fleetnostic</title>
   <meta name="description" content="" />
   <meta name="keywords" content="" />


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
 </head>


 <body>
   <div id="sticky">
     <?php include 'includes/head.php'; ?>

     <?php include 'includes/menu.php'; ?>
   </div>
   <div id="section1">
     <div id="section1Content">
       <p>Page Body </p>
     </div>
   </div>
   <script src="/js/fleetnostic.js"></script>
   <?php include 'includes/footer.php'; ?>


 </body>

 </html>