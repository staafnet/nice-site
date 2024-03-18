<h2>Rejestracja</h2>
<form method="POST" action="/register">
	<div>
		<label for="username">Nazwa użytkownika:</label>
		<input type="text" id="username" name="username" required>
	</div>
	<div>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
	</div>
	<div>
		<label for="password">Hasło:</label>
		<input type="password" id="password" name="password" required>
	</div>
	<div>
		<button type="submit">Zarejestruj</button>
	</div>
</form>