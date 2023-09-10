const button = document.querySelector("button"),
    toast = document.querySelector(".toast")
closeIcon = document.querySelector(".close"),
    progress = document.querySelector(".progress");

let timer1, timer2;

function toasterShow() {
    toast.classList.add("active");
    progress.classList.add("active");

    timer1 = setTimeout(() => {
        toast.classList.remove("active");
    }, 5000); //1s = 1000 milliseconds

    timer2 = setTimeout(() => {
        progress.classList.remove("active");
    }, 5300);
}
toasterShow();
