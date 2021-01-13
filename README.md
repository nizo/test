# Callone.de Development

1. [Cloning the Repository](#cloning-the-repository)
2. [Setting up local development](#setting-up-local-development)
3. [How to start the local development server](#how-to-start-the-local-development-server)
4. [Where are which files](#where-are-which-files)
4. [Deploying the page](#deploying-the-page)

### Cloning the Repository

To start development you first need to pull/clone the current repository. To do that simply run this command in your local projects folder:

```
git clone git@github.com:CallOneGmbH/website-www.callone.de.git
```

This command will clone the current repository into your local project folder.

### Setting up local development

Requirements are:

**Node** v12.16.1  
**NPM** v6.14.8

It is recommended to use [NVM](https://github.com/nvm-sh/nvm), simply install it on your local machine and run `nvm install v12.16.1` to have node and npm being installed (adjust version number if needed).

Optional requirements:

**Gulp CLI** v2.3.0 (in case you want to run gulp tasks manually)

Before [starting the local development server](#how-to-start-the-local-development-server) for the first time you need to run `npm install` to install all necessary packages.

### How to start the local development server

1. Run `npm start` in the project root folder
2. Navigate to <localhost:8000> in your browser

### Where are which files

1. HTML files / pages & sub-pages
    - `src/views/de/*` - This is the main folder for every HTML page
    - `src/partials/*` - Here you can find several additional files including forms and other partials that are included in other files
2. SASS/SCSS/CSS files / stylesheets
    - `src/assets/stylesheets/scss/*` - This folder contains every SCSS file, files are roughly named after the block/objects they style
    - `src/assets/stylesheets/libs/*` - Stylesheets of other libraries can be found here
3. JS/COFFEE files / javascripts
    - `src/assets/javascripts/coffee/application.coffee` - Main coffeescript file that handles basic functionality
    - `src/assets/javascripts/custom/*` - Custom javascripts that handle several functionallities throughout the page eg: callback, chat, lazyload, etc
    - `src/assets/javascripts/libs/*` - This folder contains other javascript libraries like jquery
4. Images, Videos & Animations
    - `src/assets/images/*` - For images
    - `src/assets/videos/*` - For videos
    - `src/assets/animations/*` - For animations / SVG
5. Fonts
    - `src/assets/fonts/*` - webfonts / iconfonts

### Deploying the page

[Deployer](https://deployer.org/) is used for deployment. See _deploy.php_ and _hosts.yml_ for configuration

Deploy staging:

```
./dep deploy staging
```

Deploy production:

```
./dep deploy production
```
