<h1><?php echo $header;?></h1>

<h2>Class Names and File Locations</h2>

<p>Class names in Kohana follow a strict convention to facilitate autoloading (not having to manually load classes). Class names should always have uppercase first letters with underscores to separate words. Underscores are significant as they directly reflect the file location in the filesystem. The following conventions apply:</p>

<ul>
	<li>CamelCased class names should not be used, except when it is undesirable to create a new directory level.</li>
	<li>All class file names and directory names are lowercase.</li>
	<li>All classes should be in the <samp>classes</samp> directory. This may be at any level in the cascading filesystem.</li>
</ul>

<p>Unlike Nova 1, there's no separation between models, controllers, libraries and helpers. All classes are stored in the <samp>classes</samp> directory. The only exceptions are controllers and models which are stored in the <samp>controller</samp> and <samp>model</samp> directories.</p>

<h3>Examples</h3>

<p>Remember that in a class, the underscore means a new directory.</p>

<table class="zebra table100 tableborder">
	<thead>
		<tr>
			<th>Class Name</th>
			<th>File Path</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Controller_Template</td>
			<td>classes/controller/template.php</td>
		</tr>
		<tr>
			<td>Model_user</td>
			<td>classes/model/user.php</td>
		</tr>
		<tr>
			<td>Database</td>
			<td>classes/database.php</td>
		</tr>
		<tr>
			<td>Database_Query</td>
			<td>classes/database/query.php</td>
		</tr>
		<tr>
			<td>Form</td>
			<td>classes/form.php</td>
		</tr>
	</tbody>
</table>

<h2>Coding Standards</h2>

<p>In order to produce highly consistent source code, we ask that everyone follow the coding standards as closely as possible.</p>

<h3>Brackets</h3>

<p>Please use the BSD/Allman Style bracketing.</p>

<pre>while (x == y)
{
    something();
    somethingelse();
}

finalthing();</pre>

<h3>Naming Conventions</h3>

<p>Kohana uses under_score naming, not camelCase naming.</p>

<h4>Classes</h4>

