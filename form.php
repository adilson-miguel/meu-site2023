<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="shortcut icon" href="img/logotipo marte.png" type="image/x-icon">
    <title>Cadastro</title>
</head>

<style>
    main{
        background-color:orange;
    }
</style>
<body>

        <header>
            <a href=""><img src="img/logotipo marte 2.png" alt="" id="logo"></a>

            <section id="pesquisar-2">
                <input type="search" id="pesquisar" placeholder="O que deseja procurar?"><a id="pesquisar-1" href="">Procurar</a>
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

            

            <section id="cadastro">
                <article>

                    
                    <h3>Cadastrar-se ou <a href="tela-login.php">Entrar</a></h3>
            
                </article>

        <?php
        if(isset($_POST['submit'])){
            // print_r($_POST['nome']);
            // print_r($_POST['sobrenome']);
            // print_r($_POST['nascimento']);
            // print_r($_POST['email']);

            include_once("config.php");
            $nome=$_POST['nome'];
            $sobrenome= $_POST["sobrenome"];
            $nascimento= $_POST["nascimento"];
            $email= $_POST["email"];
            $password=$_POST["palavra-passe"];
            $result= mysqli_query($conexao, "INSERT INTO usuario(nome,sobrenome, nascimento, email, palavra-passe)VALUES('$nome','$sobrenome','$nascimento','$email', '$password')");

        }
        ?>

                <section id="cadastro-2">
                    <article id="dados-cadastro">
                        <form action="form.php" method="POST">
                            <p>
                                <label for="dados-pessoais">
            
                                    <strong id="dados-pessoais">Dados Pessoais</strong>

                                </label>
                                <hr>
                            </p>
                            <label for="first-name-01">Nome</label>
                            <input type="text" id="first-name-01" name="nome" required>
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" required id="sobrenome" name="sobrenome">
            
                            <br><br>
                                <label for="data-nascimento">Data de Nascimento</label>
                                <input type="date" id="data-nascimento" name="nascimento">
            
            
                                <label for="pais">Nacionalidade:</label>
                                <input type="nacionalidade" name="nacionalidade" id="pais" list="nacio-dade1">
                                <datalist id="nacio-dade1">
                                    <option>Angolana</option>
                                    <option>Portuguesa</option>
                                </datalist>
            
                                <br><br>
            
                                <label for="provincia">Província</label>
                                <input type="text" name="prov" id="provincia" list="prov-local">
                                <datalist id="prov-local">
                                    <option>Cuanza Norte</option>
                                    <option>Luanda</option>
                                    <option>Benguela</option>
                                </datalist>
                                <label for="municip">Municipio</label>
                                <select name="" id="municip">
                                    <option selected>--Escolher--</option>
                                    <optgroup label="Cuanza Norte" id="list-muni">
                                        <option value="">Ambaca</option>
                                        <option value="">Golungo Alto</option>
                                        <option value="">Samba Caju</option>
                                        <option value="">Banga</option>
                                        <option value="">Cambambe</option>
                                    </optgroup>
                                    <optgroup label="Luanda" id="list-muni">
                                        <option value="">Benfica</option>
                                        <option value="">Viana</option>
                                        <option value="">Sambizanga</option>
                                    </optgroup>
                                </select>
                                <br><br>
                            <label for="contacto">Contacto</label>
                            <input type="tel" name="tel" id="contacto" required autocomplete="tel" placeholder="digite seu contacto">
                            
                            <label for="email">E-mail</label>
                            <input type="email" name="email" required autocomplete="email" placeholder="informe seu e-mail" id="email">
                                <br><br>

                                
                                    <article>
                                        <label for="genero-01">Informe seu Genero</label>
                                        <select name="genero" id="genero-01">
                                            <option value="Genero">--Escolher Genero--</option>
                                            <optgroup>
                                                <option value="">Masculino</option>
                                                <option value="">Feminino</option>
                                                <option value="">Bi-Sexual</option>
                                            </optgroup>
                                        </select>
                                    </article>


                                <br>
                            <label for="palavra-passe-01">Palavra Passe</label>
                            <input type="password" name="palavra-passe" id="palavra-passe-01" placeholder="inserir senha" required>
                            <p>

                                
            
                                <strong>
                                    <label for="formacao-1" id="formacao-1">Formação</label> <hr>
                                </strong>
                                <select name="curso" id="curso-1">
            
                                    <option value="curso" selected>--Escolha seu Curso--</option>
                                    <optgroup id="curso-1" label="Médio">
                                        <option value="IG">Ciencias Físicas E Biológicas</option>
                                        <option value="">Ciencias Humanas</option>
                                        <option value="">Ciencias Ec. Juridicas</option>
                                    </optgroup>
                                    <optgroup id="curso-1" label="Ensino Superior">
                                        <option value="IG">Informatica de Gestão</option>
                                        <option value="">Engenharia Informatica</option>
                                        <option value="">Contabilidade e Gestão</option>
                                    </optgroup>
                                </select>
                                <select name="curso" id="curso-1">
            
                                    <option value="curso" selected>--Local de Formação--</option>
                                    <optgroup id="localf-1" label="Instituto-Médio">
                            
                                        <option value="IG">ITS - Ndalatando</option>
                                        <option value="">EIFFEL - Ndalatando</option>
                                        <option value="IG">Liceu Nº 35 D.A.NETO - Ndalatando</option>
                                        <option value="">Complexo Escolar 333 Kipata - Ndalatando</option>
                                        
                                        
                                    </optgroup>

                                    <optgroup id="localf-1" label="Instituto-Superior">
                            
                                        <option value="IG">Instituto Superior Politecnico de Ndalatando - ISPNd</option>
                                        <option value="">Outro...</option>
                                        
                                        
                                    </optgroup>

                                    <!-- <optgroup id="comuna" label="COMUNAS">
                                            
                                            <optgroup id="com-cnorte" label="Cuanza Norte">
                                                <option value="MO">Massangano</option>
                                                <option value="MO">Ngolome</option>
                                                <option value="MO">Cariamba</option>
                                                <option value="MO">Tango</option>
                                            </optgroup>

                                            <optgroup id="com-cnorte" label="Luanda">
                                                <option value="MO">Massangano</option>
                                                <option value="MO">Ngolome</option>
                                                <option value="MO">Cariamba</option>
                                                <option value="MO">Tango</option>
                                            </optgroup>

                                    <optgroup> -->

                                    </optgroup>
                                    
                                </select>
                            </p>
                            <p>
                                <label for="arq-bi">Bilhete de Identidade</label>
                                <input type="file" name="file" id="arq-bi">
                            </p>
                            <label for="arq-cert">Certificado</label>
                            <input type="file" name="" id="arq-cert">
                            <p id="btn">
                                <input type="submit" name="submit" value="Cadastrar" id="criar">
                                <input type="reset" name="reset" value="Limpar" id="limpar">
                            </p>
            
            
                        </form>
            
                    </article>
                        
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