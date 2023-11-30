<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container my-4">
     <a href="{{route('xInicio')}}" class ="btn btn-primary">Inicio</a>
     <a href="{{route('xGaleria')}}" class ="btn btn-primary">Galeria</a>
     <a href="{{route('xLista')}}" class ="btn btn-primary">Lista</a>
   </div>
   <h1>Pagina lista</h1>
   <h1>Lista</h1>
   <table class="table">
  <thead class="table-dark">
  <tr>
      <th scope="col">id</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Fecha de nacimiento</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">1</th>
      <td>C12021002</td>
      <td>Nicol</td>
      <td>Cama</td>
      <td>2005-05-25</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>C12021003</td>
      <td>Meredith</td>
      <td>Escudero</td>
      <td>2003-03-19</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>C12021004</td>
      <td>Carol</td>
      <td>Revilla</td>
      <td>2011-07-18</td>
    </tr>
      <th scope="row">4</th>
      <td>C12021004</td>
      <td>Viviana</td>
      <td>Rivera</td>
      <td>2013-08-23</td>
  </tbody>
</table>
<table class="table">
  <thead class="table-dark">
  <div class="container bg-dark text-white text-center">
      Pie de Pagina
  </div>
  </thead>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>