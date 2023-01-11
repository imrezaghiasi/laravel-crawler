<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Scraper</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body{
            background: linear-gradient(to right, #141e30, #243b55); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        .card{
            background: linear-gradient(to right, #141e30, #243b55); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: antiquewhite;
        }
        .wrapper > .card:first-child .card-header{
            background: linear-gradient(to right, #000428, #004e92); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: white;
        }

        .wrapper > .card:nth-child(2) .card-header {
            background: linear-gradient(to right, #8e0e00, #1f1c18); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: white;
        }

        .wrapper > .card:nth-child(3) .card-header{
            background: linear-gradient(to right, #000000, #0f9b0f); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: white;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5 wrapper">
            @foreach($data as $key => $value)
                <div class="card shadow-lg text-center">
                    <h1 class="card-header">
                        {{ $key }}
                    </h1>
                    <div class="card-body">
                        <p class="card-text">
                            {{ $value }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

</body>
</html>
