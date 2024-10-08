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
            'https://via.placeholder.com/800x400?text=Goodfellas+1',
            'https://via.placeholder.com/800x400?text=Goodfellas+2',
            'https://via.placeholder.com/800x400?text=Goodfellas+3',
            'https://via.placeholder.com/800x400?text=Goodfellas+4'
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
        'trailer' => 'https://www.youtube.com/embed/He7IbXJy-Uk',
        'carusel' => [
            'https://via.placeholder.com/800x400?text=Scarface+1',
            'https://via.placeholder.com/800x400?text=Scarface+2',
            'https://via.placeholder.com/800x400?text=Scarface+3',
            'https://via.placeholder.com/800x400?text=Scarface+4'
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
            'https://via.placeholder.com/800x400?text=El+Padrino+II+1',
            'https://via.placeholder.com/800x400?text=El+Padrino+II+2',
            'https://via.placeholder.com/800x400?text=El+Padrino+II+3',
            'https://via.placeholder.com/800x400?text=El+Padrino+II+4'
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
            'https://via.placeholder.com/800x400?text=La+La+Land+1',
            'https://via.placeholder.com/800x400?text=La+La+Land+2',
            'https://via.placeholder.com/800x400?text=La+La+Land+3',
            'https://via.placeholder.com/800x400?text=La+La+Land+4'
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
            'https://via.placeholder.com/800x400?text=Taxi+Driver+1',
            'https://via.placeholder.com/800x400?text=Taxi+Driver+2',
            'https://via.placeholder.com/800x400?text=Taxi+Driver+3',
            'https://via.placeholder.com/800x400?text=Taxi+Driver+4'
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
            'https://via.placeholder.com/800x400?text=La+milla+verde+1',
            'https://via.placeholder.com/800x400?text=La+milla+verde+2',
            'https://via.placeholder.com/800x400?text=La+milla+verde+3',
            'https://via.placeholder.com/800x400?text=La+milla+verde+4'
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
            'https://via.placeholder.com/800x400?text=Insidious+1',
            'https://via.placeholder.com/800x400?text=Insidious+2',
            'https://via.placeholder.com/800x400?text=Insidious+3',
            'https://via.placeholder.com/800x400?text=Insidious+4'
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
            'https://via.placeholder.com/800x400?text=Insidious+Chapter+2+1',
            'https://via.placeholder.com/800x400?text=Insidious+Chapter+2+2',
            'https://via.placeholder.com/800x400?text=Insidious+Chapter+2+3',
            'https://via.placeholder.com/800x400?text=Insidious+Chapter+2+4'
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
            'https://via.placeholder.com/800x400?text=Spider-Verse+1',
            'https://via.placeholder.com/800x400?text=Spider-Verse+2',
            'https://via.placeholder.com/800x400?text=Spider-Verse+3',
            'https://via.placeholder.com/800x400?text=Spider-Verse+4'
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
            'https://via.placeholder.com/800x400?text=Rocky+1',
            'https://via.placeholder.com/800x400?text=Rocky+2',
            'https://via.placeholder.com/800x400?text=Rocky+3',
            'https://via.placeholder.com/800x400?text=Rocky+4'
        ],
        'valoracio' => 5
    ]
];
?>

</body>
</html>