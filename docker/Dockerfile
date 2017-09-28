FROM ubuntu

MAINTAINER heyden

RUN apt-get update && \
    apt-get -y install curl && \
    apt-get -y install sudo && \
    curl -sL https://deb.nodesource.com/setup_6.x | sudo bash - && \
    apt-get -y install python build-essential nodejs

ADD . /src

RUN cd /src && npm install

EXPOSE  8080

CMD ["node", "/src/index.js"]