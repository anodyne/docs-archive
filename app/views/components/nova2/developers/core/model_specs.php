<h1>Specs Model</h1>

<h1>Get Data</h1>

<h2>get_field_data()</h2>
			
<p>Get field data for display.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>ID</strong></td>
			<td class="td col2"><em>integer</em></td>
			<td class="td col2"><em>0</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">The numeric ID of the spec item</td>
		</tr>
		<tr>
			<td class="td col1"><strong>field</strong></td>
			<td class="td col2"><em>integer/string</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">The numeric ID of the field whose data is being retrieved or its field_name</td>
		</tr>
		<tr>
			<td class="td col1"><strong>value only</strong></td>
			<td class="td col2"><em>boolean</em></td>
			<td class="td col2"><em>false</em></td>
			<td class="td col3"><em>true/false</em></td>
			<td class="td col4">Whether to pull back only the value of the field or the entire query object</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method will return an object with the data of the specs field requested.</p>


<h2>get_spec_field_details()</h2>
			
<p>Get all the information about a specific specs field based on the ID of the field.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>ID</strong></td>
			<td class="td col2"><em>integer</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">The numeric ID of the field</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method will return an object with the specs field information.</p>

<h2>get_spec_fields()</h2>

<p>Get all the specs fields. Using the parameters, this can be narrowed down further to just be fields from a section.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>section</strong></td>
			<td class="td col2"><em>integer</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">What section to pull fields for</td>
		</tr>
		<tr>
			<td class="td col1"><strong>display</strong></td>
			<td class="td col2"><em>string</em></td>
			<td class="td col2"><em>1</em></td>
			<td class="td col3"><em>y, n, none</em></td>
			<td class="td col4">The display flag for whether the field is displayed or not</td>
		</tr>
		<tr>
			<td class="td col1"><strong>type</strong></td>
			<td class="td col2"><em>string</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>text, textarea, select</em></td>
			<td class="td col4">The type of fields to pull</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method will return an object with the information for the fields being requested.</p>

<h2>get_spec_section_details()</h2>
			
<p>Get all information about a specs section.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>ID</strong></td>
			<td class="td col2"><em>integer</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">A numeric ID for the section ID being pulled</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method will return an object with the information for the specs section being requested.</p>

<h2>get_spec_sections()</h2>
			
<p>Get all the specification sections.</p>
			
<h3>Return</h3>

<p>The method will return an object with the information for the specification sections.</p>

<h2>get_spec_value_details()</h2>
			
<p>Get all information about a field value.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>ID</strong></td>
			<td class="td col2"><em>integer</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">A numeric ID for the value ID being pulled</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method will return an object with the information for the field value being requested.</p>

<h2>get_spec_values()</h2>
			
<p>Get all of the values for a specific field.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>field</strong></td>
			<td class="td col2"><em>integer</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">A numeric ID for the field ID values are being pulled for</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method will return an object with the information for all the values related to the field being requested.</p>

<h1>Update Data</h1>

<h2>update_field_sections()</h2>
			
<p>Update a specific field section.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>old ID</strong></td>
			<td class="td col2"><em>integer</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">A numeric ID for the section ID</td>
		</tr>
		<tr>
			<td class="td col1"><strong>new ID</strong></td>
			<td class="td col2"><em>integer</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">A numeric ID for the section ID</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful update query, this should be <dfn>1</dfn>.</p>

<h2>update_spec_field()</h2>
			
<p>Update a specific field.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>ID</strong></td>
			<td class="td col2"><em>integer</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">A numeric ID for the field to update</td>
		</tr>
		<tr>
			<td class="td col1"><strong>data</strong></td>
			<td class="td col2"><em>array/object</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">The data to use in updating the record</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful update query, this should be <dfn>1</dfn>.</p>

<h2>update_spec_field_data()</h2>
			
