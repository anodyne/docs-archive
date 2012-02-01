<h1><?php echo $header;?></h1>

<p>Not all RPGs are alike, so the use of generic terms like department, position and rank may not fit for everyone. Instead of digging in to the core, we've provided an easy way to go in and override the individual language items so you can customize your copy of Nova to exactly how you play your game.</p>

<p>For situations just like this, we've built an <dfn>app_lang</dfn> file in <samp>application/language/{language}</samp>. From this file, you can override any of the language keys in any of the files in the system. If you want to replace the term <strong>position</strong> with the term <strong>job</strong>, you can do so by adding a language key to the <dfn>app_lang</dfn> file in the following format:</p>

<pre>$lang['global_position'] = 'job';</pre>

<p>If you have questions about what the language keys are, you can open the language files and find the one you want to replace. This replacement can be done for any item in the language files. Plus, Anodyne will never update the <dfn>app_lang</dfn> file, so any changes you make will remain intact through Nova updates.</p>