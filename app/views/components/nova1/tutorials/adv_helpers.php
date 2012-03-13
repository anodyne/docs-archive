<h1><?php echo $header;?></h1>

<p>Helpers, as the name suggests, help you with tasks. Each helper file is simply a collection of functions in a particular category. Unlike most other systems in CodeIgniter, helpers are not written in an Object Oriented format. They are simple, procedural functions. Each helper function performs one specific task, with no dependence on other functions.</p>

<p>For Nova, we created several helpers and even extended some of the CodeIgniter core helpers. Below are some explanations if you're interested in creating your own helpers or even extending the CodeIgniter helpers.</p>

<h2>Creating Your Own Helpers</h2>

<p>In this case, we're going to create a helper that prints out a string of text based on a parameter passed to the helper. To start, we're going to create a new file in <code>application/helpers</code> named <dfn>enterprise_helper.php</dfn>. <kbd>You must suffix your helper files with the _helper name or they won't work!</kbd></p>

<pre>&lt;php

if ( ! function_exists('print_string'))
{
	function print_string($option = 1)
	{
		switch ($option)
		{
			case 1:
			default:
				$string = 'This is the first string of text.';
				break;
				
			case 2:
				$string = 'This is the second string of text.';
				break;
				
			case 3:
				$string = 'This is the third string of text';
				break;
		}
		
		return $string;
	}
}</pre>

<p>What we have here is a very simple function that accepts one parameter. Based on what you pass the function, it'll return a different string of text. To use this helper in our page, we'd have some code that look like this:</p>

<pre>// load our helper ... notice we don't have to use the _helper suffix
$this->load->helper('enterprise');

// assign the output to a variable
$string = print_string(2);

echo $string;

// would output: This is the second string of text.</pre>

<p>Obviously your helpers would probably be more advanced, but that gives you a general idea of how to build a helper. If you want to make a change to a helper that already exists, you should copy and paste the function into your own helper file. We don't recommend editing the helper files. It's one of the few areas where if you change them, your changes will be wiped out by a Nova update.</p>

<h2>Extending CodeIgniter Helpers</h2>

<p>CodeIgniter comes with a wide variety of pre-built helpers that are handy in doing simple tasks, but every so often, you might need to change the default behavior of one of those helpers. The framework actually provides a simple way of extending and overwriting core helpers by simply using the <dfn>MY_</dfn> prefix in the name of the helper.</p>

<p class="alert alert-info"><strong>Note:</strong> This only applies to CodeIgniter's core helpers and not helpers built by Anodyne.</p>

<h3>Adding to Core Helpers</h3>

<p>Let's look at the URL helper in Nova that we've extended to add a new function to. In this case, we're adding a function for providing a link to something if a condition is true.</p>

<pre>if ( ! function_exists('link_to_if'))
{
	function link_to_if($condition, $uri = '', $title = '', $attributes = '')
	{
		if ($condition)
		{
			return Html::anchor($uri, $title, $attributes);
		}
		
		return FALSE;
	}
}</pre>

<p>The function is very straightforward. If the condition passed in parameter 1 is true, it'll return the anchor tag, otherwise it'll return FALSE. Since this function doesn't exist in the original URL helper, we've just added to the core helper so that once we've loaded the URL helper, we can use this function like we would any other function in the URL helper.</p>

<h3>Modifying Core Helpers</h3>

<p>Adding to a helper is grand, but you might need to change the behavior of an existing helper function. How do we do that? It's actually the same process as adding a new helper function: just add the function. In the case of modifying the behavior of an existing function, if you name your function the same, CodeIgniter will use yours instead of the core helper function. Nova does this with the form helper to do some slightly different things with the form_button helper.</p>

<pre>if ( ! function_exists('form_button'))
{
	function form_button($data = '', $content = '', $extra = '')
	{
		/* load the user agent library */
		$ci =& get_instance();
		$ci->load->library('user_agent');
		
		$defaults = array('name' => (( ! is_array($data)) ? $data : ''), 'type' => 'submit');
		
		if ( is_array($data) AND isset($data['content']))
		{
			$content = $data['content'];
			$data['value'] = $data['content'];
			unset($data['content']); // content is not an attribute
		}
		
		/*
		 * if a user has IE 7, we need to show them an input tag instead of a button tag
		 * because of the way IE 7 handles submitting multiple buttons (it send the
		 * innerHTML instead of the value in the key=>value pair)
		 */
		if ($ci->agent->browser() == 'Internet Explorer' && $ci->agent->version() < 8)
		{
			return "&lt;input "._parse_form_attributes($data,$defaults).$extra." />";
		}
		else
		{
			return "&lt;button "._parse_form_attributes($data,$defaults).$extra.">&lt;span>".$content."&lt;/span>&lt;/button>";
		}
	}
}</pre>

<p>In this case, we need to do some logic for browsers to make sure we're offering up the right type of button to a user. After that, we use the exact same items the original form_button helper uses. In this instance, Nova uses the helper we created instead of CodeIgniter's.</p>