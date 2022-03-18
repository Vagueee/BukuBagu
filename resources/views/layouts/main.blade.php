<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">

        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel = "stylesheet">

        <title>BukuBagu Web</title>
</head>

    <body>
        <div class = "container mt-4" style = "display : flex; justify-content : center;align-item : center;">
            @yield('container')
        </div>
        
        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous">
        </script>
    </body>

</html>