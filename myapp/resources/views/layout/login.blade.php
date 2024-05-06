<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Prihlásenie_page</title>
    <meta charset="UTF-8">
    
    @include('layout.partials.head')

    <link href="{{ asset('/css/LOGIN_page.css') }}" rel="stylesheet">
<body>
    <div class="center">
        <h1>Prihlásenie</h1>
        <form method="post">
          <div class="txt_field">
              <input type="text" required>
              <span></span>
              <label>E-mail</label>
          </div>

          <div class="txt_field">
              <input type="password" required>
              <span></span>
              <label>Heslo</label>
          </div>

          <input type="submit" value="Prihlásiť sa">
          
          <div class="signup_link">
              Nemáte konto <a href="REGISTRACIA.html">Zaregistrovať sa</a>
          </div>
        </form>
    </div>

</body>
</html>


<!--
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prihlásenie_page</title>
    <link rel="stylesheet" href="login_page_style.css">
  </head>
  <body>
    <div class="center">
      <h1>Prihlásenie</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text">
          <span></span>
          <label>E-mail</label>
        </div>
        <div class="txt_field">
          <input type="password">
          <span></span>
          <label>Heslo</label>
        </div>
        <a href="">
            <input type="submit" value="Prihlásiť sa">
        </a>
        <div class="signup_link">
          Nemáte konto <a href="#">Zaregistrovať sa</a>
        </div>
      </form>
    </div>

  </body>
</html> 
-->
