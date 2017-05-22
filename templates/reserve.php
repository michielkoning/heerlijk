<div id="reserve">

	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<h2>Reserveren</h2>

				<div class="row">
					<div class="col-md-5 pull-right" style="font-size: 15px; line-height: 22px; margin-top: 25px;">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptate rem ipsam debitis est corporis cum id, sapiente culpa delectus quod magnam cupiditate magni sit!</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed facere illum, doloremque harum modi natus!</p>
					</div>
					<div class="col-md-7">

						<form style="margin-top: 0px;">
							<div class="form-group">
								<label for="name" class="control-label">Naam:</label>
								<input type="text" class="form-control" id="name" name="name" required maxlength="100">
							</div>

							<div class="form-group">
								<label for="phone" class="control-label">Telefoonnummer:</label>
								<input type="tel" class="form-control" id="phone" name="phone" required>
							</div>

							<div class="form-group">
								<label for="persons" class="control-label">Aantal personen:</label>
								<input type="number" class="form-control" id="persons" name="persons" required>
							</div>

							<div class="row">
								<div class="col-md-6">

									 <div class="form-group">
										 <label for="date" class="control-label">Datum:</label>
										 <input type="date" class="form-control" id="date" name="date" value="<?php echo date("Y-m-d"); ?>">
									 </div>

								 </div>

								 <div class="col-md-6">
									<div class="form-group">
										<label for="time" class="control-label">Tijd:</label>
										<input type="time" class="form-control" name="time" id="time" value="19:00">
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="remarks" class="control-label">Eventuele opmerkingen:</label>
								<textarea class="form-control" id="remarks" name="remarks" cols="1" rows="6"></textarea>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-lg">Reserveren</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>