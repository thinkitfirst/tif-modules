# Description
Adds a modal for searching.

# How to Use
Just add the following 2 REQUIRED attributes and values to any element in order to call this Modal:

1. data-toggle="modal"
2. data-target="#tif-search-modal"

Optional Attributes (depending on your needs) are as follows:

1. data-backdrop="static"
2. data-keyboard="false"

# Usuage Example

Should be called within the *footer.php* file within the theme.

```php

tif_get_template(tif_template_path('tif-search-modal'), array());

```

