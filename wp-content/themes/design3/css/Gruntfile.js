module.sxports = function(grunt){






// CONFIGURE TASKS
grunt.initConfig({
	pkg:grunt.file.readJSON('package.json'),
	uglify:{
		build:{
			src: 'src/js/*.js',
			dest: 'js/script.min.js'
		},
		dev:{
			options:{
				beautify:true,
				mangle: false,
				compress: false,
				preserveComments: 'all'
			},
			src: 'src/js/*.js',
			dest: 'js/script.min.js'
		},
		watch: {
			js: {
				files: ['src/js/*.js'],
				tasks: ['uglify:dev']
			}
		}
	},
	sass:{

	}
})


//LOAD PLUGINS
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-watch');


//REGISTER TASKS
grunt.registerTasks('default', [ 'uglify:dev']);
grunt.registerTasks('build', [ 'uglify:build']);
grunt.registerTasks('dev', [ 'uglify:dev']);
};