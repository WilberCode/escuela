module.exports = {
    theme: {
        container: {
            padding: '.5rem',
        },
        extend: {
            colors: {
                link: {
                    'default': '#3182ce',
                    'hover': '#63b3ed',
                },
                transparent: 'transparent',
                black: '#000',
                white: '#fff',
                escuela: {
                    100: '#B5BACC',
                    200: '#7D86A5',
                    300: '#58648C',
                    400: '#46537F',
                    500: '#344273',
                    600: '#2B375F',
                    700: '#222A4A',
                    800: '#181E35',
                    900: '#0F1220',
                },
                congreso: {
                    100: '#C3908F',
                    200: '#AB6363',
                    300: '#933736',
                    400: '#872120',
                    500: '#7b0b0a',
                    600: '#650A09',
                    700: '#4F0807',
                    800: '#380505',
                    900: '#220303',
                }
            }, 
            fontSize: {
                xxs: '0.675rem',
            },
            lineHeight: {
                tighter: '1.125',
            }, 
            fontFamily: {
                // sans: [
                //     '-apple-system',
                //     'BlinkMacSystemFont',
                //     '"Segoe UI"',
                //     'Roboto',
                //     '"Helvetica Neue"',
                //     'Arial',
                //     '"Noto Sans"',
                //     'sans-serif',
                //     '"Apple Color Emoji"',
                //     '"Segoe UI Emoji"',
                //     '"Segoe UI Symbol"',
                //     '"Noto Color Emoji"',
                // ],
                // serif: [
                //     'Georgia',
                //     'Cambria',
                //     '"Times New Roman"',
                //     'Times',
                //     'serif',
                // ],
                mono: [
                    'Menlo',
                    'Monaco',
                    'Consolas',
                    '"Liberation Mono"',
                    '"Courier New"',
                    'monospace',
                ],
                latoeg: [
                    'Lato',
                    'sans-serif'
                ],
                cooperhewitteg:'"CooperHewitt-Medium"'
            }
        },
        screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1280px',
            maxsm: {'max': '640px'},
            maxmd: { 'max': '768px'},
            maxlg: {'max': '1023px'},
            maxl: {'max': '1280px'}
        }
        
    },
    variants: {
        textColor: ['responsive', 'hover', 'focus', 'visited'],
    },
    plugins: [
        ({addUtilities}) => {
            const utils = {
                '.translate-x-half': {
                    transform: 'translateX(50%)',
                },
            };
            addUtilities(utils, ['responsive'])
        }
    ]
};
