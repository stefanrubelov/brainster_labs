document.querySelector('#toggler-hide').addEventListener("click", wrapperHide);

function wrapperHide() {
    if (document.getElementById('wrapper').style.display == "block" || document.getElementById('wrapper').style.display == "") {
        document.getElementById('wrapper').style.display = "none";
        document.getElementById('wrapper-hide').style.visibility = "hidden";
        document.getElementById('top').style.backgroundColor = "#292b2c";
            let whiteText = document.getElementsByClassName('nav-link'), i;
            for (let i = 0; i < whiteText.length; i++) {
                whiteText[i].style.color = "white";
            }

        document.getElementById('menu-logo').style.display = "none";
        document.getElementById('menu-logo-2').style.display = "block";
        document.getElementsByTagName('body')[0].style.overflowY= "hidden";
    } else {
        document.getElementById('wrapper').style.display = "block";
        document.getElementById('wrapper-hide').style.visibility = "unset";
        document.getElementById('top').style.backgroundColor = "rgb(255, 195, 65)";
            let whiteText = document.getElementsByClassName('nav-link');
            for (let i = 0; i < whiteText.length; i++) {
                whiteText[i].style.color = "#343a40";
            }

        document.getElementById('menu-logo').style.display = "block";
        document.getElementById('menu-logo-2').style.display = "none";
        document.getElementsByTagName('body')[0].style.overflowY = "";
    }
}