<h1><?php echo $header;?></h1>

<h2>Declaring a Controller Method</h2>

<p>Kohana 3 uses the Zend naming convention for controller methods which prepends <dfn>action_</dfn> to the method name (you'll still access the method directly). Also, controller methods should be public functions.</p>

<strong>In Nova 1:</strong>
<pre>function name()
{
    // your code here
}</pre>

<strong>In Nova 2:</strong>
<pre>public function action_name()
{
    // your code here
}</pre>

<h2>Rendering Content to the View</h2>

<p>Kohana 3 comes with its own template library, so there is no need for a third-party library to do templating like in Nova 1. Template and layout variables are defined in the controller's <dfn>before()</dfn> method and then its value is updated through the controller methods until it's finally output through the request object.</p>

<strong>In Nova 1:</strong>
<pre>// assign some variables to be used in the view
$data['foo'] = 'First Variable';
$data['bar'] = 'Second Variable';

// write the data to the template
$this->template->write_view('content', $view_loc, $data);
$this->template->write_view('javascript', $js_loc, $js_data);

// render the template
$this->template->render();</pre>

<strong>In Nova 2:</strong>
<pre>// create a new content view
$this->template->layout->content = View::factory('path/to/your/view/file');

// assign the object a shorter variable to use in the method
$data = $this->template->layout->content;

// assign some variables to be used in the view
$data->foo = 'First Variable';
$data->bar = 'Second Variable';

// send the response
$this->request->response = $this->template;</pre>

<h2>Loading and Using a Library/Helper</h2>

<p>Kohana 3 makes no distinction between helpers and libraries, so in Nova 2, all classes that aren't models or controllers are static classes so they don't need to be instantiated before being used.</p>

<strong>In Nova 1:</strong>
<pre>// load the auth library and call a method
$this->load->library('Auth');
$this->auth->method();

// load the date helper and call the now() function
$this->load->helper('date');
now();</pre>

<strong>In Nova 2:</strong>
<pre>// load the auth class and call a method
Auth::method();

// load the date class and call the now() method
Date::now();</pre>

<h2>Finding the URI Segment</h2>

<p>Kohana 3 uses the request object far more and offloads the retrieval of URI segments from a helper to the request object.</p>

<strong>In Nova 1:</strong>
<pre>$this->uri->segment(1);
// would return the first segment of the URI (a.k.a. the controller)

$this->uri->segment(2);
// would return the second segment of the URI (a.k.a. the method)</pre>

<strong>In Nova 2:</strong>
<pre>Request::instance()->controller;
// would return the first segment of the URI (a.k.a. the controller)

Request::instance()->action;
// would return the second segment of the URI (a.k.a. the method)</pre>

<p>Alternatively, if you're working in the controller, you can use the request object directly instead of getting an instance of the request object. If you're in the view or a class, you'll have to use the above code.</p>

<pre>$this->request->controller;
// would return the first segment of the URI (a.k.a. the controller)

$this->request->action;
// would return the second segment of the URI (a.k.a. the method)</pre>

<h2>Getting a Config Item</h2>

<p>Kohana's cascading file system handles configuration files differently. In Nova 1, config items had either be part of the config array or be loaded separately. Kohana handles things different. The first part of the statement is the name of the file followed by a period then the array key you're trying to retrieve.</p>

<strong>In Nova 1:</strong>
<pre>$this->config->item('item_name');</pre>

<strong>In Nova 2:</strong>
<pre>Kohana::config('file.item');
// this means you have a config file named file.php and an item with the name item

Kohana::config('nova.genre');
// returns the genre from the <samp>application/config/nova.php</samp> file</pre>