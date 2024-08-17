/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
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
            transitionDuration: {
                '2000': '2000ms',
            },
            spacing: {
                '128': '32rem',
                '192': '48rem',
                '256': '64rem',
            },
        },
    },
    plugins: [
        require('flowbite/plugin'),
        require('@tailwindcss/aspect-ratio'),
    ],
};
