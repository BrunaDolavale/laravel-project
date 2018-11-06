<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sucupira</title>

  <!-- Favicon -->
  <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

  <!-- Fonts -->        
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

  <!-- Styles -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />       

  <!-- JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="{{URL::asset('js/ajax.js')}}"></script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">       
    <div class="navbar-header">
      <a class="navbar-brand" href="{{url('/')}}" 
      title="Página Inicial" style="margin-top: -3px">
      <img src="{{URL::asset('img/logo.png')}}"></a>
      <button type="button" class="navbar-toggle" 
      data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>               
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav" id="link-white">
      <li>
        <a href="#" style="text-decoration: none">
          <span class="glyphicon glyphicon-home"></span> 
          <span id="underline">Panel</span>
        </a>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" 
        href="#" style="text-decoration: none">
        <span class="glyphicon glyphicon-pencil"></span>
        <span id="underline">Cadastros</span> 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">                           
          <li><a href="#">Usuários</a></li>                                               
          <li><a href="{{route('docente.index')}}">Docentes</a></li>                                               
          <li><a href="#">Computadores</a></li>
          <li><a href="#">Administradores</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" 
        href="#" style="text-decoration: none">
        <span class="glyphicon glyphicon-th"></span> 
        <span id="underline">Utilitários</span>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">                           
          <li>
            <a href="#">Backup BD</a>
          </li>                             
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right" id="link-white">
      <li class="dropdown">
        <a href="#" style="text-decoration: none">
          <img src="{{URL::asset('img/rafael.png')}}" 
          class="img-circle" width="26" height="26" 
          style="margin-top: -3px"> 
          <span id="underline">Rafael Calearo</span> 
        </a>
      </li>
      <li><a href="#" 
       style="text-decoration: none">
       <span class="glyphicon glyphicon-log-in"></span>
       <span id="underline">Sair</span></a></li>
       <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
     </ul>
   </div>       
 </nav>        
 <div id="line-one">
  <div class="container">
    <div class="row">
      <div class="col-md-12" id="center">
        <h1><b>Docente</b></h1>
        <br>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="">Panel</a></li>
          <li><a href="{{route('docente.index')}}">Docentes</a></li>
          <li class="active">Alteração</li>
        </ol>              
      </div>          
    </div>
    <div class="row">  
      <br>
      <h4 id="center"><b>ALTERAÇÃO DOS DADOS DO DOCENTE</b></h4>
      <br> 
      <form method="post" 
      action="{{route('docente.update', $docente->nome)}}" 
      enctype="multipart/form-data">
      {!! method_field('put') !!}
      {{ csrf_field() }}
      <div class="col-md-6">              
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" name="nome" 
          class="form-control" 
          value="{{$docente->nome or old('nome')}}"
          required>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="nivel">Nível</label>
          <input type="text" name="nivel" 
          class="form-control" 
          value="{{$docente->nivel or old('nivel')}}"
          required>
        </div>
      </div>
      <div class="col-md-12">
        <button type="reset" class="btn btn-default">
          Limpar
        </button>
        <button type="submit" 
        class="btn btn-warning" id="black">
        Alterar
      </button>
    </div>
  </form>
</div>
</div>
</div>
</body>
</html>