// JavaScript Document
module.exports = {
	distMarker: {
		src: ['search/style.css'],
		overwrite: true,
		replacements: [{
		  from: /\[DIST-VERSION\]/g,
		  to: ""
		},
		{
		  from: /\[date\]/g,
		  to: "<%= grunt.template.today('d mmmm yyyy') %>"
		}]
	}
};