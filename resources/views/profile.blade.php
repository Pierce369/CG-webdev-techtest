 
<html>
    <head>
        <title>TITLE test</title>
    </head>
    <body>
        <!-- Author Info-->
        <div class="row py-lg-5">
            <title>{{$name}}</title>
            <div class="col-lg-3">
                <img href="img/profile.jpeg">
            </div>
            <div class="col-lg-6">
                <h1>Bio:</h1>
            </div>
            <div class="col-lg-3">
                <h1>Contact</h1>
            </div>
        </div>

        test
        
        <hr/>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">

                @foreach ($album as $lscape)
                    {{$task}}
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </body>
</html>