<!DOCTYPE html>
<html>
<head>
  <title>Furniturpedia</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #f2f2f2;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .logo {
      font-size: 24px;
      font-weight: bold;
      color: #333;
    }
    .search-bar {
      display: flex;
      align-items: center;
    }
    .search-bar input {
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .search-bar button {
      background-color: #333;
      color: #fff;
      padding: 8px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .container {
      display: flex;
      justify-content: space-between;
      padding: 20px;
    }
    .left-content {
      width: 60%;
    }
    .right-content {
      width: 40%;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">Furniturpedia</div>
    <div class="search-bar">
      <input type="text" placeholder="Search...">
      <button>Search</button>
    </div>
  </header>
  <div class="container">
    <div class="left-content">
      <img src="assets/img/images.jpeg" alt="Living room interior">
      <p>"Berbagai kebutuhan interior rumah anda"</p>
    </div>
    <div class="right-content">
      <h2>Register</h2>
      <form>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" placeholder="Enter your username">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" placeholder="Enter your password">
        </div>
        <a href="/login" class="btn btn-primary btn-block">REGISTER</a>
      </form>
    </div>
  </div>
  <footer>
    <p>&copy; 2023 Furniturpedia. All Rights Reserved.</p>
  </footer>
</body>
</html>
