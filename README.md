# Gatsby ContentaCMS Headless Docksal Setup

An opinionated setup to start a headless or decoupled [ContentaCMS (Drupal)](https://www.contentacms.org/) backend with a [GatsbyJS](https://gatsbyjs.org) front end. Uses the wonderful Drupal Umami example profile to show how GatsbyJS can parse data using GraphQL on the front end from the JSON:API (which is now part of Drupal core as of 8.7.0) and generate a blazing fast static site.

The purpose of this setup is to simulate a two server setup with separate containers for the Gatsby instance and the Drupal instance and separate URLs `http://gatsby.contenta.docksal` and `http://contenta.docksal`.  This makes for a portable setup that can be used across front and backend teams whether they share a codebase of if they are separate.

### Prerequisites

This project requires [Docksal](https://docksal.io) and whatever Docker flavor you choose (Docker for Mac, VirtualBox, etc.).

## Getting Started

1. Clone this repo to your local machine.
2. Ensure that Docksal is installed.
3. Run `fin init` from the project root.
    * This will destroy any existing containers and volumes.
4. Wait while Drupal installs
5. When Drupal finishes installing and you see `Open http://contenta.docksal in your browser` run `container_user="-u docker" fin exec --in=gatsby bash -lc "npm install"` (Don't worry, this will eventually be shortened to something a little more pleasant).
6. Once `npm` finishes doing the things, run `container_user="-u docker" fin exec --in=gatsby bash -lc "gatsby develop -H 0.0.0.0"` (again, working on shortening this thingy down a bit) to start a development server that you can visit at `http://gatsby.contenta.docksal`.
    * Note: This currently does not allow automatic rebuilding, nor does it allow you to visit the static HTML site. This container has NodeJS available to serve the development server only.  Work is being done to direct to the static site.  PRs welcome!

## Deployment

Currently, this is used only for demo purposes or as a starter kit to begin a project.  Once you clone to your local, delete the `.git` folder from the project root and do what you want with it. Get weird with it if you want, I won't judge.

## Built With

* [Drupal](https://drupal.org) - Backend base
* [ContentaCMS](https://contentacms.org) - Drupal distribution for rapid decoupled setup
* [Composer](http://getcomposer.org) - Drupal and PHP package management
* [NodeJS](https://nodejs.org) - Frontend serving and NPM modules
* [GatsbyJS](https://gatsbyjs.org/) - Frontend building and static site generator

## Contributing

Please contribute.  Fork early, fork often, and submit those PRs, people!

## Authors

* **JD Flynn** - *Initial work* - [Blog](http://www.jamesdflynn.com)
  * Support me on [Patreon](https://patreon.com/jddoesthings)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Docksal for putting together an awesome local dev environment built on Docker
* ContentaCMS for making a great Drupal distro to make decoupled that much easier
* GatsbyJS for being blazing fast and keeping everything easy to load
* Everyone whose code I borrowed and bastardized to make this a thing
* Sean Dietrich for putting up with all of my questions

## Roadmap

* Get PR approved to Docksal to make it easier to run the non-cli container commands.
* Allow the Node/Gatsby container to use Unison or similar for watching file changes where applicable.
* Additional web vhost to point to the static site for demonstration purposes.
* TBD
