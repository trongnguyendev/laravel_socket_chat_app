module.exports = {
  mode: 'jit',
  content: [
    './storage/framework/views/*.php',
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#1c9dea',
        'blur-avarta': 'inset 0 -25px 40px 6px rgb(0 0 0 / 80%)'
      }
    },
    // colors: {
      // primary: '#5c6ac4',
      // secondary: '#ecc94b',
    // }
  },
  plugins: [
    require("daisyui"),
  ],
}
