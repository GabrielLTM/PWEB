<?php require_once "functions.php"?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Agência</title>
    <style>
        body{
            margin: 0;
            font-family: sans-serif
        }
        form{
            margin: 15% auto;
            width: 300px;
            height: 200px;
            
        }
        fieldset{
           display: flex;
           justify-content: center;
           align-items: center;
           flex-direction: column;
           width: 300px;
           height: 250px;
           background-color: #5d15d1;
           border-radius: 10px
        }
        input{
            margin: 8px
        }
        p{
            font-size: 24px;
            margin-bottom: 8px;
            color: #fff;
            font-weight: bold
        }
        .acesso{
            padding: 8px
        }

    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <p>Faça seu login</p>
            <input class="acesso" type="email" name="email" placeholder = "Username" required>

            <input class="acesso" type="password" name="senha" placeholder = "Password" required>

            <input type="submit" name = "acessar" value="Acessar">
        </fieldset>
    </form>
    <?php 
        if (isset($_POST['acessar'])) {
            login($connect);
        }
    ?>
</body>
</html>