<!-- Feedback Form -->
<form class="form contact-form custom-borders animate__fadeInUp animate__animated wow">
	<div class="form-row">
		<div class="form-group col-md-6">
			<input type="text" class="form-control" placeholder="Name" name="name">
		</div>
		<div class="form-group col-md-6">
			<input type="email" class="form-control" placeholder="Email" name="email">
		</div>

		<div class="form-group col-md-6">
			<input type="tel" class="form-control" placeholder="Phone Number" name="phone">
		</div>
		<div class="form-group col-md-6">
			<select class="form-control" name="service">
				<option selected disabled hidden>Service...</option>
				<option>IT Support</option>
				<option>Consulting</option>
				<option>Business Intelligence</option>
			</select>
		</div>

	</div>
	<div class="form-group">
		<textarea class="form-control" rows="5" placeholder="Message*" name="message"></textarea>
	</div>
	<button type="submit" class="btn btn-primary form-submit">Send message</button>
</form>