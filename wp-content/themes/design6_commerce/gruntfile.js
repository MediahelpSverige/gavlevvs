module.exports = function(grunt) {

	//configure task(s)
	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),

		uglify: {
			build: {
				src: 'src/js/*.js',
				dest: 'js/script.min.js'
			},
			dev: {
				options: {
					beutify: true,
					mangle: false,
					compress: false,
					preserveComments: true
				},
				src: 'src/js/*.js',
				dest: 'js/script.js'
			}

		},

		sass: {
			dev: {

				files : [
					{
						src : ['**/*.scss', '!**/_*.scss'],
						cwd : 'scss',
						dest : 'css',
						ext : '.css',
						expand : true
					}
				],

				options:{
					outputStyle: 'expanded'

				}

			},
			build: {
				options: {
					outputStyle: 'compressed'
				},
				files: {

					'css/style.css' : 'src/scss/application.scss'

				}
			}
		},

		watch: {
			js: {
				files: ['src/js/*.js'],
				tasks: ['uglify:dev'],
				livereload : true
			},
			css: {
				files: ['scss/**/*.scss'],
				tasks: ['sass:dev'],
				livereload : true
			},
			php: {

				files : ['**/*.php'],
				options : {
					livereload : true
				}

			}
		}

	});

	//load the plugins
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');


	//Register tastks

	grunt.registerTask('default', ['uglify:dev','sass:dev']);
	grunt.registerTask('build', ['uglify:build', 'sass:build']);


};