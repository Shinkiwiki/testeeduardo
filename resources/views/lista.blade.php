<!DOCTYPE html>
    <html>
        <head>
            <title>Produtos</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        </head>
        <body>
<div class="container">
<h1>Lista de produtos</h1>
<hr />
<table class="table table-striped">
<thead>
<tr>
<th>codproduto</th>
<th>nomeproduto</th>
<th>categoria</th>
<th>precounitario</th>
<th>descricao</th>
</tr>
</thead>
<tbody>
@foreach ($contatos as $row)
<tr>
<td>{{ $row->codproduto }}</td>
<td>{{ $row->nomeproduto }}</td>
<td>{{ $row->categoria }}</td>
<td>{{ $row->precounitario }}</td>
<td>{{ $row->descricao}}</td> </tr>
@endforeach
</tbody>
</table>
</div>
</body>
    </html>