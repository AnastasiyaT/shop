<?php include "header.php";

// $user = [
//     [
//         'login' => 'admin',
//         'pwd' => '123'

//     ],
//     [
//         // 'login' => 'asd',
//         // 'pwd' => '5645'
//     ]

// ];

// function check_users($users){
//     if (!isset($post['login'])) {
//         return false;
//     }
//     $post = $_POST;
//     foreach ($users as $user) {
//             if ($post['login'] == $user['login']) {
//                 if ($post['pwd'] == $user['pwd']){
//                     echo "Вы вошли как". $post['login'];
//                     return true;
//                 }               
//             }       
//         }

//     echo "Вы не вошли 2";
//     return false;
// }
// // 

// if (trim($_POST['login']) || trim($_POST['pwd']) ) {
//     check_users($user);
// }
// if (isset($_POST['login'])) {
//     check_users($user);
// }
// // проверка на спец символы
// if(isset($_POST['login']) && isset($_POST['pwd'])){
 
//     $login=htmlentities($_POST['login']);
//     $password = htmlentities($_POST['pwd']);
//     echo "Ваш логин: $login <br> Ваш пароль: $password";
// }
// //удаление тегов
// if(isset($_POST['login']) && isset($_POST['pwd'])){
 
//     $login=strip_tags($_POST['login']);
//     $password = strip_tags($_POST['pwd']);
//     echo "Ваш логин: $login <br> Ваш пароль: $password";
// }
?>
        <div class="row">
            <!-- Левая колонка -->
            <div class="col-9">
                <div class="left">
                    <h1>Контакты</h1>
                    <form>
                        <fieldset>
                            <legend>Контакты</legend>        
                            <div class="maps">
                                <div>
                                <p>Телефон: (812) 812-12-12</p>
                                <p>Адрес: Санкт-Петербург, улица Пионерская, д. 22</p>
                            </div>
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af06d2c7d21d02e7e2e3966e6929103f5f05748fa4f05243867d0356d10261640&amp;source=constructor" width="550" height="350" frameborder="0">               
                                </iframe>
                            </div>                          
                        </fieldset>
                    </form>                    
                </div>
            </div>
            <!-- Правая колонка -->
            <div class="col-3" >
                <div class="right">
                    <h3>Регистрация и вход</h3>                   
                    <form action="#" method="post">
                        <fieldset>
                            <div>
                               
                                 <p>Регистрация</p>
                                <label for="name">Имя&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="text" name="" id="name" placeholder="Введите ваше имя">
                            </div>
                                <br>
                            <div>
                                <label for="email">Email&nbsp;&nbsp;</label>
                                <input type="email" name="" id="email" placeholder="Введите ваш email">
                                <br><br>
                                 <label for="password">Пароль&nbsp;&nbsp;</label>
                                <input type="password" name="" id="pwd1" placeholder="Придумайте пароль">
                                <br><br>
                                <button type="submit">Регистрация</button>
                            </div>
                            <br>                          
                          <!--   <form method="post" action="les4.php"> -->
                            <p>Вход</p>
                                <label for="login">Логин&nbsp;</label>
                                <input id="login" type="text" name="login" required>
                             <!--    <input class="btn" type="submit" name="form-reg" value="Отправить"> -->
                                <br><br>
                                <label for="pwd">Пароль</label>
                                <input id="pwd2" type="password" name="pwd" required>
                                <br><br>
                                <button type="submit">Войти</button>
                         <!--    </form> -->
                            <br><br><br><br><br>
                        </fieldset>                         
                    </form>                    
                </div> 
            </div>
        </div>
        <!-- Footer -->
   <?php include "footer.php";?>