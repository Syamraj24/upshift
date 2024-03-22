'use strict';


/*================================= Configuration =================================*/

const NODE_ENV = process.env.NODE_ENV || 'development';
let config = {
	debug: NODE_ENV === 'development' ? true : false,
	translation: {
		domain: 'upshift',
		package: 'upshift',
		team: 'upshift',
		dest: './languages/upshift.pot'
	}
};

/*============================= Dependencies =============================*/

const gulp = require('gulp');

/* --- Dependencies: i18n --- */
const wpPot = require('gulp-wp-pot'),
	sort = require('gulp-sort');

// Generates pot file for plugin localization.
let i18n = () => {
	return gulp
		.src([ './**/*.php', '!./build/**/*.php', '!./vendor/**/*.php' ])
		.pipe(sort())
		.pipe(
			wpPot({
				domain: config.translation.domain,
				package: config.translation.package,
				team: config.translation.team
			})
		)
		.pipe(gulp.dest(config.translation.dest));
};
i18n.description = 'Generates pot file for plugin localization';
gulp.task('translate', i18n);
