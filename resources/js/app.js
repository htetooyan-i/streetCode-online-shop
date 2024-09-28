import "./bootstrap";
import "flowbite";

// toggle small search box
if (document.getElementById("closeButton")) {
    document
        .getElementById("closeButton")
        .addEventListener("click", function () {
            const searchBox = document.getElementById("small-screen-searchbox");
            searchBox.classList.add("hidden");
        });

    document
        .getElementById("openButton")
        .addEventListener("click", function () {
            const searchBox = document.getElementById("small-screen-searchbox");
            searchBox.classList.remove("hidden");
        });
}
// to top button

if (document.getElementById("toTop")) {
    document.getElementById("toTop").addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth", // This will make the scroll smooth
        });
    });
}

// size-chocie height toggle
let sizeChoice = document.querySelector(".size-choice");
let toggleIcon = document.querySelectorAll(".toggle-icon");
let sizePosition = document.querySelector("#size-choice");
let toggleSizeIcon = document.querySelector(".size-icon");
if (sizeChoice) {
    sizeChoice.addEventListener("click", function () {
        sizeChoice.classList.toggle("h-[40px]");
        sizeChoice.classList.toggle("h-auto");
        sizePosition.classList.toggle("absolute");
        toggleSizeIcon.classList.toggle("rotate-180");
    });
}

//product-detail-responisze and design
let policyAccodians = document.querySelectorAll(".policy-accordian");
let policyBtns = document.querySelectorAll(".policy-btn");
let purchasing = document.querySelector("#purchasing");

// Loop through each policyAccodian to initialize styles
policyAccodians.forEach(function (policyAccodian) {
    policyAccodian.style.height = "0px";
    policyAccodian.style.overflow = "hidden";
    policyAccodian.style.transition = "height 0.3s ease";
});

// Loop through each policyBtn to add click event listeners
policyBtns.forEach(function (policyBtn, index) {
    policyBtn.addEventListener("click", function () {
        let policyAccodian = policyAccodians[index]; // Get the corresponding accordion

        if (
            policyAccodian.style.height === "0px" ||
            policyAccodian.style.height === ""
        ) {
            policyAccodian.style.height = policyAccodian.scrollHeight + "px";
            purchasing.style.height = "auto";
        } else {
            policyAccodian.style.height = "0px";
            purchasing.style.height = "400px";
        }
    });
});

//toggle product detail height

let readMore = document.querySelector(".toggle-product-description");
let productDetail = document.querySelector(".product-details-container");
let readText = document.querySelector(".read-toggle");
let upIcon = document.querySelector(".product-display-toggle-up-icon");
let downIcon = document.querySelector(".product-display-toggle-down-icon");

if (readMore) {
    readMore.addEventListener("click", function () {
        if (
            productDetail.style.height === "120px" ||
            productDetail.style.height === ""
        ) {
            // Set to the full height of the content
            let fullHeight = productDetail.scrollHeight + "px";
            productDetail.style.height = fullHeight;
            readText.innerHTML = "Read Less";
            upIcon.classList.toggle("hidden");
            downIcon.classList.toggle("hidden");
            document
                .querySelector(".toggle-read-opacity")
                .classList.toggle("toggle-product-details");
            // Set a timeout to change the height to 'auto' after the transition is done
            setTimeout(() => {
                productDetail.style.height = "auto";
            }, 300); // Timeout should match the transition duration
        } else {
            // Set the height back to 120px
            productDetail.style.height = productDetail.scrollHeight + "px"; // Set to full height to trigger transition
            // Force reflow to ensure the transition starts
            productDetail.offsetHeight;
            productDetail.style.height = "120px";
            readText.innerHTML = "Read More";
            upIcon.classList.toggle("hidden");
            downIcon.classList.toggle("hidden");
            document
                .querySelector(".toggle-read-opacity")
                .classList.toggle("toggle-product-details");
        }
    });
}
let toggleSearchBar = document.querySelectorAll(".expandBtn");

if (toggleSearchBar) {
    toggleSearchBar.forEach((icon) => {
        icon.addEventListener("click", function () {
            document
                .querySelector(".search-container")
                .classList.toggle("active");
            document
                .querySelector(".search-btn")
                .classList.toggle("border-e-0");
        });
    });
}

// share-article-toggle-icon

