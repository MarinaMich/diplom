<?php
$this->layout('layout', ['title' => 'Admin Management',
                        'isLoggedIn' => $isLoggedIn,
                        'id_user' => $id_user,
                        'username' => $username,
                        'admin' => $admin
])?>

<div class="container">
    <div class="col-md-12">
        <h1>Пользователи</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>Email</th>
                    <th>Действия</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $items=>$item): ?>
                <tr>
                    <td><?php echo $item['id'];?></td>
                    <td><?php echo $item['username'];?></td>
                    <td><?php echo $item['email'];?></td>
                    <td>
                        <?php if($item['roles_mask'] != 1) : ?>
                        <a href="/diplom/admin/role_add/<? echo $item['id'];?>" class="btn btn-success">Назначить администратором</a>
                        <?php else:?>
                        <a href="/diplom/admin/role_remove/<? echo $item['id'];?>" class="btn btn-danger">Разжаловать</a>
                        <?php endif;?>
                        <a href="/diplom/profile/<? echo $item['id'];?>" class="btn btn-info">Посмотреть и редактировать</a>
                        <a href="/diplom/admin/delete/<? echo $item['id'];?>" class="btn btn-danger" onclick="//return confirm('Вы уверены?');">Удалить</a>
                    </td>
                </tr>
                <?php endforeach;?>
           </tbody>
        </table>
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

