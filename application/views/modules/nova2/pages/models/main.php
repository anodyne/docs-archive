<h1><?php echo $header;?></h1>

<p>Models in Nova are PHP classes designed to work with information in your database. Models are used to insert, update, delete, retrieve and count data in the database so that the pieces can be reused across the entire system. Nova's models work in tandem with an Object Relational Mapper (ORM) to simplify code and provide more powerful access to the database.</p>

<p class="important">Nova 2 uses the Jelly ORM for database interaction. Complete documentation about Jelly can be found in their <a href="http://jelly.jonathan-geiger.com/docs/jelly.getting-started" target="_blank">user guide</a>.</p>

<h2>Models in Nova</h2>

<p>Models exist for every database table in the system, however, most of the model files only include the necessary initialization method that maps the database table structure and gives Jelly the information and access it needs. The following models however, have a few select, frequently used model methods.</p>

<ul>
	<li><?php echo anchor($this->router->fetch_module() .'/models/character', 'Character');?></li>
	<li><?php echo anchor($this->router->fetch_module() .'/models/message', 'Message');?></li>
	<li><?php echo anchor($this->router->fetch_module() .'/models/setting', 'Setting');?></li>
</ul>