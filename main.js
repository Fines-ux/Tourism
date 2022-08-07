const calculate = document.querySelector('.calculate');

calculate.addEventListener('click', (e)=> {
    e.preventDefault();

    const numPeople = document.getElementById('number').value;

    const currency = document.getElementById('currency-charge').value;

    const percentage = document.getElementById('discount-percentage').value;

    const fullAmt = document.getElementById('full-amount');
    const discountAmt = document.getElementById('discount-amount');
    const afterdiscount= document.getElementById('amount-after-discount');

    fullAmt.value = numPeople * currency;

    // if (numPeople == 20 || numPeople == 40) {
    //     if (numPeople == 20 && percentage == 5 || numPeople == 40 && percentage == 8) {
    //         discountAmt.value = ((numPeople * currency) * percentage / 100);
    //         afterdiscount.value = ((numPeople * currency) - discountAmt.value);                
    //     } else {
    //         discountAmt.value = "select correct discount % above";
    //         afterdiscount.value = "select correct discount % above";           
    //     }
            
    // } else {
    //     discountAmt.value = "No discount for " + numPeople +" people";
    //     afterdiscount.value = "No discount for " + numPeople +" people";         
    // }


    if((numPeople >= 20 && numPeople <= 40)  || (numPeople >= 40)){

        if ((numPeople >= 20 && numPeople <= 40)  && percentage == 5 || (numPeople >= 40) && percentage == 8) {
            discountAmt.value = ((numPeople * currency) * percentage / 100);
            afterdiscount.value = ((numPeople * currency) - discountAmt.value);                
        } else {
            discountAmt.value = "select correct discount % above";
            afterdiscount.value = "select correct discount % above";           
        }
            
    } else {
        discountAmt.value = "No discount for " + numPeople +" people";
        afterdiscount.value = "No discount for " + numPeople +" people";         
        }
    }
);