<!-- View stored in resources/views/example.php -->

<html>
    <head>
        <title>CG Tech Test</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
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
                    console.log(data.profile);
                    document.getElementById("name").innerHTML = data.profile.name;
                    document.getElementById("bio").innerHTML = data.profile.bio;
                    document.getElementById("phone").innerHTML = data.profile.phone;
                    document.getElementById("email").innerHTML = data.profile.email;
                    loc = fixPicLocation(data.profile.profile_picture);
                    document.getElementById("profilePic").src  = loc;
                }
                });
            }
        </script>

    </head>
    <body>
        <div>
            <!-- Author Info-->
            <div>
                <div class="row py-lg-5">
                    <div class="col-lg-3">
                        <img id="profilePic" src="\img\profile.jpeg" width="100%">
                    </div>
                    <div class="col-lg-6">
                        <div class="row py-lg-3">
                            <h2 id="name">Example Name</h2>
                        </div>
                        <div class="row py-lg-6">
                            <div class="col-lg-6">
                                <h3>Bio:</h3>
                                <p id="bio">fehad dgyagjhdgfj dgyagdjh gdagdj agad jhagd</p>
                            </div>
                            <div class="col-lg-3">
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

            <h1>Hello, <?php echo $name; ?></h1>
            <h1>
                <script>
                    getProfile();
                </script>
            </h1>
            
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            </div>
        </div>
    </body>
</html>
