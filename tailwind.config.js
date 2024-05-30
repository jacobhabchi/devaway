/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    extend: {
      width: {
        '128': '32rem',
        '150': '40rem',
        '256': '64rem',
      },
      height: {
        '128': '32rem',
        '150': '40rem',
        '256': '64rem',
      },
    },
  },
  plugins: [],
}