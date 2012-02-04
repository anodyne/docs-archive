<h1>Seamless Substitution: Changing Icons</h1>

<p>The concept behind seamless substitution is pretty simple: Nova will use its system default for icons, pages and Javascript files unless the same file exists in either the current skin or the base override, in which case, Nova will use that instead.</p>

<h2>The Problem</h2>

<p>You've gotten tired of the orange RSS feed icon on the news, personal log and post pages and want to go with something else.</p>

<h2>The Solution</h2>

<p>Once you've found the icon you want to use instead, simply make sure it's named the exact same as the RSS feed icon located in <samp><nobr>nova/modules/core/views/_base/main/images</nobr></samp>. (For those too lazy to go look, it's <dfn>feed.png</dfn>.) Now that your new icon is named the same as the system default, all you need to do is put your new image in the right place and Nova will start using your icon instead!</p>

<p>So where the hell is the right place?</p>

<p>In order to get this working, simply upload your new image to <samp><nobr>application/views/_base_override/main/images</nobr></samp>. Done! Head over to Nova and see for yourself.</p>

<h2>A Final Word</h2>

<p>This relates to using the base override only. You can also substitute on a per-skin level which is described in more detail in the skin development section.</p>