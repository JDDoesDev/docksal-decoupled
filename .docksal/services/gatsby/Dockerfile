FROM docksal/cli:2.6-php7.2

USER docker

SHELL ["/bin/bash", "-c"]
# Install additional global npm dependencies
RUN set -e; \
    # Initialize the user environment (this loads nvm)
    source $HOME/.profile; \
    # Install the necessary nodejs version
    nvm install 10.15.0; \
    nvm alias default 10.15.0; \
    nvm use default; \
    # Install packages
    npm install -g npm@6.4.1; \
    npm install -g gatsby-cli; \
    # Cleanup
    nvm clear-cache && npm cache clear --force; \
    # Fix npm complaining about permissions and not being able to update
    sudo rm -rf $HOME/.config;

SHELL ["/bin/sh", "-c"]
USER root

EXPOSE 8000
