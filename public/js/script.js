const toggleImage = document.getElementById("darkModeToggleImage");

//Check if a theme is active
if (localStorage.getItem("theme") === null) {
    localStorage.setItem("theme", "light");
}

let localData = localStorage.getItem("theme");

//Check whether the user uses dark or light mode on his machine
//If the localData variable is set to "light" it will override the darkmode of the machine if that's active
let matched = window.matchMedia('(prefers-color-scheme: dark)').matches;

if (matched) {
    toggleImage.src = "images/sun.png";
    document.body.classList.add("darkmode");
    if (localData == "light") {
        toggleImage.src = "images/moon.png";
        document.body.classList.remove("darkmode");
    }
} else if (!matched) {
    toggleImage.src = "images/moon.png";
    document.body.classList.remove("darkmode");
    if (localData == "dark"){
        toggleImage.src = "images/sun.png";
        document.body.classList.add("darkmode");
    }
}

//Adds functionality to the moon/sun icon
toggleImage.onclick = function () {
    console.log("clicked");
    document.body.classList.toggle("darkmode")
    if (document.body.classList.contains("darkmode")) {
        toggleImage.src = "images/sun.png";
        localStorage.setItem("theme", "dark");
    } else {
        toggleImage.src = "images/moon.png";
        localStorage.setItem("theme", "light");
    }
}
