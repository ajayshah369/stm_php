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
