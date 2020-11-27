<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Online News Portal</title>
</head>
<body>
   @section('sidebar')
   <p>This PARENT / MASTER PAGE</p>
   @show 
   <div>
      @yield('component')
   </div>
</body>
</html>