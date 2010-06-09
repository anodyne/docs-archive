<h1><?php echo $header;?></h1>

<p>Nova was built with internationalization in mind, so nearly every piece of text hard-coded to the system is actually stored in one massive language array. This allows Nova to be translated into a wide variety of languages to be used all around the world.</p>

<p class="important"><strong>Note:</strong> Your text editor must be set up to use UTF-8 file encodings. If your editor is set to something, including automatic, make sure you change it to UTF-8 to avoid your browser being unable to interpret accented and special characters.</p>

<h2>The Process</h2>

<p>The process of translating Nova to another language is a long and tedious process, but in doing so, you'll be helping out the global community by providing ways for people around the world to easily use Nova in their own language. Anyone who takes on the task of translating Nova has our eternal gratitude!</p>

<h3>Creating the Language Directory</h3>

<p>The first thing to do is duplicate the english directory found in <samp>./application/language</samp> and rename the folder to the language you're translating. For this example, we'll use <kbd>spanish</kbd>. Once the directory is created, you will need to go through each language file in the directory and translate the strings one by one. In the process of developing Nova, we tried to do everything as one and two word groups to help translators. While the base language file may be several hundred lines long, each line usually only has one word on it to translate.</p>

<h3>Translate the CodeIgniter Core</h3>

<p>The CodeIgniter community has provided a lot of different <a href="http://codeigniter.com/wiki/Language_Translation/" target="_blank">translations</a>, but if the language you're translating Nova to isn't included in that list, you'll need to translate CodeIgniter as well using the same process as Nova.</p>

<p class="important"><strong>Note:</strong> Translation questions should be sent to Anodyne directly for the fastest and most accurate answer.</p>

<h2>HTML Entities</h2>

<p>The following definitions are used in the language files to give us properly formatted HTML entities for different characters. These items shouldn't be translated and should be used in place of the items they replace.</p>

<table cellpadding="0" cellspacing="1" border="0" class="tableborder zebra">
	<tr>
		<th>Item</th>
		<th>Replacement</th>
		<th>Final Output</th>
		<th>Description</th>
	</tr>
	<tr>
		<td class="td col1">></td>
		<td class="td col2">RARROW</td>
		<td class="td col3">&raquo;</td>
		<td class="td col4">A simple right arrow</td>
	</tr>
	<tr>
		<td class="td col1"><</td>
		<td class="td col2">LARROW</td>
		<td class="td col3">&laquo;</td>
		<td class="td col4">A simple left arrow</td>
	</tr>
	<tr>
		<td class="td col1">'</td>
		<td class="td col2">RSQUO</td>
		<td class="td col3">&rsquo;</td>
		<td class="td col4">A fancy right apostrophe</td>
	</tr>
	<tr>
		<td class="td col1">-</td>
		<td class="td col2">NDASH</td>
		<td class="td col3">&ndash;</td>
		<td class="td col4">A stylized dash</td>
	</tr>
	<tr>
		<td class="td col1">&</td>
		<td class="td col2">AMP</td>
		<td class="td col3">&amp;</td>
		<td class="td col4">An ampersand</td>
	</tr>
</table>

<h2>Keep In Mind...</h2>

<h3>What NOT to Translate</h3>

<p>The only thing you should translate is on the right side of the equal sign. You should never translate what's in the brackets on the left, otherwise you'll break Nova!</p>

<pre>$lang['do_not_translate'] = 'translate this';</pre>

<h3>Watch Your Quotes</h3>

<p>It's important when translating Nova that you understand PHP handling of single and double quotes and escaping quotes as necessary, otherwise you'll run in to a long series of errors that will be maddening trying to fix. In a nutshell, if you have a string surrounded by single quotes, you can only use another single quote in that string after escaping with the backslash (\). Here's how you would handle a few different types of strings:</p>

<pre>'This is a string that does not need escaping.'

'This is a string that does need to be escaped by it\'s got an extra single quote in it.'

"Alternately, you could switch to use double quotes so you don't have to escape any single quotes."</pre>

<h3>Putting Strings Together</h3>

<p>In addition, when using the HTML entity definitions listed above, you will have to concatenate strings, which you can see in several places in the language files. In PHP, you can concatenate strings using the period (.) like so:</p>

<pre>'This is a string that uses single quotes '. AMP .' an HTML entity';

// would produce
This is a string that uses single quotes & an HTML entity</pre>

<h3>Right to Left Text Rendering</h3>

<p>At this point, there is no support for languages that require right to left text rendering. We're actively pursuing RTL text rendering support in a future version of Nova. If you are interested in helping with this feature, please contact us.</p>