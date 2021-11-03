<!doctype html>
<html>
    <head>
    <!-- Google analytics goes here-->
    <title>Fleetnostic</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/> 
             
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      
<script
  src="//code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>	
<?php include 'includes/includes.php'; ?>          
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }      
 </style>       
</head>

<body>
 <div id="sticky" class="sticky-top">
<?php include 'includes/head.php'; ?>     
<?php include 'includes/menu.php'; ?>
  </div>
<div id="main">      


  <div id="section1Video">	 
  
  <div id="coverVideo">
   <video autoplay muted loop id="myVideo">
<source src="video/ohioVideo.mp4" type="video/mp4"></video>
  </div>
<div id="section1ContentVideo"> 

  <h1 class="text-center"><span class="font60caps ">Website Title Goes Here</span><br><span class="font24">Tagline, slider text or plain copy</span></h1>
    </div>
</div>   

<div id="concaveBorder">
   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 374.11"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><image width="1921" height="375" transform="translate(-0.68 -0.09)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAB4EAAAF3CAYAAACrJz1jAAAACXBIWXMAAAsSAAALEgHS3X78AAATyUlEQVR4Xu3d0Y7QuBJF0eaK///lvi8geqAT20kc28drvTYjIQFJVW1F8+Pz8/Pz49iPk58BAAAAAAAAMMZh5/159INfBGIAAAAAAACAcc6a7bdKEfiMQAwAAAAAAABwX3PoPXMnAp85+k2KwwAAAAAAAMCuHo29R3pF4CO+HgYAAAAAAACSvRJ6z7wdgc8IxAAAAAAAAMAqhsfeIzNF4DMCMQAAAAAAAPC2aUPvmVUi8BmBGAAAAAAAALhqydB7JiECnzn6AxOHAQAAAAAAYC9xsfdIegQ+4uthAAAAAAAAyLNN6D2zawQ+IxADAAAAAADAvITeAhG4jUAMAAAAAAAA/Qm9N4jAzxGIAQAAAAAAoJ7Q24kI/A6BGAAAAAAAgB0JvQOIwOOV/uKLxAAAAAAAAMys1Lt4mQg8P18RAwAAAAAAMJrQuxAReG0CMQAAAAAAAE8QeYOIwLkEYgAAAAAAAL4SejchAu+p9A9cJAYAAAAAAFhTqQOxARGY7/iKGAAAAAAAYE4iL0UiMK0EYgAAAAAAgL6EXm4RgXlS6YEkEgMAAAAAAJSbCtwiAvMmXxEDAAAAAAA7EHkZSgRmFqWHoUgMAAAAAADMpNQ2YBgRmFX4ihgAAAAAAHiTyMuyRGASlB7CIjEAAAAAAPC3Ul+AZYnA7KD0EBeJAQAAAAAgT6kPQCwRGMovAZEYAAAAAADmU7rvw7ZEYCjz/yMGAAAAAID3ibxwkQgM95ReQCIxAAAAAAD8q3RfB24QgaGv0ktMJAYAAAAAIFHpPg50JALDWDUvQaEYAAAAAIDZ1Ny3gUFEYJhf6UUqEgMAAAAA8KTSXRqYnAgM6yu9jEViAAAAAAB+K92UgQAiMOQrvdBFYgAAAACAHKWbMLABERioGQiEYgAAAACA8WruuQAiMFClNFiIxAAAAAAA95TusADVRGDgCTXDiVAMAAAAAOyq5oYK8BgRGHhLzZAjFAMAAAAAK6m5ewK8TgQGZlIzMAnFAAAAAMAbau6VAFMSgYHV1AxeQjEAAAAAcKTmxgiwNBEYSFQzxAnFAAAAAJCn5jYIEE8EBnZVMwwKxQAAAAAwh5p7HgC/iMAAx2oGS6EYAAAAAK6rucEB0EgEBrindkgViwEAAADYSe3dDIAORGCAd9QMvUIxAAAAADOruXEBMAERGGAetUO0WAwAAADAk2rvUgAsQgQGWE/tUC4WAwAAAOyr9oYEQCARGCBXy6AvGAMAAADMr+XeA8DGRGAAPj7qFwixGAAAAOBZtXcZAKgmAgPQomUpEYwBAACAHbXcTwCgCxEYgF5qFx6xGAAAAJhd7Z0DAKYgAgMwWusSJRoDAAAAd7XeIwBgKSIwAKtpWdIEYwAAAMjXcisAgC2IwAAka10CRWMAAAAYr3WfBwD+IgIDwB+tS6ZoDAAAAOdad20A4AEiMABc17rIisYAAACsqnUHBgAGEoEB4D1XFmbhGAAAgKdd2U8BgIWIwAAwtyuLuXAMAACQ78q+CABsQgQGgDxXDwHiMQAAwPuu7nAAAIdEYADgt6uHB/EYAADY2dVdCgCgGxEYALjrzsFDQAYAAGZwZ68BAJiOCAwAjHTn0CIgAwAAHx/39goAgEgiMACwqicOPUIyAACM9cRcDwDAX0RgAGBnTxychGQAAHbzxBwNAEBHIjAAwD1PHsAEZQAAenlybgUAYHIiMADAPJ4+zInKAABrenouBABgMyIwAECuHsdDYRkA4I8e8xYAANwmAgMA0KL3oVNkBgCe1Ht2AQCAKYnAAADM5M1DreAMAGO8+b4HAIAticAAAOxq5AFagAZgtJHvQQAAoDMRGAAA3jfz4V2gBuhj5mc/AAAQRgQGAAC+SosUojZkSHs2AQAAdCUCAwAAyYQjAAAAYDv/K/0CAAAAAAAAANYhAgMAAAAAAAAEEYEBAAAAAAAAgojAAAAAAAAAAEFEYAAAAAAAAIAgIjAAAAAAAABAEBEYAAAAAAAAIIgIDAAAAAAAABBEBAYAAAAAAAAIIgIDAAAAAAAABBGBAQAAAAAAAIKIwAAAAAAAAABBRGAAAAAAAACAICIwAAAAAAAAQBARGAAAAAAAACCICAwAAAAAAAAQRAQGAAAAAAAACCICAwAAAAAAAAQRgQEAAAAAAACCiMAAAAAAAAAAQURgAAAAAAAAgCAiMAAAAAAAAEAQERgAAAAAAAAgiAgMAAAAAAAAEEQEBgAAAAAAAAgiAgMAAAAAAAAEEYEBAAAAAAAAgojAAAAAAAAAAEFEYAAAAAAAAIAgIjAAAAAAAABAEBEYAAAAAAAAIIgIDAAAAAAAABBEBAYAAAAAAAAIIgIDAAAAAAAABBGBAQAAAAAAAIKIwAAAAAAAAABBRGAAAAAAAACAICIwAAAAAAAAQBARGAAAAAAAACCICAwAAAAAAAAQRAQGAAAAAAAACCICAwAAAAAAAAQRgQEAAAAAAACCiMAAAAAAAAAAQURgAAAAAAAAgCAiMAAAAAAAAEAQERgAAAAAAAAgiAgMAAAAAAAAEEQEBgAAAAAAAAgiAgMAAAAAAAAEEYEBAAAAAAAAgojAAAAAAAAAAEFEYAAAAAAAAIAgIjAAAAAAAABAEBEYAAAAAAAAIIgIDAAAAAAAABBEBAYAAAAAAAAIIgIDAAAAAAAABBGBAQAAAAAAAIKIwAAAAAAAAABBRGAAAAAAAACAICIwAAAAAAAAQBARGAAAAAAAACCICAwAAAAAAAAQRAQGAAAAAAAACCICAwAAAAAAAAQRgQEAAAAAAACCiMAAAAAAAAAAQURgAAAAAAAAgCAiMAAAAAAAAEAQERgAAAAAAAAgiAgMAAAAAAAAEEQEBgAAAAAAAAgiAgMAAAAAAAAEEYEBAAAAAAAAgojAAAAAAAAAAEFEYAAAAAAAAIAgIjAAAAAAAABAEBEYAAAAAAAAIIgIDAAAAAAAABBEBAYAAAAAAAAIIgIDAAAAAAAABBGBAQAAAAAAAIKIwAAAAAAAAABBRGAAAAAAAACAICIwAAAAAAAAQBARGAAAAAAAACCICAwAAAAAAAAQRAQGAAAAAAAACCICAwAAAAAAAAQRgQEAAAAAAACCiMAAAAAAAAAAQURgAAAAAAAAgCAiMAAAAAAAAEAQERgAAAAAAAAgiAgMAAAAAAAAEEQEBgAAAAAAAAgiAgMAAAAAAAAEEYEBAAAAAAAAgojAAAAAAAAAAEFEYAAAAAAAAIAgIjAAAAAAAABAEBEYAAAAAAAAIIgIDAAAAAAAABBEBAYAAAAAAAAIIgIDAAAAAAAABBGBAQAAAAAAAIKIwAAAAAAAAABBRGAAAAAAAACAICIwAAAAAAAAQBARGAAAAAAAACCICAwAAAAAAAAQRAQGAAAAAAAACCICAwAAAAAAAAQRgQEAAAAAAACCiMAAAAAAAAAAQURgAAAAAAAAgCAiMAAAAAAAAEAQERgAAAAAAAAgiAgMAAAAAAAAEEQEBgAAAAAAAAgiAgMAAAAAAAAEEYEBAAAAAAAAgojAAAAAAAAAAEFEYAAAAAAAAIAgIjAAAAAAAABAEBEYAAAAAAAAIIgIDAAAAAAAABBEBAYAAAAAAAAIIgIDAAAAAAAABBGBAQAAAAAAAIKIwAAAAAAAAABBRGAAAAAAAACAICIwAAAAAAAAQBARGAAAAAAAACCICAwAAAAAAAAQRAQGAAAAAAAACCICAwAAAAAAAAQRgQEAAAAAAACCiMAAAAAAAAAAQURgAAAAAAAAgCAiMAAAAAAAAEAQERgAAAAAAAAgiAgMAAAAAAAAEEQEBgAAAAAAAAgiAgMAAAAAAAAEEYEBAAAAAAAAgojAAAAAAAAAAEFEYAAAAAAAAIAgIjAAAAAAAABAEBEYAAAAAAAAIIgIDAAAAAAAABBEBAYAAAAAAAAIIgIDAAAAAAAABBGBAQAAAAAAAIKIwAAAAAAAAABBRGAAAAAAAACAICIwAAAAAAAAQBARGAAAAAAAACCICAwAAAAAAAAQRAQGAAAAAAAACCICAwAAAAAAAAQRgQEAAAAAAACCiMAAAAAAAAAAQURgAAAAAAAAgCAiMAAAAAAAAEAQERgAAAAAAAAgiAgMAAAAAAAAEEQEBgAAAAAAAAgiAgMAAAAAAAAEEYEBAAAAAAAAgojAAAAAAAAAAEFEYAAAAAAAAIAgIjAAAAAAAABAEBEYAAAAAAAAIIgIDAAAAAAAABBEBAYAAAAAAAAIIgIDAAAAAAAABBGBAQAAAAAAAIKIwAAAAAAAAABBRGAAAAAAAACAICIwAAAAAAAAQBARGAAAAAAAACCICAwAAAAAAAAQRAQGAAAAAAAACCICAwAAAAAAAAQRgQEAAAAAAACCiMAAAAAAAAAAQURgAAAAAAAAgCAiMAAAAAAAAEAQERgAAAAAAAAgiAgMAAAAAAAAEEQEBgAAAAAAAAgiAgMAAAAAAAAEEYEBAAAAAAAAgojAAAAAAAAAAEFEYAAAAAAAAIAgIjAAAAAAAABAEBEYAAAAAAAAIIgIDAAAAAAAABBEBAYAAAAAAAAIIgIDAAAAAAAABBGBAQAAAAAAAIKIwAAAAAAAAABBRGAAAAAAAACAICIwAAAAAAAAQBARGAAAAAAAACCICAwAAAAAAAAQRAQGAAAAAAAACCICAwAAAAAAAAQRgQEAAAAAAACCiMAAAAAAAAAAQURgAAAAAAAAgCAiMAAAAAAAAEAQERgA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"/></g></g></svg>
    </div>
    
