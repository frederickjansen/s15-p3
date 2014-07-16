<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>P3 - Developer's Best Friend</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Lorem Ipsum Generator</h1>
            <div id="lorem-ipsum-field">
                <div class="bs-callout bs-callout-info">
                </div>
            </div>
            <form action="lorem-ipsum" method="GET" class="form-horizontal" role="form" id="lorem-ipsum-form">
                <div class="form-group">
                    <label for="length" class="col-md-2 control-label">Paragraphs</label>
                    <div class="col-md-10">
                        <select id="length" class="form-control" name="length">
                            <option>1</option>
                            <option selected>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <button type="submit" class="btn btn-success">Generate Lorem Ipsum</button>
                    </div>
                </div>
            </form>
            <hr>
            <h3>What am I looking at?</h3>
            <p>Lorem Ipsum is a filler text used in designs, mockups, prototypes, ... to easily show how a page looks like with content, without having to think about what to write. Random keypresses would also distract the audience, whereas lorem ipsum feels more natural to look at.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>User Generator</h1>
            <div id="user-field">
                <div class="bs-callout bs-callout-info">
                </div>
            </div>
            <form action="user" method="GET" class="form-horizontal" role="form" id="user-form">
                <div class="form-group">
                    <label for="length" class="col-md-2 control-label">Users</label>
                    <div class="col-md-10">
                        <select id="ulength" class="form-control" name="ulength">
                            <option>1</option>
                            <option>2</option>
                            <option selected>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <button type="submit" class="btn btn-success">Generate Users</button>
                    </div>
                </div>
            </form>
            <hr>
            <h3>What am I looking at?</h3>
            <p>A random user generator, for those pesky websites that ask for personal details when all you wanted to do was watch a movie.</p>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>