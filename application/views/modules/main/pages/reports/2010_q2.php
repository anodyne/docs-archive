<h1>Anodyne Productions Quarterly Report &ndash; Q2 2010</h1>

<p>This document serves as an update to the work going on with Anodyne Productions over the second quarter of 2010 covering the period between <dfn>1 April</dfn> and <dfn>30 June</dfn>.</p>

<h2>Nova</h2>

<p>After a little bit of a rocky start, Nova 1 is on its way and picking up some serious steam. A few weeks ago we pushed out the fifth maintenance release and we're putting the finishing touches on Nova 1.0.6 even now and should have the release out soon. We want to thank everyone for their patience as we ironed out the bugs. Nova is truly 1.0 software and there were some issues we couldn't have anticipated with small-scale testing. Unfortunately, that means a few people had to go through the growing pains with us and we appreciate their patience. Nova has grown increasingly stable over the last 2 months and we're really very happy with where it's at, but there's always room for improvement, which leads me to my next point...</p>

<h3>Nova 1.1</h3>

<p>Originally, the plans for incremental Nova updates was scrapped because Nova 2 work had started. The original estimates for refactoring to the new framework was 6 to 9 months. Unfortunately, the entire process is far more involved and we've decided to slow down and do things right. Because of that, some of original Nova 1 roadmap is coming back in to play, the first of which is a minor release later this summer that will add new functionality to Nova in the way of multiple specification items and tying tour items to those specification items. We're only a couple weeks away from making a beta of Nova 1.1 available for people, but if you're dying to try it now, you can clone the repository from Github (there's a new 1.1 branch where all the work is happening).</p>

<h3>Nova 1.2</h3>

<p>Nova 1.1 isn't it though. There are currently plans for Nova 1.2, though the exact features being put in to that release are still being finalized. We're committed to providing a way to manage multiple manifests in Nova 1.2 for those sims that need more flexibility in how they manage their characters. It isn't an easy feature and requires several new database tables as well as figuring out the best way to manage departments and positions for multiple manifests when you don't want the same characters appearing on multiple manifests. Once we have a solution in place, we'll post about it on the forums. It'll likely be Q4 before we ship Nova 1.2, but it's definitely on the radar and like I mentioned earlier, we're committed to continuing Nova's evolution even while we work on Nova 2. Speak of the devil...</p>

<h2>Nova 2</h2>

<p>As has been mentioned several times, work on Nova 2 has started. I won't get in to details here, but things are going pretty well. The master branch in the Nova repository on Github contains all of the Nova 2 code, so feel free to check it out if you're curious. Also, a few weeks ago, we released Nova 2-M1.1, the first public build of Nova 2. The only thing you can do with M1.1 is install it, but M1.2 is coming during Q3 and will provide the added ability to test upgrading from SMS 2 to Nova 2 (and trust me, you're gonna want to check that out because it's better than Nova 1's upgrade by leaps and bounds). More information about Nova 2 can be found on the forums and our blog.</p>

<h2>SIMM Management System</h2>

<p>There have been a lot of rumors circulating about Nova and SMS since Nova's release and we want to take a few moments to clarify the reality.</p>

<p>For starters, no, there is no built-in "time bomb" in SMS that'll disable it at a certain point and force you to upgrade. Similarly, there is no "back door" into SMS for Anodyne to go in and mess around with your SMS site. Doing so would be a violation of your privacy and your trust in us. We value that way too much. If you choose to stick with SMS as your RPG management tool, we're not going to stop you. It's all about a solution that works best for you and your game, whether that's SMS, Nova or even a straight HTML site.</p>

<p>People have also been misinterpreting something about SMS upgrade support and Nova 2. Some people are propagating the rumor that Anodyne is going to cut off your ability to upgrade from SMS 2 to Nova 2. That's not true. What's likely to happen is that either A) the upgrade module won't ship with Nova 2 by default so you'll have to go out and download it, or B) the module will ship with Nova 2 but will be disabled by default. Trust me, we're dedicated to providing an easy-to-use upgrade path from SMS 2 to Nova 2 for those that choose to wait for Nova 2 to do their upgrades.</p>

<h2>Stats</h2>

<p>Nova brought with it a whole new way for us to track stats, giving us much more accurate pictures of what's going on with our flagship product. How much more accurate?</p>

<p>In terms of downloads (not installations, just downloading), the most downloaded version of Nova is 1.0.1 which has been downloaded 368 times (or just over 25% of all our downloads). Compare that to Nova 1.0 which was only downloaded 96 times (or just over 6.5% of all our downloads). The current version has been downloaded 293 times, 20% of all our tracked downloads. That's all well and good, but it's not really anything that we couldn't tell from reading server logs. Where it gets awesome is that we can now track installations as well. As of today (2 July 2010), 33% of all Nova installations are running version 1.0.5 as compared to a mere 1% (5 sims ... we're going to track you down and find you) still running 1.0.0.</p>

<p>We've been able to use this information to start estimating what kind of compatibility rate we've got right now with the Nova 2 PHP requirement and so far, based on the numbers we have, 91% of the installed user base will be able to run Nova 2 based solely on their version of PHP. We've been collecting additional information lately to get a more detailed look, but right now, things look really good!</p>

<h2>Q3 2010</h2>

<p>Historically, Q3 is always a big time of year for Anodyne. In 2006, we launched SMS 2 in Q3. In 2007, we launched SMS 2.5 in Q3. In 2008, we launched SMS 2.6 in Q3. Well, we're not going to be doing anything so big this quarter, but we will be shipping Nova 1.1 during Q3 and starting work on Nova 1.2. The focus now is on incremental updates to Nova 1 and continued development of Nova 2. As always, the most up-to-date information can be found on the forums, our blog and our Twitter feed.</p>

<h4 class="fontMedium bold"><?php echo anchor('main/reports/index', '&laquo; Back to Report Index');?></h4>