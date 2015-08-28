<div class="container">	
	<div class="row shop-container">
		
		<div class="col-md-7">
			<div class="row" id="shipping_email">
				<h4>Customer information</h4>
				<div class="form-group has-feedback" style="margin-top:15px;">
				  	<input type="email" id="shop_email" class="form-control" placeholder="Email" autofocus>
				</div>
				<button class="btn pull-right shipping-btn" id="next_payment" disabled>Next - Payment Methods</button>
			</div>

			<!-- Shipping infomation -->
			<div class="row" id="shipping_table" style="display:none;">
				
				<h4>SHIPPING INFORMATION<span id="back" class="pull-right">back</span></h4>
				<div class="col-md-12 panel panel-default" style="margin-top:5px;">
					<table class="table">
						<tr class="address-table-font">
							<td class="address-table-prefix">First name</td>
							<td>
								<input type="text" id="first_name" class="form-control" placeholder="First name">
							</td>
						</tr>
						<tr class="address-table-font">
							<td class="address-table-prefix">Last name</td>
							<td>
								<input type="text" id="last_name" class="form-control" placeholder="Last name">
							</td>
						</tr>
						<tr class="address-table-font">
							<td class="address-table-prefix">Address Line 1</td>
							<td>
								<input type="text" id="address" class="form-control" placeholder="Address Line 1">
							</td>
						</tr>
						<tr class="address-table-font">
							<td class="address-table-prefix">Address Line 2</td>
							<td>
								<input type="text" id="address2" class="form-control" placeholder="Address Line 2">
							</td>
						</tr>
						<tr class="address-table-font">
							<td class="address-table-prefix">City</td>
							<td>
								<input type="text" id="city" class="form-control" placeholder="City">
							</td>
						</tr>
						<tr class="address-table-font">
							<td class="address-table-prefix">Region</td>
							<td>
								<input type="text" id="region" class="form-control" placeholder="Region">
							</td>
						</tr>
						<tr class="address-table-font">
							<td class="address-table-prefix">Country</td>
							<td>
								<select class="form-control" id="country" name="country"></select>								
							</td>
						</tr>
						<tr class="address-table-font">
							<td class="address-table-prefix">Postal code</td>
							<td>
								<input type="text" id="postal_code" class="form-control" placeholder="Postal code">
							</td>
						</tr>

						<tr class="address-table-font">
							<td class="address-table-prefix">Phone</td>
							<td>
								<input type="text" id="phone" class="form-control" placeholder="Phone">
							</td>
						</tr>
					</table>
				</div>
				
				<div class="col-md-12" style="margin-top:20px; padding-left:0px; padding-right:0px;">
					<h4>BILLING ADDRESS</h4>			
				
					<div class="checkbox">
					    <label>
					    	<input type="checkbox" id="billing_my_shipping" style="margin-top:8px;" checked> USE MY SHIPPING ADDRESS
					    </label>
					</div>

					<div class="col-md-12 panel panel-default" style="margin-top:5px;">
						<table class="table" id="billing_my_shipping_table" style="display:none;">
							<tr class="address-table-font">
								<td class="address-table-prefix">Name</td>
								<td>
									<input type="text" id="billing_full_name" class="form-control" placeholder="Your Full Name">
								</td>
							</tr>
							
							<tr class="address-table-font">
								<td class="address-table-prefix">Address Line 1</td>
								<td>
									<input type="text" id="billing_address" class="form-control" placeholder="Address Line 1">
								</td>
							</tr>
							<tr class="address-table-font">
								<td class="address-table-prefix">Address Line 2</td>
								<td>
									<input type="text" id="billing_address2" class="form-control" placeholder="Address Line 2">
								</td>
							</tr>
							<tr class="address-table-font">
								<td class="address-table-prefix">City</td>
								<td>
									<input type="text" id="billing_city" class="form-control" placeholder="City">
								</td>
							</tr>
							<tr class="address-table-font">
								<td class="address-table-prefix">Region</td>
								<td>
									<input type="text" id="billing_region" class="form-control" placeholder="Region">
								</td>
							</tr>
							<tr class="address-table-font">
								<td class="address-table-prefix">Country</td>
								<td>
									<select class="form-control" id="billing_country" name="billing_country"></select>								
								</td>
							</tr>
							<tr class="address-table-font">
								<td class="address-table-prefix">Postal code</td>
								<td>
									<input type="text" id="billing_postal_code" class="form-control" placeholder="Postal code">
								</td>
							</tr>						
						</table>
					</div>

				</div> <!-- col-md-12 end. -->
				<button class="btn pull-right shipping-btn" id="continue_pay">Continue to payment</button>
			</div> <!-- row end. -->
			<!-- Shipping infomation end. -->

			<!-- shipping summary -->
			<div class="row" id="shipping_summary" style="display:none;">
				<h4>SHIPPING SUMMARY<span id="edit" class="pull-right">Edit</span></h4>
				<p style="margin-top:30px;" id="shipping_sum_email">email</p>
				<p style="margin-top:20px;" id="shipping_sum_full_name">name</p>
				<p id="shipping_sum_address">address1</p>
				<p id="shipping_sum_region">city, region, postal cdoe</p>
				<hr>

				<div class="col-md-12 panel panel-default" style="margin-top:5px;">
					<table class="table">
						<tr class="address-table-font">
							<td class="address-table-prefix">Card</td>
							<td>								
								<input class="number credit-card-number form-control" id="card_number" type="text" name="number" inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">

							</td>
						</tr>
						<tr class="address-table-font">
							<td class="address-table-prefix">Expiration</td>
							<td>								
								<input class="expiration-month-and-year form-control" id="expiration" type="text" name="expiration-month-and-year" placeholder="MM / YY">
							</td>
						</tr>
						<tr class="address-table-font">
							<td class="address-table-prefix">CVC code</td>
							<td>								
								<input class="security-code form-control" id="cvc" inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
							</td>
						</tr>					
					</table>
				</div>
				<button class="btn pull-right shipping-btn" id="place_order">Place order</button>
				
				<div class="col-md-12 text-center" style="padding-left:0px; padding-right:0px;">
					<hr>				
					<h4>PAY WITH PAYPAL</h4>
					<button class="btn shipping-btn" id="place_order">Paypal</button>
				</div>
			</div> <!-- row end. -->
			<!-- shipping summary end. -->
		</div>
		<!-- col-md-7 end. -->

		<!-- summary-box -->
		<div class="col-md-4 col-md-offset-1 summary-box">
			<div class="col-md-12">
				<h3 class="text-center summary-text">SUMMARY</h3>
				
				<div class="row">
					<div class="col-md-4">
						<img src="./public/images/musio_shop.png" class="musio-shop-img">
					</div>

					<div class="col-md-8">
						<p style="font-size:15px;">Musio K package</p>
						<h3>$99.00</h3>
						<div class="quantity pull-right">
							<div class="ui button blue" id="subtraction">-</div>
							<span class="count">1</span>
							<div class="ui button blue" id="addition">+</div>
						</div>					
					</div>
				</div>

				<div class="row" id="shop-info">
					<div class="col-md-5">
						<p>SUB TOTAL</p>
						<p>SHIPPING</p>
						<p>TOTAL</p>
					</div>

					<div class="col-md-7">
						<p id="sub-total">$ 99.00</p>
						<p>FREE</p>
						<p id="total">$ 99.00 USD</p>
					</div>
				</div>
			</div> <!-- col-md-12 end. -->
		</div> <!-- summary-box end. -->		
	</div> <!-- shop-container end. -->
</div> <!-- /container -->