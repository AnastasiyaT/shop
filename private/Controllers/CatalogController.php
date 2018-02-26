<?php
namespace Tyushina\Shop\Controllers;

use Web\Engine\Controller;

class CatalogController extends Controller
{
	private $template = 'template_view.php';


	function catalogAction() {
		$title = "Главная";
		$view_filename = 'catalog.php';
		return $this->generateResponse($view_filename, $this->template,
		[
			'title' => $title,
		] );
	}

}

?>