<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iLock</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        
   body {
            font-family: Arial, sans-serif;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .navbar {
            border-bottom: 1px solid #ddd;
        }
        .navbar-brand {
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            height: 125px;
            margin-right: 10px;
        }
        .navbar-brand span {
            font-size: 24px;
            font-weight: bold;
        }
        .search-bar {
            flex-grow: 1;
            margin: 0 20px;
        }
        .search-bar input {
            width: 100%;
            padding: 5px;
        }
        .search-results {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 1px solid #ddd;
            z-index: 1000;
        }
        .search-results a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: black;
        }
        .search-results a:hover {
            background: #f0f0f0;
        }
        .icon-bar i {
            font-size: 24px;
            margin-left: 20px;
            
        }
        .content {
            display: flex;
            flex-wrap: wrap;
            gap: 60px;
            padding: 40px;
            justify-content: center;
        }
        .content .card {
            width: calc(35% - 50px);
            border: 1px solid #ccc;
        }
        .card img{
            width: 50%;
            height: 200px;
            display: center;
            object-fit: cover;
        }
        .carousel img {
            width:300;
            height: 300;
            object-fit: center;
        }
        .card-body {
            padding: 40px;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            border-top: 1px solid #ddd;
        }
        .footer .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body class="bg-white">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="imgs/logo.png" height="125">
                <span>iLock</span>
            </a>
    <div class="search-bar">
     <input id="searchInput" oninput="showResults()" placeholder="Pesquisa" type="text"/>
     <div class="search-results" id="searchResults" style="display: none;">
      <a href="magsafe.php">
       Capas MagSafe
      </a>
      <a href="silicone.php">
       Capas de Silicone
      </a>
      <a href="personalizacao.php">
       Personalização
      </a>
      <a href="novidades.php">
       Novidades
      </a>
     </div>
    </div>

    <div class="icon-bar">
     <i class="fas fa-search">
     </i>
     <i class="fas fa-bars ms-3">
     </i>
     <a class="btn" href="#">
      <i class="fas fa-user ms-3">
      </i>
     </a>
     <a class="btn" href="index.php">
     <i class="fas fa-home ms-3">
     </i>
     </a>
    </nav>
    <div class="content">
   <div class="card">
    <img  height="150" src="imgs/capa magsafe.jpeg" width="100"/>
    <div class="card-body">
     <h5 class="card-title">
      Capas MagSafe
     </h5>
     <p class="card-text">
      Mais Capas MagSafe
     </p>
     <a class="btn btn-primary" href="magsafe.php">
      Todos os modelos
     </a>
    </div>
   </div>
   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imgs/magsafe personalizar.jpeg" class="d-block w-100" >
            </div>
            <div class="carousel-item">
                <img src="imgs/todas cores.jpeg" class="d-block w-100" >
            </div>
            <div class="carousel-item">
                <img src="imgs/exemplo carrossel.jpeg" class="d-block w-100" >
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2JDz2aqbLyQK36RRzIY5nMbwt7zGzE9iG6LlVNKfIU8mW9H8LrZR3K00dht" crossorigin="anonymous"></script>

   <div class="card">
    <img height="150" src="imgs/capa silicone.jpeg" width="100"/>
    <div class="card-body">
     <h5 class="card-title">
      Capas de Silicone
     </h5>
     <p class="card-text">
        Mais Capas de Silicone
     </p>
     <a class="btn btn-primary" href="silicone.php">
      Todos os Modelos
     </a>
    </div>
   </div>
   <div class="card">
    <img  height="150" src="imgs/personalizar.png" width="100"/>
    <div class="card-body">
     <h5 class="card-title">
      Personalização
     </h5>
     <p class="card-text">
      Faz a Tua Própira Capa
     </p>
     <a class="btn btn-primary" href="personalizacao.php">
      Fazer agora
     </a>
    </div>
   </div>
   <div class="card">
    <img  height="150" src="imgs/trend.png" width="100"/>
    <div class="card-body">
     <h5 class="card-title">
      Novidades
     </h5>
     <p class="card-text">
      As "Trends" Atuais
     </p>
     <a class="btn btn-primary" href="novidades.php">
      Ver
     </a>
    </div>
   </div>
  </div>

  <footer class="footer">
        <div class="container">
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <p> iLock | · Informações de contacto · Política de privacidade · Termos do serviço · Política de envio </p>
        </div>
    </footer>

  <script>
   function showResults() {
            var input = document.getElementById('searchInput').value;
            var results = document.getElementById('searchResults');
            if (input.length > 0) {
                results.style.display = 'block';
            } else {
                results.style.display = 'none';
            }
        }
  </script>


</body>
</html>