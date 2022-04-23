<!-- View stored in resources/views/example.php -->

<html>
    <head>
        <title>CG Tech Test</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
        <style>
            .albumHTML {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(auto-fill, minmax(30%, 1fr));
                grid-template-rows: repeat(auto, 50px);
                align-items: center;
                justify-content: space-between;
            }
        </style>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function fixPicLocation(loc){
                out = loc.replace("jpg", "jpeg");
                return "/" + out;
            }

            function getProfile() {
                $.ajax({
                type:'GET',
                url:'profile',
                dataType:'json',
                data:{},
                success:function(data) {
                    //console.log(data.profile);

                    //main profile
                    document.getElementById("name").innerHTML = data.profile.name;
                    document.getElementById("bio").innerHTML = data.profile.bio;
                    document.getElementById("phone").innerHTML = data.profile.phone;
                    document.getElementById("email").innerHTML = data.profile.email;
                    loc = fixPicLocation(data.profile.profile_picture);
                    document.getElementById("profilePic").src  = loc;

                    //album
                    var album = data.profile.album;
                    for(var i = 0; i<album.length; i++){
                        const a = document.querySelector(".albumHTML");
                        a.innerHTML += 
                                '<div class="card shadow-sm">'
                                + '    <svg class="bd-placeholder-img card-img-top">'
                                //+ '        <text x="50%" y="50%" fill="#eceeef" text-anchor="middle" alignment-baseline="central" font-size="100">' + album[i].title + '</text>'
                                + '        <image href="' + fixPicLocation(album[i].img) + '" width="100%">'
                                + '        <title>' + album[i].title + '</title>'
                                + '        <rect width="100%" height="100%" fill="#55595c"></rect>'
                                + '    </svg>'
                                + '    <div class="card-body">'
                                + '        <h5>' + album[i].title + '</h5>'
                                + '        <p class="card-text">' + album[i].description + '</p>'
                                + '        <div class="d-flex justify-content-between align-items-center">'
                                + '            <small class="text-muted">' + album[i].date + '</small>'
                                + '        </div>'
                                + '    </div>'
                                + '</div>';
                    }
                }
                });
            }
        </script>

    </head>
    <body>
        <script>
            getProfile();
        </script>
        <div>
        <div class="album py-5 bg-light">
            <!-- Author Info-->
            <div class="container pb-5">
                <div class="card shadow-sm">
                    <div class="container my-3">
                        
                        <div class="row lg-10">
                            <div class="col-lg-3">
                                <img id="profilePic" src="\img\profile.jpeg" width="100%">
                            </div>
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-8">
                                <div class="row py-lg-12">
                                    <h2 id="name">Example Name</h2>
                                </div>
                                <div class="row py-lg-3">
                                    <div class="col-lg-8">
                                        <h3>Bio:</h3>
                                        <p id="bio">fehad dgyagjhdgfj dgyagdjh gdagdj agad jhagd</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row py-lg-1">
                                            <h5>Phone:</h5>
                                            <p id="phone">555-555-5555</p>
                                        </div>
                                        <div class="row py-lg-1">
                                            <h5>Email:</h5>
                                            <p id="email">example@email.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <h1>Hello, <?php echo $name; ?></h1> -->
            
            
                <div class="container">
                        <div class="col">

                            <div class="albumHTML">
                            </div>

                        </div>
                </div>
            </div>


        </div>
    </body>
</html>
