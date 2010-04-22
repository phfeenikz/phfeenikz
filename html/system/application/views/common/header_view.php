<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title><?php echo $title;?></title>
    <link href="/css/site.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="login">
    <form title="login" method="post" action="posts">
        <span id="input_right">
            <label for="username">Username:</label>
            <input id="username" type="text" name="username" value="<?php echo set_value('username'); ?>" />
        </span><br/>
        <span id="input_right">
            <label for="password">Password:</label>
            <input id="password" type="password" name="password" maxlength="16" />
        </span><br/>
        <span id="input_right">
            <input type="submit" value="Go!" />
        </span>
    </form>
</div>