<p>Update the data associated with a specific field.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>ID</strong></td>
			<td class="td col2"><em>integer</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">A numeric ID for the field to update</td>
		</tr>
		<tr>
			<td class="td col1"><strong>data</strong></td>
			<td class="td col2"><em>array/object</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">The data to use in updating the record</td>
		</tr>
		<tr>
			<td class="td col1"><strong>identifier</strong></td>
			<td class="td col2"><em>string</em></td>
			<td class="td col2"><em>data_id</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">The database field to use as an identifier for the ID</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful update query, this should be <dfn>1</dfn>.</p>

<h2>update_spec_field_value()</h2>
			
<p>Update a specific field value.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>ID</strong></td>
			<td class="td col2"><em>integer</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">A numeric ID for the value to update</td>
		</tr>
		<tr>
			<td class="td col1"><strong>data</strong></td>
			<td class="td col2"><em>array/object</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">The data to use in updating the record</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful update query, this should be <dfn>1</dfn>.</p>

<h2>update_spec_section()</h2>
			
<p>Update a specific section.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>ID</strong></td>
			<td class="td col2"><em>integer</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">A numeric ID for the section to update</td>
		</tr>
		<tr>
			<td class="td col1"><strong>data</strong></td>
			<td class="td col2"><em>array/object</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">The data to use in updating the record</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful update query, this should be <dfn>1</dfn>.</p>

<h1>Create Data</h1>

<h2>add_spec_field()</h2>
			
<p>Add a specifications field to the database.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>data</strong></td>
			<td class="td col2"><em>array/object</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">The data used to create the record</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful creation query, this should be <dfn>1</dfn>.</p>

<h2>add_spec_field_data()</h2>
			
<p>Add data related to a specifications field to the database.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>data</strong></td>
			<td class="td col2"><em>array/object</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">The data used to create the record</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful creation query, this should be <dfn>1</dfn>.</p>

<h2>add_spec_field_value()</h2>
			
<p>Add a field value related to a specifications field to the database.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>data</strong></td>
			<td class="td col2"><em>array/object</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">The data used to create the record</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful creation query, this should be <dfn>1</dfn>.</p>

<h2>add_spec_section()</h2>
			
<p>Add a specification section to the database.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>data</strong></td>
			<td class="td col2"><em>array/object</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">The data used to create the record</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful creation query, this should be <dfn>1</dfn>.</p>

<h1>Delete Data</h1>

<h2>delete_spec_field()</h2>
	
<p>Delete a specifications field from the database.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>ID</strong></td>
			<td class="td col2"><em>integer</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">A numeric ID of the field to be removed</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>

<h2>delete_spec_field_data()</h2>
			
<p>Remove data associated with a specifications field from the database.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>field</strong></td>
			<td class="td col2"><em>integer</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">A numeric ID of the field whose data should be removed</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>

<h2>delete_spec_field_value()</h2>
			
<p>Delete a field value associated with a specifications field from the database.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>ID</strong></td>
			<td class="td col2"><em>integer</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">A numeric ID of the value to be removed</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>

<h2>delete_spec_section()</h2>

<p>Delete a specification section from the database.</p>

<h3>Parameters</h3>
	
<table cellpadding="0" cellspacing="1" border="0" class="table table-bordered">
	<thead>
		<tr>
			<th class="blue">Parameter</th>
			<th class="blue">Data Type</th>
			<th class="blue">Default Value</th>
			<th class="blue">Options</th>
			<th class="blue">Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="td col1"><strong>ID</strong></td>
			<td class="td col2"><em>integer</em></td>
			<td class="td col2"><em>None</em></td>
			<td class="td col3"><em>None</em></td>
			<td class="td col4">A numeric ID of the section to be removed</td>
		</tr>
	</tbody>
</table>
			
<h3>Return</h3>

<p>The method returns the number of affected rows returned by the query. In a successful deletion query, this should be <dfn>1</dfn>.</p>

<h1>Count Posts</h1>

<h2><span class="label label-success">NEW</span> count_spec_items()</h2>

<p>Counts the number of specification items.</p>

<h3>Return</h3>

<p>The method returns the number of rows (number of items) returned by the query.</p>