let shareArticleIcon = document.querySelector(".share-article-icon");
let shareArticleBtn = document.querySelector("#share-article-toggle");
let sharePopUp = document.querySelector(".share-popup");

if (shareArticleBtn) {
    shareArticleBtn.addEventListener("click", function () {
        shareArticleIcon.classList.toggle("-rotate-180");
        sharePopUp.classList.toggle("left-5");
        sharePopUp.classList.toggle("-left-52");
    });
}

window.addEventListener("scroll", () => {
    const relatedArticlesContainer = document.querySelector(
        ".related-articles-container"
    );
    const windowHeight = window.innerHeight;
    const scrollPosition = window.scrollY + windowHeight;
    const footerOffsetTop = relatedArticlesContainer.offsetTop;
    if (scrollPosition >= footerOffsetTop) {
        document.querySelector(".share-toggle").classList.add("hidden");
    } else {
        document.querySelector(".share-toggle").classList.remove("hidden");
    }
});

let relatedArticles = document.querySelector(".related-articles");
let leftScroll = document.querySelector(".left-scroll");
let rightScroll = document.querySelector(".right-scroll");
let scrollInterval;

if (leftScroll) {
    leftScroll.addEventListener("mouseover", () => {
        scrollInterval = setInterval(() => {
            relatedArticles.scrollLeft -= 4; // Adjust the speed by changing the number
        }, 10); // Adjust the interval for smoother or faster scrolling
    });

    leftScroll.addEventListener("mouseout", () => {
        clearInterval(scrollInterval); // Stop scrolling when the mouse leaves
    });

    rightScroll.addEventListener("mouseover", () => {
        scrollInterval = setInterval(() => {
            relatedArticles.scrollLeft += 4; // Adjust the speed by changing the number
        }, 10); // Adjust the interval for smoother or faster scrolling
    });

    rightScroll.addEventListener("mouseout", () => {
        clearInterval(scrollInterval); // Stop scrolling when the mouse leaves
    });
}

let brandToggleBtn = document.querySelector("#brandToggleBtn");
let brandsAccordion = document.querySelector(".brandsAccordion");
let brandToggleIcon = document.querySelector(".brand-toggle-arrow");

if (brandToggleBtn) {
    brandToggleBtn.addEventListener("click", function () {
        if (
            brandsAccordion.style.height === "0px" ||
            brandsAccordion.style.height === ""
        ) {
            brandsAccordion.style.height = brandsAccordion.scrollHeight + "px";
            brandToggleIcon.classList.toggle("rotate-180");
        } else {
            brandsAccordion.style.height = "0px";
            brandToggleIcon.classList.toggle("rotate-180");
        }
    });
}
let activityToggleBtn = document.querySelector("#activityToggleBtn");
let activityAccordion = document.querySelector(".activityAccordion");
let activityIcon = document.querySelector(".activity-toggle-arrow");

if (activityToggleBtn) {
    activityToggleBtn.addEventListener("click", function () {
        if (
            activityAccordion.style.height === "0px" ||
            activityAccordion.style.height === ""
        ) {
            activityAccordion.style.height =
                activityAccordion.scrollHeight + "px";
            activityIcon.classList.toggle("rotate-180");
        } else {
            activityAccordion.style.height = "0px";
            activityIcon.classList.toggle("rotate-180");
        }
    });
}

let priceToggleBtn = document.querySelector("#priceToggleBtn");
let priceAccordion = document.querySelector(".priceAccordion");
let priceIcon = document.querySelector(".price-toggle-arrow");

if (priceToggleBtn) {
    priceToggleBtn.addEventListener("click", function () {
        if (
            priceAccordion.style.height === "0px" ||
            priceAccordion.style.height === ""
        ) {
            priceAccordion.style.height = priceAccordion.scrollHeight + "px";
            priceIcon.classList.toggle("rotate-180");
        } else {
            priceAccordion.style.height = "0px";
            priceIcon.classList.toggle("rotate-180");
        }
    });
}

let sortBtn = document.querySelector(".sort-btn");

if (sortBtn) {
    sortBtn.addEventListener("click", function () {
        document.querySelector(".sort-accordian").classList.toggle("hidden");
        document
            .querySelector(".sort-arrow-icon")
            .classList.toggle("rotate-180");
    });
}

