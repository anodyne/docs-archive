<h1>Changes to Skinning in Nova 2</h1>

<p><span class="label warning">UPDATED - 14 OCT 2011</span></p>

<p>For the most part, skinning works identically in Nova 2 as it does in previous versions of the system. In fact, you should be able to use a Nova 1 skin in Nova 2 without a single modification. For those who have skinned Nova 1 though, you'll likely notice some differences in the skins that ship with Nova 2. Below are some explanations about those changes.</p>

<h2>Gradients</h2>

<p>In Nova 1, gradients were handled by carefully crafted transparent images. When you wanted to change the gradient, you'd simply change the background color and the image would take care of the rest. While this is the simpler option, it involves images, which can be difficult to change in the event you want to do something different with a gradient. Finally, using images requires the image to be loaded from the server which slows loading time. The less that has to be loaded, the faster the page will display. In Nova 2's skins, we've shifted away from using images and opted to use CSS gradients instead.</p>

<pre>background: #efefef;
background: -moz-linear-gradient(top, #efefef 0%, #fcfcfc 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#efefef), color-stop(100%,#fcfcfc));
background: -webkit-linear-gradient(top, #efefef 0%,#fcfcfc 100%);
background: -o-linear-gradient(top, #efefef 0%,#fcfcfc 100%);
background: -ms-linear-gradient(top, #efefef 0%,#fcfcfc 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#efefef', endColorstr='#fcfcfc',GradientType=0 );
background: linear-gradient(top, #efefef 0%,#fcfcfc 100%);</pre>

<p>Admittedly, a first glance at the CSS gradient above can be a little daunting. All a CSS gradient does is tell the browser the direction of the gradient, the colors to use and where to use them. Don't worry, you don't have to do anything by hand. Instead you can easily create your own CSS gradients using an online tool like <a href="http://www.colorzilla.com/gradient-editor/" target="_blank">ColorZilla</a>. Once you've selected your colors, just copy the code and paste it into your skin.</p>