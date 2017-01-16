<!DOCTYPE html>
<html>
<head>
  <title>Upload Multiple Images Laravel</title>
  <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Upload Multiple Images Laravel</h1>
        {!! Form::open([ 'url'=>'dropzone/store', 'files' => true,'method' =>'POST', 'enctype' => 'multipart/form-data', 'class' => 'dropzone', 'id' => 'image-upload' ]) !!}
        <div>
          <h3> Click On Box</h3>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>

  <script type="text/javascript">
    Dropzone.options.imageUpload = {
      maxFilesize         :       100,
      acceptedFiles: ".jpeg,.jpg,.png,.gif"
    };
  </script>

</body>
</html>