<h1><?php echo $header;?></h1>

<p>Inevitably, you will come across a situation where the model methods included with Nova just don't do what you want. In those instances, you should create a new model method. It's important that you never try to update an existing model method. Doing so may break parts of the system that use that model method. Fortunately, models, like controllers, were thought of with extensibility in mind, so adding a new method is easy.</p>

<p>The first place to look to see if there's a model method that you can use is in application/models/base. If, in the specific model file (usually, each model will interact with one database table) you can't find something, you can open the model file in the application/models folder. It's important that you don't edit anything in the models/base folder! This includes adding your own methods to the base models. We've made the models extendable so that you can add your own model methods to Nova, and when an update comes around, you don't lose your model in the process of updating.</p>

<p>The model files have everything you need to get started, you simply have to add the method and your calls to the database. Let's say we want to retrieve the award name (and just the award name) from the database for a given award ID. We can do this easily with the following code:</p>

<pre>function get_award_name($id = '')
{
    $this->db->from('awards');
    $this->db->where('award_id', $id);

    $query = $this->db->get();

    return $query;
}</pre>

<p>That method will return an object that has every piece of data about the award whose ID we passed in as the first parameter. That's all well and good, but we don't want everything, we just want the name. So let's narrow down what our method is returning.</p>

<pre>function get_award_name($id = '')
{
    $this->db->from('awards');
    $this->db->where('award_id', $id);

    $query = $this->db->get();

    if ($query->num_rows() > 0)
    {
        $row = $query->row();

        return $row->award_name;
    }

    return FALSE;
}</pre>

<p>Now, let's break down exactly what's happening in this method. First, we're building our query using CodeIgniter's Active Record library. If we wanted to, we could do a select before the from, but if we don't, it won't hurt anything. Then, we add a where clause. By default, if you don't specify an operator, it uses equal. If you want to use another operator, you'd just need to add it to the end of the first parameter, like so:</p>

<pre>$this->db->where('award_id >', $id);</pre>

<p>The final query that Nova will produce from this is <dfn>SELECT * FROM nova_awards WHERE award_id = 1</dfn>. (That assumes that the ID passed in to the method in the controller is 1.) We assign the get method to our variable and the query is run automatically. After the query has run, it sends back an object with all the information and data returned from the query. To avoid errors, we want to first check to make sure there are actually records being returned. Active Record has a handy object method called <var>num_rows()</var> that will return the number of rows being returned. If that number is greater than zero, we're going to keep going, otherwise, the method will return FALSE. Assuming we have one row being returned, we'll assign the first row in the object to its own variable, then return the variable we want. You'll notice that he second part of the $row variable (the award_name) lines up with the field we're pulling from the database. Now, using the code below will assign the name of the award to the variable <var>$award</var>.</p>

<pre>$award = $this->awards->get_award_name(1);</pre>

<p>That, in a nutshell, is how you would create your own model methods. Take a look at all the different model methods Nova uses to get a better idea for the kinds of things you can do. Also, make sure to check out the following links for more information about Active Record and CodeIgniter's Database class:</p>

<p><a href="http://codeigniter.com/user_guide/database/index.html">http://codeigniter.com/user_guide/database/index.html</a></p>
<p><a href="http://codeigniter.com/user_guide/database/active_record.html">http://codeigniter.com/user_guide/database/active_record.html</a></p>

<br />
<p>
	<?php echo Html::anchor('nova1/tutorials/models/1', '&#171; Previous Tutorial');?>
	&nbsp; &middot; &nbsp;
	<?php echo Html::anchor('nova1/tutorials/models/3', 'Next Tutorial &#187;');?>
</p>