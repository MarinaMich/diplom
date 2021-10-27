<?php 
$this->layout('layout', ['title' => 'User Profile',
                        'isLoggedIn' => $isLoggedIn,
                        'id_user' => $id_user,
                        'username' => $username,
                        'admin' => $admin,
                        'email' => $email,
                        'role' => $role
]) ?>

<div class="container">
    <div class="row">
      <div class="col-md-8">
        
        <?php foreach ($user as $item): ?>
          <h1>Профиль пользователя - <?php echo $item['username'];?></h1>
          <h2>Роль пользователя - <?php echo $role[1];?></h2>
         
          <form action="/diplom/profile/<?php echo $item['id'];?>" method="POST" class="form">
            <div class="form-group">
              <label for="username">Имя</label>
              <input type="text" name="username" id="username" class="form-control" value="<?php echo $item['username'];?>">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control" value="<?php echo $item['email'];?>">
            </div>
           
            <!-- если в профиль зашел собственник профиля или админ-->
            <?php if($item['id'] == $id_user || $admin):?>
            <div class="form-group">
              <button class="btn btn-warning" type="submit" >Обновить</button>
            </div>
            <?php endif; ?>
            <?php if ($item['id'] == $id_user):?>
              <a href="/diplom/form_change_password" class="btn btn-info">Изменить пароль</a>
            <?php endif; ?>
          </form>
        <?php endforeach;?>
         
      </div>

    </div>
  </div>