<html>
    <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

             <title>Sistemas de arquivo IBGE</title>
             <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

             <link rel="stylesheet" href="estilo.css" type="text/css">

             <link rel="icon" type="imagem/png" href="ms-icon-144x144.png" />


    </head>

<body>
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

                    

            <a class="navbar-brand" href="buscas.html" style="color: aliceblue;" >Sistema de Controle de Equipamento</a>

            <div class= "collapse navbar-collapse" id="navbarSite">
              <ul class="navbar-nav ml-auto">
      

                  
                   
                <li class="nav-item">
                  <a class="nav-link" href="buscas.html" style="color: aliceblue;">Busca</a>
              </li>
                  <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Contato
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button">(83)9 998341257</button>
                                <button class="dropdown-item" type="button">(83)9 996112880</button>
                                <button class="dropdown-item" type="button" href="#">Central de atendimento </button>
                              </div>
                              
                            </div>
                            <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Gerenciamento
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                <a href="#">    <button class="dropdown-item" type="button">Gerenciamento dos equipamentos</button></a>
                         
                              <a href="#">  <button class="dropdown-item" type="button">Gerenciamento Áreas/ Coordenadores</button></a>
                              <a href="#">    <button class="dropdown-item" type="button" >Gerenciamento Subareas/ Supervisores</button></a>
                              <a href="#">    <button class="dropdown-item" type="button">Gerenciamento Posto de Coleta/ ACM/ ACS</button></a>
                              
                              </div>
                              </div>
                            <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Cadastro
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                              <a href="cadastroEquipamentos.html">    <button class="dropdown-item" type="button">Cadastro dos equipamentos</button></a>
                              <a href="cadastroPorArea.html">    <button class="dropdown-item" type="button">Cadastro dos equipamentos por local</button></a>
                            <a href="cadastroareas.html">  <button class="dropdown-item" type="button">Cadastro Áreas/ Coordenadores</button></a>
                            <a href="cadastroSubarea.html">    <button class="dropdown-item" type="button" >Cadastro Subareas/ Supervisores</button></a>
                            <a href="cadastroPostodeColeta.html">    <button class="dropdown-item" type="button">Cadastro Posto de Coleta/ ACM/ ACS</button></a>
                            
                            </div>
                            </div>
                          <li class="nav-item">
                            <a class="nav-link" href="index.html" style="color: aliceblue;">Sair</a>
                        </li>
              </ul>

          </div>

         

       
       

      </nav>
              <br>
                <div id="cadastro">
                        Buscas Áreas

                </div>
       <br>
       <br>
        <div>
                  
          <?php
          $conexao = mysqli_connect("localhost", "root", "", "projeto_ibge");
          $sql = $conexao -> query("SELECT area.nome_area, area.endereco_area, area.telefone_area, coord_area.nome_CoorArea, coord_area.telefone_Coord_area FROM area INNER JOIN coord_area ON area.nome_area = coord_area.area_Coord");

          echo(' <table class="table table-hover" id="formCad">
            
            <thead>
              <tr>
                  <th scope="col">Nome da Área</th>
                  <th scope="col">Endereço</th>
                  <th scope="col">Telefone da área</th>
                  <th scope="col">Coordenador da área</th>
                  <th scope="col">Telefone do coordenador</th>
              </tr>
          </thead>');
          
          while($tabela = mysqli_fetch_array($sql)){
            echo('
            <tr>
              <td>'.$tabela['nome_area'].'</td>
              <td>'.$tabela['endereco_area'].'</td>
              <td>'.$tabela['telefone_area'].'</td>
              <td>'.$tabela['nome_CoordArea'].'</td>
              <td>'.$tabela['telefone_Coord_area'].'</td>
              </tr>
            
            ');

          }

        
          ?>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            </body>
</html>