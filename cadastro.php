<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
</head>
<body>
    <header id="header">
        <a href="/" id="logo">click!</a>
        <div>
            <input type="text" name="pesquisa" id="pesquisa">
            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png">
        </div>
    </header>
    <main id="formMain">
        <div id="formContainer">
            <h3>cadastre-se</h3>
            <form method="post">
                <div class="inputContainer">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome">
                </div>
                <div class="inputContainer">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="inputContainer">
                    <label for="email">Senha:</label>
                    <input type="password" name="Senha" id="Senha">
                </div>
                <div class="inputContainer">
                    <label for="repeatPassword">Repita a senha:</label>
                    <input type="password" name="repeatPassword" id="repeatPassword">
                </div>
            </form>
        </div>
    </main>
    <footer></footer>
</body>
</html>