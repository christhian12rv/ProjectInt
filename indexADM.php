<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/my.css">
  <meta charset="utf-8">
  <link rel=" icon" href="Img/logo.ico"/>
  <title>Modas Z</title>
</head>
<body>
  <script>
    function myFunction() {
  // Declare variables
  var input, filter, table, tr, h5, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    h5 = tr[i].getElementsByTagName("h5")[0];
    if (h5) {
      txtValue = h5.textContent || h5.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<nav class="navbar navbar-expand-lg navbar-dark navbar-sm fixed-top">
  <a class="navbar-brand" title="Menu"  href="index.php">
    <img src="Img/Logo.png" width="30" height="30" alt="">
  </a>
  <a class="navbar-brand" title="Menu" href="index.php">Modas Z</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " href="index.php">Menu<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contato.php" tabindex="-1">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="sobre.php" tabindex="-2">Sobre</a>
      </li>
    </ul>
    <a href="carrinho.php" class="mr-3"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
    </svg><span class="numItensCarrinho" name="numItensCarrinho">0</span><a>
      <form class="form-inline my-2 my-lg-0 mr-3">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pesquisa" title="Type in a name">
      </form>
      <button type="button" class="btn btn-dark"><a href="login.php">Login<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-square ml-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
      </svg></a></button>
    </div>
  </nav>

  <div class="row mb-3 w-50 mx-auto">
    <a href="addProduto.php" class="col text-light btn btn-sm btn-rounded font-weight-bold mr-3 btnADM" style="line-height: 30px;" type="button"> Adicionar Produto</a>
    <a href="indexAlterarProduto.php" class="col text-light btn btn-sm btn-rounded font-weight-bold btnADM" style="line-height: 30px;" type="button"> Alterar Produto</a>   
  </div>

  <table>
    <tbody id="myTable">
      <tr>
        <td>
          <div class="card" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" src="IMG/1.webp" alt="Card image cap">
            <div class="card-body">
            </div>
          </div>
        </td>
        <td>
          <h5 class="card-title text-primary text-justify">Tênis</h5>
          <p class="card-text text-danger text-justify">Perfeito para diversas ocasiões.</p>
          <button type="button" class="btn darkmode-ignore btnVerMais"><a href="id361614.php">Ver mais...</a></button>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" src="IMG/1.jpg" alt="Card image cap">
            <div class="card-body">
            </div>
          </div>
        </td>
        <td>
          <h5 class="card-title text-primary text-justify">Sapato</h5>
          <p class="card-text text-danger text-justify">Perfeito para diversas ocasiões.</p>
          <button type="button" class="btn darkmode-ignore btnVerMais"><a href="idxxxx.php">Ver mais...</a></button>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" src="IMG/2.jpg" alt="Card image cap">
            <div class="card-body">
            </div>
          </div>
        </td>
        <td>
          <h5 class="card-title text-primary text-justify">Sapato</h5>
          <p class="card-text text-danger text-justify">Perfeito para diversas ocasiões.</p>  
          <button type="button" class="btn darkmode-ignore btnVerMais"><a href="idxxxxx.php">Ver mais...</a></button>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" src="IMG/3.jpg" alt="Card image cap">
            <div class="card-body">
            </div>
          </div>
        </td>
        <td>
          <h5 class="card-title text-primary text-justify">Sapato</h5>
          <p class="card-text text-danger text-justify">Perfeito para diversas ocasiões.</p>
          <button type="button" class="btn darkmode-ignore btnVerMais"><a href="idxxxxx.php">Ver mais...</a></button>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" src="IMG/4.jpg" alt="Card image cap">
            <div class="card-body">
            </div>
          </div>
        </td>
        <td>
          <h5 class="card-title text-primary text-justify">Salto alto</h5>
          <p class="card-text text-danger text-justify">Perfeito para eventos sociais e trabalho.</p>
          <button type="button" class="btn darkmode-ignore btnVerMais"><a href="idxxxxx.php">Ver mais...</a></button>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" src="IMG/5.jpg" alt="Card image cap">
            <div class="card-body">
            </div>
          </div>
        </td>
        <td>
          <h5 class="card-title text-primary text-justify">Salto alto</h5>
          <p class="card-text text-danger text-justify">Perfeito para eventos sociais e trabalho.</p>
          <button type="button" class="btn darkmode-ignore btnVerMais"><a href="idxxxxx.php">Ver mais...</a></button>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" src="IMG/6.jpg" alt="Card image cap">
            <div class="card-body">
            </div>
          </div>
        </td>
        <td>
          <h5 class="card-title text-primary text-justify">Kit bolsa</h5>
          <p class="card-text text-danger text-justify">Diferentes modelos para diferentes momentos.</p>
          <button type="button" class="btn darkmode-ignore btnVerMais"><a href="idxxxxx.php">Ver mais...</a></button>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" src="IMG/7.jpg" alt="Card image cap">
            <div class="card-body">
            </div>
          </div>
        </td>
        <td>
          <h5 class="card-title text-primary text-justify">Bolsa</h5>
          <p class="card-text text-danger text-justify">Perfeita para diversas ocasiões.</p>
          <button type="button" class="btn darkmode-ignore btnVerMais"><a href="idxxxxx.php">Ver mais...</a></button>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" src="IMG/8.jpg" alt="Card image cap">
            <div class="card-body">
            </div>
          </div>
        </td>
        <td>
          <h5 class="card-title text-primary text-justify">Vestido</h5>
          <p class="card-text text-danger text-justify">Perfeito para passeios.</p>        
          <button type="button" class="btn darkmode-ignore btnVerMais"><a href="idxxxxx.php">Ver mais...</a></button>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" src="IMG/9.jpg" alt="Card image cap">
            <div class="card-body">
            </div>
          </div>
        </td>
        <td>
          <h5 class="card-title text-primary text-justify">Calça feminina</h5>
          <p class="card-text text-danger text-justify">Perfeita para passeios.</p>
          <button type="button" class="btn darkmode-ignore btnVerMais"><a href="idxxxxx.php">Ver mais...</a></button>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" src="IMG/10.jpg" alt="Card image cap">
            <div class="card-body">
            </div>
          </div>
        </td>
        <td>
          <h5 class="card-title text-primary text-justify">Calça jeans feminina</h5>
          <p class="card-text text-danger text-justify">Perfeita para diversas ocasiões.</p>
          <button type="button" class="btn darkmode-ignore btnVerMais"><a href="idxxxxx.php">Ver mais...</a></button>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" src="IMG/11.jpg" alt="Card image cap">
            <div class="card-body">
            </div>
          </div>
        </td>
        <td>
          <h5 class="card-title text-primary text-justify">Saia vermelha</h5>
          <p class="card-text text-danger text-justify">Perfeita para diversas ocasiões.</p>
          <button type="button" class="btn darkmode-ignore btnVerMais"><a href="idxxxxx.php">Ver mais...</a></button>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" src="IMG/12.jpg" alt="Card image cap">
            <div class="card-body">
            </div>
          </div>
        </td>
        <td>
          <h5 class="card-title text-primary text-justify">Vestido Marrom</h5>
          <p class="card-text text-danger text-justify">Perfeito para diversas ocasiões.</p>
          <button type="button" class="btn darkmode-ignore btnVerMais"><a href="idxxxxx.php">Ver mais...</a></button>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" src="IMG/13.jpg" alt="Card image cap">
            <div class="card-body">
            </div>
          </div>
        </td>
        <td>
          <h5 class="card-title text-primary text-justify">Calça jeans masculina</h5>
          <p class="card-text text-danger text-justify">Perfeita para diversas ocasiões.</p>
          <button type="button" class="btn darkmode-ignore btnVerMais"><a href="idxxxxx.php">Ver mais...</a></button>
        </td>
      </tr>
      <tr>
        <td>
          <div class="card" style="width: 18rem; margin: 10px;">
            <img class="card-img-top" src="IMG/14.jpg" alt="Card image cap">
            <div class="card-body">
            </div>
          </div>
        </td>
        <td>
          <h5 class="card-title text-primary text-justify">Camisas masculinas</h5>
          <p class="card-text text-danger text-justify">Perfeitas para diversas ocasiões.<br>Disponível em diversas cores.</p>
          <button type="button" class="btn darkmode-ignore btnVerMais"><a href="idxxxxx.php">Ver mais...</a></button>
        </td>
      </tr>
    </tbody>
  </table>
  <footer class=" py-5">
    <div class="row">
      <div class="col- col-12 col-md">
        <small class="d-block mb-3 text-muted">&copy; 2020</small>
      </div>
      <div class="col- col-6 col-md">
        <h5>Sobre Nós</h5>
        <ul class="list-unstyled text-small">
          <li><a href="sobre.php#SD">Informações da Empresa</a></li>
          <li><a href="sobre.php">Informações dos Desenvolvedores do Site</a></li
          </ul>
        </div>
        <div class="col- col-6 col-md">
          <h5>Contato</h5>
          <ul class="list-unstyled text-small">
            <li><a href="contato.php">E-mail</a></li>
            <li><a href="contato.php#SD">WhatsApp</a></li>
          </ul>
        </div>
        <div class="col- col-6 col-md">
          <h5>Redes Sociais</h5>
          <ul class="list-unstyled text-small">
            <li><a target="_blank" href="https://www.facebook.com">Facebook</a></li>
            <li><a target="_blank" href="https://www.instagram.com/modaz">Instagram</a></li>
          </ul>
        </div>
      </div>
    </footer>
    <span class="darkmode-ignore"><span>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.5/lib/darkmode-js.min.js"></script>
    <script>
      new Darkmode().showWidget();
    </script>
    <script type="JS/Bootstrap.mim.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </php>