//  Button from P1 to P2 
$(document).on("click", "#button1", function () {
    $.mobile.changePage("#page2", {
        transition: "slideup",
        changehash: false
    })
});

//  Back Button in Header
$(document).on("click", "#start", function () {
    $.mobile.changePage("#page1", {
        transition: "slideup",
        changehash: false
    })
});

//  Button from P1 to P4 
$(document).on("click", "#button2", function () {
    $.mobile.changePage("#page4", {
        transition: "slideup",
        changehash: false
    })
});