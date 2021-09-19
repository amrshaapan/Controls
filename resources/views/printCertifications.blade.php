<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('front-end/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <title>Document</title>
    <style>
        @media print {
            @page {
                size: auto;
                margin: 0px;

            }
        }

    </style>
</head>

<body>
    <div id="app">

        <Certificatons></Certificatons>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