if (document.querySelector("#view-market-data")) {
    document
        .querySelector("#view-market-data")
        .addEventListener("click", function () {
            document
                .getElementById("market-drawer-container")
                .classList.toggle("hidden");
        });
    document
        .getElementById("close-button")
        .addEventListener("click", function () {
            document
                .getElementById("market-drawer-container")
                .classList.toggle("hidden");
        });
}

let shippingInfo = document.getElementById("shipping-info");
let shippingInfoBtn = document.getElementById("shipping-info-btn");

if (shippingInfo) {
    shippingInfoBtn.addEventListener("click", function () {
        shippingInfo.classList.toggle("h-[60px]");
        shippingInfo.classList.toggle("h-auto");
    });
}

let checkoutBtn = document.querySelector("#checkoutBtn");
if (checkoutBtn) {
    checkoutBtn.addEventListener("click", function () {
        console.log("helo");

        document.getElementById("cart").classList.toggle("items-center");
        document.getElementById("items-display").classList.toggle("hidden");
        document.getElementById("no-items-display").classList.toggle("hidden");
    });
}

const addressInfoInput = document.getElementById("floating_address");
const addressInfoContext = document.querySelector(".shipping-info-context");

if (addressInfoContext) {
    addressInfoInput.addEventListener("input", function () {
        addressInfoContext.textContent = addressInfoInput.value;
    });
}

document.querySelectorAll('input[name="payment"]').forEach((radio) => {
    radio.addEventListener("change", function () {
        const selectedPaymentMethod = document.querySelector(
            'input[name="payment"]:checked'
        ).value;
        document.getElementById(
            "selected-payment-method"
        ).textContent = `Payment method: ${selectedPaymentMethod}`;
    });
});

// Add a JavaScript function to update the displayed size based on radio button selection
document.querySelectorAll('input[name="size"]').forEach((radio) => {
    radio.addEventListener("change", function () {
        const selectedSize = document.querySelector(
            'input[name="size"]:checked'
        ).value;
        document.getElementById(
            "selected-size"
        ).textContent = `Size: ${selectedSize}`;
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const radios = document.querySelectorAll('input[type="radio"]');

    // Check if the radios are being selected
    if (radios.length === 0) {
        console.log("No radio buttons found!");
    }

    radios.forEach((radio) => {
        radio.addEventListener("change", function () {
            console.log("Form submitted!"); // Debugging log
            document.getElementById("size-choice-form").submit();
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const useExistingPayment = document.getElementById("use_existing_payment");
    const addNewPayment = document.getElementById("add_new_payment");
    const newPaymentForm = document.getElementById("new_payment_form");
    const existingPaymentsSection = document.getElementById(
        "existing_payments_section"
    );
    const addToNew = document.getElementById("add-to-new");
    const backToexist = document.getElementById("back-to-exist");

    // Hide or show new payment form based on selection
    useExistingPayment.addEventListener("click", function () {
        if (this.checked) {
            addToNew.classList.remove("hidden");
            backToexist.classList.add("hidden");
            newPaymentForm.classList.add("hidden");
            existingPaymentsSection.classList.remove("hidden");
        }
    });

    addNewPayment.addEventListener("click", function () {
        if (this.checked) {
            addToNew.classList.add("hidden");
            backToexist.classList.remove("hidden");
            newPaymentForm.classList.remove("hidden");
            existingPaymentsSection.classList.add("hidden");
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const responses = document.querySelectorAll(".response");

    responses.forEach((response) => {
        const responseDiv = response.closest(".response-div"); // Find the closest parent or sibling with class 'response-div'

        if (response.innerHTML.trim() === "waiting") {
            response.classList.add("text-yellow-400");
            if (responseDiv) {
                responseDiv.classList.add("bg-yellow-100");
            }
        } else if (response.innerHTML.trim() === "approved") {
            response.classList.add("text-green-400");
            if (responseDiv) {
                responseDiv.classList.add("bg-green-100");
            }
        } else {
            response.classList.add("text-red-400");
            if (responseDiv) {
                responseDiv.classList.add("bg-red-100");
            }
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const checkoutDesignBtn = document.getElementById("checkout-design-btn");
    const checkoutDesign = document.getElementById("checkout-design");

    checkoutDesignBtn.addEventListener("click", function () {
        checkoutDesign.classList.toggle("hidden");
    });
});
