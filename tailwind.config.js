/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './header.php',
    './index.php',
    './footer.php',
    './404.php',
    './inc/*.php',
    './page-templates/**/*.php',
    './template-parts/**/*.php',
  ],
  theme: {
    fontFamily: {
      sans: ['Roboto', 'sans-serif'],
      condensed: ['Roboto Condensed', 'sans-serif'],
      serif: ['Lora', 'serif'],
    },
    extend: {
      colors: {
        'red': '#e0041d',
        'dark-red': '#bb081c',
        'dark-purple': '#1a1d24',
        'medium-grey': '#737373',
        'light-grey': '#f2f2f2'
      },
    },
  },
  plugins: [
    //require('@tailwindcss/line-clamp'),
  ],
}
