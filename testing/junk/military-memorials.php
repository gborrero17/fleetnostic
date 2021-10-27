 <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Google analytics goes here-->
    <title>Military Monuments - White Chapel Memorial Park Cemetery</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/> 
	
	
	<?php include 'includes/includes.php'; ?> 
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.4/build/pannellum.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.4/build/pannellum.js"></script>
	  
  </head>
  <body>
	  
  <?php include 'includes/head.php'; ?>
	  <div class="greenBkgdMdLt" style="width: 100%;">
  <div class="greenBar">We Invite You to Visit Our Veterans of Foreign Wars Memorials<br>
<span class="greenBarSub under479">Take a virtual tour of the WWII Four Freedoms Memorial <em>(click, drag or mouse wheel to navigate)</em></span></div>
<div class="container-fluid hero" id="homeAnim"> 
   <div class="container-fluid noPadMarg wccFlexCenter">
      <div class="col" id="panorama"></div>
     <div class="staticPic" id="milMemPic"></div>
   </div>
<!--
haov and vaov should be figured by the proportions of the image
voffset moves the whole image up or down
Pitch sets the panorama’s starting pitch position in degrees. Defaults to 0.(vertical)
Yaw sets the panorama’s starting yaw position in degrees. Defaults to 0. (horizontal)
minYaw and maxYaw (number) Sets the minimum / maximum yaw the viewer edge can be at, in degrees. Defaults to -180 / 180, i.e. no limit.
minPitch and maxPitch (number)
Sets the minimum / maximum pitch the viewer edge can be at, in degrees. Defaults to undefined, so the viewer center can reach -90 / 90.
-->
    <script>
    var panorama = pannellum.viewer('panorama', {
      "type": "equirectangular",
      "panorama": "images/mil-mem-pano.jpg",
      "preview": "images/mil-mem-preview1.jpg",
      "autoLoad": true,
      "haov": 225,
      "vaov": 52,
      "vOffset": 0,
      "minPitch": -22,
      "maxPitch": 22,
      "minYaw": -100,
      "maxYaw": 100,
    });
	</script></div></div>
	  
  <div class="container-fluid text-center" id="titleSectionContent">
			<span class="green6">Military Memorials</span> <span class="blueLogo">White Chapel Memorial <span class="text-nowrap">Park Cemetery</span> </span>
		  </div>
      <?php include 'includes/wccmenu.php'; ?>
<div class="container-fluid" id="section1TwoCol">
  <div class="wcc1600Flex2 animFade2">
	  <h1 class="twoColTitle wccContentTitle">White Chapel Memorial Park Cemetery honors the sacrifices of our veterans with memorials and ceremonies.</h1>
	  <p class="twoColTitle text-center">A map showing the location of each of White Chapel’s military memorials <a href="pdf/military-memorials-map.pdf" target="_blank">can be found here</a></p>
    <div class="twoCol">
<div class="text-center"><img src="images/pics/polar-bear1.jpg" class="img-fluid" alt="WW1 Polar Bear Memorial"></div>
<h2 class="wccItemTitle">WWI Polar Bear Memorial</h2>	
  <p class="wccContent1">On May 30, 1930, in an impressive ceremony attended by top military personnel and numerous city, state and federal government dignitaries, 41 men of the 339th Infantry and the 330th Engineers were finally laid to rest around the Polar Bear Memorial at White Chapel. In subsequent years, an additional 15 men (one in 1932, 13 in 1934 and one in 1935) of the 339th Infantry and 330th Engineers were laid to rest around the monument. These were members of Michigan’s own Polar Bear Division who made the supreme sacrifice in the far-off frozen tundra of northern Russia during World War I. The famed memorial, created by the <a href="http://link.com" target="_blank"><strong>renowned French sculptor Leon Hermont</strong></a>, was carved from a solid block of white Georgia marble. The State of Michigan has officially designated it an Historic Site. Every year on Memorial Day, White Chapel hosts a <a href="http://link.com" target="_blank">Memorial Day ceremony</a> in honor of these brave soldiers that is free and open to the general public.</p>
  <p class="blue5"><strong><a href="http://link.com" target="_blank">Click here</a></strong> for more information about Michigan's Own Polar Bears, <strong><a href="http://link.com" target="_blank">or here</a></strong> for information about the documentary film that premiered on PBS in 2010.</p>
  <p class="blue5"><a href="http://link.com" target="_blank"><strong>Click here</strong></a> for information about the Arlington National Cemetery WWI Memorial.</p>
  </p></div>
    <div class="twoCol">
      <div class="text-center"><img src="images/pics/wwII4free.png" class="img-fluid" alt="WWII Four Freedoms Memorial"></div>
