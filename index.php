<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Folder uploader, keeping recursive directory structure</title>
    <link href="css/dropzone.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

    <script src="js/dropzone.js"></script>
    
    <form action="upload.php" class="dropzone" id="uploadFile" name="uploadFile" method="POST">
        <span id="tmp-path"></span>
    </form>
    
    <script>
        $(document).ready(function () {
            Dropzone.autoDiscover = false;
            
            Dropzone.options.uploadFile = {
              init: function() {
                this.on("success", function(file, responseText) {
                  file.previewTemplate.appendChild(document.createTextNode(responseText));
                });
                
                this.on("sending", function(file) {
                    $("#tmp-path").html('<input type="hidden" name="path" value="'+file.fullPath+'" />')
                });            
              }
            }; 
            
            var myDropzone = new Dropzone("#uploadFile", { 
                url: "upload.php"
            });               
            
        });
    </script>

</body>
</html>