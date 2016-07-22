module.exports = function(grunt){

	grunt.initConfig({
		//Package Settings
		pkg: grunt.file.readJSON('package.json'),

		jshint: {
			options: {
				curly: true,
				eqeqeq: true,
				immed: true,
				latedef: true,
				newcap: true,
				noarg: true,
				sub: true,
				undef: true,
				unused: true,
				boss: true,
				eqnull: true,
				browser: true,
				globals: {
					jQuery: true
				},
				options: {
					smarttabs: true
				}
			},
			gruntfile: {
				src: 'Gruntfile.js'
			}
		},
		notify: {
			sass: {
				options: {
					title: 'Task Complete',
					message: 'SASS and autoprefixer finished running',
				}
			},
			js: {
				options: {
					title: 'Task Complete',
					message: 'JS has been compiled and minified',
				}
			}
		},
		watch: {
			gruntfile: {
				files: '<%= jshint.gruntfile.src %=>',
				tasks: ['jshint:gruntfile']
			},
		},
		sass: {
			options: {
				sourcemap: 'none'
			},
			compile: {
				files: {
					'build/wp-content/themes/wallstreet-light/css/default.css': 'build/wp-content/themes/wallstreet-light/sass/default.scss',
					'build/wp-content/themes/wallstreet-light/style.css': 'build/wp-content/themes/wallstreet-light/sass/style.scss'
				}
			}
		},
	});

	// Task Loading
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-notify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');



	// Register Grunt Tasks
	grunt.registerTask('default', ['jshint', 'sass', 'notify', 'watch']);

};
