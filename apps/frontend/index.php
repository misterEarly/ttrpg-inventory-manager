<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="nunjucks.js"></script>

</head>
<body>

    {% extends "web/templates/default" %}

    {% block content %}
        <div id="content" class="container internal">
            <h1>Home</h1>
        </div>
    {% endblock %}

</body>
</html>


