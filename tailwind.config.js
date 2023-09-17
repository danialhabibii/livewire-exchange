/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    theme: {
        extend: {
            boxShadow: {
                'info': "0px 12px #f4f5f7"
            }
        },
        fontFamily: {
            'Hind': ['Hind', 'sans-serif'],
            'Noto': ['Noto Sans SC', 'sans-serif'],
            'PT':['PT Sans Narrow','sans-serif'],
            'catamaran':['Catamaran','sans-serif'],
        }
    },
    plugins: [],
}

