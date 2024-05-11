<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Prihlásenie_page</title>
    <meta charset="UTF-8">
    
    @include('layout.partials.head')

    <link href="{{ asset('/css/LOGIN_page.css') }}" rel="stylesheet">
<body>
    @if(count($errors) > 0)
        @foreach( $errors->all() as $message )
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endforeach
    @endif
    <div class="center">
        <h1>Prihlásenie</h1>
        <form action="/login" method="POST">
          @csrf
          <div class="txt_field">
              <input type="email" name="email" required>
              <span></span>
              <label>E-mail</label>
          </div>

          <div class="txt_field">
              <input type="password" name="password" required>
              <span></span>
              <label>Heslo</label>
          </div>

          <input type="submit" value="Prihlásiť sa">
          {{-- <button type="submit"> Prihlásiť sa </button>  --}}
          
          <div class="signup_link">
              Nemáte konto <a href="register">Zaregistrovať sa</a>
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
