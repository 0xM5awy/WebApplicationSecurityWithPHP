<!--
1.The First way is to use the `.htaccess` to protect the file
from anyone trying to open the Directory and the content will be like.
```````````````````
Options -Indexes
```````````````````
1.The second way is to use the `.htaccess` to protect the file with `IP`
So anyone `IP` who is not on the `.htaccess` file will not be able to
open the Directory and the content will be like.
```````````````````
Order Deny,Allow
Deny from all
Allow from 127.0.0.1,169.1.1.2
```````````````````
3.The third way is to use the `index.php` file that will not show any files on the Directory
so it will be `empty` dirctory even there is files.
-->