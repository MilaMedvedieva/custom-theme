const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
  content: require('fast-glob').sync(['./*.php', './inc/**/*.php', './woocommerce/**/*.php', './tpl-partials/**/*.php', './tpl-pages/**/*.php', './template-parts/**/*.php', './assets/**/*.js']),
  theme: {
    extend: {
      fontFamily: {
        inter: ['Inter', ...defaultTheme.fontFamily.sans],
      },
      container: {
        center: true,
        padding: '1rem',
        screens: {
          'xs': '640px',
          'sm': '768px',
          'md': '992px',
          'lg': '1024px',
          'xl': '1200px',
          '2xl': '1280px'
        },
      },
      colors: {
        light: {
          100: '#f6f6f6',
          150: '#c5c5c5',
          200: '#626262',
        },
        red: {
          100: '#ce2c01',
        },
        black: {
          100: '#191919',
          800: '#000000',
        }
      },
    },
  }
}
