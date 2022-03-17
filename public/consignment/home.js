const sd = document.getElementById("submit-date");
const dateFrom = document.getElementById("date-from");
const dateTo = document.getElementById("date-to");

sd.addEventListener("submit", (event) => {
    event.preventDefault();
    window.location.href = `${window.location.origin}/consignments/home?dateFrom=${dateFrom.value}&dateTo=${dateTo.value}`;
});

const urlParams = new URLSearchParams(window.location.search);

if (urlParams.has("dateFrom")) {
    dateFrom.value = urlParams.get("dateFrom");
}

if (urlParams.has("dateTo")) {
    dateTo.value = urlParams.get("dateTo");
}
