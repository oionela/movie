<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> 
    </head>
    <body>
        <div class="container">
            <div class = "navbar">  
                <div class="fig">
                    <img src="img/bars-solid.svg">
                </div>
                    
                <div class = "logo">
                        <img src="img/logo-imdb.png">
                 </div>

                 <div class = "fig">
                    <img src="img/user-solid.svg" >
                 </div> 
            </div>

            <div class="movie">
                <div class="photo">
                    <img src="img/space-force.jpg">
                </div>  

                <div class="describe">
                    <div class="title-rating-wrapper">
                        <div class="title">
                            <b>Space Force</b>
                        </div>

                        <div class="rating">
                            <div class="star">
                                <img src="img/star-solid.svg">
                            </div>

                            <div class="note">
                                6.9
                            </div>    
                        </div>
                    </div>
                    
                    <div class="artists">
                        <b>Director</b>: Robert Zemeckis
                    </div>

                    <div class="button">
                        <button>View More</button>
                    </div>
                </div>  
            </div>

            <div class="movie">
                <div class="photo">
                    <img src="img/forest-gump.jpg">
                </div>  

                <div class="describe">
                    <div class="title-rating-wrapper">
                        <div class="title">
                            <b>Forest Gump</b>
                        </div>

                        <div class="rating">
                            <div class="star">
                                <img src="img/star-solid.svg">
                            </div>

                            <div class="note">
                                8.8
                            </div>    
                        </div>
                    </div>
                    
                    <div class="artists">
                        <b>Director</b>: Robert Zemeckis
                    </div>

                    <div class="button">
                        <button>View More</button>
                    </div>
                </div>  
            </div>

            <div class="movie">
                <div class="photo">
                    <img src="img/joker.jpg">
                </div>  

                <div class="describe">
                    <div class="title-rating-wrapper">
                        <div class="title">
                            <b>Joker</b>
                        </div>

                        <div class="rating">
                            <div class="star">
                                <img src="img/star-solid.svg">
                            </div>

                            <div class="note">
                                7.0
                            </div>    
                        </div>
                    </div>
                    
                    <div class="artists">
                        <b>Stars</b>: Tom Hanks, Robin Wright, Gary Sinise
                    </div>

                    <div class="button">
                        <button>View More</button>
                    </div>
                </div>  
            </div>
        </div>
    </body>
</html>
