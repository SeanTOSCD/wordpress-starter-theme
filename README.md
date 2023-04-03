### WordPress Starter Theme

---

#### Description

This is a starter theme for WordPress. It is based on the classic [underscores.me](http://underscores.me) starter theme, though many things have been changed, added, or removed.

#### Design Features

* Includes Bootstrap (CSS) utilities, grid, and reboot
* Includes Wide (full-width content column, no sidebar) and Narrow (centered content column, no sidebar) page templates in addition to the default page template (content column and sidebar)
* Includes templates for the front page (front-page.php) and blog page (home.php)
* Customizable page headers via WordPress core functionality (title and excerpt), custom page header function parameters in individual templates, or Advanced Custom Fields settings per page
* Desktop menu with drop-down support and mobile menu with expandable sub-menus on click
* Centered blog post layout with no sidebar for easy reading
* Condensed search results page layout

#### Development Features
* Manages dependencies with NPM
* Uses [Sass](http://sass-lang.com/) for CSS preprocessing
* Grunt task runner for compiling Sass, minifying CSS and JS, and updating .pot file
* Has editor styles for the WordPress visual editor (Sass enabled)

#### Development Setup
1. Install [Node.js](https://nodejs.org/en/) on your machine if you haven't already.
2. Install and activate the theme in WordPress.
3. Run `npm install` in the theme root directory to install dependencies.
4. Run `grunt watch` to automatically compile Sass, minify CSS and JS while working on the theme styles and scripts.
5. Run `grunt pot` to update the .pot file.
