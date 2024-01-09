<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Formulário de Produtos Informáticos</title>
</head>
<body>

<div class="container mt-5">
  <h2>Formulário de Produtos Informáticos</h2>
  <form>
    <div class="form-group">
      <label for="codproduto">Códidigo do Produto:</label>
      <input type="text" class="form-control" id="codproduto" placeholder="Digite o código do produto" required>
    </div>
    <div class="form-group">
      <label for="nomeproduto">Nome do Produto:</label>
      <input type="text" class="form-control" id="nomeproduto" placeholder="Digite o nome do produto" required>
    </div>
    <div class="form-group">
      <label for="categoria">Categoria:</label>
      <input type="text" class="form-control" id="categoria" placeholder="Digite a categoria do produto" required>
    </div>
    <div class="form-group">
      <label for="precoUnitario">Preço Unitário:</label>
      <input type="number" class="form-control" id="precounitario" placeholder="Digite o preço Unitário" required>
    </div>
    <div class="form-group">
      <label for="descricao">Descrição:</label>
      <textarea class="form-control" id="descricao" rows="3" placeholder="Digite a descrição do produto" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>