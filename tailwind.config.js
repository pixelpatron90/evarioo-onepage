/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: ['./*.{html,js}', './node_modules/flowbite/**/*.js'],
  theme: {
    extend: {
      fontFamily: {
        intertight: ['"Inter Tight"', 'sans-serif'],
      },
      colors: {
        black: '#030712',
        blacklight: '#111827',
        borderlight: '#1f2937',
        darkslategray: '#374151',
        ghostwhite: '#f9fafb',
        whitesmoke: '#f4f5f6',
      },
    },
  },
  plugins: [require('flowbite/plugin')],
};
