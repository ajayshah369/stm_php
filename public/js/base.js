const btt = document.getElementById("back-to-top");

window.addEventListener("scroll", function () {
    window.scrollY > 300
        ? btt.classList.add("show")
        : btt.classList.remove("show");
});

btt.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth",
    });
});

const x = [
    "<i class='bx bxl-whatsapp'></i>",
    "<i class='bx bxs-phone-call' ></i>",
    "<i class='bx bx-envelope'></i>",
];

const a = document.getElementById("a");
a.innerHTML = x[0];

let i = 1;
let interval = setInterval(function () {
    a.innerHTML = x[i];
    i++;
    if (i >= x.length) {
        i = 0;
    }
}, 2000);

const aaa = document.getElementById("a");
const ac = document.getElementById("ac");
const callBack = document.getElementById("call-back");
const callBackReqC = document.getElementById("call-back-req-container");
const cross = document.getElementById("cross");
const callBackForm = document.getElementById("call-back-req");
const reqInput = document.querySelector("#call-back-req input");
const reqSubmit = document.querySelector("#call-back-req button");

aaa.addEventListener("click", function () {
    if (callBackReqC.classList.contains("showa")) {
        callBackReqC.classList.remove("showa");
    }
    ac.classList.toggle("showa");
});

ac.addEventListener("click", function () {
    ac.classList.remove("showa");
});

callBack.addEventListener("click", function () {
    callBackReqC.classList.add("showa");
});

cross.addEventListener("click", function () {
    callBackReqC.classList.remove("showa");
});

callBackForm.addEventListener("submit", function (e) {
    e.preventDefault();
    const fd = new FormData();
    fd.append("phone_number", reqInput.value);
    const csrftoken = Cookies.get("csrftoken");

    reqSubmit.innerHTML = "<i class='bx bx-loader-alt bx-spin' ></i>";

    axios
        .post(`${location.origin}/call-back-request`, fd, {
            headers: {
                "Content-Type": "multipart/form-data",
                csrftoken: csrftoken,
            },
        })
        .then((res) => {
            reqInput.value = "";
            reqSubmit.innerHTML = "<i class='bx bx-check'></i>";
            setTimeout(() => {
                reqSubmit.innerHTML = "Submit";
                callBackReqC.classList.remove("showa");
            }, 2000);
        })
        .catch((err) => {
            console.log(err.response);
            reqSubmit.innerHTML = "Something went wrong";
            setTimeout(() => {
                reqSubmit.innerHTML = "Try Again";
            }, 1000);
        });
});
