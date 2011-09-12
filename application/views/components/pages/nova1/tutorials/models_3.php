<h1><?php echo $header;?></h1>

<p>In Nova, models are an integral part of interacting with the massive amounts of data stored in the database. If you want to do any type of significant development with Nova, you'll definitely have to be comfortable with models. Using them is the easy part, but using what they return is another matter altogether.</p>

<p>For the most part, Nova is going to return data from models in one of a four ways:</p>

<ul>
	<li><strong>String</strong> &ndash; In some cases, a model will simply spit out a string of text that can be assigned to a variable and/or echoed out.</li>
	<li><strong>Boolean</strong> &ndash; In some cases, a model will return a boolean value of either <dfn>TRUE</dfn> or <dfn>FLASE</dfn> which you can use in your logic.</li>
	<li><strong>Array</strong> &ndash; Arrays are everywhere in Nova, so knowing how to work with them is a must. In some cases, Nova's models compile the data it's just pulled into an array and then hands the array off to your script to be used and manipulated.</li>
	<li><strong>Object</strong> &ndash; The most common way that models will return their data is as an object. In most cases, Nova will return the full object, but other times, it'll only return a row object with a single record.</li>
</ul>

<h2>Working with Strings</h2>

<p>Strings are probably the simplest return form to work with, but are also the rarest found in Nova's models. One of the most prominent items you may find yourself using is the <dfn>get_authors()</dfn> model method which returns a simple string of character names.</p>

<pre>$authors = $this->char->get_authors('1,2', TRUE);

echo $authors;

// would produce:
Captain Jean-Luc Picard & Commander William Riker</pre>

<h2>Working with Booleans</h2>

<p>Like strings, booleans are incredibly easy to work with. A boolean is nothing more than a TRUE/FALSE value. Once you have the value back, you can do logic based on the return.</p>

<pre>$access = $this->auth->check_access('admin/index');</pre>

<p>In the above code, if a user has access to the Admin Control Panel, the access variable will be <dfn>TRUE</dfn>, otherwise, it'll be <dfn>FALSE</dfn>. The only thing we need to make sure we do is use the <strong>===</strong> comparison operator instead of <strong>==</strong>. The double equal sign looks for equality, but the triple equal looks for two values being identical and of the same type. That's an important distinction to make as 1 could also be equal to TRUE and 0 equal to FALSE, but using the triple equal ensures that that confusion won't happen.</p>

<p>With the above code, we'd be able to do things like:</p>

<pre>if ($access === TRUE)
{
	echo 'You have access to this page!';
}
else
{
	echo 'You do not have access, go away!';
}

// this could also be written:
$var = ($access === TRUE) ? 'You have access to this page!' : 'You do not have access, go away!';

echo $var;</pre>

<h2>Working with Arrays</h2>

<p>There are a handful of models in Nova that will return arrays instead of strings or boolean items. This is done mainly for ease of use for the type of data that's being return. (In addition, there are some models in Nova that take arrays as arguments.) Let's take the <dfn>get_character_emails()</dfn> model as an example:</p>

<pre>$emails = $this->char->get_character_emails('1,3,7,19');

// would give you an array that looks like:
Array(
	[1] => john@example.com,
	[2] => dave@example.com,
	[4] => bill@example.com,
	[9] => jane@example.com
)

// the pattern here is:
[player_id] => email

// note that player ID and character ID will most often not be the same</pre>

<p>Now, we have an array with some player IDs and email addresses that I can loop through and take additional action on or use just like a normal array in PHP, including imploding it into a string. This kind of thing can be really handy when sending out emails. Take something like this as an example:</p>

<pre>$emails = $this->char->get_character_emails('1,3,7,19');

$string = implode(',', $emails);

$this->email->from('me@example.com', 'David');
$this->email->to($string);
$this->email->subject('Hey');
$this->email->message("Hey guys, how's it going?");

$this->email->send();</pre>

<p>The above code would send an email to those four players with the subject of Hey and the message I specified.</p>

