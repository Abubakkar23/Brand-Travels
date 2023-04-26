// First Class Ticket Quantity Increase Btn Event
const firstClassIncreaseBtn = document.getElementById('first-class-increase');
firstClassIncreaseBtn.addEventListener('click', function () {
	firstClassTicketQuantity(true);
    calculateTicketFare()
});

// First Class Ticket Quantity Decrease Btn Event
const firstClassDecreaseBtn = document.getElementById('first-class-decrease');
firstClassDecreaseBtn.addEventListener('click', function () {
	firstClassTicketQuantity(false);
    calculateTicketFare()
});

// First Economy Ticket Quantity Increase Btn Event
const economyClassIncreaseBtn = document.getElementById('economy-class-increase');
economyClassIncreaseBtn.addEventListener('click', function (){
    economyClassTicketQuantity(true);
    calculateTicketFare()
})

// First Economy Ticket Quantity Decrease Btn Event
const economyClassDecreaseBtn = document.getElementById('economy-class-decrease');
economyClassDecreaseBtn.addEventListener('click', function (){
    economyClassTicketQuantity(false);
    calculateTicketFare()
})

// First Class Ticket Quantity Calculation
function firstClassTicketQuantity(isIncreased) {
	const firstClassTicketInput = document.getElementById('first-class-input').value;
	const firstClassTicketValue = parseInt(firstClassTicketInput);
	let newFirstClassTicketValue = firstClassTicketValue;
	if (isIncreased == true) {
		newFirstClassTicketValue = firstClassTicketValue + 1;
	}
	if (isIncreased == false && firstClassTicketValue > 0) {
		newFirstClassTicketValue = firstClassTicketValue - 1;
	}
	document.getElementById('first-class-input').value = newFirstClassTicketValue;
}

// Economy Class Ticket Quantity Calculation
function economyClassTicketQuantity(isIncreased){
    const economyClassTicketInput = document.getElementById('economy-class-input').value;
	const economyClassTicketValue = parseInt(economyClassTicketInput);
	let newEconomyClassTicketValue = economyClassTicketValue;
	if (isIncreased == true) {
		newEconomyClassTicketValue = economyClassTicketValue + 1;
	}
	if (isIncreased == false && economyClassTicketValue > 0) {
		newEconomyClassTicketValue = economyClassTicketValue - 1;
	}
	document.getElementById('economy-class-input').value = newEconomyClassTicketValue;
}

// Ticket Fare Calculation
function calculateTicketFare(){
    const firstClassInputValue = document.getElementById('first-class-input').value;
    const firstClassTicketCost = firstClassInputValue * 500;
    const economyClassInputValue = document.getElementById('economy-class-input').value;
    const economyClassTicketCost = economyClassInputValue * 300;
    const totalCost = firstClassTicketCost + economyClassTicketCost;
    document.getElementById('ticket-price').innerText = 'Rs.' + totalCost;
    const vat = Math.round(totalCost * 0.1);
    document.getElementById('vat-amount').innerText = 'Rs.' + vat;
    const grandTotal = totalCost + vat;
    document.getElementById('grand-total').innerText = 'Rs.' + grandTotal;
}

//no of seat
function noofseats(isIncreased) {
    const noofseat = document.getElementById('seatno').value;
    const seatvalue = parseInt(noofseat);
    let newSeatvalue = seatvalue;
    if (isIncreased == true) {
        newSeatvalue = seatvalue + 1;
    }
    if (isIncreased == false && seatvalue > 0) {
        newSeatvalue = seatvalue - 1;
    }
    document.getElementById('seatno').value = newSeatvalue;
}

// Book now button work 
const bookNowBtn = document.getElementById('book-now-btn');
bookNowBtn.addEventListener('click' , function (){
    document.getElementById('booking-form').style.display = 'none';
    document.getElementById('new-booking-area').style.backgroundColor = '#34495e';
    document.getElementById('new-booking-area').style.color = '#fff';
    document.getElementById('new-booking-area').style.fontSize = '20px';
    const firstClassInputValue = document.getElementById('first-class-input').value;
    const economyClassInputValue = document.getElementById('economy-class-input').value;
    document.getElementById('first-class-quantity').innerText = 'First Class Ticket Quantity: ' + firstClassInputValue;
    const firstClassTicketCost = firstClassInputValue * 500;
    document.getElementById('first-class-ticket-price').innerText = 'First Class Ticket Cost: ' + firstClassTicketCost;
    document.getElementById('economy-class-quantity').innerText = 'Economy Class Ticket Quantity: ' + economyClassInputValue;
    const economyClassTicketCost = economyClassInputValue * 300;
    document.getElementById('economy-class-ticket-price').innerText = 'Economy Class Ticket Cost: ' + economyClassTicketCost;
    const totalCost = firstClassTicketCost + economyClassTicketCost;
    document.getElementById('total-price').innerText = 'Total Ticket Fare: ' + totalCost; 
    const vat = Math.round(totalCost * 0.1);
    const grandTotal = totalCost + vat;
    document.getElementById('grand-price').innerText = 'Grand Total including VAT: ' + grandTotal;

    var gtotal = grandTotal;

    document.getElementById('seatno').innerText = 'seat no: ' + noofseat;

})