// Open menu For Mobile

const body = document.querySelector("body");
const openMenu = document.querySelector("#open-menu");
const closeMenu = document.querySelector("#close-menu");
const topMenu = document.querySelector(".top-menu");

openMenu.addEventListener('click', function () {
    body.classList.add('menu-is-open');
});
closeMenu.addEventListener('click', function () {
    body.classList.remove('menu-is-open');
});

// Script for open links version or language

topMenu.addEventListener('click', function (e) {

    let clickedElem = e.target; //console.log(clickedElem);
    
    let parents = document.querySelectorAll(".parent");
    parents.forEach(function(item) {
        item.classList.remove("open-sub");
    });

    clickedElem.parentNode.classList.add('open-sub');
    //console.log(this);
    

});

document.addEventListener('click', function() {

    let isClickInside = topMenu.contains(event.target); //console.log(isClickInside);

    if (!isClickInside) {
        let parents = document.querySelectorAll(".parent");
        parents.forEach(function(item) {
            item.classList.remove("open-sub");
        });
    }
    
});



