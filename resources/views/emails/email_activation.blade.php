<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
{{ $mailData['title'] }}<br>
{{ $mailData['name'] }}
{{ $mailData['username'] }}
{{ $mailData['email'] }}
{{ $mailData['email_activation'] }}

    </body>
</html>
