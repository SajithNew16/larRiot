<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Laravel</title>
        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,600"
            rel="stylesheet"
            type="text/css"
        />
        <script
            type="text/javascript"
            src="{{ URL::asset('js/riotcompiler.js') }}"
        ></script>
    </head>
    <body>
        <hello></hello>
        <script
            src="{{ URL::asset('tags/hello.tag') }}"
            type="riot/tag"
        ></script>
        <script>
            riot.mount("hello");
        </script>
        njk
    </body>
</html>
