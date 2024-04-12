<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: #1da0d4;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: lighter;
            color: snow;
        }
    </style>
    <title>Loja de sapatos</title>
</head>
<body>
    <h1>Ola! Bem-vindo a nossa loja de sapatos</h1>
    <h3>Para verificar o estoque digite na url: /estoque</h3>
    <h3>para verificar um sapato de uma cor específica digite na url: '/estoque/nome-cor' exemplo: /estoque/amarelo</h3>
    <p>OBS: caso a cor digitada não tenha um retorno, significa que não temos essa cor desponível!</p>
    <h2>OBS2: os insert's do BD para o funcionamento do sistema estão comentados nessa view kkkkk</h2>

<!-- 
INSERT INTO colors(`name`) VALUES
('preto'),
('azul'),
('verde'),
('vermelho'),
('branco'),
('amarelo');

INSERT INTO shoes(url, color_id) VALUES
('black1', 1),
('black2', 1),
('black3', 1),
('blue1', 2),
('blue2', 2),
('blue3', 2),
('green1', 3),
('green2', 3),
('green3', 3),
('red1', 4),
('red2', 4),
('red3', 4),
('white1', 5),
('white2', 5),
('white3', 5),
('yellow1', 6),
('yellow2', 6),
('yellow3', 6);

SELECT shoes.url, colors.`name` FROM shoes 
INNER JOIN colors ON colors.id = shoes.color_id 
WHERE colors.id = 5;
 -->
</body>
</html>