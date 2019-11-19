<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuarios</title>


    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;

}

body{
    font-family: 'Open Sans', sans-serif;
    height: 100vh;
    background-color:  #e0e0e0;
}

section{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

h1{
    font-size: 32px;
    letter-spacing: 1px;
    margin: 20px 0;
    color: black;
}

form{
    margin: 20px 0;
    background-color: white;
    padding: 30px 25px;
    border-radius: 5px;
}

form .input-block{
    margin-bottom: 20px;
}

form .input-block label{
    font-size: 14px;
    color: darkslateblue;
}

form .input-block input{
    width: 100%;
    display: block;
    margin-top: 8px;
    padding: 7px;
    font-size: 16px;
    color: #7159c1;
    border-radius: 2px;
    border: 1px solid #ccddef;
    outline-color: #7159c1;
}

form .btn-login{
    display: block;
    min-width: 120px;
    border: none;
    background-color: #651fff;
    color: white;
    border-radius: 25px;
    margin: auto;
    padding: 7px;
}

form .btn-cancelar{
   
    display: block;
    min-width: 120px;
    border: none;
    background-color: #ff1744;
    color: white;
    border-radius: 25px;
    margin: auto;
    padding: 7px;
}

</style>


</head>
<body>

<section class="form-section">
        <h1>Cadastrar Usuarios</h1>

        <div class="form-wrapper">
            <form action="/user/register" method="POST">

            <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="input-block">
                    <label for="user-name">Nome Completo</label>
                    <input type="name" name="name">
                </div>
                <div class="input-block">
                    <label for="user-email">Email</label>
                    <input type="email" name="email">
                </div>
                <div class="input-block">
                    <label for="user-cpf">CPF</label>
                    <input type="text" name="cpf">
                </div>
                <div class="input-block">
                    <label for="user-file">Upload</label>
                    <input type="file" name="file">
                </div>
                
                <button type="submit" class="btn-login">Enviar</button>
                  
            </form>
        </div>
    </section>
</body>
</html>