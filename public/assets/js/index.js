let body = document.querySelector("body");
let workout = document.querySelectorAll(".workout");
let dynamic = document.querySelector("#dynamic");
let dynamicV = document.querySelector("#dynamic video");

/*BUTTONS*/

window.addEventListener('load', function() {
    body.style.opacity = "1";
})



for (el of workout) {
    el.addEventListener("click", function() {
        checkActive();
        dynamic.style.opacity = "0";
        let proj = this.attributes.proj.value;
        setTimeout(function() {
            dynamicV.src = "../assets/resources/proj" + proj + ".mp4";
            setTimeout(function() { dynamic.style.opacity = "1" }, 200);
        }, 200);
        this.classList.toggle("active");
    });
}

function checkActive() {
    for (el of workout) {
        el.classList.remove("active");
    }
}

/* VIDEO */

dynamic.addEventListener("mouseover", function() {
    playVideo(dynamicV);
    dynamic.addEventListener("mouseout", function() {
        pauseVideo(dynamicV);
    })
})

function playVideo(video) {
    video.play();
}

function pauseVideo(video) {
    video.pause();
}