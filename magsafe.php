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
            background-color: #f8f9fa;;
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
            
        }   body {
            font-family: Arial, sans-serif;
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
            gap: 40px;
            padding: 40px;
        }
        .content .card {
            width: calc(25% - 15px);
            border: 1px solid #ccc;
        }
        .card img {
            width: 50%;
            height: 200px;
            display: center;
            object-fit: cover;
        }
        .card-body {
            padding: 10px;
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
      <a href="#">
       Novidades
      </a>
     </div>
    </div>

    <div class="icon-bar">
     <i class="fas fa-search">
     </i>
     <i class="fas fa-bars ms-3">
     </i>
     <a class="btn" href="login.php">
      <i class="fas fa-user ms-3">
      </i>
     </a>
     <a class="btn" href="index.php">
     <i class="fas fa-home ms-3">
     </i>
     </a>
    </nav>
    <div class="container mt-4">
        <h1>Capas MagSafe</h1>
        <div class="content">
            <div class="card">
                <img src="imgs/magsafe 16.jpeg"  height="150" width="100">
                <div class="card-body">
                    <h5 class="card-title">iPhone 16</h5>
                    <p class="card-text">Todos Modelos MagSafe 16 </p>
                    <a class="btn btn-primary" href="#">Ver modelos</a>
                </div>
            </div>
            <div class="card">
                <img src="imgs/magsafe 15.jpeg"  height="150" width="100">
                <div class="card-body">
                    <h5 class="card-title">iPhone 15</h5>
                    <p class="card-text">Todos Modelos MagSafe 15 </p>
                    <a class="btn btn-primary" href="#">Ver modelos</a>
                </div>
            </div>
            <div class="card">
                <img src="imgs/magsafe 14.jpeg"  height="150" width="100">
                <div class="card-body">
                    <h5 class="card-title">iPhone 14</h5>
                    <p class="card-text">Todos Modelos MagSafe 14 </p>
                    <a class="btn btn-primary" href="#">Ver modelos</a>
                </div>
            </div>
            <div class="card">
                <img src="imgs/magsafe 13.jpeg"  height="150" width="100">
                <div class="card-body">
                    <h5 class="card-title">iPhone 13 </h5>
                    <p class="card-text">Todos Modelos MagSafe 13 </p>
                    <a class="btn btn-primary" href="#">Ver modelos</a>
                </div>
            </div>
            <div class="card">
                <img src="imgs/magsafe 12.jpeg" height="150" width="100">
                <div class="card-body">
                    <h5 class="card-title">iPhone 12 </h5>
                    <p class="card-text">Todos Modelos MagSafe 12.</p>
                    <a class="btn btn-primary" href="#">Ver modelos</a>
                </div>
            </div>
            <div class="card">
                <img src="imgs/magsafe 11.jpeg" height="150" width="100">
                <div class="card-body">
                    <h5 class="card-title">iPhone 11</h5>
                    <p class="card-text">Todos Modelos MagSafe 11.</p>
                    <a class="btn btn-primary" href="#">Ver modelos</a>
                </div>
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
