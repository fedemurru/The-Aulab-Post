<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link href="{{ asset('/style.css') }}" rel="stylesheet">
<title>The Aulab Post</title>
@vite(["resources/css/app.css", "resources/js/app.js"])

</head>
<body class="bg-img">
<x-navbar>
</x-navbar>
  
  <div class="min-vh-100">
    {{$slot}}
  </div>
  
</body>
</html>