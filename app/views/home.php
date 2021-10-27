<?php 
$this->layout('layout', ['title' => 'User Management',
                        'isLoggedIn' => $isLoggedIn,
                        'id_user' => $id_user,
                        'username' => $username,
                        'admin' => $admin
]) ?>


<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron">
          <h1 class="display-4">Привет, мир!</h1>
          <p class="lead">Это дипломный проект по разработке на PHP. На этой странице список наших пользователей.</p>
          <hr class="my-4">
          <?php if(!$isLoggedIn): ?>
            <p>Чтобы стать частью нашего проекта вы можете пройти регистрацию.</p>
            <a class="btn btn-primary btn-lg" href="/diplom/register" role="button">Зарегистрироваться</a>
          <?php endif;?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <h1>Пользователи</h1>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Имя</th>
              <th>Email</th>
              <th>Статус</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($users as $item): ?>
            <tr>
              <td><?php echo $item['id'];?> </td>
              <td><a href="/diplom/profile/<? echo $item['id'];?>"><?php echo $item['username'];?></a></td>
              <td><?php echo $item['email'];?></td>
              <td><?php echo $item['description'];?></td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
      <p>
        <?php echo $page->getTotalItems(); ?> найдено.
            
        Показано 
        <?php echo $page->getCurrentPageFirstItem(); ?> 
          - 
        <?php echo $page->getCurrentPageLastItem(); ?>.
      </p>
      
      <?php echo $page;?>
      
    </div>
  </div>
		