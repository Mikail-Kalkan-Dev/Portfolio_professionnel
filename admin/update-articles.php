<div class="login__container grid">
	<form name="login__form" class="login__form grid" id="login-form" method="POST">
		<fieldset class="login__fieldset">
			<legend>Connexion</legend>
				<div class="contact__inputs grid">
					<div class="contact__content">
						<label for="nom" class="contact__label"><b>Nom</b></label>
						<input type="text" class="contact__input" placeholder="Nom" name="nom" required>
					</div>
					<div class="contact__content">
						<label for="email" class="contact__label"><b>Email</b></label>
						<input type="mail" class="contact__input" placeholder="email" name="email" required>
					</div>
					<div class="contact__content">
						<label for="password" class="contact__label"><b>Mot De Passe</b></label>
						<input type="password" class="contact__input" placeholder="PassWord" name="password" required>
					</div>

				<div class="contact__content">
					<label for="projet" class="contact__label">Projet</label>
					<input type="text" name="projet" id="sender-subject" class="contact__input">
				</div>
				<div class="contact__content">
					<label for="message" class="contact__label">Message</label>
					<textarea name="message" id="sender-message" cols="0" rows="7" class="contact__input"></textarea>
				</div>
			
				<div class="">
					<input class="button button--flex" type="submit" value='Connexion' name="submit">
				</div>

		</fieldset>
	</form>

</div>