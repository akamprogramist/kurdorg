/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                bluesh: "#3BA2B1",
                redsh: "#E14038",
                yellowsh: "#F0B431",
            },
        },
    },
    plugins: [],
};
