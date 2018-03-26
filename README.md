
### Parent .htaccess
```
RewriteEngine on

RewriteRule ^nbeditor/(.*)\.(css|jpg|png|gif|js|html|xml|ttf|woff)$ $1.$2 [L]
RewriteRule ^nbeditor/ /nbEditor/backend.php [L,QSA]

RewriteCond %{REQUEST_URI} \.html$
RewriteRule ^(.*)$ /nbEditor/index.php?url=$1 [QSA,L]
```