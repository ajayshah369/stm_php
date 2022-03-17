const form = document.getElementById("form");

const consignment_number = document.getElementById("consignment_number");
const person_name = document.getElementById("person_name");
const person_email = document.getElementById("person_email");
const truck_number = document.getElementById("truck_number");
const estimate_delievery = document.getElementById("estimate_delievery");
const check_points = document.getElementById("check_points");

const error = document.getElementById("error");

const submit = document.getElementById("submit");

form.addEventListener("submit", (e) => {
    e.preventDefault();

    submit.innerText = "Creating ...";
    error.innerText = "";

    const formData = new FormData();
    formData.append("consignment_number", consignment_number.value);
    formData.append("person_name", person_name.value);
    formData.append("person_email", person_email.value);
    formData.append("truck_number", truck_number.value);
    formData.append("estimate_delievery", estimate_delievery.value);
    formData.append("check_points", check_points.value);

    const csrftoken = Cookies.get("csrftoken");

    axios
        .post(`${location.origin}/consignments/create`, formData, {
            headers: {
                "Content-Type": "multipart/form-data",
                csrftoken: csrftoken,
            },
        })
        .then((res) => {
            submit.innerText = "Create";
            window.location.href = `${window.location.origin}/consignments/home`;
        })
        .catch((err) => {
            submit.innerText = "Create";
            error.innerText = err.response.data;
        });
});
