@php

@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolão Regional - Empresa Kingkernel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.0.1/vapor/bootstrap.min.css" integrity="sha512-62SEilZeEncOM4rz8HAP4ZA005KzdkkSSZAOpV4uT3OLeT6rWpa/0R6Cxf7Hgo86brbJmvgCGhrFJyEyqJhcGA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.0.1/slate/bootstrap.min.css" integrity="sha512-HXef4M5+5G6pExpqz8UpMDboIRaSglxMDOBfamXF3rH9yYDUSoaxVrar7X1/yImUIFsAFmDm7vCYvdXwSs+JGQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.0.1/sketchy/bootstrap.min.css" integrity="sha512-2a8D94jkAiBe3khwCL/eonFk1pIZsUxwWEHnZ0lyM2PhYmS46D7bCdjjANvQRw2bQwuuSpj/osLIQcv2ZrYW7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/bootstrap.min.css">
</head>
<body>
{{-- 
@section("topmenuonline")
@show
--}}
@include('bolaologado.topmenuonline')
<div class="container">


</div>

<div class="container">

<div class="row" >
  <div class="col-md-6">
    <div class="h-100 p-5 text-white bg-dark rounded-3">
      <h2>R$ </h2>
      <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
      <a href="http://{{$_SERVER['HTTP_HOST']}}/credit/add" class="btn btn-outline-secondary">Adicionar Créditos</a>
    </div>
  </div>
  <div class="col-md-6">
    <div class="h-100 p-5 bg-light border rounded-3">
      <h2>Add borders</h2>
      <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
      <a href="http://{{$_SERVER['HTTP_HOST']}}/credit/add/" class="btn btn-outline-secondary">Adicionar Créditos</a>
    </div>
  </div>
</div>

</div>

<footer class="container fixed-bottom">
  <p class="float-end"><a href="#">Back to top</a></p>
  <p>© 2017–2021 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
</footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</html>