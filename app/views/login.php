<?php $this->layout('layout', ['title' => 'Login'])?>

<body class="text-center">
  <div class="col-md-3 offset-md-2">
    <form action="/diplom/login" method="POST" class="form-signin">
      <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email">
      </div>
      <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Пароль">
      </div>
      <input type="hidden" name="token" value="<?php //echo Token::generate(); ?>">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" name="remember"> Запомнить меня
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
    </form>
  </div>
</body> 