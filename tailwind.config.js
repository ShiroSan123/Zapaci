/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		'./index.php',
		'./list.php',
		'./add.php',
		'./auth.php',
		'./calc.php',
		'./recom.php',
		'./profile.php',
	],
	theme: {
		screens: {
			lg: { 'max': '1999.99px' },
			md: { 'max': '991.99px' },
			sm: { 'max': '767.99px' },
			xs: { 'max': '479.99px' },
		},
		extend: {
			backgroundImage: {
			},
			fontFamily: {
				manrope: ['Manrope', 'sans-serif']
			},
			colors: {
				bluee: '#2563EB',
			}
		},
	},
	plugins: [],
}

