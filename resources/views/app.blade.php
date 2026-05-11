<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/js/app.js')
        @vite('resources/css/app.css')
        <x-inertia::head />
    </head>
    <body>
        <x-inertia::app />
    </body>
</html>

<style>
    input, textarea {
        border: 1px solid;
    }

    form {
        padding: 30px;
    }

    input {
         width: 300px;
    }

    textarea {
        width: 650px;
        height: 150px;
    }

    #frame {
        border-radius: 25px;
        border: 4px solid;
    }

    .inner {
        padding: 10px 20px 20px;
    }

    .showP{
        font-size: 25px;
    }
</style>