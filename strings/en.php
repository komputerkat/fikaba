<?php

const S_NOAPI = 'API is currently disabled';
const S_NOTCONFIGURED = 'Imageboard must be configured before usage';					//If config.php does not exist
const S_LOCKDOWN = 'Board is currently disabled. Please check back later';				//Lockdown
const S_HOME = 'Home';											//Forwards to home page
const S_ADMIN = 'Manage';										//Forwards to Management Panel
const S_RETURN = 'Return';										//Returns to image board
const S_POSTING = 'Posting mode: Reply';								//Prints message in red bar atop the reply screen
const S_NOTAGS = 'HTML tags are allowed.';								//Prints message on Management Board
const S_NEWTHREAD = 'New thread';									//Header for new thread form
const S_NAME = 'Name';											//Describes name field
const S_CAPCODE = 'Capcode';										//Describes capcode field (admin)
const S_REPLYTO = 'Reply to';										//Describes reply to field (admin)
const S_EMAIL = 'E-mail';										//Describes e-mail field
const S_SUBJECT = 'Subject';										//Describes subject field
const S_SUBMIT = 'Submit';										//Describes submit button
const S_COMMENT = 'Comment';										//Describes comment field
const S_OEKAKI = 'Oekaki';
const S_OEKAKILOAD = 'Click to load oekaki (don\'t forget to save!)';
const S_UPLOADFILE = 'File';										//Describes file field

