require("./bootstrap");

import Alpine from "alpinejs";
import password from "./data/password";

window.Alpine = Alpine;

Alpine.data("password", password);

Alpine.start();