<h2 class="wccItemTitle">WWII Four Freedoms Memorial</h2>	
  <p class="wccContent1"><a href="http://link.com" target="_blank"><strong>President Franklin Roosevelt’s Four Freedoms</strong></a> - jointly initiated with Winston Churchill in the historic <a href="http://link.com" target="_blank"><strong>Atlantic Charter</strong></a> - are immortalized in marble, creating one of White Chapel’s most impressive memorials.  It was dedicated on V-J Day, 1948, when 115 veterans were returned from overseas and laid to rest in what was then the largest peacetime mass burial in U.S. history. Between 1947 and 1956, an additional 322 veterans joined their comrades and laid to rest in the special WWII Four Freedoms Memorial area.  We are honored that so many other WWII veterans have chosen White Chapel as their final resting place.  The WWII Four Freedoms Memorial serves as an homage to all Michigan WWII veterans. On the first Sunday of every August at 12 noon, White Chapel hosts the <a href="http://link.com" target="_blank"><strong>Gold Star Mother’s V-J Day Ceremony</strong></a> to commemorate and honor our WWII veterans.</p>
  <p class="blue5"><strong><a href="http://link.com" target="_blank">Click here</a></strong> for information about the national WWII memorial.</p></div>
  </div>
  </div>
	
  <div class="section2" id="section2MilMem">
	<div class="wcc1600Flex2">  
    <div class="threeCol">
      <div class="text-center"><img src="images/pics/korea-plaque.jpg" class="img-fluid" alt="Korean War Memorial"></div> 
	<h2 class="wccItemTitle">Korean War Memorial</h2>
	  <p class="wccContent1">White Chapel’s memorial to all Korean War Veterans is a bronze plaque set in polished granite standing eight feet tall. As the memorial describes, the soldiers were told they were “ . . . <a href="http://link.com" target="_blank"><strong>going to have peace even if we have to fight for it”</strong></a>.  And they did. They fought on Heartbreak Ridge and they waded ashore at Inchon. They froze in the winter cold and baked in the summer sun. At times they were greatly outnumbered but they fought on and many gave their lives for Freedom...for Justice...and for Peace.
Click here for information about the national Korean War Memorial.</p>
	  </div>
	<div class="threeCol">
      <div class="text-center"><img src="images/pics/vietnam-plaque.jpg" class="img-fluid" alt="Vietnam War Memorial"> </div>
		<h2 class="wccItemTitle">Vietnam War Memorial</h2>
		<p class="wccContent1">White Chapel’s memorial to all Vietnam War Veterans is a bronze plaque set in polished granite standing eight feet tall. It was erected in memory of the young men and women who lost their youthful dreams fighting for freedom and honor. Many of those fortunate enough to return continued to wrestle with the horrors of war. The memorial is intended to give these brave men and women the respect and honor that they rightly deserve for their service and sacrifice.
			<a href="http://link.com" target="_blank"><strong>Click here</strong></a> for information about the national Vietnam War Memorial.</p>
    </div>
	<div class="threeCol">
      <div class="text-center"><img src="images/pics/persian-gulf-plaque.jpg" class="img-fluid" alt="Persian Gulf War Memorial"></div> 
		<h2 class="wccItemTitle">Persian Gulf War Memorial</h2>
		<p class="wccContent1">The Persian Gulf War Memorial is a memorial to all Persian Gulf War Veterans. Those who served in this combat were devoted and committed to the hard work of freedom. Inscribed in granite below the bronze memorial plaque are the names of the Michigan solders who made the ultimate sacrifice in the Persian Gulf War.</p>
	  </div></div></div> 
  
	<div class="container-fluid" id="section1TwoCol">
  <div class="wcc1600Flex2">
    <div class="twoCol">
<div class="text-center"><img src="images/pics/pow-mia.jpg" class="img-fluid" alt="Placeholder image"></div>
<h2 class="wccItemTitle">POW/MIA Memorial</h2>	
  <p class="wccContent1">The POW/MIA Memorial is a memorial to all American Prisoners of War and those Missing in Action. It commemorates these brave soldiers, standing as a declaration that we will never forget them and long for their return.
	  <a href="http://link.com" target="_blank"><strong>Click here</strong></a> for information about Arlington National Cemetery.</p>
  </p></div>
    <div class="twoCol">
      <div class="text-center"><img src="images/pics/war-on-terror.jpg" class="img-fluid" alt="War on terror memorial"></div>
<h2 class="wccItemTitle">War on Terror Memorial</h2>	
  <p class="wccContent1">White Chapel dedicated its exquisite War On Terror Memorial in a solemn ceremony on September 11, 2016, the anniversary of the most deadly terrorist attacks on US soil.  The ceremony was attended by local and state dignitaries with a large and respectful audience.  The bronze globe memorial depicts the worldwide breadth of the ongoing struggle to end terrorism.</p></div>
  </div>
  </div>
<?php include 'includes/footer.php'; ?>

  
  </body>
</html>