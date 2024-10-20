/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php", "./resources/**/*.js"],

  theme: {
    extend: {
        colors: {
            customPink: {
              200: '#fda4af', // lighter shade
              600: '#e11d48', // your original 600 shade
            },
          },
    },
  },
  plugins: [],
}

