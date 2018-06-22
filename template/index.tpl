<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>eindopdracht Smarty</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>


<div class="tweet-pos">
    <img height="250" width="250" src="foto/Twitter-Logo-PNG-1.png">
    {foreach $tweets as $tweet}
        <div class="tweets">
            <h1>{$tweet.title}</h1>
            <h4>{$tweet.name}</h4>
            <p>{$tweet.tweet}</p>
        </div>
    {/foreach}
</div>

</body>
</html>