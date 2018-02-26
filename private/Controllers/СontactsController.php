<?php
namespace Tyushina\Shop\Controllers;

use Web\Engine\Controller;

class ContactsController extends Controller
{
	private $template = 'template_view.php';


	function contactsAction() {
		$title = "Главная";
		$view_filename = 'contacts.php';
		return $this->generateResponse($view_filename, $this->template,
		[
			'title' => $title,
		] );
	}

}

?>