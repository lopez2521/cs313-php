unction updateOrder() {
	const TAXRATE = .08;
	const ASSORTEDFLOWERS = 49.99;
	const REDROSES = 59.99;
	const SINGLEROSE = 9.99;
	const FAKEROSE = 8.99;
	const RIVETMODERNVASE = 29.99;
	const STONEWAREVASE = 19.99;

	var numAssortedFlowers = (document.getElementById('assortedflowers').value);
	var numRedRoses = (document.getElementById('redroses').value);
	var numSingleRose = (document.getElementById('singlerose').value);
	var numFakeRose = (document.getElementById('fakerose').value);
	var numRivetModernVase = (document.getElementById('rivetmodernvase').value);
	var numStonewareVase = (document.getElementById('stonewarevase').value);
	if (isNaN(numAssortedFlowers))
		numAssortedFlowers = 0;
	if (isNaN(numRedRoses))
		numRedRoses = 0;
	if (isNaN(numSingleRose))
		numSingleRose = 0;
	if (isNaN(numFakeRose))
		numFakeRose = 0;
	if (isNaN(numRivetModernVase))
		numRivetModernVase = 0;
	if (isNaN(numStonewareVase))
		numStonewareVase = 0;

	var priceAssortedFlowers = (numAssortedFlowers * ASSORTEDFLOWERS);
	var priceRedRoses = (numRedRoses * REDROSES);
	var priceSingleRose = (numSingleRose * SINGLEROSE);
	var priceFakeRose = (numFakeRose * FAKEROSE);
	var priceRivetModernVase = (numRivetModernVase * RIVETMODERNVASE);
	var priceStonewareVase = (numStonewareVase * STONEWAREVASE);

	var subTotal = priceRedRoses + priceAssortedFlowers + priceSingleRose +
		priceFakeRose + priceRivetModernVase + priceStonewareVase;
	var tax = subTotal * TAXRATE;
	var total = subTotal + tax;

	document.getElementById("subtotal").value = "$" + subTotal.toFixed(2);
	document.getElementById("tax").value = "$" + tax.toFixed(2);
	document.getElementById("total").value = "$" + total.toFixed(2);
}



// function updateOrder() {
//         const TAXRATE = 0.0925;
//         const DONUTPRICE = 0.50;
//         var numCakeDonuts = parseDonuts(document.getElementById("cakedonuts").value);
//         var numGlazedDonuts = parseDonuts(document.getElementById("glazeddonuts").value);
//         if (isNaN(numCakeDonuts))
//           numCakeDonuts = 0;
//         if (isNaN(numGlazedDonuts))
//           numGlazedDonuts = 0;
//         var subTotal = (numCakeDonuts + numGlazedDonuts) * DONUTPRICE;
//         var tax = subTotal * TAXRATE;
//         var total = subTotal + tax;
//         document.getElementById("subtotal").value = "$" + subTotal.toFixed(2);
//         document.getElementById("tax").value = "$" + tax.toFixed(2);
//         document.getElementById("total").value = "$" + total.toFixed(2);
//       }