import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            backgroundImage: {
                'LoginAdmin': "url('../../public/images/Background-1-Admin.png')",
                'LoginCaas': "url('../../public/images/Background_1.png')",
                'Crystal': "url('../../public/images/Crystal2.png')",
                'PlaceHolder': "url('../../public/images/login-placeholder.png')",
                'Modal': "url('../../public/images/modal stone.png')",
              },
            fontFamily: {
                'im-fell-english': ['"IM Fell English"', 'serif'],
                'crimson-text': ['"Crimson Text"', 'serif']
            },
            colors: {
                'primary': '#1A2254',
                'scrollbar-thumb': '#3b82f6', // Tailwind blue-500
                'scrollbar-track': '#e5e7eb', // Tailwind gray-200
            },
        },
    },
    plugins: [],
};