const S_DELPASS = 'Password';										//Describes password field
const S_DELEXPL = '(Password used for file deletion)';							//Prints explanation for password box (to the right)
const S_RULES = '<ul><li>Supported file types are: GIF, JPG, PNG</li>
<li>Maximum file size allowed is '.MAX_KB.' KB.</li>
<li>Images greater than '.MAX_W.'x'.MAX_H.' pixels will be thumbnailed.</li></ul>';				//Prints rules under posting section
const S_RULES_SWF = '<ul><li>Supported file types are: GIF, JPG, PNG, SWF</li>
<li>Maximum file size allowed is '.MAX_KB.' KB.</li>
<li>Images greater than '.MAX_W.'x'.MAX_H.' pixels will be thumbnailed.</li></ul>';				//Prints rules under posting section
const S_RULES_WEBM = '<ul><li>Supported file types are: GIF, JPG, PNG, WEBM</li>
<li>Maximum file size allowed is '.MAX_KB.' KB.</li>
<li>Images greater than '.MAX_W.'x'.MAX_H.' pixels will be thumbnailed.</li></ul>';				//Prints rules under posting section
const S_RULES_BOTH = '<ul><li>Supported file types are: GIF, JPG, PNG, SWF, WEBM</li>
<li>Maximum file size allowed is '.MAX_KB.' KB.</li>
<li>Images greater than '.MAX_W.'x'.MAX_H.' pixels will be thumbnailed.</li></ul>';				//Prints rules under posting section
const S_SWF_DISABLED = "Error: The upload of SWF files is currently disabled.";
const S_WEBM_DISABLED = "Error: The upload of WebM files is currently disabled.";
const S_REPORTERR = 'Error: Cannot find reply.';							//Returns error when a reply (res) cannot be found
const S_THUMB = 'Thumbnail displayed, click image for full size.';					//Prints instructions for viewing real source
const S_PICNAME = 'File: ';										//Prints text before upload name/link
const S_REPLY = 'Reply';										//Prints text for reply link
const S_ABBR = ' posts omitted. Click Reply to view.';							//Prints text to be shown when replies are hidden
const S_REPDEL = 'Delete Post ';									//Prints text next to S_DELPICONLY (left)
const S_DELPICONLY = 'File Only';									//Prints text next to checkbox for file deletion (right)
const S_DELKEY = 'Password ';										//Prints text next to password field for deletion (left)
const S_DELETE = 'Delete';										//Defines deletion button's name
const S_PREV = 'Previous';										//Defines previous button
const S_NEXT = 'Next';											//Defines next button
const S_FOOT = '- GazouBBS + <a href="http://www.2chan.net/" target="_blank">futaba</a> + <a href="http://www.1chan.net/futallaby/" target="_blank">futallaby</a> + <a href="https://github.com/knarka/fikaba" target="_blank">fikaba</a> -'; //Prints footer (leave these credits)
const S_UPFAIL = 'Error: Upload failed.';								//Returns error for failed upload (reason: unknown?)
const S_NOREC = 'Error: Cannot find record.';								//Returns error when record cannot be found
const S_SAMEPIC = 'Error: Duplicate md5 checksum detected.';						//Returns error when a md5 checksum dupe is detected
const S_TOOBIG = 'This image is too large! Upload something smaller!';
const S_TOOBIGORNONE = 'Either this image is too big or there is no image at all.  Yeah.';
const S_NODETECT = 'Could not detect image type (most likely because its type is not supported)';
const S_UPGOOD = ' uploaded!<br /><br />';						//Defines message to be displayed when file is successfully uploaded
const S_STRREF = 'Error: String refused.';								//Returns error when a string is refused
const S_UNJUST = 'Error: Unjust POST.';								//Returns error on an unjust POST - prevents floodbots or ways not using POST method?
const S_NOPIC = 'Error: No file selected.';								//Returns error for no file selected and override unchecked
const S_NOTEXT = 'Error: No text entered.';								//Returns error for no text entered in to subject/comment
const S_MANAGEMENT = 'Manager: ';									//Defines prefix for Manager Post name
const S_DELETION = 'Deletion';										//Prints deletion message with quotes?
const S_TOOLONG = 'Error: Field too long.';								//Returns error for too many characters in a given field
const S_UNUSUAL = 'Error: Abnormal reply.';								//Returns error for too long $resto or $url (should never happen)
const S_BADHOST = 'Error: Host is banned.';								//Returns error for banned host ($badip string)
const S_PROXY80 = 'Error: Proxy detected on :80.';							//Returns error for proxy detection on port 80
const S_PROXY8080 = 'Error: Proxy detected on :8080.';							//Returns error for proxy detection on port 8080
const S_SUN = 'Sun';											//Defines abbreviation used for "Sunday"
const S_MON = 'Mon';											//Defines abbreviation used for "Monday"
const S_TUE = 'Tue';											//Defines abbreviation used for "Tuesday"
const S_WED = 'Wed';											//Defines abbreviation used for "Wednesday"
const S_THU = 'Thu';											//Defines abbreviation used for "Thursday"
const S_FRI = 'Fri';											//Defines abbreviation used for "Friday"
const S_SAT = 'Sat';											//Defines abbreviation used for "Saturday"
const S_ANONAME = 'Anonymous';										//Defines what to print if there is no text entered in the name field
const S_ANOTEXT = 'No text';										//Defines what to print if there is no text entered in the comment field
const S_ANOTITLE = 'No subject';									//Defines what to print if there is no text entered into subject field
const S_ANOFILE = 'unknown filename';
const S_RENZOKU = 'Error: Flood detected, post discarded.';						//Returns error for $sec/post spam filter
const S_RENZOKU2 = 'Error: Flood detected, file discarded.';						//Returns error for $sec/upload spam filter
const S_RENZOKU3 = 'Error: Flood detected.';								//Returns error for flood? (don't know the specifics)
const S_DUPE = 'Error: Duplicate file entry detected.';						//Returns error for a duped file (same upload name or same tim/time)
const S_NOTHREADERR = 'Error: Thread specified does not exist.';					//Returns error when a non-existent thread is accessed
const S_SCRCHANGE = 'Updating page.';									//Defines message to be displayed when post is successful									//
const S_BADDELPASS = 'Error: Password incorrect.';							//Returns error for wrong password (when user tries to delete file)
const S_WRONGPASS = 'Error: Management password incorrect.';						//Returns error for wrong password (when trying to access Manager modes)
const S_MANALOGGEDIN = 'You are now logged in.';
const S_RETURNS = 'Return';										//Returns to HTML file instead of PHP--thus no log/SQLDB update occurs
const S_LOGUPD = 'Rebuild';										//Updates the log/SQLDB by accessing the PHP file
const S_MANAMODE = 'Manager Mode';									//Prints heading on top of Manager page
const S_LOGOUT = 'Logout';										//Logout button in management panel
const S_MANAREPDEL = 'Deletion Panel';									//Defines Management Panel button--allows the user to view the management panel (overview of all posts)
const S_MANABAN = 'Ban Panel';										//Defines Manager Ban button
const S_MANAPOST = 'Manager Post';									//Defines Manager Post button--allows the user to post using HTML code in the comment box
const S_MANAACCS = 'Account Management';								//Defines button for adding/removing manager accoutns
const S_MANASUB = 'Submit';										//Defines name for submit button in Manager Mode
const S_ITDELETES = 'Delete';										//Defines for deletion button in Management Panel
const S_MDONLYPIC = 'File Only';									//Sets whether or not to delete only file, or entire post/thread
const S_MDTABLE1 = '<th>Delete?</th><th>Post No.</th><th>Time</th><th>Subject</th>';			//Explains field names for Management Panel (Delete?->Subject)
const S_MDTABLE2 = '<th>Name</th><th>IP</th><th>Comment</th><th>Host</th><th>Size<br />(Bytes)</th><th>md5</th><th>Reply #</th><th>Timestamp (s)</th><th>Timestamp (ms)</th>';	//Explains names for Management Panel (Name->md5)
const S_RESET = 'Reset';										//Sets name for field reset button (global)
const S_IMGSPACEUSAGE = 'Space used: ';								//Prints space used KB by the board under Management Panel
const S_SQLCONF = 'MySQL connection failure';								//MySQL connection failure
const S_SQLDBSF = 'Database error, check SQL settings<br />';						//Database select failure
const S_TCREATE = "Creating table!<br />\n";								//Creating table
const S_FCREATE = "Creating folder!<br />\n";								//Creating table
const S_TCREATEF = 'Unable to create table!<br />';							//Table creation failed
const S_SQLFAIL = 'Critical SQL problem!<br />';								//SQL Failure
const S_BANRENZOKU = 'Error: you are banned. Post discarded. Check on the status of your ban <a href="?mode=banned">here</a>.';	//Error shown to banned user when they try to post
const S_BANNEDMESSAGE = 'You are banned!';
const S_NOTBANNED = 'You are not banned. IP: ';
const S_BANTIME = 'You were banned on: ';
const S_BANEXPIRE = 'Your ban expires on: ';
const S_BANSUCCESS = 'User banned';
const S_UNBANSUCCESS = 'User unbanned';
const S_MANABANIP = 'IP or post no.: ';
const S_MANABANEXP = 'Expires in (days): ';
const S_MANABANPUBMSG = 'Public reason (only if no. ban): ';
const S_MANABANPRIVMSG = 'Private reason: ';
const S_MANARMP = 'Remove post? ';
const S_MANARMALLP = 'Remove all posts by this IP? ';
const S_MANAUNBAN = 'Unban instead of ban';
const S_BANEXPERROR = 'Please give a number of days to ban this user for.';
const S_NOSUCHPOST = 'The post you\'re trying to ban for does not exist.';
const S_BANEXPIRED = 'Your ban has expired, and has been removed from the database.';
const S_BANNEDMSG = 'user was banned for this post';							//Default public message for bans
const S_CATALOG = "View mode: Catalog";
const S_CATALOGBUTTON = "Catalog";
const S_NOPERMISSION = 'You do not have the necessary permissions to do that.';			// text showed when illegally trying to access some part of the management panel
const S_ACCCREATED = 'Account created successfully!';
const S_ACCDEL = 'Can delete posts? ';
const S_ACCBAN = 'Can ban users? ';
const S_ACCCAP = 'Can post with capcode? ';
const S_ACCACC = 'Can create new accounts? ';
const S_VERSION = ' version ';
