module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		// Add Sass pre-processor features to 'src' CSS, then compile to theme root.
		sass: {
			dist: {
				files: {
					'style.css': [ 'assets/css/src/styles.scss', '!assets/css/src/editor-styles.scss' ],
					'editor-style.css': 'assets/css/src/editor-styles.scss'
				}
			}
		},

		// Concatenate all JS files in 'assets/js/src'.
		concat: {
			js: {
				options: {
					separator: ';'
				},
				src: ['assets/js/src/**/*.js', 'assets/js/src/**/*.min.js'],
				dest: 'assets/js/scripts.js'
			}
		},

		// Uglify the concatenated JS file in 'assets/js'.
		uglify: {
			options: {
				banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd")' +
					' %> */\n',
				mangle: false
			},
			build: {
				src: 'assets/js/scripts.js',
				dest: 'assets/js/scripts.min.js'
			}
		},

		// Watch 'assets/css/src/**/*.scss' & 'assets/js/src/**/*.js' files and run all tasks after changes.
		watch: {
			styles: {
				files: ['assets/css/src/**/*.scss'],
				tasks: ['sass'] // , 'cssmin'
			},
			js: {
				files: ['assets/js/src/**/*.js'],
				tasks: ['concat:js', 'uglify:build']
			}
		},

		// Generate .pot file for translation.
		pot: {
			options: {
				text_domain: 'wst',
				dest: 'languages/',
				keywords: ['__', '_e', '_x', '_n', '_ex', '_nx', '_c', '_nc', '__ngettext', '__nx', '_n_noop', '_nx_noop', 'esc_attr__', 'esc_html__', 'esc_attr_e', 'esc_html_e', 'esc_attr_x', 'esc_html_x', '_n_js', '_nx_js']
			},
			files: {
				expand: true,
				cwd: './',
				src:  [ '**/*.php', '!node_modules/**/*' ]
			},
		},

	});

	// Load the plugins that provide the tasks.
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-pot');

	// Running 'grunt watch' does the entire job
};