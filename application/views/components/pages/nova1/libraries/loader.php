<h1><?php echo $header;?></h1>

<p>Loader, as the name suggests, is used to load elements. These elements can be libraries (classes) View files, Helpers, Plugins, or your own files.</p>

<p class="critical"><strong>Note:</strong> This class is initialized automatically by the system so there is no need to do it manually.</p>

<p class="important"><strong>Note:</strong> This library has been extended from the CodeIgniter default. Changes to this library can be found in the <samp>MY_Loader.php</samp> file in <samp>application/libraries</samp>. Do not edit the CodeIgniter core library file!</p>

<p>The change made to this library was to a private method only accessible from within the Loader class. Anodyne does not document private methods, be it Nova private methods or CodeIgniter private methods. The change made to the core Loader library allows models to be autoloaded with an object name, something the core framework doesn't allow out of the box.</p>