<h1><?php echo $header;?></h1>

<p>One of the biggest changes to authentication in Nova is that we've gotten rid of usernames. Now, users will login to the system using their email address and a password of their choosing. Nova will first check your email address to see if it exists. If it does, it will check the password you provided. If the password doesn't match, you'll be notified of that through an error message. If your email address and password as correct, you'll be logged in to the system and redirected to the Admin Control Panel.</p>

<p>Passwords are stored in the database as a hashed SHA1 string. Because passwords are hashed, they cannot be restored, only reset. Please see the reset password section for more information about resetting passwords.</p>

<h2>Remember Me</h2>

<p>Another major feature added to Nova is a remember me feature. Checking the remember me box on the login page will keep a user logged in to the system for 14 days (when the cookie expires) or until they log out. The autologin feature requires that cookies be enabled in your browser. The autologin works by storing your email address and hashed password in a unique cookie on your computer. If Nova sees the cookie, it will use it to attempt to log you in. If it's successful, you won't even know it's done the autologin. If it's false and you're not in the control panel, it won't do anything. If you are on the control panel, it'll redirect you to the login page.</p>

<h2>Login Security</h2>

<p>Nova adds to its login security with a login attempts safety net. After three failed login attempts, Nova will lock the particular user out of the system for 30 minutes. While there are workarounds to address this in the event someone needs to login right away (we don't recommend doing it though), the feature cannot be disabled. The login attempts lockout is a means of protecting Nova installations from brute force password hacking attempts.</p>