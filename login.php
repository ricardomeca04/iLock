<html>
 <head>
  <title>
   Login
  </title>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
  <style>
   body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
  </style>
 </head>
 <body>
  <div class="login-container">
   <h2>
    Login
   </h2>
   <form>
    <div class="mb-3">
     <label class="form-label" for="email">
      Email address
     </label>
     <input class="form-control" id="email" type="email"/>
    </div>
    <div class="mb-3">
     <label class="form-label" for="password">
      Password
     </label>
     <input class="form-control" id="password" type="password"/>
    </div>
    <button class="btn btn-primary w-100" type="submit">
     Login
    </button>
   </form>