<div id="section2">
     <div id="section2Content">   
    <div class="smallCol under767">
        <div class="img-wrapper text-center"><img src="images/pics/intropic.jpg" class="img-fluid paddingRight40" alt="">
         <div class="img-overlay">
                <a href="about.php">
                <button class="buttonHome">About Fleetnostic</button>
        </a>             </div></div>
    </div>
         
    <div class="wideCol">
    <h2 class="font42 marginTop40">Fleetnostic</h2>
  <p>Fleetnostic provides in-ground, portable, and above-ground roller brake dynamometers and ABS test systems in North America. </p>
<p>When integrated into the maintenance procedures of a transit fleet organization, these systems provide great potential for improving safety, cost savings, and brake maintenance efficiency.</p>
<p> 
Additionally, these systems can be used for roadside enforcement of brake systems and end-of-line testing in a manufacturing setting.</p>
         </div>
  <div class="smallCol marginRight30 over767">
        <div class="img-wrapper text-center"><img src="images/pics/intropic.jpg" class="img-fluid paddingRight40" alt="">
         <div class="img-overlay">
               <a href="about.php">
                <button class="buttonHome">About Fleetnostic</button>
        </a>
             </div></div>
    </div>        
          
         </div></div>    
    
 <div class="container-fluid" id="section3">	 
   <div class="container" id="section3Content"> 
    <div class="smallCol marginRight30 ">&nbsp;
    </div>
         
    <div class="wideCol">
        <h2 class="font42 text-left">Testimonials</h2>
        </div>      
         
         </div>
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
      <p>Pinellas Suncoast Transit Authority (PSTA) utilizes the LINK Performance Based Brake Testing (PBBT) equipment and software as part of regular scheduled, mileage based, preventive maintenance inspections on our 220-bus fleet. Since implementation in 2018, the maintenance department has been able to reduce related maintenance costs and increase vehicle reliability.  We feel confident that our fleet is always operating with balanced braking systems that are functioning to the standards they were designed. </p>
    </div>
    <div class="carousel-item">
     <h4>COTA Rick Dooley, Director of Maintenance </h4>
      <p>Central Ohio Transit Authority (COTA) utilizes the PBBT test system and it is working great, our technicians are comfortable using it daily for PM checks. LINK provided excellent training for our technicians for all three of our shifts, and the custom software LINK developed with COTA has greatly simplified our operations. It guarantees a more accurate test than other inspection methods, the system even lets the technician know if the brake apply was too fast or too slow.</p>
    </div>
    <div class="carousel-item">
      <h4>(Anonymous) – This one we can’t name the customer or the client. </h4>
      <p>We have been a customer of Link in ground PBBTs since 2001.  We currently operate 4 facilities that have the PBBTs installed.  Preparation for install and training on the PBBT has always been straightforward with guidance from the Link team.  When customer service is needed for guidance, they are always quick to respond to our questions to keep the equipment working for our trained PBBT operators.  Thank you for providing us this great tool for checking brake performance.</p>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <!--<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>-->
