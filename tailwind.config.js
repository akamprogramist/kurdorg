/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            boxShadow: {
                "3xl": "0 5px 20px 2px rgba(0,0,0,0.1)",
            },
            colors: {
                bluesh: "#3BA2B1",
                redsh: "#E14038",
                yellowsh: "#F0B431",
            },
        },
    },
    plugins: [],
};
