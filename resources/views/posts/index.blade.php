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
        
    </body>
</html>