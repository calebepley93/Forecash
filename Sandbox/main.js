document.querySelectorAll('.market-pill-btn').forEach(function(button) {
    button.addEventListener('click', function(event) {
        var target = event.target.closest('.market-pill-btn');
        var category = target.getAttribute('data-category');

        filterMarkets(category);
        changeButtonStates(category);
    });
});

function filterMarkets(category) {
    var markets = document.querySelectorAll('.market-card');

    markets.forEach(function(market) {
        var marketCategory = market.querySelector('.market-kind').textContent;

        if (category === 'all' || category === marketCategory) {
            market.style.display = 'block';
        } else {
            market.style.display = 'none';
        }
    });
}

function changeButtonStates(category) {
    var buttons = document.querySelectorAll('.market-pill-btn');

    buttons.forEach(function(button) {
        var buttonCategory = button.getAttribute('data-category');

        if (category === buttonCategory) {
            button.classList.remove('inactive');
            button.classList.add('active');
        } else {
            button.classList.remove('active');
            button.classList.add('inactive');
        }
    });
}

var modal = document.getElementById('loginModal');
var btn = document.getElementById('loginBtn'); 
var span = document.getElementsByClassName('close')[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

btn.onclick = function() {
    modal.style.display = "block";
    document.body.style.overflow = "hidden"; 
}

span.onclick = function() {
    modal.style.display = "none";
    document.body.style.overflow = "auto"; 
}

var signUpModal = document.getElementById('signupModal');
var signUpBtn = document.getElementById('signupBtn');
var signUpSpan = document.getElementsByClassName('close')[1];

signUpBtn.onclick = function() {
    signUpModal.style.display = "block";
}

signUpSpan.onclick = function() {
    signUpModal.style.display = "none";
}