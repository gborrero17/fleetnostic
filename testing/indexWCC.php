 <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Google analytics goes here-->
    <title>Fleetnostic</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/> 
	
	
	<?php include 'includes/includes.php'; ?>  
      <!-- this is for showing and hiding a section within the page - make sure the slidetoggle id is set to "display: none;" in the css if you want it to start closed-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.scrollto/2.1.2/jquery.scrollTo.min.js"></script>


<script>
  $(document).ready(function(){
    $("#plan").click(function(){
    $("#plan2").slideToggle("slow")
    });
  });
</script>
	
	<script>
  $(document).ready(function(){
    $("#crem").click(function(){
    $("#crem2").slideToggle("slow")
    });
  });
</script>
	
	<script>
  $(document).ready(function(){
    $("#inter").click(function(){
    $("#inter2").slideToggle("slow")
    });
  });
</script>
      
<script>
  $(document).ready(function(){
    $("#life").click(function(){
    $("#life2").slideToggle("slow")
    });
  });
</script>
	
	<script>
  $(document).ready(function(){
    $("#mem").click(function(){
    $("#mem2").slideToggle("slow")
    });
  });
</script>
      
<script>
  $(document).ready(function(){
    $("#vets").click(function(){
    $("#vets2").slideToggle("slow")
    });
  });
</script>
	
	<script>
  $(document).ready(function(){
    $("#events").click(function(){
    $("#events2").slideToggle("slow")
    });
  });
</script>
	
	<script>
  $(document).ready(function(){
    $("#floral").click(function(){
    $("#floral2").slideToggle("slow")
    });
  });
</script>
	
	<script>
  $(document).ready(function(){
    $("#jewel").click(function(){
    $("#jewel2").slideToggle("slow")
    });
  });
</script>
	
<!-- end slidetoggle-->
  </head>
  <body>
	  
  <?php include 'includes/head.php'; ?>
  <div class="lightBar">A Unique Place That Breathes Life Into Memories<br>And Preserves Them In Endless Beauty.
</div>
  <div class="greenBar15"></div>
	  <div class="greenBkgdMdLt" style="width: 100%;">
<div class="container-fluid hero" id="homeAnim"> 
  <img class="end" src="homepan/home-page-zoom-end.jpg" class="img-fluid" alt="White Chapel Memorial Park"> 
  <img class="start" src="homepan/home-page-zoom-start-view.jpg" class="img-fluid" alt="White Chapel Memorial Park">
	  </div></div>
	    <div class="container-fluid text-center" id="titleSectionContent">
			<span class="blueLogo">White Chapel</span> <br>Memorial Park Cemetery & Cremation
		  </div>
      <?php include 'includes/wccmenu.php'; ?>
<div class="container-fluid" id="section1">

<div class="animFade2">
    <h1 class=" homeBody homeBody1">Welcome To The Area’s Premier Memorial Park, Featuring Broad Vistas Unencumbered By The Headstones Of Ordinary Cemeteries. </h1>
      <p class="homeBody">A Place of Tranquil Gardens, Inspirational Sculpture And Renowned Architecture ... All Designed To Invite Communion With The Memory Of Loved Ones Lost, But Never Forgotten. </p>
    <p class="alert">While public events are cancelled, White 
