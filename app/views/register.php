<?php $this->layout('layout', ['title' => 'Регистрация'])?>

<div class="text-center">
	<div class="col-md-3 offset-md-2">
	    <form action="/diplom/register" method="POST" class="form-signin">
	    	<?php if(isset($errors)):?>
	            <div class="alert alert-danger">
	              <ul>
	                <?php foreach ($errors as $error):?>
	                  <li><?php echo $error;?></li>
	                <?php endforeach; ?>
	              </ul>
	            </div>
	        <?php endif;?>    
	        
	           
	        <div class="alert alert-info">
	          Информация
	        </div>

	    	<div class="form-group">
	            <input type="email" name="email" class="form-control" placeholder="Email" value="<?php //echo Input::get('email') ?>">
	        </div>
	        <div class="form-group">
	            <input type="text" name="username" class="form-control" placeholder="Ваше имя" value="<?php //echo Input::get('user_name') ?>">
	        </div>
	        <div class="form-group">
	            <input type="password" name="password" class="form-control" placeholder="Пароль">
	        </div>
	        
	        <div class="form-group">
	            <input type="password" name="password_again" class="form-control" placeholder="Повторите пароль">
	        </div>
	    	<button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
	    	<p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
	    </form>
	</div>    
</div>