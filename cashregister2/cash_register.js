//1. Create variables
let totalPriceHamburger = 0;
let totalPriceMilkshake = 0;
let totalPriceFrenchfries = 0;
let totalPriceCheeseburger = 0;
let totalPriceChickenburger = 0;
let totalPriceFishburger = 0;

//2. Main function to update the number and price for each snack
function addSnack(snackName, snackPrice) {
    switch (snackName) {
        case "Hamburger":
            //add 1 snack to the total number of snacks
            totalPriceHamburger += snackPrice;
            totalPriceHamburger = roundIt(totalPriceHamburger);
            let currentNumberHamburger = parseInt(document.getElementById("Hamburger").value);
            document.getElementById("Hamburger").value = currentNumberHamburger + 1;
            break;
        case "Milkshake":
            totalPriceMilkshake += snackPrice;
            totalPriceMilkshake = roundIt(totalPriceMilkshake);
            let currentNumberMilkshake = parseInt(document.getElementById("Milkshake").value);
            document.getElementById("Milkshake").value = currentNumberMilkshake + 1;
            break;
        case "Frenchfries":
            totalPriceFrenchfries += snackPrice;
            totalPriceFrenchfries = roundIt(totalPriceFrenchfries);
            let currentNumberFrenchfries = parseInt(document.getElementById("Frenchfries").value);
            document.getElementById("Frenchfries").value = currentNumberFrenchfries + 1;
            break;
        case "Cheeseburger":
            totalPriceCheeseburger += snackPrice;
            totalPriceCheeseburger = roundIt(totalPriceCheeseburger);
            let currentNumberCheeseburger = parseInt(document.getElementById("Cheeseburger").value);
            document.getElementById("Cheeseburger").value = currentNumberCheeseburger + 1;
            break;
        case "Chickenburger":
            totalPriceChickenburger += snackPrice;
            totalPriceChickenburger = roundIt(totalPriceChickenburger);
            let currentNumberChickenburger = parseInt(document.getElementById("Chickenburger").value);
            document.getElementById("Chickenburger").value = currentNumberChickenburger + 1;
            break;
        case "Fishburger":
            totalPriceFishburger += snackPrice;
            totalPriceFishburger = roundIt(totalPriceFishburger);
            let currentNumberFishburger = parseInt(document.getElementById("Fishburger").value);
            document.getElementById("Fishburger").value = currentNumberFishburger + 1;
            break;
    }
    //3. Update the total price
    let totalPrice = totalPriceHamburger + totalPriceMilkshake + totalPriceFrenchfries + totalPriceCheeseburger + totalPriceChickenburger + totalPriceFishburger;
    totalPrice = roundIt(totalPrice);

    // show the total price
    document.getElementById("totalOrderAmount").value = totalPrice;
}


//3. Function to round the amounts to 2 decimals
function roundIt(amountToRound) {
    amountToRound = Math.round(amountToRound * 100)/100;
    return amountToRound;
}




//4. Function to show the info of the order
function showinfo() {
    //4.1. Get the number of each snack
    let numberHamburger = parseInt(document.getElementById("Hamburger").value);
    let numberMilkshake = parseInt(document.getElementById("Milkshake").value);
    let numberFrenchfries = parseInt(document.getElementById("Frenchfries").value);
    let numberCheeseburger = parseInt(document.getElementById("Cheeseburger").value);
    let numberChickenburger = parseInt(document.getElementById("Chickenburger").value);
    let numberFishburger = parseInt(document.getElementById("Fishburger").value);

    //4.2. Get the total price of each snack
    let totalPriceHamburgernow = totalPriceHamburger;
    let totalPriceMilkshakenow = totalPriceMilkshake;
    let totalPriceFrenchfriesnow = totalPriceFrenchfries;
    let totalPriceCheeseburgernow = totalPriceCheeseburger;
    let totalPriceChickenburgernow = totalPriceChickenburger;
    let totalPriceFishburgernow = totalPriceFishburger;

    //4.3. Get the total price
    let totalPrice = totalPriceHamburgernow + totalPriceMilkshakenow + totalPriceFrenchfriesnow + totalPriceCheeseburgernow + totalPriceChickenburgernow + totalPriceFishburgernow;
    totalPrice = roundIt(totalPrice);

    let text = "hamburger: " + numberHamburger + " x " + totalPriceHamburgernow + " = " + totalPriceHamburger + "\n" + "milkshake: " + numberMilkshake + " x " + totalPriceMilkshakenow + " = " + totalPriceMilkshake + "\n" + "frenchfries: " + numberFrenchfries + " x " + totalPriceFrenchfriesnow + " = " + totalPriceFrenchfries + "\n" + "cheeseburger: " + numberCheeseburger + " x " + totalPriceCheeseburgernow + " = " + totalPriceCheeseburger + "\n" + "chickenburger: " + numberChickenburger + " x " + totalPriceChickenburgernow + " = " + totalPriceChickenburger + "\n" + "fishburger: " + numberFishburger + " x " + totalPriceFishburgernow + " = " + totalPriceFishburger + "\n" + "total price: " + totalPrice;
    //4.4. Show the info in a text area
    document.getElementById("info").innerHTML = text;
}
