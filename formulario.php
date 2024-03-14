<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
        <form class="form">
	<h1>Generate your custom Toast Notification</h1>
        
	<div class="form__radios">
		<div class="form__radio">
			<p>Should your notification have buttons?</p>
			<input type="radio" name="buttons" id="buttonsNo" value="false" checked>
			<label for="buttonsNo">No</label>
			<input type="radio" name="buttons" id="buttonsYes" value="true">
			<label for="buttonsYes">Yes</label>
		</div>
		<div class="form__radio">
			<p>Should the user be allowed to close the window themselves?</p>
			<input type="radio" name="close" id="closeNo" value="false">
			<label for="closeNo">No</label>
			<input type="radio" name="close" id="closeYes" value="true" checked>
			<label for="closeYes">Yes</label>
		</div>
	</div>
	
	<div class="form__radios" id="buttonsDiv">
		<div class="form__inputs">
			<label for="button1">Set first button text (optional)</label>
			<input type="text" name="button1" id="button1" maxlength="20" />
		</div>
		<div class="form__inputs">
			<label for="button2">Set second button text (optional)</label>
			<input type="text" name="button2" id="button2" maxlength="20" />
		</div>
	</div>

	<div class="form__inputs">
		<label for="heading">Set a custom heading (optional)</label>
		<input type="text" name="heading" id="heading" />
		<label for="paragraph">Set a custom text (optional)</label>
		<input type="text" name="paragraph" id="paragraph" />
	</div>

	<div class="form__buttons">
		<button class="btn btn--regular" value="regular">Create Regular notification</button>
		<button class="btn btn--success" value="success">Create Susccess notification</button>
		<button class="btn btn--error" value="error">Create Error notification</button>
		<button class="btn btn--warning" value="warning">Create Warning notification</button>
	</div>
        </form>

<div class="toast">

</div>
</body>
</html>
