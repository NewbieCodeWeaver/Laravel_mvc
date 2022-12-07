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

      backgroundImage: {
        'player': "url('/resources/imgs/player.png')",
        'stadium': "url('/resources/imgs/stadium.png')",

    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
}