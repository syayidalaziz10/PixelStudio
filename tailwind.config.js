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
        secondary: '#2F2D2D',
        primary: '#D9D9D9',
        neutral: '#FFFF',
      }
    },
  },
  plugins: [],
}
