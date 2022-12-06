/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {

      backgroundImage: {
        'player': "url('/resources/imgs/player.png')",

    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
}