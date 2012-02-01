<h1><?php echo $header;?></h1>

<p class="alert alert-info"><strong>Note:</strong> The example here uses DS9 as an example, but the same process can be used for any genre in the system.</p>

<p>With the fairly recent advent of Kuro-RPG's alpha transparency rank sets, Anodyne's made a committment to use only alpha transparency rank sets if they're available from Kuro-RPG. However, there may be those who want to use a non-alpha transparency rank set. In this tutorial, we're going to create a new rank set that uses the Kuro-RPG DS9 Dress ranks (at the time of this publishing there was no alpha transparency available for that set).</p>

<h2>Background</h2>

<p>It's important to understand what makes up a rank set before we dig in. A DS9 rank set consists of a preview image (aptly named preview.png, though you can change that name if you want), a blank image, blank images for each of the colors and rank images. In the DS9 rank sets, the preview image is a copy of the red captain image and the blank image is a copy of the black blank image.</p>

<h2>The Steps</h2>

<h3>1. Get the Ranks</h3>

<p>The first step is to download the rank set from Kuro-RPG. For this tutorial, we're going to use the white color version. Once you have the rank set, make sure you've unzipped it to your Desktop.</p>

<p class="alert alert-info"><strong>Note:</strong> Star Trek canon dictates that non-commissioned officers have different dress uniforms, but for the sake of brevity and clarity, we are ignoring that for this tutorial.</p>

<h3>2. Create Our Folder</h3>

<p>We need a place to put our rank set, so create a folder called <samp>dress</samp> on your Desktop.</p>

<h3>3. Grab the Blank Images</h3>

<p>We're going to start by grabbing all of the necessary blank images. In the Kuro-RPG folder, find the images that have a <dfn>-blank.png</dfn> ending. The ones we're looking for are:</p>

<ul>
	<li>b-blank.png</li>
	<li>c-blank.png</li>
	<li>g-blank.png</li>
	<li>r-blank.png</li>
	<li>s-blank.png</li>
	<li>t-blank.png</li>
	<li>v-blank.png</li>
	<li>w-blank.png</li>
	<li>y-blank.png</li>
</ul>

<h3>4. Create the Blank Image</h3>

<p>Copy the <dfn>b-blank.png</dfn> image and rename it to <kbd>blank.png</kbd>.</p>

<h3>5. Grab the Marine Ranks</h3>

<p>Open the <samp>marine</samp> directory from the Kuro-RPG folder. We want to copy all of the Marine ranks from here over to our folder. The items we're looking for here are the <dfn>g-</dfn> ranks. Copy the following <dfn>g-</dfn> items over to our folder:</p>

<ul>
	<li>a5.png</li>
	<li>a4.png</li>
	<li>a3.png</li>
	<li>a2.png</li>
	<li>a1.png</li>
	<li>e1.png</li>
	<li>e2.png</li>
	<li>e3.png</li>
	<li>e4.png</li>
	<li>e5.png</li>
	<li>e6.png</li>
	<li>e7.png</li>
	<li>e8.png</li>
	<li>e9.png</li>
	<li>o1.png</li>
	<li>o2.png</li>
	<li>o3.png</li>
	<li>o4.png</li>
	<li>o5.png</li>
	<li>o6.png</li>
	<li>w1.png</li>
	<li>w2.png</li>
	<li>w3.png</li>
	<li>w4.png</li>
</ul>

<h3>5. Grab the Naval Ranks</h3>

<p>Now that we have our Marine ranks transferred over to our folder, let's focus on the naval ranks. Open the <samp>naval-gold</samp> directory from the Kuro-RPG folder. We want to copy all of the colored ranks from here over to our folder. The items we're looking for here are the <dfn>c-</dfn>, <dfn>r-</dfn>, <dfn>s-</dfn>, <dfn>t-</dfn>, <dfn>v-</dfn> and <dfn>y-</dfn>, ranks. Copy the following items from each color over to our folder:</p>

<ul>
	<li>a5.png</li>
	<li>a4.png</li>
	<li>a3.png</li>
	<li>a2.png</li>
	<li>a1.png</li>
	<li>c0.png</li>
	<li>c1.png</li>
	<li>c2.png</li>
	<li>c3.png</li>
	<li>c4.png</li>
	<li>e1.png</li>
	<li>e2.png</li>
	<li>e3.png</li>
	<li>e4.png</li>
	<li>e5.png</li>
	<li>e6.png</li>
	<li>e7.png</li>
	<li>e8.png</li>
	<li>e9.png</li>
	<li>o1.png</li>
	<li>o2.png</li>
	<li>o3.png</li>
	<li>o4.png</li>
	<li>o5.png</li>
	<li>o6.png</li>
	<li>w1.png</li>
	<li>w2.png</li>
	<li>w3.png</li>
	<li>w4.png</li>
</ul>

<p>Once those have been copied over, we need to finish up the Marine ranks. To finish the Marine ranks, grab the cadet ranks (c0, c1, c2, c3 and c4) from the <dfn>g-</dfn> group and copy them to our folder.</p>

<h3>6. Create the Preview Image</h3>

<p>Copy the <dfn>r-o6.png</dfn> image and rename it to <kbd>preview.png</kbd>.</p>

<h3>7. Create the Rank Quick Install File</h3>

<p>If you want to use the Nova Quick Install feature, you can create the <samp>rank.yml</samp> file in the directory. To create the Quick Install file, create a file called rank.yml and insert the following text inside:</p>

<pre>rank: Dress Ranks
location: dress
credits: The rank sets used in Nova were created by Kuro-chan of Kuro-RPG. The ranksets can be found at &lt;a href='http://www.kuro-rpg.net' target='_blank'>Kuro-RPG&lt;/a>. Please do not copy or modify the images.
preview: preview.png
blank: blank.png
extension: .png
url: http://www.kuro-rpg.net/</pre>

<p>With this file in the directory, if the admin hasn't created this rank set yet, the Rank Catalogue page will prompt them to install the rank set.</p>

<h2>Other Genres</h2>

<p>Creating rank sets for other genres uses the same process. Each genre comes with one rank set, so you should begin by looking at the set up the ranks directory. In most cases, we haven't modified file names much beyond their original names. It's important to note that all the images have to be named the same as their default counterparts. The only thing that can change are the blank image, preview image and image extensions. Those items can be configured in the Rank Catalogue.</p>