# Compile stuff
/var/www/virtual/plusplus/libs/sass/bin/sass --update assets/scss/main.scss:assets/css/main.css -f -t compressed
/var/www/virtual/plusplus/libs/coffee/bin/coffee -c --output assets/js assets/coffee/*
/var/www/virtual/plusplus/libs/uglify/bin/uglifyjs assets/js/main.js -o assets/js/main.js