<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="img/logotipo marte.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>

        <header>
            
            <a href="">
            <img src="img/logotipo marte 2.png" alt="" id="logo">
            </a>

            <section id="pesquisar-2">
                <input type="search" id="pesquisar" placeholder=""><a id="pesquisar-1" href="">Procurar</a>
            </section>
           
            <nav>
                   <ul id="menu">
                       <li><a href="">Menu</a></li>
                       <li><a href="">Equipa</a></li>
                       <li><a href="">Contacto</a></li>
                       <li><a id="home" href="oficial-site.php">Home</a></li>
                       
                   </ul>
               
            </nav>
            
        </header>
        
    
        <main>

        <?php
            if(isset($_POST['submit'])){
                
                print_r("Nome: " . $_POST['nome']);
                
                print_r('<br>');
                
                print_r("E-mail: " . $_POST['email']);
                
                print_r('<br>');
                
                print_r("Passe: " . $_POST['password']);
            }
        ?>

            <section id="login">
                <article>

                    
                    <h3>Faça login ou <a href="form.php">Cadastra-se</a></h3>
            
                </article>
                <section id="cadastro-2">
                    <article id="dados-cadastro">

                        <form action="tela-login.php" method="POST">
                            
                                <label for="first-name">Nome</label>
                                <input type="text" name="nome" id="first-name" autocomplete="text"required autofocus placeholder="informe seu nome">

                                <!-- <p>
                                    <label for="last-name">Sobrenome</label>
                                    <input type="text" name="sobrenome" id="last-name" autocomplete="text" required placeholder="informe seu sobrenome">
                                </p> -->

                                <p>
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" autocomplete="email" required  placeholder="Informe seu e-mail">
                                </p>

                                <p>
                                <label for="passe">Palavra-Passe</label>
                                <input type="password" name="password" id="passe" required placeholder="Escolha uma palavra passe forte">
                                </p>

                                <article id="btn">
                                    <input type="submit" name="submit" id="criar">
                                    <input type="reset" name="reset" id="limpar">
                                </article>

            
                        </form>
            
                </section>
            
            </section>
        </main>
        
        <!-- <section class="flex">
            <div><img id="image-1" src="img/itacare-01.jpg" alt=""></div>
            <div><img id="image-1" src="img/itacare-02.jpg" alt=""></div>
            <div><img id="image-1" src="img/itacare-03.jpg" alt=""></div>
            <div><img id="image-1" src="img/itacare-04.jpg" alt=""></div>
        </section> -->
    
    <footer id="rodape">
        <article id="info-1">
        
        <li><a href=""><img id="icon" src="img/call-o.png" alt=""></a></li>
        <li><a href=""><img id="icon" src="img/localizacao.png" alt=""></a></li>
        <li><a href=""><img id="icon" src="img/mensagem.png" alt=""></a></li>
               
        </article>

        <hr>
        <article id="rodape-01">
            Todos os Direitos Reservados ao Desenvolvedor deste Site - marte innovation "Pensar e Criar"
        </article>
    </footer>

    
</body>
</html>