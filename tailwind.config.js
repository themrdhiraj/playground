module.exports = {
  purge: [
     './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
   ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
      display: ['Roboto Mono', 'Menlo', 'monospace'],
      body: ['Roboto Mono', 'Menlo', 'monospace'],
    },
      colors: {
        tractor: '#066FE0',
        primary: '#E5E7EB'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
