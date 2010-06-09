<h1><?php echo $header;?></h1>

<p>The Input Class serves two purposes:</p>

<ol>
	<li>It pre-processes global input data for security.</li>
	<li>It provides some helper functions for fetching input data and pre-processing it.</li>
</ol>

<p>In Nova, the Input library has been extended to provide functionality to find and replace potential string characters that could cause issues. Most of these characters are the product of Microsoft Word's "curly" quotes and apostrophes, though we also filter for Word's dashes and ellipses as well.</p>

<p class="critical"><strong>Note:</strong> This library is initialized automatically by the system so there is no need to do it manually.</p>

<p class="important"><strong>Note:</strong> This library has been extended from the CodeIgniter default. Changes to this library can be found in the <samp>MY_Input.php</samp> file in <samp>application/libraries</samp>. Do not edit the CodeIgniter core library file!</p>