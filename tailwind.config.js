/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.{html,js,php}'],
  theme: {
    extend: 
    {
      fontFamily: 
      {
        bellotaR: ["BellotaR", "sans-serif"],
        bellotaB: ["BellotaB", "sans-serif"],
        bellotaL: ["BellotaL", "sans-serif"],
      },
      colors:
      {
        blueGreen: "#0d8187",
        white: "#FFF",
        black: "#181818",
        lightBlack: "#303030",
        gray: '#999999',
        lightGray: "#f2f2f2",
      },
    },
  },
  plugins: [],
}

