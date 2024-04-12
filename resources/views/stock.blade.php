<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Estoque de Sapatos</title>
</head>
<body>
    <h1>Sapatos em estoque</h1>
    <div class="stockContainer">
        <img src="/image/white1.jpg" alt="">
        <img src="/image/black3.jpg" alt="">
        <img src="/image/yellow2.jpg" alt="">
        <img src="/image/white2.jpg" alt="">
        <img src="/image/blue1.jpg" alt="">
        <img src="/image/white3.jpg" alt="">
        <img src="/image/green2.jpg" alt="">
        <img src="/image/red3.jpg" alt="">
        <img src="/image/red2.jpg" alt="">
        <img src="/image/green1.jpg" alt="">
        <img src="/image/blue3.jpg" alt="">
        <img src="/image/red1.jpg" alt="">
    </div>
    
    @foreach($shoes as $shoe)
    <p class="fromBd">{{$shoe->url}}</p>
    @endforeach

    <script src="/js/main.js"></script>
</body>
</html>