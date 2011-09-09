<h1><?php echo $header;?></h1>

<p>One of Nova's defining features is the ability to use genres outside of Star Trek, a genre which has been at the heart of SMS since its initial release in 2005. While Star Trek genres still play a large role in Nova, it's no longer the only genre you can use. So what goes in to a genre? There are a lot of pieces, but once you understand those pieces, you'll be well on your way to using genres to their full potential and maybe even creating your own genre installations!</p>

<h2>Files</h2>

<h3>Asset Files</h3>

<p>Asset files are the integral components of a genre and include images and ranks. Nova stores all genre assets in <samp>./application/assets/common</samp>. Each genre is assigned its own directory that lines up with its genre code. For instance, the Deep Space Nine genre code is <dfn>DS9</dfn> and its genre asset folder is <var>ds9</var>.</p>

<h4>Images</h4>

<p>If you have genre specific images, such as emblems for the manifest, those can be stored in the genre's images folder and used by Nova in various places throughout the system. Manifest emblem locations can be found by using the cb_location helper.</p> 

<h4>Ranks</h4>

<p>Ranks are arguably one of the biggest asset pieces that change from genre to genre. Yes, the database changes, but the most noticable area are rank images. The ranks folder in the genre directory is where all the different rank sets are stored and accessed from. Like SMS, different rank sets are stored in different folders, but unlike SMS, you can name the rank sets independently from the folder name. If you want to add a rank set, you will upload it to <samp>./application/assets/common/{genre}/ranks</samp>.</p>

<h3>The Database</h3>

<p>We've managed to narrow all the genre-specific elements to three tables: departments, positions and ranks. Any genre you install into the database will have suffixed tables with the genre code. For the DS9 genre, the three tables are named <dfn>nova_departments_ds9</dfn>, <dfn>nova_positions_ds9</dfn> and <dfn>nova_ranks_ds9</dfn>. This allows multiple genres to be installed side-by-side in the database.</p>

<h3>The Install File</h3>

<p>Nova stores the genre install files in <samp>./application/assets/install/genres</samp>. There is one file for each genre that's stored in the format <dfn>{genre}_data.php</dfn>. Essentially, genre files are nothing more than several large PHP arrays with all the information about departments, positions and ranks. That data is fed into the install script and uses the arrays along with CodeIgniter's Database Forge feature to create tables and insert data into them.</p>

<h2>Creating a Genre Install</h2>

<p>If you're interested in creating a genre file, we recommend that you duplicate one of the existing genre data files and start from there. In order to create a genre file, you have to have departments, positions and ranks. If one of those components is missing, parts of the system will break without major modifications.</p>

<p class="important"><strong>Note:</strong> It's important that you understand PHP handling of single and double quotes and escaping quotes as necessary, otherwise you'll run in to a long series of errors that will be maddening trying to fix. In a nutshell, if you have a string surrounded by single quotes, you can only use another single quote in that string after escaping with the backslash (\). Here's how you would handle a few different types of strings:</p>

<pre>'This is a string that does not need escaping.'

'This is a string that does need to be escaped by it\'s got an extra single quote in it.'

"Alternately, you could switch to use double quotes so you don't have to escape any single quotes."</pre>