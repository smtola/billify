module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        transitionDuration: {
            2000: "2000ms",
        },
        screens: {
            tablet: "640px",
            // => @media (min-width: 640px) { ... }

            laptop: "1024px",
            // => @media (min-width: 1024px) { ... }

            desktop: "1280px",
            // => @media (min-width: 1280px) { ... }
        },
        extend: {
            scale: {
                175: "1.75",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
