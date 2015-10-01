module.exports = {

    // Task options
    options: {
        limit: 3
    },

    // Image tasks
    copyTheme: [
        'copy',
		'replace'
    ],
	
	generateJavascript:
	[
		'closureBuilder',
		'copy',
		'replace'
	]
};