</div>

</div>
       
    </div>
    
<div class="container-fluid" id="section4">	 
   <div class="container" id="section4Content">  
     <div class="row noPadMarg max1600">
    <div class="img-wrapper smallCol">
        <div  id="sect4ABkgd"> 
      <p>Our testers fully comply with the US DOT FMCSA-98-3611 (FR 48799), “Functional Specifications for Performance- based brake testers (PBBT) for commercial motor vehicles.” With large rollers, bearings, and drive systems, they are designed to offer years of reliable service. </p>
          <div class="img-overlay"><a href="pbbt-solutions.php">
                <button class="buttonHome">PBBT Solutions</button>
              </a> </div> </div>
       
    </div>
         
    <div class="wideCol">
        <div id="sect4BBkgd">
        <h2 class="font42">NewsLINK Sign-up</h2>
        <p><strong>Subscribe to NewsLINK, our digital newsletter to receive the latest updates from LINK! The newsletter will keep you up to date on company news and events, product advancements, and more.</strong> </p>
            <div>
              <form> 
                  <div class="formThreeCol">
                  <div class="form-group threeColForm">
                  <label for="First Name">First Name</label>
                  <input type="text" class="form-control" id="fleetFirst" placeholder="">
                  </div>
                  <div class="form-group threeColForm">
                  <label for="Last Name">Last Name</label>
                  <input type="text" class="form-control" id="fleetLast" placeholder="">
                  </div>
                <div class="form-group threeColForm">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="fleetEmail" placeholder="">
                  </div>
                <div class="form-group oneCol">
                  <label for="Industry">Industry</label>
                  <input type="text" class="form-control" id="fleetIndustry" placeholder="">
                </div></div>
                  <div id="formSubmit">
                      <div class="fiveCol">
                  <button id="fleetSubmit" type="submit" class="btn btn-primary">Submit</button></div></div>
              </form>
            </div>
            <p class="paddingTop30">LINK needs the contact information you provide to us to contact you about our products and services. You may unsubscribe from these communications at any time. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, please review our Privacy Policy. </p>
        </div>
         </div></div></div></div>
    
</div>   
<?php include 'includes/footer.php'; ?> 
</body>
</html>