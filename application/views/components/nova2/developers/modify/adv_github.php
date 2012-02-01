<h1>Nova and Github</h1>

<p>Hands down, this is probably one of the coolest things you can do with Nova. Be warned though, it's an incredibly advanced feature that requires a good grasp of the command line, Github and your server setup.</p>

<p>For those who aren't familiar with Git, it's a distributed source control management system. Git allows us to store Nova's source code and continually commit to the repository. If something goes wrong, we can roll back to a previous version of a file. We can use Git to branch the source code (one of Git's major strengths) to work on bugs or new features without affecting the stable code. Then, when we're done working, merge the new code in to the stable codebase. It's an incredibly powerful SCM. Github is a site that hosts Git repositories and makes the process of collaborative coding incredibly easy. Nova's source code is hosted on Github.</p>

<p>So what's this super cool thing we're gonna do anyway? We're going to set up Nova on our server so that the code is a direct clone of the repository on Github. Why would we want to do that? Because it means with a simple command line command, we can update all the files without having to worry about deleting files, uploading new ones, and keeping tracking of the different files that need to be updated.</p>

<h2>What You'll Need</h2>

<p>Before you can even consider moving forward with this, you'll need to make sure of a couple things on your server, otherwise there's no point in trying this. First, you'll need to check with your host to make sure Git is installed on the server. In most cases, your host won't allow you to do this, they'll have to do it for you. You'll also need to make sure that <dfn>port 9418</dfn> is opened as the Git protocol uses that port.</p>

<p>If your host asks why you want Git installed on the server, you can just explain to them that you want to pull a repository from Github and keep it up-to-date using Git commands. If your host asks why you need <dfn>port 9418</dfn> opened, you can just explain to them that Git uses that port to clone the repository from Github to the server.</p>

<p>Assuming you have everything you need, keep on going for the low-down on cloning Nova from Github straight to your server.</p>

<h2>From the Command Line</h2>

<h2>From a File</h2>