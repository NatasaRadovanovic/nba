<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="/css/blog.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Eczar" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <style>
    body
    {
      background-color:#f2f2f2;
      font-family: 'Eczar', serif;
    }
      .wrapp
      {
        background-color:#669999;
        padding:5px;
      }

      .nav-item a
      {
        color:#003366;
        font-size:1.1rem;
        padding-left:30px;
      }

       .nav-item a:hover
       {
         font-size:1.2rem;
       }

       .content
       {
         width:95%;
         margin:0 auto;
         padding-top:20px;
        
       }

       .sidebar
    {
        height: 100%;
        width: 20%;
        position: fixed;
        z-index: 1;
        top: 55;
        right: 0;
        background-color: #669999;
        overflow-x: hidden;
        padding-top: 20px;
    }
    .side-content a
    {
        color: rgba(255,255,255,.5);
        font-size: 0.8rem;
        line-height: 35px;
        text-decoration: none;
    }

    .side-content a:hover
    {
        color: white;
    }
    
    .side-content
    {
        padding-left: 15px;
    }
 
    </style>
  </head>
  
  <body>

  <div class="wrapp">
    <ul class="nav justify-content-center" >
      <li class="nav-item">
        <a class="nav-link active" href="/"><i class="fas fa-home"></i> Home</a>
      </li>
      @if(auth()->check())
        <li class="nav-item">
          <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/logout">Logout</a>
      </li>
      @else
      <li class="nav-item">
          <a class="nav-link" href="/login"><i class="fas fa-user-plus"></i> Login</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
      </li>
      @endif
   </ul>
  </div>
  
  <div class="content">
       @yield('content')
                
  @if(auth()->check())
      <div class="sidebar">
          <div class="side-content">
              <h2>News</h2>
          <ul>
              @foreach($teams as $team)
                <li><a href="/news/team/{{ $team->name }}">{{ $team->name }}</a></li>
                @endforeach
          </ul>
        </div>
      <div>
         @endif
  </div>

   </body>
</html>
