<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <title>EMS</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    </head>
<body>
    @include('layouts.header')
    @include('layouts.contact') 
    <main>
    @include('layouts.form')  
    </main>
    @include('layouts.footer')  
</body>
</html>
