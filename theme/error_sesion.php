<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sesión expirada</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
    body {
      background-color: #ffebee;
      color: #b71c1c;
      font-family: 'Fira Sans', sans-serif;
      text-align: center;
      padding: 100px 20px;
    }
    .error-container {
      max-width: 600px;
      margin: auto;
      background: white;
      border: 2px solid #ef9a9a;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    h1 {
      font-size: 48px;
      margin-bottom: 20px;
      color: #d32f2f;
    }
    p {
      font-size: 18px;
      margin-bottom: 30px;
    }
    a.btn {
      background-color: #c62828;
      color: white;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
    }
    a.btn:hover {
      background-color: #b71c1c;
    }
  </style>
</head>
<body>
  <div class="error-container">
    <h1>¡Sesión finalizada!</h1>
    <p>Tu sesión ha expirado o no tienes permiso para acceder a esta página.</p>
    <a href="index.html" class="btn">Volver al inicio</a>
  </div>
</body>
</html>
