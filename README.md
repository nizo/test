# Local development

## Requirements

- Node v7.5.0
- NPM v4.1.2
- NVM v0.25.1

## Installation

`npm install` to install all required modules

## Run local server and tasks

`gulp` to run server (will watch files and autoreload browser)

Visit `localhost:3000`


# Deployment

[Deployer](https://deployer.org/) is used for deployment. See _deploy.php_ and _hosts.yml_ for configuration

Deploy staging:

```
./dep deploy staging
```

Deploy production:

```
./dep deploy production
```