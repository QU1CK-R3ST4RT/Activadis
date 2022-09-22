module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                "blue-green": {
                    "100": "#ECFEFF",
                    "200": "#A8F9FD",
                    "300": "#3ED9DE",
                    "400": "#32B3B8",
                    "500": "#299A9E",
                    "600": "#1F7B7F",
                    "700": "#166063",
                    "800": "#0D4446",
                    "900": "#062E2F",
                    "dark": "#021A1B",
                },
                "b-white":"#ECFEFF",
            },
        },
    },
    plugins: [],
}
