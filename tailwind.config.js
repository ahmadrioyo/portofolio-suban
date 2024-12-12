/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      container: {
        center: true,
        padding: '16px',
      },
      extend: {
        fontFamily: {
            sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
          },
          screens: {
            '2xl': '1320px',
          },
      },
    },
    plugins: [],
  }