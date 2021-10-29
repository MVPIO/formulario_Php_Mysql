<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro Usuário</title>
        <link rel="stylesheet" type="text/css" href="estilo.css"/>
    </head>
    <body>
        <div id="caixa">
            <form action="processaDados.php" method="post">
            &nbsp;
            <div>
                <h2>Formulário de Cadastro V2</h2>
            </div>
            <div>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome_usuario" placeholder="Nome" required />
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email_usuario" placeholder="Email" required />
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha_usuario" placeholder="Senha" required />
            </div>
     
            <input class="button_submit" type="submit" value="Cadastrar"/>
      
            
            <input class="button_reset" type="reset" value="Limpar Campos"/>
            
        </form> 
        </div>
    </body>
   
</html>