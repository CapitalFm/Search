// JavaScript Document
module.exports = {
	main: {
		files: [
			// includes files within path 
			{
				expand: true, 
				src: ['search/images/**','search/js/**','search/css/*','search/inc/**','search/fonts/**','search/languages/**','search/templates/**','search/page-templates/**'],
				dest: 'dist/', filter: 'isFile'
			},
			// includes files within path and its sub-directories 
			{
				expand: true, 
				src: ['search/*.php','search/*.txt','search/*.css','search/*.png'], 
				dest: 'dist/', filter:'isFile'
			},
			
			// makes all src relative to cwd 
			//{expand: true, cwd: 'path/', src: ['**'], dest: 'dest/'},
			// flattens results to a single level 
			//{expand: true, flatten: true, src: ['path/**'], dest: 'dest/', filter: 'isFile'},
		],
	}
};