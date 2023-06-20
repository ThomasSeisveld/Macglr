//1. Create variables
let totalPriceHamburger = 0;

//2. Main function to update the number and price for each snack
function addSnack(snackName, snackPrice) {
    switch (snackName) {
        case "Hamburger":
            //Increase number of hamburgers
            let howManyHamburger = Number(document.getElementById("???").value);
            howManyHamburger++;
            document.getElementById("???").value = howManyHamburger;
            
            //Increase total price of hamburgers
            totalPriceHamburger = (howManyHamburger * ???);
            totalPriceHamburger = roundIt(totalPriceHamburger);
            document.getElementById("???").value = ???;
            break;
 
    }
    //Update total amount for this order
    document.getElementById("totalOrderAmount").value = Number(totalPriceHamburger).toFixed(2);
}

//3. Function to round the amounts to 2 decimals
function roundIt(amountToRound) {
    amountToRound = Math.round(amountToRound * 100)/100;
    return amountToRound;
}
