<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compiled Example</title>

    @vite(['resources/css/myStyles.css'])
    {{-- @vite(['resources/js/app.js']) --}}
    
</head>
<body>
    
    <h3>Copiled Example</h3>
    
    <button id="action-btn" class="button button-primary">
        Click Me
    </button>
    
    @vite(['resources/js/myScript.js'])
</body>
</html>