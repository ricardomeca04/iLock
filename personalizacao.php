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
            padding: 20px;
        }
        .customization-form {
            max-width: 600px;
            margin: auto;
        }
        .customization-form img {
            width: 75%;
            height: 400;
            margin-bottom: 20px;
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
                <i class="fas fa-search"></i>
                <i class="fas fa-bars ms-3"></i>
                <a class="btn" href="login.php">
                    <i class="fas fa-user ms-3"></i>
                </a>
                <a class="btn" href="index.php">
                    <i class="fas fa-home ms-3"></i>
                </a>
            </div>
        </div>
    </nav>
    <div class="content">
        <h1 class="text-center">Personalize a Sua Capa</h1>
        <form class="customization-form">
            <div class="mb-3">
                <label for="caseModel" class="form-label">Modelo da Capa</label>
                <select class="form-select" id="caseModel">
                    <option selected>Escolha o modelo</option>
                    <option value="1">iPhone16 Pro Max</option>
                    <option value="2">iPhone16 Pro </option>
                    <option value="3">iPhone16 </option>
                    <option value="4">iPhone15 Pro Max</option>
                    <option value="5">iPhone15 Pro </option>
                    <option value="6">iPhone15 </option>
                    <option value="7">iPhone14 Pro Max</option>
                    <option value="8">iPhone14 Pro </option>
                    <option value="9">iPhone14 </option>
                    <option value="10">iPhone13 Pro Max</option>
                    <option value="11">iPhone13 Pro </option>
                    <option value="12">iPhone13 </option>
                    <option value="13">iPhone12 Pro Max</option>
                    <option value="14">iPhone12 Pro </option>
                    <option value="15">iPhone12 </option>
                    <option value="15">iPhone11 Pro Max</option>
                    <option value="17">iPhone11 Pro </option>
                    <option value="18">iPhone11 </option>
                </select>
            </div>
            <div class="mb-3">
                <label for="caseColor" class="form-label">Cor da Capa</label>
                <input type="color" class="form-control form-control-color" id="caseColor" value="#563d7c" title="Escolha a cor da capa">
            </div>
            <div class="mb-3">
                <label for="customText" class="form-label">Texto Personalizado</label>
                <input type="text" class="form-control" id="customText" placeholder="Digite o texto">
            </div>
            <div class="mb-3">
                <label for="uploadImage" class="form-label">Upload de Imagem</label>
                <input class="form-control" type="file" id="uploadImage">
            </div>
            <div class="mb-3">
                <label for="preview" class="form-label">Pré-visualização</label>
                <img id="preview" src="imgs/personalizar.png" >
            </div>
            <button type="submit" class="btn btn-primary">Personalizar Agora</button>
        </form>
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