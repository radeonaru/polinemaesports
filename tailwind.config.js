/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                Poppins: ["Poppins", ...defaultTheme.fontFamily.sans],
                Montserrat: ["Montserrat", ...defaultTheme.fontFamily.sans],
                Inter: ["Inter", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                goldLogo:"#f1b34f",
            },
        },
    },
    plugins: [],
};
