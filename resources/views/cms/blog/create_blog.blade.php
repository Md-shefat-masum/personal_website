<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Blog</title>
    <link rel="stylesheet" href="/assets/website/assets/css/plugins/bootstrap.min.css">

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script defer>
        tinymce.init({selector:'#description'});
    </script>
</head>

<body>
    <section class="my-4">
        <div class="container">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3>Create Blog</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group mb-4">
                                    <label for="">Description</label>
                                    <textarea type="text" name="description" id="description" class="form-control mt-1"></textarea>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group mb-4">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control mt-1">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">Date</label>
                                    <input type="date" name="date" class="form-control mt-1">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">Writer</label>
                                    <input type="text" name="writer" class="form-control mt-1">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">Image</label>
                                    <input accept="image/*" type="file" name="image" class="form-control mt-1">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">Image Meta</label>
                                    <input type="text" name="image_meta" class="form-control mt-1">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">SEO Title</label>
                                    <input type="text" name="seo_title" class="form-control mt-1">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">SEO Keywords</label>
                                    <input type="text" name="seo_keywords" class="form-control mt-1">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">SEO Description</label>
                                    <textarea type="text" name="seo_description" class="form-control mt-1"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-info">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
