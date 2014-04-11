<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <header>
            <h1>
                {block name="header"}
                    DEFAULT HEADER
                {/block}
            </h1>
        </header>
    </div>
    <div class="row">
        {block name="content"}
            DEFAULT CONTENT
        {/block}

    </div>
</div>
</body>
</html>