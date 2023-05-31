/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        container: {
            center: true,
            padding: '1rem',
        },
        colors: {
            primary: "#E33F20",
            secondary: "#CC2C0E",
        },
        extend: {
            fontFamily: {
                playfair: ["Playfair Display", "serif"],
            },
        },
    },
    plugins: [
        require("flowbite/plugin"),
    ],
};
