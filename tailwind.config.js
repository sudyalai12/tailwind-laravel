/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            strokeWidth: {
                2: "2px",
                3: "3px",
                10: "10px",
                20: "20px",
                40: "40px",
            },

            colors: {
                blue: {
                    50: "#f0f9ff",
                    100: "#e0f2fe",
                    200: "#bae6fd",
                    300: "#7dd3fc",
                    400: "#38bdf8",
                    500: "#0ea5e9",
                    600: "#0284c7",
                    700: "#0369a1",
                    800: "#236",
                    900: "#15629a",
                },
            },

            fontFamily: {
                // font-family: "Open Sans", Arial, Helvetica, sans, san-serif;
                sans: ["Open Sans", "Arial", "Helvetica", "sans", "san-serif"],
            },
        },
    },
    plugins: [],
};
