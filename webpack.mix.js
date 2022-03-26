const mix = require('laravel-mix')
require('mix-html-builder')

// assets

mix
	.setPublicPath('dist')
	.css('src/css/main.css', '')
	.js('src/js/main.js', '')
	.html({
		htmlRoot: 'src/pages/*.html',
		output: ''
	})
	.copyDirectory('src/icons/*', 'dist')
	.copy('src/.htaccess', 'dist')
// server

mix
	.webpackConfig({
		devServer: {
			hot: true,
			host: 'localhost',
		}
	})
	.browserSync({
		notify: false,
		proxy: 'localhost:8080',
		files: [
			'src/css/**/*.css',
			'src/js/**/*.js',
			'src/**/*.html'
		]
	})
