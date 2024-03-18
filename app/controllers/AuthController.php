<?php

// AuthController.php

class AuthController
{
	protected $authModule;

	public function __construct(AuthModule $authModule)
	{
		$this->authModule = $authModule;
	}

	public function login()
	{
		// Obsługa logowania
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$username = $_POST['username'];
			$password = $_POST['password'];

			if ($this->authModule->login($username, $password)) {
				// Przekierowanie na stronę główną lub inną stronę po zalogowaniu
				header('Location: /');
				exit;
			} else {
				// Obsługa błędnego logowania
				echo "Niepoprawne dane logowania";
			}
		}

		// Wyświetlenie formularza logowania
		include ('../app/views/auth/login.php');
	}

	public function register()
	{
		// Obsługa rejestracji
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			// Dodatkowe dane rejestracji...

			if ($this->authModule->register($username, $email, $password)) {
				// Przekierowanie na stronę logowania lub wyświetlenie komunikatu o sukcesie
				header('Location: /login');
				exit;
			} else {
				// Obsługa błędu rejestracji
				echo "Błąd podczas rejestracji użytkownika";
			}
		}

		// Wyświetlenie formularza rejestracji
		include ('../app/views/auth/register.php');
	}
}



?>