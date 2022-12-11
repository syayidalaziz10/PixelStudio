/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'poppins': ['Poppins'],
      },
      colors: {
        secondary: '#2F2D2D!important',
        primary: '#F1F5F8!important',
        neutral: '#FFFF!important',
      }
    },
  },
  plugins: [require('tailwind-scrollbar-hide')],
}
