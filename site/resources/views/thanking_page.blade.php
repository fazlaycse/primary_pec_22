@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<html lang="en">
<head>
    <title>Thanking Page</title>
    <link href="css/app.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body class="" style="text-align: center;">
<div class="jumbotron text-center">
    <h1 class="display-3">Thank You!</h1>
    <p class="lead"><strong>Thank you very much for your Data. Your data were saved successfully!</p>
    <hr>

    <p class="lead">
        <a class="btn btn-primary btn-sm" href="<?=base_path();?>" role="button">Continue to homepage</a>
    </p>
</div>
<script src="js/app.js" defer></script>

</body>
</html>
