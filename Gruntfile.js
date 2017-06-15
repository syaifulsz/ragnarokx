module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({

        config: {
            banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',
            src_path: 'src',
            dist_path: 'dist',
            lib_path: 'libs',
            imgfnt_formats: '{png,jpg,gif,svg,eot,ttf,woff,woff2}'
        },

        pkg: grunt.file.readJSON('package.json'),

        clean: {
            'dist': ['<%= config.dist_path %>'],
            'css': ['<%= config.dist_path %>/stylesheets'],
            'js': ['<%= config.dist_path %>/scripts'],
            'imgfnt': ['<%= config.dist_path %>/**/*.<%= config.imgfnt_formats %>']
        },

        sass: {
            options: {
                update: true
            },
            dev: {
                files: {
                    '<%= config.dist_path %>/stylesheets/global.css': [
                        '<%= config.src_path %>/stylesheets/global.sass'
                    ]
                }
            },
            global: {
                options: {
                    style: 'compressed'
                },
                files: {
                    '<%= config.dist_path %>/stylesheets/global.min.css': [
                        '<%= config.src_path %>/stylesheets/global.sass'
                    ]
                }
            }
        },

        uglify: {
            options: {
                banner: '<%= config.banner %>'
            },
            libs: {
                files: {
                    '<%= config.dist_path %>/scripts/libs.min.js': [
                        '<%= config.lib_path %>/jquery/dist/jquery.js',
                        '<%= config.lib_path %>/bootstrap-sass/assets/javascripts/bootstrap.js'
                    ],
                    '<%= config.dist_path %>/scripts/ie9-libs.min.js': [
                        '<%= config.lib_path %>/html5shiv/dist/html5shiv.js',
                        '<%= config.lib_path %>/respond/dest/respond.min.js'
                    ]
                }
            },
            global: {
                files: {
                    '<%= config.dist_path %>/scripts/global.min.js': [
                        '<%= config.dist_path %>/scripts/libs.min.js',
                        '<%= config.src_path %>/scripts/global.js',
                        '<%= config.src_path %>/scripts/components/welcome.js'
                    ]
                }
            }
        },

        copy: {
            global: {
                files: [
                    {
                        expand: true,
                        cwd: '<%= config.src_path %>',
                        src: ['**/*.<%= config.imgfnt_formats %>'],
                        dest: '<%= config.dist_path %>'
                    }
                ]
            }
        },

        watch: {
            css: {
                files: ['**/*.{sass,scss}'],
                tasks: ['sass'],
                options: {
                    spawn: false,
                    livereload: true,
                    interrupt: true
                }
            },
            css_dev: {
                files: ['**/*.{sass,scss}'],
                tasks: ['sass:dev'],
                options: {
                    spawn: false,
                    livereload: true,
                    interrupt: true
                }
            },
            js: {
                files: ['**/*.js'],
                tasks: ['uglify:global'],
                options: {
                    spawn: false,
                    livereload: true,
                    interrupt: true
                }
            }
        }
    });

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-clean');

    // Default task(s).
    grunt.registerTask('default', ['sass', 'uglify', 'copy']);
    grunt.registerTask('css', ['sass']);
    grunt.registerTask('css_dev', ['sass:dev']);
    grunt.registerTask('watch_css', ['watch:css']);
    grunt.registerTask('watch_css_dev', ['watch:css_dev']);
    grunt.registerTask('watch_js', ['watch:js']);

};