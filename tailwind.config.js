/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#dc2626',
        secondary: '#00294d',
      }

    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}