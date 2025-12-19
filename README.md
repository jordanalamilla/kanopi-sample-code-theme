# kanopi-sample-code-theme
A WordPress theme containing my sample code for Kanopi. Includes FSE, SCSS, React and a custom PHP function.

## A full-site editing .html template with a dynamic string showing the current date
In **/templates/kanopi-page-template.html** and **functions.php**
Being unable to add logic directly to an html template file, and assuming you don't want me using a date block, I wrote a shortcode to acheive this since shortcodes can be used in html templates.

## A .scss or PostCSS .css file with advanced styling (e.g., animations, responsive layout)
In **style.css**, compiled from **/scss/style.scss**
I chose to go with SCSS since I'm more familiar with it. Advanced styling features include @imports, animations, media queries, @mixins, @includes, nested styling and SCSS specific taregting with "&" operator.

## A custom block written in React (no ACF), including block.json and edit.js
I know WordPress and React but I didn't have any experience with WordPress FSE with React blocks so I spent most of the past couple days learning and experimenting before creating this "call to action" style block. I used WordPress' own @wordpress/create-block package to scaffold it, modified the block.json to add supports and attributes and in edit.js, I developed the React-ive block back end with InspectorControls inputs and displayed the data with render.php and the $attributes array.

## A custom PHP function that modifies WordPress behavior
In **functions.php**
The main event is my append_to_the_content() filter, which adds the same chunk of HTML content to every instance of the_content. If you're testing this on a real WordPress site, create a non FSE template page to see it.

## What I'd add with more time
It was a challenge to resist developing this into a full website so with more time, I would have wanted the add branded colours, more robust typography styles, I had intially wanted to add a dark mode but realized that with how much SCCS I ended up with, that would probably be overkill.