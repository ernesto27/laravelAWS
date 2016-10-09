<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
        <title></title>
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Posts</h1>

                    <div class="">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-createpost">Upload</button>
                    </div>
                    <br>

                    
                    <div class="col-sm-12 col-md-6"> 
                        @foreach($posts as $post)
                        <div class="thumbnail"> 
                            <img 
                            src="{{ $post->image_path }}" 
                            > 
                            <div class="caption"> 
                                <h3>{{ $post->title }}</h3> 
                                    <p>
                                        {{ $post->votes }} points  -  1000 comments
                                    </p>
                                    <a href="#" class="btn btn-default" role="button">
                                        <span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
                                    </a> 
                                    <a href="#" class="btn btn-default" role="button">
                                        <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
                                    </a> 
                                    
                                </p>
                            </div>
                        </div> 
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-createpost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Create post</h4>
                    </div>
                    <div class="modal-body">
                        <form action="post/create" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Titulo</label>
                                <input type="text" class="form-control" id="" name="title" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <input type="file" id="" name="image">
                                <p class="help-block"></p>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            $(function(){

            });
            
        </script>
        
    </body>
</html>











