<?php 
$this->layout('layout', ['title' => 'Change password',
                        'isLoggedIn' => $isLoggedIn,
                        'id_user' => $id_user,
                        'username' => $username,
                        'admin' => $admin,
                        'email' => $email,
                        'role' => $role
]) ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="/diplom/change_password" method="POST" class="form">
                <div class="form-group">
                    <label for="password">Старый пароль</label>
                    <input type="password" name="oldPassword" class="form-control">   
                </div>
                <div class="form-group">
                    <label for="password">Новый пароль</label>
                    <input type="password" name="newPassword" class="form-control">
                </div>
               
                <button class="btn btn-lg btn-primary btn-block" type="submit">Изменить</button>
            </form>
        </div>
    </div>
</div>