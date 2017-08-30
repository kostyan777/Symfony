# symfony + cofeescript small application

# INSTRUCTION

##install compass (ubuntu 16.04):
```
sudo apt-get update
sudo apt-get install git-core curl zlib1g-dev build-essential libssl-dev libreadline-dev libyaml-dev libsqlite3-dev sqlite3 libxml2-dev libxslt1-dev libcurl4-openssl-dev python-software-properties
sudo apt-get install libgdbm-dev libncurses5-dev automake libtool bison libffi-dev

curl -L https://get.rvm.io | bash -s stable
gpg2 --keyserver hkp://keys.gnupg.net --recv-keys 409B6B1796C275462A1703113804BB82D39DC0E3
source ~/.rvm/scripts/rvm
echo "source ~/.rvm/scripts/rvm" >> ~/.bashrc

rvm install 2.3 
gem install compass   
```

##THEN
```
composer install
```

```
php app/console doctrine:schema:update --force
```
```
php app/console doctrine:fixtures:load
```
```
npm install
```
```
grunt
```
```
bin/phpunit -c app
```