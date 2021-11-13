require("./bootstrap");

import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

window.checkPasswordStrength = function (e) {
    const input = e.target;
    const password = input.value;
    let message;
    let style;

    if (password.length < 4) {
        message = "Strength: Weak!";
        style = "text-red-600";
    } else if (password.length < 8) {
        message = "Strength: Medium";
        style = "text-yellow-600";
    } else {
        message = "Strength: Strong!";
        style = "text-green-600";
    }

    const alert = document.createElement("p");
    alert.innerText = message;
    alert.className = style;

    input.parentNode.insertBefore(alert, input.nextSibling);
};