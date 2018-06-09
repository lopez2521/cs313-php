function updateOrder() {
	const TAXRATE = .08;
	const SWEATSHIRT = 49.99;
	const SHIRT = 19.99;
	const HAT = 19.99;
	

	var sweatshirt = (document.getElementById('sweatshirt').value);
	var shirt = (document.getElementById('shirt').value);
	var hat = (document.getElementById('hat').value);
	


	var priceSweatshirt = (sweatshirt * SWEATSHIRT);
	var priceShirt = (shirt * SHIRT);
	var priceHat = (hat * HAT);

	var subTotal = priceHat + priceShirt + priceSweatshirt;
	var tax = subTotal * TAXRATE;
	var total = subTotal + tax;

	document.getElementById("subtotal").value = "$" + subTotal.toFixed(2);
	document.getElementById("tax").value = "$" + tax.toFixed(2);
	document.getElementById("total").value = "$" + total.toFixed(2);
}