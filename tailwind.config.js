module.exports = {
  mode: 'jit',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#1c9dea',
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
