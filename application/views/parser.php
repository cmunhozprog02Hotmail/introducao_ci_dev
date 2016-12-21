<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Parser</title>
    </head>
    <body>
        <h1>{VARIAVEL}</h1>
        
        {BLC_MENSAGEM}
            {MENSAGEM}
        {/BLC_MENSAGEM}
        <ul>
            {BLC_TECNOLOGIAS}
            <li>{ITEM}</li>
            {/BLC_TECNOLOGIAS}
        </ul>
        <br>
        <form action="">
            Nome:<input type="text" placeholder="Insira seu nome" value="{NOME}">
        </form>
    </body>
</html>

