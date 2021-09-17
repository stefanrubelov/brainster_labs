document.querySelector('#marketing').addEventListener("change", showMarketing);
document.querySelector('#programming').addEventListener("change", showProgramming);
document.querySelector('#design').addEventListener("change", showDesign);

function showMarketing() {
    hideAll();
    document.querySelector("#programming").checked = false;
    document.querySelector("#design").checked = false;

    if(document.querySelector('#marketing').checked) {
        document.querySelector("#filter-marketing").classList.add('active');
        document.querySelector("#filter-programming").classList.remove('active');
        document.querySelector("#filter-design").classList.remove('active');

        var marketingCards = document.querySelectorAll(".marketing");
            for(var i = 0; i < marketingCards.length; i++) {
                marketingCards[i].style.display = "inline-block";
            }
    } else {
        document.querySelector("#filter-marketing").classList.remove('active');
        showAll();
    }   
}
function showProgramming() {
    hideAll();
    document.querySelector("#marketing").checked = false;
    document.querySelector("#design").checked = false;

    if(document.querySelector('#programming').checked) {
        document.querySelector("#filter-programming").classList.add('active');
        document.querySelector("#filter-marketing").classList.remove('active');
        document.querySelector("#filter-design").classList.remove('active');

        var programmingCards = document.querySelectorAll(".programming");
            for(var i = 0; i < programmingCards.length; i++) {
                programmingCards[i].style.display = "inline-block";
            }
    } else {
        document.querySelector("#filter-programming").classList.remove('active');
        showAll();
    }   
};
function showDesign() {
    hideAll();
    document.querySelector("#programming").checked = false;
    document.querySelector("#marketing").checked = false;

    if(document.querySelector('#design').checked) {
        document.querySelector("#filter-design").classList.add('active');
        document.querySelector("#filter-programming").classList.remove('active');
        document.querySelector("#filter-marketing").classList.remove('active');
    
        var designCards = document.querySelectorAll(".design");
            for(var i = 0; i < designCards.length; i++) {
                designCards[i].style.display = "inline-block";
            }
    } else {
        document.querySelector("#filter-design").classList.remove('active');
        showAll();
    }   
};

function hideAll() {
    var cards = document.querySelectorAll(".programming, .design, .marketing");
    for(var i = 0; i < cards.length; i++) {
        cards[i].style.display = "none";
    }
};

function showAll() {
    var cards = document.querySelectorAll(".programming, .design, .marketing");
    for(var i = 0; i < cards.length; i++) {
        cards[i].style.display = "inline-block";
    }
};