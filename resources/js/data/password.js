export default () => ({
    password: "",
    get style() {
        if (this.password.length === 0) {
            return "hidden";
        }

        if (this.password.length < 4) {
            return "text-red-600 text-sm mt-1";
        }

        if (this.password.length < 8) {
            return "text-yellow-600 text-sm mt-1";
        }

        return "text-green-600 text-sm mt-1";
    },
    get message() {
        if (this.password.length === 0) {
            return "";
        }

        if (this.password.length < 4) {
            return "Strength: Weak!";
        }

        if (this.password.length < 8) {
            return "Strength: Medium";
        }

        return "Strength: Strong!";
    },
})