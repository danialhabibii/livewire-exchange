<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="../../../../node_modules/clipboard/dist/clipboard.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.11/dist/clipboard.min.js"></script>
    @livewireStyles
</head>
<body class="">
<x-widget.price/>
@if(session('success'))
    <span class="success">{{session('success')}}</span>
@endif
@if(session('warning'))
    <span class="warning">{{session('warning')}}</span>
@endif
{{$slot}}
@livewireScripts
</body>
</html>
