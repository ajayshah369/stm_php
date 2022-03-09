const bigImages = document.querySelector("#big-images");
const allBigImages = bigImages.children;
const allDots = document.querySelector("#indicator").children;
const numberOfBigImages = allBigImages.length - 1;
const left = document.querySelector("#big_images_container .left");
const right = document.querySelector("#big_images_container .right");

let current = 0;

allBigImages[current].classList.add("active");
allDots[current].classList.add("active");
left.style.display = "none";

right.addEventListener("click", function () {
    current = current + 1;
    if (current === numberOfBigImages) {
        right.style.display = "none";
        left.style.display = "block";
    } else {
        right.style.display = "block";
        left.style.display = "block";
    }
    allBigImages[current - 1].classList.remove("active");
    allDots[current - 1].classList.remove("active");
    allBigImages[current].classList.add("active");
    allDots[current].classList.add("active");
    bigImages.scrollLeft = current * bigImages.clientWidth;
});

left.addEventListener("click", function () {
    current = current - 1;
    if (current === 0) {
        left.style.display = "none";
        right.style.display = "block";
    } else {
        right.style.display = "block";
        left.style.display = "block";
    }
    allBigImages[current + 1].classList.remove("active");
    allDots[current + 1].classList.remove("active");
    allBigImages[current].classList.add("active");
    allDots[current].classList.add("active");
    bigImages.scrollLeft = current * bigImages.clientWidth;
});

/////////////////////////////////////////////////////

const form = document.getElementById("form");
const quickInquiryButton = document.getElementById("quick-inquiry-button");

const namex = document.getElementById("name-input");
const phone = document.getElementById("phone-input");
const email = document.getElementById("email-input");
const movingFrom = document.getElementById("moving-from-input");
const movingTo = document.getElementById("moving-to-input");
const query = document.getElementById("query-input");

form.addEventListener("submit", (e) => {
    e.preventDefault();
    const formData = new FormData();
    formData.append("name", namex.value);
    formData.append("phone_number", phone.value);
    formData.append("email", email.value);
    formData.append("moving_from", movingFrom.value);
    formData.append("moving_to", movingTo.value);
    formData.append("query", query.value);

    const csrftoken = Cookies.get("csrftoken");

    quickInquiryButton.innerHTML = "<i class='bx bx-loader-alt bx-spin' ></i>";

    axios
        .post(`${location.origin}/quick-inquiry`, formData, {
            headers: {
                "Content-Type": "multipart/form-data",
                csrftoken: csrftoken,
            },
        })
        .then((res) => {
            quickInquiryButton.innerHTML = "<i class='bx bx-check-circle'></i>";

            namex.value = "";
            phone.value = "";
            email.value = "";
            movingFrom.value = "";
            movingTo.value = "";

            setTimeout(() => {
                quickInquiryButton.classList.remove("loading");
                quickInquiryButton.innerHTML = "Submit";
            }, 2000);
        })
        .catch((err) => {
            console.log(err.response);
            error.innerText = "Something went wrong";
            error.style.display = "block";
            quickInquiryButton.innerHTML = "Submit";

            setTimeout(() => {
                error.innerText = "";
                error.style.display = "none";
            }, 2000);
        });
});

/////////////////////////////////////////////////////

const clients_scroll = document.querySelector("#clients-scroll");
const clients = document.querySelector("#clients-scroll .clients");

clients_scroll.appendChild(clients.cloneNode(true));
clients_scroll.appendChild(clients.cloneNode(true));
clients_scroll.appendChild(clients.cloneNode(true));
clients_scroll.appendChild(clients.cloneNode(true));

setInterval(() => {
    clients_scroll.scrollLeft += 10;

    if (
        clients_scroll.scrollLeft >=
        clients_scroll.scrollWidth - clients_scroll.clientWidth - 100
    ) {
        const clone = clients.cloneNode(true);
        clients_scroll.appendChild(clone);
    }
}, 100);
