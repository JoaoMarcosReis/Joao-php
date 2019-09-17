<?php include 'header.php' ?>
    
  <body>
    
        
        <nav class="navbar navbar-expand-md navbar-inverse navbar-dark bg-danger">
            <a href="pizza.php"> <img class="logo" src="logo-jo%C3%A3o.png"></a>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
          </button>
            
          <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="pizza.php"><span style="color: darkorange;"><i class="fas fa-home"></i></span> Home</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="cardapio.php"><span style="color: darkorange;"><i class="fas fa-newspaper"></i> </span>Cardápio </a>
              </li>
                              
                <li class="nav-item active">
                    <a class="nav-link" href="#login" data-toggle="modal"><span style="color: darkorange;"><i class="fas fa-sign-in-alt" ></i></span> Login</a>
                </li>
                
            </ul>
          </div>
        </nav>

        <?php 
                $Tradicionais = array(
                    array(
                        "id" => 1,
                        "nome" => "Alho e Óleo",
                        "texto" => "Molho, mussarela, alho e óleo, orégano."
                    ),
                    array(
                        "id" => 2,
                        "nome" => "Alho Poró",
                        "texto" => "Molho, mussarela, alho poró, bacon, provolone e orégano."
                    ),
                    array(
                        "id" => 3,
                        "nome" => "Americana",
                        "texto" => "Molho, mussarela, bacon, tomate, ovos e orégano."

                    ),
                    array(
                        "id" => 4,
                        "nome" => "Bacon",
                        "texto" => "Molho, mussarela, bacon e orégano."

                    ),
                    array(
                        "id" => 5,
                        "nome" => "Bolonhesa",
                        "texto" => "Molho, mussarela, carne moída e orégano."

                    ),
                    array(
                        "id" => 6,
                        "nome" => "Calabresa",
                        "texto" => "Molho, mussarela, calabresa e orégano."

                    ),
                    array(
                        "id" => 7,
                        "nome" => "Calabresa com Catupiry",
                        "texto" => "Molho, mussarela, calabresa, catupiry e orégano."

                    ),
                    array(
                        "id" => 1,
                        "nome" => "Calabresa Mineira",
                        "texto" => "Molho, mussarela, calabresa, milho, bacon e orégano."

                    ),
                    array(
                        "nome" => "Escarola",
                        "texto" => "Molho, mussarela, escarola, alho, bacon e orégano."

                    ),
                    array(
                        "nome" => "Frango",
                        "texto" => "Molho, mussarela, frango e orégano."

                    )
                    );

                    $Supremes = array(
                        array(
                            "nome" => "Barbecue",
                            "texto" => "Molho, mussarela, cubos de mignon, bacon, catupiry, barbecue e orégano."
                        ),

                        array(
                            "nome" => "Camarão",
                            "texto" => "Molho, mussarela, camarão e orégano."
                        ),

                        array(
                            "nome" => "Catumarão",
                            "texto" => "Molho, mussarela, camarão, catupiry e orégano."
                        ),

                        array(
                            "nome" => "Dom Angelino",
                            "texto" => "Molho, mussarela, cubos de mignon, palmito, gorgonzola e orégano."
                        )
                        );

                        $Doces= array(
                            array(
                                "nome" => "Banana",
                                "texto" => "Leite condensado, banana, açúcar e canela."
                            ),
    
                            array(
                                "nome" => "Banana Crocante",
                                "texto" => "Mussarela, leite condensado, banana e farofa doce."
                            ),
    
                            array(
                                "nome" => "Banoff",
                                "texto" => "Mussarela, banana, doce de leite, chocolate branco e canela."
                            ),
    
                            array(
                                "nome" => "Brigadeiro",
                                "texto" => "Leite condensado, mussarela, chocolate, chocolate granulado e cereja."
                            ),
                            array(
                                "nome" => "Califórnia",
                                "texto" => "Leite condensado, mussarela, figo, goiaba, abacaxi e pêssego."
                            ),
                            array(
                                "nome" => "Charge",
                                "texto" => "Leite condensado, mussarela, chocolate preto ou branco, amendoim e caramelo."
                            )
                            );


            ?>

<div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <h1 class="cardapio">Cardápio</h1>
    </div>    
</div>      
        
<div class="row"> 
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="cardapio">
            <h2><center>Pizzas Tradicionais</center></h2>
     <?php for($i = 0; $i < sizeof($Tradicionais); $i++) : ?>
        <p class="cardapio"><strong><?= $Tradicionais[$i]["nome"] ?></strong></p>
            <p class="cardapio2"><?= $Tradicionais[$i]["texto"] ?></p>

                    

<?php endfor?>
                    
                    <br>
                    
<h2><center>Pizzas Supremes</center></h2>

    <?php for($i = 0; $i < sizeof($Supremes); $i++) : ?>
        <p class="cardapio"><strong><?= $Supremes[$i]["nome"] ?></strong></p>
        <p class="cardapio2"><?= $Supremes[$i]["texto"] ?></p>

    <?php endfor?>
                    
                    <br>
                    
                    <br>
                    
<h2><center>Pizzas Doces</center></h2>
    <?php for($i = 0; $i < sizeof($Doces); $i++) : ?>
        <p class="cardapio"><strong><?= $Doces[$i]["nome"] ?></strong></p>
        <p class="cardapio2"><?= $Doces[$i]["texto"] ?></p>

<?php endfor?>
                    
                    <br>
            </div>
        </div>
    </div>
        
</div> 
    
    </main>
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: black" >Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Entrar</button><br><br>
                      <p><a class="btn btn-primary" href="cadastro.php">Cadastre-se</a></p>
                    </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                
              </div>
            </div>
          </div>
        </div>
         
   <?php include 'footer.php' ?>