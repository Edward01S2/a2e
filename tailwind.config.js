const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
  purge: {
    content: [
    './resources/**/**/*.php',
    './resources/**/*.php',
    './resources/**/**/*.js',
    './resources/**/*.js',
    ],
    options: {
      whitelist: ['italic', 'text-c-blue-300', 'md:hidden'],
    }
  },
  theme: {
    colors: {
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      red: colors.red,
      transparent: colors.transparent,
      current: colors.current,
    },
    extend: {
      colors: {
        'c-yellow' : {
          100: '#FFC322',
        },
        'c-blue': {
          50: '#F0F3F7',
          100: '#628BFA',
          200: '#3C70F5',
          300: '#2F00F0',
          400: '#2600C0',
          500: '#141A23'
        },
        'c-gray':  {
          100: '#f1f1f1',
          200: '#e5e5e5',
          300: '#dddddd',
          400: '#c4c4c4',
          500: '#babec7',
          600: '#7c808a',
        },
        'c-black' : {
          100: '#010101',
        }
      },
      fontFamily: {
        'poppins' : [
          'Poppins',
          'sans-serif'
        ],
        'proxima' : [
          'proxima-nova',
          'sans-serif'
        ],
      },
      borderWidth: {
        '3': '3px'
      },
      inset: {
        '1/2' : '50%',
      },
      // fontSize: {
      //   '6.5xl': '5rem',
      //   '7xl': '6rem',
      //   '8xl': '7rem',
      //   '9xl': '10rem',
      // },
      maxWidth: {
        '384': '384px',
        '512': '512px',
        '640': '640px',
        '720': '720px',
      },
      spacing: {
        '2px': '2px',
        '3px': '3px',
        '18': '4.5rem',
        '44' : '11rem',
        '80' : '22rem',
        '84': '26rem',
        '100': '28rem',
        '104': '30rem',
        '108' : '32rem',
        '112' : '36rem',
        '116' : '38rem',
        '120' : '42rem',
        '124' : '48rem',
      },
      opacity: {
        '31': '0.31',
        '90': '0.9',
      },
      screens: {
        '2xl' : '1536px',
        // '3xl' : '1625px'
      },
      boxShadow: {
      },
      transformOrigin: {
        '100' : '100% 0',
      },
      gridTemplateRows: {
      '8': 'repeat(8, minmax(0, 1fr))',
      },
    },
    typography: (theme) => ({
      default: {
        css: {
        //   color: theme('colors.c-blue.200'),
        //   strong: {
        //     color: theme('colors.c-blue.200'),
        //   },
          'ul > li:before': {
            backgroundColor: theme('colors.black'),
          },
        //   'h1, h2, h3, h4, h5' : {
        //     color: theme('colors.c-blue.200'),
        //   }
        }
      }
    })
  },
  variants: {
    // scale: ['responsive', 'hover', 'focus', 'group-hover'],
    // display: ['responsive', 'hover', 'group-hover'],
    boxShadow: ({after}) => after(['group-hover']),
    scale: ({after}) => after(['group-hover']),
  },
  plugins: [
    require('@tailwindcss/ui'),
    require('@tailwindcss/typography'),
  ],
  experimental: 'all',
}
