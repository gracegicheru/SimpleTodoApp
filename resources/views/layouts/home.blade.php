<!DOCTYPE html>
<html>
<head>
<title>
	@yield('title')
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/getTodo">Todo</a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="/createTodo">Create tasks</a>
      </li>
     
      
    </ul>
    
  </div>
</nav>
	<div class="container">

		@yield('content')


		</div>
</body>

</html>