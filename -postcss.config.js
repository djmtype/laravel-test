module.exports = {
	plugins: [
			require('postcss-preset-env')({
				stage: 2
			}),
			require('postcss-custom-properties')({preserve: true})
	],

}


