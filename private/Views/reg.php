<?php include_once "header.php" ?>
		<div class="leftcol">
		</div>
		<div class="topblock">
                <h2>Регистрация нового покупателя</h2>
        </div>
        <div class="main row col-12">
			<div class="breadcrumbs"><h3>Главная >> Регистрация</h3>
			</div>
        	<div class="mainblock">
                 	<div class="reg-form">
                        <form action="save_user.php" method="post">
                        <fieldset>
                            <!--<div>
                            <label for="email">Email: </label>
                            <input name="email" type="email"  placeholder="введите email" required />
                            </div><br />-->
                            
                            <div>
                            <label for="name">Имя: </label>
                            <input name="login" type="text" size="15" maxlength="15" placeholder="введите имя" required />
                            </div><br />
                            
                            <div>
                            <label for="password">Пароль: </label>
                            <input name="password" type="password" size="15" maxlength="15" placeholder="введите пароль" required />
                            </div><br />
                           
                             <input type="submit" name="submit" value="Зарегистрироваться">
                        </fieldset>
                        </form>
                    </div>
                 </div>
		<div class="rightcol">
		</div>
<?php include_once "footer.php" ?>