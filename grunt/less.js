// JavaScript Document
module.exports = {
	/*
	compileCore: {
		options: {
          strictMath: true,
          sourceMap: true,
          outputSourceFiles: true,
          sourceMapURL: 'bootstrap.css.map',
          sourceMapFilename: 'css/bootstrap.css.map',
          paths: 'less'
        },
		src: 'css/less/bootstrap/less/bootstrap.less',
		dest: 'css/bootstrap.css'
	},
	*/
	compileMobileTheme:
	{
		options: {
          paths: ['search/css/less']
        },
		src: 'search/css/less/style.less',
		dest: 'search/css/style.css'
	}
};