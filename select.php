<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Titúlo da página -->
    <title>Document</title>
</head>

<!-- Edição do corpo do código HTML, Coloração do Fundo da página e edição da posição do texto  -->
<body style="background-color:rgb(0, 71, 171)">
    <div class="container text-center">
        <!-- Linha e Coluna criada para página responsiva -->
        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>
            <!-- Barra de Navegação: -->
            <div class="col" style="background-color:rgba(48, 48, 48, 0.5)" >
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <!-- Barra de Navegação com o nome SISTEMA WEB -->
                        <!-- OBS: navbar-brand para o nome de seu projeto, produto ou companhia -->
                        <a class="navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- OBS: navbar-nav para obter uma leve navegação com suporte a dropdowns -->
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <!-- Link da barra de Navegação-->
                                <li class="nav-item">
                                <a class="nav-link" href="formulario.php">Gravar dados</a>
                                </li>
                                 <!-- Link da barra de Navegação-->
                                 <li class="nav-item">
                                <a class="nav-link" href="#">Select</a>
                                </li>
                                 <!-- Link da barra de Navegação-->
                                <li class="nav-item">
                                <a class="nav-link" href="update.php">Update</a>
                                </li>
                                <!-- Link da barra de Navegação-->
                                <li class="nav-item">
                                <a class="nav-link" href="delete.php">Delete</a>
                                </li> 
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Coluna criada para página responsiva -->
            <div class="col-1">
                &nbsp;
            </div>
        </div>
        <!-- Linha e coluna criada para página responsiva -->
        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>
            <!-- Cor do Fundo da página de Formulário e edição de texto-->
            <div class="col bg-white p-4">
                
                <!-- Titúlo e subtitúlo do formulário: -->
                <p class="text-start fs-5"><strong>Consulta</strong></p>
                <p class="text-start fs-6">(select)</p>
                <p>
               
                <?php

                    include("conexao.php");

                    $sql = "SELECT * FROM clientes;";


                    $stmt = $PDO->query('SELECT * FROM clientes');

                    $rows = $stmt->fetchAll();

                    foreach($rows as $row){
                        printf("$row[nome]\n");
                        printf("$row[endereco]\n");
                        printf("$row[bairro]\n");
                        printf("$row[cep]\n");
                        printf("$row[estado]\n");
                        printf("$row[cidade]\n");
                    }

                ?>
         

            </div>
            <!-- Coluna criada para página responsiva -->
            <div class="col-1">
                &nbsp;
            </div>
        </div>
    </div> 
</body>
