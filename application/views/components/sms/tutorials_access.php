<h1>Fixing Broken CO Access</h1>

<p>Sometimes, you make one or two clicks too many and all of sudden you don't have CO access any more. Fixing the access problem is relatively straightforward.</p>

<p>First, open phpMyAdmin from your cPanel or wherever your host has put it. Navigate to the <dfn>sms_crew</dfn> table and open your record. (If you don't know what your record ID number is, simply navigate to your character bio and you'll see the ID number in the URL.) With your record open, find the <var>accessOthers</var> field and add <strong>x_access</strong>. Save the record, log out of SMS and log back in. You should now see the menu item for setting access levels. From there, you can restore your access.</p>