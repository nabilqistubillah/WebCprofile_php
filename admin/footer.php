</main>
<footer class="bg-light">
    <div class="text-center p-2" style="background-color: #bfd0dbff;">
        Copyright &copy; 2025 Bilqis Profile
    </div>
</footer>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            callbacks: {
                onImageUpload: function(files) {
                    for (let i = 0; i < files.length; i++) {
                        $.upload(files[i]);

                    }
                }
            },
            height: 200,
            toolbar: [
                ["style", ["bold", "italic", "underline", "clear"]],
                ["fontname", ["fontname"]],
                ["fontsize", ["fontsize"]],
                ["color", ["color"]],
                ["para", ["ul", "ol", "paragraph"]],
                ["height", ["height"]],
                ["insert", ["link", "picture", "imageList", "video", "hr"]],
                ["help", ["help"]]
            ],
            dialogsInBody: true,
            imageList: {
                endpoint: "image-list.php",
                fullUrlPrefix: "../images/",
                thumbUrlPrefix: "../images/"
            }
        });


        $.upload = function(file) {
            let out = new FormData();
            out.append('file', file, file.name);

            $.ajax({
                method: 'POST',
                url: 'uploadimg.php',
                contentType: false,
                cache: false,
                processData: false,
                data: out,
                success: function(img) {
                    $('#summernote').summernote('insertImage', img);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        };
    });
</script>
</body>

</html>