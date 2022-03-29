const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            width: {
                xfull: '150%',
            },
            colors: {
                primary: {
                    light: '#51CFF5',
                    DEFAULT: '#2AC4F3',
                    dark: '#0DB4E7',
                },
                secondary: {
                    light: '#0000CC',
                    DEFAULT: '#0000A2',
                    dark: '#00007A',
                },
                darkest: {
                    light: '#00007A',
                    DEFAULT: '#000048',
                    dark: '#000029',
                }
            },
        },
    },
  plugins: [],
}
