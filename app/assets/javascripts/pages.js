# Place all the behaviors and hooks related to the matching controller here.
# All this logic will automatically be available in application.js.
# You can use CoffeeScript in this file: http://coffeescript.org/
function uploadFile(file)
        {
            alert(file.name);
 	    var url = 'server/index.php';
            var xhr = new XMLHttpRequest();
            var fd = new FormData();
            xhr.open("POST", url, true);
            xhr.onreadystatechange = function ()
            {
                if (xhr.readyState == 4 && xhr.status == 200)
                {
                    // Every thing ok, file uploaded
                    console.log(xhr.responseText); // handle response.
                }
            };
            fd.append("upload_file", file);
            xhr.send(fd);
        }

function previewImage(file) {
    var galleryId = "gallery";

    var gallery = document.getElementById(galleryId);
    var imageType = /image.*/;

    if (!file.type.match(imageType)) {
        throw "File Type must be an image";
    }

    var thumb = document.createElement("div");
    thumb.classList.add('thumbnail'); // Add the class thumbnail to the created div

    var img = document.createElement("img");
    img.file = file;
    thumb.appendChild(img);
    gallery.appendChild(thumb);

    // Using FileReader to display the image content
    var reader = new FileReader();
    reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
    reader.readAsDataURL(file);
}


$(function ()
{
    /*var uploadfiles = document.querySelector('#fileinput');
    uploadfiles.addEventListener('change', function ()
    {
    var files = this.files;
    for (var i = 0; i < files.length; i++)
    {
    previewImage(this.files[i]);
    }

    }, false); ;*/

    var file=new Image();
    // We can attach the `fileselect` event to all file inputs on the page
    $(document).on('change', ':file', function ()
    {
        var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);

        //preview the photo
        var files = this.files;
        for (var i = 0; i < files.length; i++)
        {
            previewImage(this.files[i]);
        }
        file = this.files[0];

        /*  var uploadfiles = document.querySelector('#uploadfiles');
        uploadfiles.addEventListener('change', function ()
        {
        var files = this.files;
        for (var i = 0; i < files.length; i++)
        {
        uploadFile(this.files[i]); // call the function to upload the file
        }
        }, false);*/


    });

    // We can watch for our custom `fileselect` event like this
    $(document).ready(function ()
    {
        $(':file').on('fileselect', function (event, numFiles, label)
        {

            var input = $(this).parents('.select-photo').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

            if (log)
            {
                input.val(log);
            } else
            {
                alert(log);
            }
        });
    });
    $("button").click(function ()
    {
        var input = document.getElementById("filename").value;
        if (input.length)
        {
            alert(input);
            //send it to server
            var uploadfiles = document.querySelector('#uploadfiles');
            //var file = uploadfiles.files;
            uploadFile(file); // call the function to upload the file
            
        }
        else
        {
            alert("No file was selected");
        }
    });
});