<pre>// Controller class, uses Controller_ prefix
class Controller_Apple extends Controller {
 
// Model class, uses Model_ prefix
class Model_Cheese extends Model {
 
// Regular class
class Peanut {</pre>

<p>When creating an instance of a class, don't use parentheses if you're not passing something on to the constructor:</p>

<pre>// Correct:
$db = new Database;
 
// Incorrect:
$db = new Database();</pre>

<h4>Functions and Methods</h4>

<p>Functions should be all lowercase, and use under_scores to separate words:</p>

<pre>function drink_beverage($beverage)
{</pre>

<h4>Variables</h4>

<p>All variables should be lowercase and use under_score, not camelCase:</p>

<pre>// Correct:
$foo = 'bar';
$long_example = 'uses underscores';
 
// Incorrect:
$weDontWantThis = 'understood?';</pre>

<p class="important"><strong>Note:</strong> At several places, Nova 2 does not follow this convention. Please ignore these as they are the exception to the rule. Please use underscores instead of camelCase.</p>

<h3>Indentation</h3>

<p>You must use tabs to indent your code. Using spaces for tabbing is strictly forbidden. Vertical spacing (for multi-line) is done with spaces. Tabs are not good for vertical alignment because different people have different tab widths.</p>

<pre>$text = 'this is a long text block that is wrapped. Normally, we aim for '
      . 'wrapping at 80 chars. Vertical alignment is very important for '
      . 'code readability. Remember that all indentation is done with tabs,'
      . 'but vertical alignment should be completed with spaces, after '
      . 'indenting with tabs.';</pre>

<h3>String concatenation</h3>

<p>Don't put spaces around the concatenation operator:</p>

<pre>// Correct:
$str = 'one'.$var.'two';
 
// Incorrect:
$str = 'one'. $var .'two';
$str = 'one' . $var . 'two';</pre>

<h3>Comparison Operations</h3>

<p>Kohana's coding conventions call for the use of the OR and AND comparison operators, but we differ on this point. Because of confusion that can be caused by operator precedence, please use || and && instead.</p>

<pre>// Correct:
if (($foo && $bar) || ($b && $c))
 
// Incorrect:
if (($foo AND $bar) OR ($b AND $c))</pre>

<p>Please use elseif, not else if:</p>

<pre>// Correct:
elseif ($bar)
 
// Incorrect:
else if($bar)</pre>

<h3>Switch Structures</h3>

<p>Each case, break and default should be on a separate line. The block inside a case or default must be indented by 1 tab. Separate case statements with a single carriage return.</p>

<pre>switch ($var)
{
    case 'bar':
    case 'foo':
        echo 'hello';
    break;
	
    case 1:
        echo 'one';
    break;
	
    default:
        echo 'bye';
    break;
}</pre>

<h3>Parentheses</h3>

<p>There should be one space after statement name, followed by a parenthesis. The ! (bang) character must have a space on either side to ensure maximum readability. Except in the case of a bang or type casting, there should be no whitespace after an opening parenthesis or before a closing parenthesis.</p>

<pre>// Correct:
if ($foo == $bar)
if ( ! $foo)
if ( (int) $foo)
 
// Incorrect:
if($foo == $bar)
if(!$foo)
if ((int) $foo)
if ( $foo == $bar )
if (! $foo)</pre>

<h3>Ternaries</h3>

<p>All ternary operations should follow a standard format. Use parentheses around both expressions and variables. (Please note this conflicts with Kohana's coding standards.)</p>

<pre>$foo = ($bar == $foo) ? $foo : $bar;
$foo = ($bar) ? $foo : $bar;</pre>

<p>All comparisons and operations must be done inside of a parentheses group:</p>

<pre>$foo = ($bar > 5) ? ($bar + $foo) : strlen($bar);</pre>

<p>When separating complex ternaries into multiple lines, spaces should be used to line up operators, which should be at the front of the successive lines:</p>

<pre>$foo = ($bar == $foo)
     ? $foo
     : $bar;</pre>
	 
<h3>Type Casting</h3>

<p>Type casting should be done with spaces on each side of the cast:</p>

<pre>// Correct:
$foo = (string) $bar;
if ( (string) $bar)
 
// Incorrect:
$foo = (string)$bar;</pre>

<p>When possible, please use type casting instead of ternary operations:</p>

<pre>// Correct:
$foo = (bool) $bar;
 
// Incorrect:
$foo = ($bar == TRUE) ? TRUE : FALSE;</pre>

<p>When casting type to integer or boolean, use the short format:</p>

<pre>// Correct:
$foo = (int) $bar;
$foo = (bool) $bar;
 
// Incorrect:
$foo = (integer) $bar;
$foo = (boolean) $bar;</pre>

<h3>Constants</h3>

<p>Always use uppercase for constants:</p>

<pre>// Correct:
define('MY_CONSTANT', 'my_value');
$a = TRUE;
$b = NULL;
 
// Incorrect:
define('MyConstant', 'my_value');
$a = True;
$b = null;</pre>

<p>Place constant comparisons at the end of tests:</p>

<pre>// Correct:
if ($foo !== FALSE)
 
// Incorrect:
if (FALSE !== $foo)</pre>

<h3>Comments</h3>

<h4>One-line comments</h4>

<p>Use //, preferably above the line of code you're commenting on. Never use #.</p>

<pre>// Correct
// correct
 
//Incorrect
# Incorrect
/* Incorrect */</pre>

<h4>Multi-line comments</h4>

<p>Sometimes, it's necessary to create a block of text that explains a grouping of code. In those instances, please use the DocBlock style comments.</p>

<pre>/**
 * This is my block of text that would explain the code below it but
 * requires more than just a single line to explain it. It's also handy
 * if you need to have a list of values for reference:
 *
 * 1 - something
 * 2 - something else
 * 3 - final something
 */</pre>
 
<h4>Class, Function and Method Comments</h4>

<p>Kohana uses a built-in parser to take class, function and method comments and turn them into a nice userguide reference. If you're creating a new class, function or method, please make sure you provide thorough commenting so that the userguide picks your code up.</p>

<h5>Classes</h5>

<pre>/**
 * The Foo class doesn't really do anything, but it's a good example.
 *
 * @package    Nova
 * @category   Classes
 * @author     Anodyne Productions
 */

class Foo {

    public static function bar()
	{
	    // your code here
	}
}</pre>

<p>The first section of the block is a simple description of what your class/function/method does. You can make this as long as short as you want, but we recommend explaining what your class is used for. Within the first section of the comment block you can use Markdown syntax for additional markup if you'd like.</p>

<p>The second section of the comment block are tags that tell the userguide how to categorize your custom work. You'll have to use the Nova package all the time since our implementation of the userguide requires this. You can change the category if you want, but it should fit within the Classes category, or if you'd prefer, you can create your own category for your work, though you should only do this in the event you have a lot of code in your work.</p>

<h5>Functions/Methods</h5>

<p>Functions and methods don't require the additional tags that a class does.</p>

<pre>/**
 * Creates a special foo tag that doesn't really do anything.
 *
 *    echo foo('My content');
 *
 * @param    string    the content to put inside the tags
 * @return   string    a string with the foo tag and your content
 */

public static function foo($content)
{
    return '&lt;foo>'.$content.'&lt;/foo>';
}</pre>

<p>The second section in this block actually creates a code example for users. Use the second section to actually show a user, in simple terms, how they'd use your code in their own code.</p>