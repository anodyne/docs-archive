<h1><?php echo $header;?></h1>

<p>Models are PHP classes that are designed to work with information in your database. In Nova, models allow you to create, retrieve, update, and delete information from the database. In Nova, we have chosen to use CodeIgniter's Active Record database functions for ease of use. Active Record makes building database queries easier and faster. In addition, if Nova was to ever be able to function on multiple database types, using Active Record would ensure that none of the queries would have to be re-written for new database syntax; Active Record takes care of that for us.</p>

<p>Models are stored in the application/models folder. To allow for extensibility, we have created a folder called base where we store all of the base models, and then we extend them in the root folder. We'll use the awards model as an example. In application/models/base/awards_model_base.php, we have our basic methods for accessing awards information, updating awards, creating new awards, and deleting awards.</p>

<h3>Loading a Model</h3>

<p>Before a model can be used in a controller, it must first be loaded. By default, Nova auto-loads the settings and messages models for use anywhere in the system. This means that you do not need to load either of those models in your own pages since the system loads them automatically. All other models have to be loaded manually with the following code:</p>

<pre>$this->load->model('awards_model');</pre>

<p>You would then use the model by referencing it in your controller method:</p>

<pre>$award = $this->awards_model->get_award($id);</pre>

<p>You can alternatively assign your model to a different object name by specifying it in the second paramter, like so:</p>

<pre>$this->load->model('awards_model', 'awards');
$award = $this->awards->get_award($id);</pre>

<br />
<p>
	<?php echo Html::anchor('nova1/tutorials/models/2', 'Next Tutorial &#187;');?>
</p>