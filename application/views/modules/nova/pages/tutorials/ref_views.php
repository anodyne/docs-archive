<h1><?php echo $header;?></h1>

<h2>What is a view</h2>

<p>Views are files that present data to the browser. These files enable the separation of logic and presentation for Nova. Views are typically HTML, Javascript, or CSS but can contain variables passed into them from the controller.</p>

<h2>Creating a view</h2>

<p>In Nova, views are located in the <samp>application/views</samp> directory. Views can be (and most often are) located in subdirectories. Views are named by their directory path from the <samp>application/views</samp> directory and the file name. So a view file located <samp>application/views/_base_override/main/pages/example_index.php</samp> would be named <samp>_base_override/main/pages/example_index</samp>.</p>