Chapel remains open to the public. </p>
</div>
	 
  </div>
      
      <div class="sectionTulip" id="sectionTulipIndex">
	 <div class="wcc1600Flex2 animFade2">
	  <div class="container-fluid text-center" id="titleSectionTulips">
			<span class="blueLogo">The 2021 Tulip Festival</span> <br>
			Winners have been announced!
		  </div>
    <div class="twoCol">
		<h2 class="twoColTitle wccItemTitle2">Thanks to every one of our talented contestants for sharing the peace and beauty of Spring time at White Chapel Cemetery. <br>
		Your photos are inspirational!</h2>
  <p class="twoColCont wccContent1 normalText">Congratulations to our contest winners! First, Second, Third, and Selfie prizes have been awarded! <br>
  Be sure to visit our <a href="https://tulips-2021.smugmug.com/"><strong>photo gallery</strong></a> to see the winning photos as well as all of the beautiful entries submitted by our contestants.</p>
		<div class="text-center marginBottom20"><a href="tulip-festival.php" class="btn btn-peachGreen">Click here to see the winning photos and get contest details</a></div>
        <div class="text-center marginBottom20"><a href="https://tulips-2021.smugmug.com/" target="_blank" class="btn btn-blueGreen">Visit our Tulip Contest Photo Galleries</a></div>
       
		
    </div>
    <div class="twoCol">
        <div class="text-center"><img src="images/tulips/winners/2021/win2.png" class="img-fluid" alt="The Tulip Festival Photography Contest"></div>
    </div>
          </div></div>
  
  <div class="section2" id="section2Index">
    <div class="max1200">
      <div class="btn comboBtn">
        <div class="pic200"><a href="pre-arrangement.php"><img src="images/pics/preplan-sm.jpg" class="img-fluid" alt="Funeral Pre-planning"></a></div>
        <div class="teaserContent">
          <a href="pre-arrangement.php"><h2 class="font13 blueLogo text-uppercase"><strong>Pre-Planning</strong></h2></a>
            <p class="comboContent">Pre-planning your funeral arrangements saves your loved ones the stress and expense of funeral planning. It is also ensures that you control your...
                
                <button type="button" class="btn btn-wccLink" id="plan">More/less</button>  </p>
                
           <div id="plan2">      
               <p class="comboContent">own legacy and how you will be remembered for all time. </p></div>
        </div>
        <div>
		  <a href="pre-arrangement.php" class="btn btn-blue squareSmall text-uppercase">Learn More</a></div>
      </div>
      
      <div class="btn comboBtn">
        <div class="pic200"><a href="cremation.php"><img src="images/pics/cremation-sm.jpg" class="img-fluid" alt="About Cremation"></a></div>
        <div class="teaserContent">
          <a href="cremation.php"><h2 class="font13 blueLogo text-uppercase"><strong><strong>About Cremation</strong></h2></a>
            <p class="comboContent">Our on-site crematorium has been serving families with the highest standards of care and respect for almost one hundred years. You can be assured of... 
                
                <button type="button" class="btn btn-wccLink" id="crem">More/less</button>  </p>
                
           <div id="crem2">      
               <p class="comboContent">a most dignified setting for all your observances and traditions. </p></div>
        </div>
        <div>
		  <a href="cremation.php" class="btn btn-blue squareSmall text-uppercase">Learn More</a></div>
  </div>
      
      
      
      <div class="btn comboBtn">
        <div class="pic200"><a href="interment-committal.php"><img src="images/pics/interment-sm.jpg" class="img-fluid" alt="Interment / Committal"></a></div>
        <div class="teaserContent">
          <a href="interment-committal.php"><h2 class="font13 blueLogo text-uppercase"><strong><strong>interment/Committal</strong></h2></a>
            <p class="comboContent">Our complete and compassionate interment and committal services are intended to relieve the burden to families during an already trying time.   
                
                <button type="button" class="btn btn-wccLink" id="inter">More/less</button>  </p>
                
           <div id="inter2">      
               <p class="comboContent">We are dedicated to supporting the families and friends of loved ones with the utmost in compassion and professionalism. </p></div>
        </div>
        <div>
		  <a href="interment-committal.php" class="btn btn-blue squareSmall text-uppercase">Learn More</a></div>
  </div>
      
      
      <div class="btn comboBtn">
        <div class="pic200"><a href="celebration-of-life.php"><img src="images/pics/receptions-sm.jpg" class="img-fluid" alt="Catered Receptions"></a></div>
        <div class="teaserContent">
          <a href="celebration-of-life.php"><h2 class="font13 blueLogo text-uppercase"><strong><strong>Celebration of Life</strong></h2></a>
            <p class="comboContent">Our Celebration of Life Center is the first of its kind in Southeastern Michigan. It’s a beautiful, convenient and private setting for family...   
                
                <button type="button" class="btn btn-wccLink" id="life">More/less</button>  </p>
                
           <div id="life2">      
               <p class="comboContent">gatherings before or after a service that can even include full food and beverage service. Our expert staff can also help you plan a meaningful Celebration of Life ceremony that is custom created just for you and your family’s lifestyle and beliefs.</p></div>
        </div>
        <div>
		  <a href="celebration-of-life.php" class="btn btn-blue squareSmall text-uppercase">Learn More</a></div>
  </div>
      
      <div class="btn comboBtn">
        <div class="pic200"><a href="interment-tributes.php"><img src="images/pics/tributes-sm.jpg" class="img-fluid" alt="Floral tributes, wreaths and markers"></a></div>
        <div class="teaserContent">
          <a href="interment-tributes.php"><h2 class="font13 blueLogo text-uppercase"><strong><strong>Memorialization</strong></h2></a>
            <p class="comboContent">The range of ways in which families choose to honor their loved ones’ memories has evolved over the generations. No one in the region offers a wider... 
                
                <button type="button" class="btn btn-wccLink" id="mem">More/less</button>  </p>
                
           <div id="mem2">      
               <p class="comboContent">selection of interment and memorialization products and services to meet the needs and budgets of the families we care for. </p></div>
        </div>
        <div>
		  <a href="interment-tributes.php" class="btn btn-blue squareSmall text-uppercase">Learn More</a></div>
  </div>  
      
      <div class="btn comboBtn">
        <div class="pic200"><a href="honoring-heroes.php"><img src="images/pics/Veterans-sm.jpg" class="img-fluid" alt="Honoring veterans"></a></div>
  <div class="teaserContent">
          <a href="honoring-heroes.php"><h2 class="font13 blueLogo text-uppercase"><strong><strong>Honoring Veterans</strong></h2></a>
            <p class="comboContent">Breathtaking statuary and monuments, special events for military families, as well as special tributes paid to active duty military personnel, help to... 
                
                <button type="button" class="btn btn-wccLink" id="vets">More/less</button>  </p>
                
           <div id="vets2">      
               <p class="comboContent"> make our park a unique and living memorial for the heroes who risked and made the ultimate sacrifice to keep us free. </p></div>
        </div>
	  <div>
		  <a href="honoring-heroes.php" class="btn btn-blue squareSmall text-uppercase">Learn More</a></div>
        </div>
      
      <div class="btn comboBtn">
        <div class="pic200"><a href="annual-events.php"><img src="images/pics/events-sm.jpg" class="img-fluid" alt="Honoring veterans"></a></div>
  <div class="teaserContent">
          <a href="annual-events.php"><h2 class="font13 blueLogo text-uppercase"><strong><strong>Special Events</strong></h2></a>
            <p class="comboContent">The broad vistas and open spaces of our memorial park setting offer a unique backdrop for the numerous annual public events and ceremonies we offer... 
                
                <button type="button" class="btn btn-wccLink" id="events">More/less</button>  </p>
                
           <div id="events2">      
               <p class="comboContent">throughout the year. From art and history buffs, to religious scholars, from fitness enthusiasts to military families and supporters, we truly have something for just about everyone. Come an join us.. </p></div>
        </div>
	  <div>
		  <a href="annual-events.php" class="btn btn-blue squareSmall text-uppercase">Learn More</a></div>
        </div>
      
      <div class="btn comboBtn">
        <div class="pic200"><a href="floral-tributes.php"><img src="images/pics/floral-sm.jpg" class="img-fluid" alt="Honoring veterans"></a></div>
  <div class="teaserContent">
          <a href="floral-tributes.php"><h2 class="font13 blueLogo text-uppercase"><strong><strong>Floral Tributes</strong></h2></a>
            <p class="comboContent">Fresh flowers and floral arrangements are always a beautiful way to express your love and care. Our on-site flower shop is stocked with seasonal blooms... 
                
                <button type="button" class="btn btn-wccLink" id="floral">More/less</button>  </p>
                
           <div id="floral2">      
               <p class="comboContent">and ready to help. And our special floral services make it easy for you to have our staff place seasonal flowers to remember important events..  </p></div>
        </div>
	  <div>
		  <a href="floral-tributes.php" class="btn btn-blue squareSmall text-uppercase">Learn More</a></div>
        </div>
      
      <div class="btn comboBtn">
        <div class="pic200"><a href="memorial-jewelry.php"><img src="images/pics/jewelry-sm.jpg" class="img-fluid" alt="Honoring veterans"></a></div>
  <div class="teaserContent">
          <a href="memorial-jewelry.php"><h2 class="font13 blueLogo text-uppercase"><strong><strong>Keepsakes & Jewelry</strong></h2></a>
            <p class="comboContent">Southeast Michigan’s most expansive collection of Memorialization Jewelry and Keepsakes are housed in a glittering showplace at our Celebration of Life... 
                
                <button type="button" class="btn btn-wccLink" id="jewel">More/less</button>  </p>
                
           <div id="jewel2">      
               <p class="comboContent">Center. It features a unique selection of memorialization jewelry and keepsake objects to be passed down through generations as daily reminders of lives well lived and love everlasting. </p></div>
        </div>
	  <div>
		  <a href="memorial-jewelry.php" class="btn btn-blue squareSmall text-uppercase">Learn More</a></div>
        </div>
		  
		  
		  </div> 
  </div>
<?php include 'includes/footer.php'; ?>

  
  </body>
</html>