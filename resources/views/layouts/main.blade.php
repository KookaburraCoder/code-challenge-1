<!-- Stored in resources/views/layouts/master.blade.php -->
<html lang="en-AU" dir="ltr" class="uk-height-1-1 uk-notouch">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Norwex Code Challenge</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.5/css/uikit.gradient.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.27.5/js/uikit.min.js"></script>
</head>
<body class="uk-height-1-1">
    <div class="uk-vertical-align uk-text-center uk-height-1-1">
        <div class="uk-vertical-align-middle uk-width-1-2">
            <form class="uk-panel uk-panel-box uk-form">
                @yield('content')
            </form>
        </div>
    </div>
</body>
</html>