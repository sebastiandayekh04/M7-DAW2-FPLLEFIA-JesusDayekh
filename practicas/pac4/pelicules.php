<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinemes Màgic Badalona</title>
</head>
<body>
<?php
// pelicules.php

$pelicules = [
    [
        'nom' => 'Uno de los nuestros (Goodfellas)',
        'imatge' => 'https://pics.filmaffinity.com/Uno_de_los_nuestros-343032101-large.jpg',
        'horaris' => ['18:00', '21:00'],
        'sinopsi' => 'La historia de un joven que se une a una familia de la mafia y se adentra en el mundo del crimen organizado.',
        'durada' => 146,
        'director' => 'Martin Scorsese',
        'repartiment' => 'Ray Liotta, Robert De Niro, Joe Pesci',
        'qualificacio' => '+16',
        'genere' => 'Crimen, Drama',
        'trailer' => 'https://www.youtube.com/embed/p7DGH1lD95U',
        'carusel' => [
            'https://static1.srcdn.com/wordpress/wp-content/uploads/2022/09/Goodfellas-Funny-Guy-Scene.jpg',
            'https://cdn.theatlantic.com/thumbor/ms9364tSAZ4NXF22WyxkgLyK7qU=/0x88:1110x712/960x540/media/img/mt/2015/09/goodfellas/original.jpg',
            'https://media.timeout.com/images/102793667/image.jpg',
            'https://uproxx.com/wp-content/uploads/2020/09/Goodfellas-Mailman.jpg'
        ],
        'valoracio' => 5
    ],
    [
        'nom' => 'Scarface',
        'imatge' => 'https://pics.filmaffinity.com/El_precio_del_poder-846203734-large.jpg',
        'horaris' => ['20:00', '23:00'],
        'sinopsi' => 'La historia de Tony Montana, un inmigrante cubano que se convierte en uno de los narcotraficantes más poderosos de Miami.',
        'durada' => 170,
        'director' => 'Brian De Palma',
        'repartiment' => 'Al Pacino, Michelle Pfeiffer, Steven Bauer',
        'qualificacio' => '+16',
        'genere' => 'Crimen, Drama',
        'trailer' => 'https://www.youtube.com/watch?v=vSp_kLkNdnE',
        'carusel' => [
            'https://miro.medium.com/v2/resize:fit:1400/0*ssqrxr54cuS3Q6iL',
            'https://miro.medium.com/v2/resize:fit:800/1*Jw3Yv1gZfUxWjOMRQpgRJA.jpeg',
            'https://fogsmoviereviews.files.wordpress.com/2013/05/scarface_37.png',
            'https://static1.srcdn.com/wordpress/wp-content/uploads/2021/07/scarface-chainsaw-scene-bathroom.jpg'
        ],
        'valoracio' => 4
    ],
    [
        'nom' => 'El Padrino II (The Godfather Part II)',
        'imatge' => 'https://m.media-amazon.com/images/S/pv-target-images/4e6e0f298fcac897120f548cd23ce621d32607c6ece3686d7617897bf88c8695.jpg',
        'horaris' => ['19:30', '22:30'],
        'sinopsi' => 'La historia se divide entre el ascenso de Vito Corleone en Nueva York y la lucha de su hijo Michael para expandir el imperio familiar.',
        'durada' => 202,
        'director' => 'Francis Ford Coppola',
        'repartiment' => 'Al Pacino, Robert De Niro, Diane Keaton',
        'qualificacio' => '+16',
        'genere' => 'Crimen, Drama',
        'trailer' => 'https://www.youtube.com/embed/SBRv7-y3gb8',
        'carusel' => [
            'https://i.ytimg.com/vi/znL8uYvohCw/maxresdefault.jpg',
            'https://assets.mubicdn.net/images/film/1270/image-w856.jpg?1543371338',
            'https://i.blogs.es/dc9a63/padrino-guion-3-minutos/1366_2000.jpeg',
            'https://hips.hearstapps.com/hmg-prod/images/the-movie-the-godfather-part-ii-directed-by-francis-ford-news-photo-1578504569.jpg?crop=1xw:1xh;center,top&resize=980:*'
        ],
        'valoracio' => 5
    ],
    [
        'nom' => 'La La Land',
        'imatge' => 'https://m.media-amazon.com/images/M/MV5BMzUzNDM2NzM2MV5BMl5BanBnXkFtZTgwNTM3NTg4OTE@._V1_.jpg',
        'horaris' => ['17:00', '20:00'],
        'sinopsi' => 'Un músico y una aspirante a actriz persiguen sus sueños en Los Ángeles, enfrentando los retos de su relación y sus carreras.',
        'durada' => 128,
        'director' => 'Damien Chazelle',
        'repartiment' => 'Ryan Gosling, Emma Stone, John Legend',
        'qualificacio' => '+16',
        'genere' => 'Musical, Romance',
        'trailer' => 'https://www.youtube.com/embed/nRayUjXIDdQ',
        'carusel' => [
            'https://i0.wp.com/swarthmorephoenix.com/wp-content/uploads/2023/03/Screen_Shot_2023-03-22_at_10.25.09_PM.png?fit=1382%2C924&ssl=1',
            'https://ew.com/thmb/oUqjTHDzaSDwAhSmxnr8S0uQfvQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/la-la-land2-2000-cdc386889c1a42409110b5c45604429d.jpg',
            'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhri2hqJbcJgu6VDyCY6XTTNMQmIxZQC8Dp-sPn0-8jq5IDyq2EwAZ4N1Ti9IQy7q-uC4Id9DINocxG3TFvA_1Le4dfqzMYhJbxoq-cTRA67fEneuEOxCVsJFLZvHSkjtUw16kH/s1600/La-La-Land.png',
            'https://www.filmmattersmagazine.com/wp-content/uploads/2017/10/Shabani-1.jpg'
        ],
        'valoracio' => 4
    ],
    [
        'nom' => 'Taxi Driver',
        'imatge' => 'https://dentrodelmonolito.files.wordpress.com/2020/05/405e4-taxidriver.jpg',
        'horaris' => ['19:00', '22:00'],
        'sinopsi' => 'La historia de un veterano de Vietnam que se convierte en taxista en Nueva York y su lucha con la soledad y la violencia.',
        'durada' => 113,
        'director' => 'Martin Scorsese',
        'repartiment' => 'Robert De Niro, Jodie Foster, Cybill Shepherd',
        'qualificacio' => '+16',
        'genere' => 'Drama, Thriller',
        'trailer' => 'https://www.youtube.com/embed/FzNFDRgA0wk',
        'carusel' => [
            'https://static1.srcdn.com/wordpress/wp-content/uploads/2020/02/Travis-in-Taxi-Driver-3.jpg',
            'https://i.ytimg.com/vi/cRya0BMickE/sddefault.jpg',
            'https://pyxis.nymag.com/v1/imgs/7f8/5f4/7c0c8b26d162fd6c6b50ba7c4fd78d1f06-01-steve-schapiro-taxi-driver.1x.rsocial.w1200.jpg',
            'https://static1.srcdn.com/wordpress/wp-content/uploads/Best-Unscripted-Movie-Scenes-Taxi-Driver-Mirror.jpg'
        ],
        'valoracio' => 5
    ],
    [
        'nom' => 'La milla verde (The Green Mile)',
        'imatge' => 'https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/p24429_p_v12_bf.jpg',
        'horaris' => ['16:30', '20:30'],
        'sinopsi' => 'La vida de los guardias de una prisión se complica cuando un nuevo prisionero con habilidades especiales llega a la milla verde.',
        'durada' => 189,
        'director' => 'Frank Darabont',
        'repartiment' => 'Tom Hanks, Michael Clarke Duncan, David Morse',
        'qualificacio' => '+16',
        'genere' => 'Drama, Fantasía',
        'trailer' => 'https://www.youtube.com/embed/hBtSF4-cnzk',
        'carusel' => [
            'https://i.blogs.es/01e577/la-20milla-20verde-20michael-20clarke-20duncan/650_1200.jpg',
            'https://i.ytimg.com/vi/_z4FAKwzArw/hq720.jpg?sqp=-oaymwE7CK4FEIIDSFryq4qpAy0IARUAAAAAGAElAADIQj0AgKJD8AEB-AHUBoAC4AOKAgwIABABGHIgTigtMA8=&rs=AOn4CLAgdiHC3GVkDG_KgdFKqWz9rhhH4g',
            'https://media.gq.com.mx/photos/5f5250fb4464f9b88fb264c7/master/pass/GREEN.jpg',
            'https://amcselekt.es/blog/wp-content/uploads/2020/06/The-Green-Mile.jpg'
        ],
        'valoracio' => 5
    ],
    [
        'nom' => 'La noche del demonio (Insidious)',
        'imatge' => 'https://es.web.img3.acsta.net/pictures/14/05/07/09/01/306626.jpg',
        'horaris' => ['18:30', '21:30'],
        'sinopsi' => 'Una familia intenta salvar a su hijo, que está atrapado en una dimensión oscura, de fuerzas demoníacas.',
        'durada' => 103,
        'director' => 'James Wan',
        'repartiment' => 'Patrick Wilson, Rose Byrne, Lin Shaye',
        'qualificacio' => '+16',
        'genere' => 'Horror, Suspenso',
        'trailer' => 'https://www.youtube.com/embed/FRW3K0LlsD0',
        'carusel' => [
            'https://static1.moviewebimages.com/wordpress/wp-content/uploads/2023/07/insidious-l.jpg',
            'https://i.ytimg.com/vi/gGdbaYda1j4/maxresdefault.jpg',
            'https://static1.srcdn.com/wordpress/wp-content/uploads/2020/05/insiddious-promo.jpg',
            'https://bloody-disgusting.com/wp-content/uploads/2023/04/insid.jpg'
        ],
        'valoracio' => 4
    ],
    [
        'nom' => 'Insidious: Chapter 2',
        'imatge' => 'https://m.media-amazon.com/images/S/pv-target-images/2679a58bd298e51a529382e02ae6769d2f4149c4b5b865aacfb886352b651b12.jpg',
        'horaris' => ['19:00', '22:00'],
        'sinopsi' => 'La familia Lambert se enfrenta a los secretos oscuros de su pasado mientras luchan contra las fuerzas sobrenaturales que amenazan su vida.',
        'durada' => 106,
        'director' => 'James Wan',
        'repartiment' => 'Patrick Wilson, Rose Byrne, Ty Simpkins',
        'qualificacio' => '+16',
        'genere' => 'Horror, Suspenso',
        'trailer' => 'https://www.youtube.com/embed/-tH8TQnHH-4',
        'carusel' => [
            'https://cdn2.sbnation.com/assets/3216511/insidious_chapter218_1020.jpg',
            'https://static1.moviewebimages.com/wordpress/wp-content/uploads/2023/07/insidious-chapter-2-bride-in-black.jpeg',
            'https://images.filmibeat.com/img/2013/11/15-insidious-chapter-2-review.jpg',
            'https://www.gamespot.com/a/uploads/original/1757/17577455/4161988-further_041423_bm_25706_r.jpg'
        ],
        'valoracio' => 4
    ],
    [
        'nom' => 'Spider-Man: Across the Spider-Verse',
        'imatge' => 'https://m.media-amazon.com/images/I/91x4nWCLbwL._AC_UF894,1000_QL80_.jpg',
        'horaris' => ['17:00', '20:00'],
        'sinopsi' => 'Miles Morales se embarca en una aventura épica a través de múltiples dimensiones, encontrándose con otros Spider-People en el camino.',
        'durada' => 140,
        'director' => 'Joaquim Dos Santos, Kemp Powers, Justin K. Thompson',
        'repartiment' => 'Shameik Moore, Hailee Steinfeld, Oscar Isaac',
        'qualificacio' => '+16',
        'genere' => 'Animación, Acción',
        'trailer' => 'https://www.youtube.com/embed/b_yMOiRgMmQ',
        'carusel' => [
            'https://hips.hearstapps.com/hmg-prod/images/spider-man-across-the-spiderverse-1670500626.jpg?crop=0.747xw:1.00xh;0.127xw,0',
            'https://statcdn.fandango.com/MPX/image/NBCU_Fandango/348/775/SpiderverseTr.jpg',
            'https://media.newyorker.com/photos/64889828ef09d4a0e04c759c/16:9/w_1280,c_limit/Bert-Spider-Verse.jpg',
            'https://i0.wp.com/www.thewrap.com/wp-content/uploads/2023/06/Spider-Man-Across-the-Spider-Verse.jpg?fit=1200%2C675&ssl=1'
        ],
        'valoracio' => 5
    ],
    [
        'nom' => 'Rocky',
        'imatge' => 'https://static.posters.cz/image/1300/posters/rocky-balboa-pelicula-de-rocky-i167759.jpg',
        'horaris' => ['18:00', '21:00'],
        'sinopsi' => 'La historia de un boxeador de Filadelfia que recibe la oportunidad de pelear por el título mundial de peso pesado.',
        'durada' => 120,
        'director' => 'John G. Avildsen',
        'repartiment' => 'Sylvester Stallone, Talia Shire, Burt Young',
        'qualificacio' => '+16',
        'genere' => 'Drama, Deportes',
        'trailer' => 'https://www.youtube.com/embed/yw18pL2V9xQ',
        'carusel' => [
            'https://variety.com/wp-content/uploads/2020/06/rocky-i-apollo-creed.jpg?w=684',
            'https://www.looper.com/img/uploads/2016/03/rockyunscriptedfeatured-1380x620_rev1.jpg',
            'https://images.squarespace-cdn.com/content/v1/51b3dc8ee4b051b96ceb10de/0d52e4c6-b40e-433d-aaba-ba00054cb2b3/sylvester-stallone-shares-behind-the-scenes-footage-from-the-making-of-rocky-ii.jpg',
            'https://miro.medium.com/v2/resize:fit:950/1*TJc38KGV7-2I57PHGeZEPw.jpeg'
        ],
        'valoracio' => 5
    ]
];
?>

</body>
</html>