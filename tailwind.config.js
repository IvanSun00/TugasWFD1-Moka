/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': {
          'blue': '#00b4eb',
          'whiteGray' : "rgb(245, 246, 250)",
          'black' : "rgb(30, 43, 50)",

        },
        'secondary': '#2b6cb0',
      },
      fontFamily: {
        'body': ['Nunito']
      },
      spacing: {
        'customContainer': 'calc(1150px + 10vw)',
      },
    },
  },
  plugins: [],
}

