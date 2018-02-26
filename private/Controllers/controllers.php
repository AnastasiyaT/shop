<?php
function indexAction() {
    $title = 'Главная';
    $view_filename = 'index_view.php'; // вид
    generateResponse($view_filename, [
        'title' => $title
    ]);
}

function catalogAction() {
    include "../privat/Models/catalog_model.php";
    $title = 'Каталог';
    $view_filename = 'catalog_model.php';
    $shows = getAllShows();
    generateResponse($view_filename, [
        'title' => $title,       
    ]);
}

function contactsAction() {
    include "../privat/Models/contacts_model.php";
    $title = 'Контакты';
    $view_filename = 'contacts_model.php';
    $shows = getAllShows();
    generateResponse($view_filename, [
        'title' => $title,        
    ]);
}


function regAction() {
    include "../privat/Models/contacts_model.php";
    $title = 'Регистрация';
    $view_filename = 'contacts_model.php';
    $shows = getAllShows();
    generateResponse($view_filename, [
        'title' => $title,        
    ]);
}
// function showsAction() {
//     include "../private/Models/shows_model.php";
//     $title = 'Афиша';
//     $view_filename = 'shows_view.php';
//     $shows = getAllShows();
//     generateResponse($view_filename, [
//         'title' => $title,
//         'shows' => $shows
//     ]);
// }

// function showAction() {
//     include "../private/Models/shows_model.php";
//     $get = $_GET;
//     if (isset($get['id'])) {
//         // получаем массив с show по id из GET запроса
//         $show_by_id = getShowById($get['id']);
//         $title = $show_by_id['title'];
//         $view_filename = 'show_view.php';
//         generateResponse($view_filename, [
//             'title' => $title,
//             'show' => $show_by_id
//         ]);
//     }
// }

// function account_authAction() {
//     include "../private/models/account_model.php";
//     include "../private/models/validator_model.php";
//     $post = $_POST;
//     $user_data = check_array_data(json_decode($post['auth_data'], true));
//     $all_users = getAllUsers();

//     foreach ($all_users as $value) {
//         if ($value['login'] == $user_data['login']) {
//             if ($value['pwd'] == $user_data['pwd']) {
//                 $_SESSION['auth'] = true;
//                 $_SESSION['login'] = $user_data['login'];
// //                $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
//                 echo $value['state'];
//                 return true;
//             }
//             echo 'pwd is wrong';
//             return false;
//         }
//     }
//     echo 'user not found';
//     return false;
// }

function generateResponse($view, $data=[]) {
    if(is_array($data)) {
        extract($data);
    }
    require_once "../privat/view/template_view.php";
}