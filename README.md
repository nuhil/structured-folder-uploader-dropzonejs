Structured recursive folder uploader based on dropzonejs
========================================================

Drag &amp; drop folder with files that contains other folders/files inside it &amp; finally upload them keeping original directory structure!

#### Installation ####

1. Either clone or download zip & extract the full repository in your web document root.
2. Make a directory named `uploads` inside the repository root.
3. Make sure that the `uploads` directory has write permission.

#### Precautions ####

1. Check your `php.ini`'s `max_file_uploads`, `upload_max_filesize`, `post_max_size` values.
2. If you have `20`, `32M`, `32M` respectively, then try to drag &amp; drop folders considering these limitations of your server.
3. Plugin's options &amp; detail usage can be found on [dropzonejs](http://www.dropzonejs.com/) original site.
