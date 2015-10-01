module.exports = function(grunt) {

    require('time-grunt')(grunt);

    require('load-grunt-config')(grunt, {
        jitGrunt: {
			staticMappings: {
				replace:'grunt-text-replace',
				closureBuilder:'grunt-closure-tools'
			}
		}
    });
	
	//grunt.loadNpmTasks('grunt-text-replace');
};