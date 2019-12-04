<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
        <meta name=viewpoint content="width=device-width, inital-scale=1">
        <title></title>
        <!--<link rel="stylesheet" href="style.css">-->
    </head>
<body>

<header>
        <nav>
            <a href="#">
                <img src="img/logo.png" alt="logo">
            </a>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Social link</a></li>
                <li><a href="#">Memes</a></li>
            </ul>
            <div>
              <form action="includes/login.inc.php"  method="post">
                  <input type="text" name="mailuid" placeholder="Username...">
                  <input type="password" name="pwd" placeholder="Password...">
                  <button type="submit" name="login-submit">Login</button>
              </form>
              <a href="signup.php">Signup</a>
              <form action="includes/logout.inc.php"  method="post">
                  <button type="submit" name="logout-submit">Logout</button>
              </form>
          </div>
      </nav>
</header>
