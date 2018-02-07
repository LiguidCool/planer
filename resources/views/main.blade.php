<!DOCTYPE html>
<html lang={{ app()->getLocale() }}>
    <head>
        <meta charset="utf-8">
        <title>BTS Planer</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.12/semantic.min.css"></link>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id="app">
            <main-map />
        </div>
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
