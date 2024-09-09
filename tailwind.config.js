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
          'darkBlue': '#2c50b2',
          'whiteGray' : 'rgb(245, 246, 250)',
          'black' : "#1e2b32",
        },
      },
      fontFamily: {
        'body': ['Nunito']
      },
      spacing: {
        'customContainer': 'calc(1150px + 10vw)',
      },
      animation: {
        
      },
    },
  },
  plugins: [],
}

