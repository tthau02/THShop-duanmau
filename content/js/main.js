let list = document.querySelector('.slider .list');
let items = document.querySelectorAll('.slider .list .item');
let dots = document.querySelectorAll('.slider .dots li');
let prev = document.getElementById('prev');
let next = document.getElementById('next');

let active = 0;
let lengthItem = items.length;

next.onclick = function(){
    if(active + 1 >= lengthItem){
        active = 0;
    }else{
        active = active + 1;
    }
    reloadSlider();
}

prev.onclick = function(){
    if (active - 1 < 0){
        active = lengthItem - 1;
    } else{
        active = active - 1;
    }
    reloadSlider();
}

let refreshSlider = setInterval(() => {next.click()}, 5000);

function reloadSlider(){
    let checkLeft = items[active].offsetLeft;
    list.style.left = -checkLeft + 'px';

    let lastActiveDot = document.querySelector('.slider .dots li.active');
    lastActiveDot.classList.remove('active');
    dots[active].classList.add('active');

    clearInterval(refreshSlider);
    refreshSlider = setInterval(() => {next.click()}, 5000);
}

dots.forEach((li, key) =>{
    li.addEventListener('click', function(){
        active = key;
        reloadSlider();
    })
})


const buyBtns = document.querySelectorAll('.js-buy-ticket');
const modal = document.querySelector('.js-modal');
const modalClose = document.querySelector('.js-modal-close');
const modalContainer = document.querySelector('.js-modal-container');

function showBuyTickets(event) {
    event.preventDefault(); // Prevent default anchor behavior
    modal.classList.add('open');
}

function hideBuyTickets() {
    modal.classList.remove('open');
}

buyBtns.forEach(buyBtn => {
    buyBtn.addEventListener('click', showBuyTickets);
});

modalClose.addEventListener('click', hideBuyTickets);
modal.addEventListener('click', hideBuyTickets);
modalContainer.addEventListener('click', function(event) {
    event.stopPropagation();
});


let signinBtn = document.getElementById("signinBtn");
let signupBtn = document.getElementById("signupBtn");
let emailField = document.getElementById("emailField");
let phoneField = document.getElementById("phoneField");

signinBtn.onclick = function(){
    emailField.style.maxHeight = "0";
    phoneField.style.maxHeight = "0";
}
signupBtn.onclick = function(){
    emailField.style.maxHeight = "60px";
    phoneField.style.maxHeight = "60px";
}