<p class="important"><strong>Note:</strong> Lines of code unnecessary to this example have been removed from the email example above. The code will not work as is and is meant only for explanation purposes.</p>

<h2>Working with Objects</h2>

<p>Nova is programmed with object oriented programming principles. Having at least a simple understanding of OOP programming will help you a lot when developing for Nova, though it isn't required. When Nova's models return objects, it'll either be a full result set object with everything or a simple row object that'll have a single item from the set of data that was pulled back. Below are how to use both.</p>

<p>If you were to dump the contents of the object a model returns, you'd see something like this:</p>

<pre>CI_DB_mysql_result Object
(
    [conn_id] => Resource id #44
    [result_id] => Resource id #117
    [result_array] => Array
        (
        )

    [result_object] => Array
        (
        )

    [current_row] => 0
    [num_rows] => 7
    [row_data] => 
)</pre>

<p>The object contains all the information returned from the query that our model runs, including the full reset set, the number of rows, the current row and several other pieces of information. (You can see from this too that a query object has both a result object and a result array, though Nova doesn't use the result array anywhere). Once we have this information, we can start to work with the information.</p>

<h3>Full Result Set Object</h3>

<p>Because CodeIgniter (and Nova) are built with object oriented principles, that's the primary means by which we're going to work with data. The example below is simple and just grabs all active characters and puts them into an array we can pass to the view file to loop through.</p>

<pre>$characters = $this->char->get_all_characters();

if ($characters->num_rows() > 0)
{
	foreach ($characters->result() as $c)
	{
		$data['characters'][$c->charid]['first_name'] = $c->first_name;
		$data['characters'][$c->charid]['middle_name'] = $c->middle_name;
		$data['characters'][$c->charid]['last_name'] = $c->last_name;
	}
}</pre>

<p>The first thing we have to do is get the information from the characters model. The <dfn>get_all_characters()</dfn> method returns a full result set object for us to use. However, before we get the data, we have to do a little sanity checking to make sure we don't throw any errors. We do that by using the object's <var>num_rows()</var> method. As long as there are more than zero records, we're going to continue. Next, we use a foreach loop to go through the result set (indicated as the <var>result()</var> method).</p>

<p>Now that we're inside our foreach loop, we can start to assign information to our data array. To reference items inside the object set, we use the arrow (->) along with the variable we set in our foreach loop (in this case, $c). After that, we can simply pull specific fields by referencing them by name. In this instance, the final data array can be passed to the view and used like all other data arrays in the Nova.</p>

<h3>Single Row Object</h3>

<p>Sometimes we want to have the full result set when we work with data coming from a model, but there are times were we know that we only have one record, so we don't need the full result set object, only the row object. In our object we saw above, there's an item in the object called <var>row_data</var> that can be used to just get the last row in the result set. If we know we're only going to have a single item coming back, then we only need to use the row data. In some cases, Nova will only return the row object.</p>

<p>So what's the biggest difference? Well, let's take a look at an example and we'll see. In this instance, we want to get information about a specific character.</p>

<pre>$character = $this->char->get_character(1);

if ($character !== FALSE)
{
	$data['character']['first_name'] = $character->first_name;
	$data['character']['middle_name'] = $character->middle_name;
	$data['character']['last_name'] = $character->last_name;
}</pre>

<p>In this example, we've assigned the single row object that <dfn>get_character()</dfn> returns to a variable. In models that return a single row object, Nova does some of the sanity check for you. If there's nothing there, the model returns <dfn>FALSE</dfn>, otherwise, it'll give you the row object. Because of that, we now have our object assigned to the character variable. After we make sure that there's something in the object, we can simply assign items to our array like we did with a full result set object and then pass our array on to the view.</p>

<p class="important"><strong>Note:</strong> You can pass objects to views instead of arrays if you want, but generally speaking, Nova will always pass an array as it's a little more straightforward to work with and eliminates the need to do more loops in the view files.</p>

<br />
<p>
	<?php echo Html::anchor('nova1/tutorials/models/2', '&#171; Previous Tutorial');?>
</p>