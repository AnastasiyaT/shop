<?php
namespace Tyushina\Shop\Controllers;

use Web\Engine\Controller;

class RegController extends Controller
{
	private $template = 'template_view.php';


	function catalogAction() {
		$title = "Регистрация";
		$view_filename = 'reg.php';
		return $this->generateResponse($view_filename, $this->template,
		[
			'title' => $title,
		] );
	}

}

?>