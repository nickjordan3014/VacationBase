function resetStars(ids) {
    for (i = 0; i < 5; i++) {
        document.getElementById(ids[i]).src = "img/icons-VB/blackstar.png"
    }
}
function changeStar(ids, index) {
    for (i = 0; i <= index; i++) {
        document.getElementById(ids[i]).src = "img/icons-VB/goldstar.png"
    }
}

function starsInit() {
    const starIDS = [
        "star-1",
        "star-2",
        "star-3",
        "star-4",
        "star-5"
    ];
    document.getElementById(starIDS[0]).onclick = function() {
        resetStars(starIDS);
        changeStar(starIDS, 0);
    }
    document.getElementById(starIDS[1]).onclick = function() {
        resetStars(starIDS);
        changeStar(starIDS, 1);
    }
    document.getElementById(starIDS[2]).onclick = function() {
        resetStars(starIDS);
        changeStar(starIDS, 2);
    }
    document.getElementById(starIDS[3]).onclick = function() {
        resetStars(starIDS);
        changeStar(starIDS, 3);
    }
    document.getElementById(starIDS[4]).onclick = function() {
        resetStars(starIDS);
        changeStar(starIDS, 4);
    }
}

window.addEventListener("load", starsInit, false);