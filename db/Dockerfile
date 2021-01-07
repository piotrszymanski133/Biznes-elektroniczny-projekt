FROM mariadb

RUN apt-get update -y && \
    apt-get upgrade -y && \
	apt-get install -y git

COPY init.sh /home/init.sh

RUN apt-get install nano
