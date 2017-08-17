FROM ruby:2.2.1
MAINTAINER Orr Barkat <barkat.orr@gmail.com>
LABEL "com.istags.vendor"="Instags"
LABEL version="1.0"
RUN apt-get update -qq && apt-get install -y build-essential libpq-dev nodejs
RUN mkdir /myapp
WORKDIR /myapp
EXPOSE 3000
ENV RAILS_ENV development
ENV RACK_ENV development
ADD . /myapp
RUN bundle check || bundle install
RUN rm ./tmp/pids/server.pid > /dev/null 2>&1 || echo hey
CMD ./bin/rails s -b 0.0.0.0
