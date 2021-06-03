composer create-project codeigniter4/appstarter pulsar-back
cd pulsar-back
git init
git remote add origin https://github.com/webboy-fr/pulsar-back.git

rm -Rf app
rm -Rf public
rm env

git fetch origin
#git reset --hard origin/master
git stash
git pull origin master

cp ../.env .


#php spark migrate
#php spark db:seed MemberSeeder
#./vendor/bin/phpunit tests