<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Registrácia</title>
    <meta charset="UTF-8">
    
    @include('layout.partials.head')

    <link href="{{ asset('/css/REGISTRACIA.css') }}" rel="stylesheet">
</head>
<body>
    <div class="center">
        <h1>Registrácia</h1>
        <form action="/register" method="POST">
            @csrf
            <div style="display: flex; justify-content: space-between;">
                <div class="txt_field" style="width: 48%;">
                    <input type="text" name="first_name" required>
                    <span></span>
                    <label>Meno</label>
                </div>
                <div class="txt_field" style="width: 48%;">
                    <input type="text" name="last_name" required>
                    <span></span>
                    <label>Priezvisko</label>
                </div>
            </div>
            <div class="txt_field">
                <input type="email" name="email" required>
                <span></span>
                <label>E-mail</label>
            </div>
            <div class="txt_field">
                <input type="text" name="phone" required>
                <span></span>
                <label>Telefónne číslo</label>
            </div>
            <div style="display: flex; justify-content: space-between;">
                <div class="txt_field" style="width: 48%;">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Heslo</label>
                </div>
                <div class="txt_field" style="width: 48%;">
                    <input type="password" name="password_confirmation" required>
                    <span></span>
                    <label>Potvrdenie hesla</label>
                </div>
            </div>
            <input type="submit" value="Registrovať sa">
            <div class="signup_link">
                Už máte konto? <a href="login">Prihlásiť sa</a>
            </div>
        </form>
    </div>
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="sk">
<head>
    <title>Registracia_page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="REGISTRACIA.css">
<body>
    <form class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Meno</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Priezvisko</label>
          <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">E-mail</label>
          <input type="text" class="form-control" id="inputAddress">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Telefónne číslo</label>
          <input type="text" class="form-control" id="inputAddress2">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Heslo</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Priezvisko</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
      </form>

</body>
</html> -->









