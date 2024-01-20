<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&family=Poppins:wght@200;400;500;600;700&family=Raleway:wght@400;500;600;700&family=Roboto:wght@100;400;500;700;900&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    poppins: ["Poppins", "sans-serif"],
                    montserrat: ["Montserrat", "sans-serif"],
                    roboto: ['Roboto', "sans-serif"],
                    raleway: ['Raleway', "sans-serif"],
                },
                keyframes: {
                    maps: {
                        '0%, 100%': { transform: 'translateY(-5px)  scale(1.10) ' },
                        '50%': { transform: 'translateY(5px)' },
                    },
                    comments: {
                        '0%, 100%': { transform: 'translateX(0px)' },
                        '20%': { transform: 'translateX(10px)' },
                        '50%' :{transform: 'translateY(30px) translateX(10px) scale(1.2)'},
                        '80%' :{transform: 'translateY(0px) translateX(10px)'},                        
                    },
                    guard:{
                        '0%, 100%': { transform: 'rotate(10deg) scale(1.10)' },
                        '50%': { transform: 'rotate(-10deg)' },
                    },
                }, 
            },
            container: {
                padding: {
                    DEFAULT: '1rem',
                    sm: '2rem',
                    lg: '4rem',
                    xl: '5rem',
                    '2xl': '6rem',
                },
            },
        },
    }
</script>