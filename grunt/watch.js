module.exports = {
  php:{
	  files: 'search/**/*.php',
	  tasks: ['copy','replace']
  },
  less: {
	  files: ['search/css/less/**/*.less'],
	  tasks: ['less','cssmin', 'copy','replace']
      }
};