<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=$this->e($title)?></title>
  <meta charset="UTF-8">
  <title>Profile</title>
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  
 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">User Management</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/diplom/">Главная</a>
          </li>
          <?php if($admin): ?>
            <li class="nav-item">
              <a class="nav-link" href="/diplom/admin/">Управление пользователями</a>
            </li>
          <?php endif;?>
        </ul>
        <?php if($isLoggedIn == true): ?>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="/diplom/profile/<? echo $id_user;?>" class="nav-link">Привет, <?php echo $username;?></a>
            </li>
            <li class="nav-item">
              <a href="/diplom/logout" class="nav-link">Выйти</a>
            </li>
          </ul>
        <?php else:?>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="/diplom/login" class="nav-link">Войти</a>
            </li>
            <li class="nav-item">
              <a href="/diplom/register" class="nav-link">Регистрация</a>
            </li>
          </ul>
        <?php endif;?>
      </div>
    </nav>
      <?=$this->section('content')?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>