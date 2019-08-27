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
      <br>
      <br>
      <br>

      

      <main class="container">           
      
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
                        <input type="email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Seu email">
                        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="Senha">
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
        <h1><center>Cadastre-se abaixo preenchendo todas as colunas</center></h1>
        
        <form action="registrar.php" method="post">
          <div class="form-row">
            
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nome</label>
              <input type="name" class="form-control" id="nome" name="nome" placeholder="Nome">
            </div>  
              
            <div class="form-group col-md-6">
              <label for="inputEmail4">Sobrenome</label>
              <input  class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
            </div>
              
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Senha</label>
              <input type="password" class="form-control" id="inputPassword4" name="senha" placeholder="Digite uma senha">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Endereço</label>
            <input type="text" class="form-control" id="inputAddress" name="endereco" placeholder="Rua ABC">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Cidade</label>
              <input type="text" class="form-control" id="inputCity" name="cidade">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">Estado</label>
              <select id="inputState" class="form-control">
                <option selected>AC</option>
                <option>AL</option>
                <option>AP</option>
                <option>AM</option>
                <option>BA</option>
                <option>CE</option>
                <option>DF</option>
                <option>ES</option>
                <option>GO</option>
                <option>MA</option>
                <option>MT</option>
                <option>MS</option>
                <option>MG</option>
                <option>PA</option>
                <option>PB</option>
                <option>PR</option>
                <option>PE</option>
                <option>PI</option>
                <option>RJ</option>
                <option>RN</option> 
                <option>RS</option>
                <option>RO</option>
                <option>RR</option>
                <option>SC</option>
                <option>SP</option>
                <option>SE</option>
                <option>TO</option>
              </select>
            </div>
        
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck" style="color: black">
                Clique em mim
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Cadastre-se</button>
        </form>
>
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