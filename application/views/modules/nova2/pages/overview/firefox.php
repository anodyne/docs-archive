<h1><?php echo $header;?></h1>

<p>Whether you're in the camp of those that consider your browser choice sacrosanct or those that barely recognize or understand your browser, it plays a key role in the user experience in Nova. Anodyne's recommendations for a browser clearly state that the best experience using Nova will be found using Mozilla's Firefox, but why do we make that recommendation? Read on to find out!</p>

<h2>Standards Compliance</h2>

<p>The folks at Mozilla have gone to great lengths and spent years ensuring that Firefox meets with the standards established for Internet development and presentation. For several years now, Mozilla has been at the forefront of bringing new features to their mainstream browser that others don't have. In recent months, Mozilla has begun to support HTML5, more robust SVG support, and a growing array of CSS3 properties.</p>

<p>Historically, Microsoft has been slower to the browser game and for the last 7 or 8 years has lagged behind its competitors. Talk to any web developer for more than a few minutes and a list of gripes about Internet Explorer as long as their arm will come out. Microsoft has proven they care little for web standards until recently, but with such a large market share, web developers are forced to bend over backwards to make web sites presentable in IE. Until recently, Anodyne supported IE6 and up, but given the vast failings of that version of Internet Explorer, we've since dropped all IE6 support and focus now on IE7 and IE8. While IE7 is much better with basic CSS, it still lacks many of the developer trimmings that Firefox, Safari and Chrome support right out of the box.</p>

<h2>Nova's Look and Feel</h2>

<p>Where you'll notice the biggest difference between IE and Firefox is in Nova's look and feel. While there are no functionality differences, the way the application looks can be drastically different from browser to browser.</p>

<h4>Buttons</h4>

<p>Firefox, Safari, Chrome and IE8 all use the HTML button element as it's a more flexible option than the input tag. IE7, however, can't handle submitting a button element if there's more than one of them in the form. This poses a problem for Nova since many of our forms have more than one form control. Because of this, we've had to create a work around where IE7 uses an input tag and everything else uses a button. This results in a far different user experience with buttons between IE7 and Firefox.</p>

<p>IE's lack of CSS3 support also creates presentational differences. Both Gecko-based browsers (Firefox) and WebKit-based browsers (Safari and Chrome) have implemented the border-radius property for seamlessly creating rounded corners on elements. For anyone who's done any web design and development, you know this is a huge deal. Nova makes wide use of the border-radius property. When viewing Nova in Firefox, users will see the rounded corners while IE users will see square corners.</p>

<p><?php echo img($images['buttons']);?></p>