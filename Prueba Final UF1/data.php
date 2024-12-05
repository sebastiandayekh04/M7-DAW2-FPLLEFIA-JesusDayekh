<?php
if(!isset($_SESSION)) {
    session_start();
}
$preguntas = [
    [
        'id' => 1,
        'question' => '¿Cuál es la capital de Francia?',
        'options' => ['París', 'Londres', 'Berlín'],
        'answer' => 'París'
    ],
    [
        'id' => 2,
        'question' => '¿Cuánto es 2 + 2?',
        'options' => ['3', '4', '5'],
        'answer' => '4'
    ],
    [
        'id' => 3,
        'question' => '¿Cuál es el océano más grande del mundo?',
        'options' => ['Atlántico', 'Índico', 'Pacífico'],
        'answer' => 'Pacífico'
    ],
    [
        'id' => 4,
        'question' => '¿Quién escribió "Don Quijote de la Mancha"?',
        'options' => ['Miguel de Cervantes', 'Gabriel García Márquez', 'Pablo Neruda'],
        'answer' => 'Miguel de Cervantes'
    ],
    [
        'id' => 5,
        'question' => '¿Cuál es el animal terrestre más grande?',
        'options' => ['Elefante', 'Rinoceronte', 'Jirafa'],
        'answer' => 'Elefante'
    ],
    [
        'id' => 6,
        'question' => '¿Cuántos planetas tiene el sistema solar?',
        'options' => ['8', '9', '10'],
        'answer' => '8'
    ],
    [
        'id' => 7,
        'question' => '¿En qué continente se encuentra Egipto?',
        'options' => ['Asia', 'África', 'Europa'],
        'answer' => 'África'
    ],
    [
        'id' => 8,
        'question' => '¿Cuál es la fórmula química del agua?',
        'options' => ['H2O', 'CO2', 'O2'],
        'answer' => 'H2O'
    ],
    [
        'id' => 9,
        'question' => '¿Quién pintó la Mona Lisa?',
        'options' => ['Pablo Picasso', 'Vincent van Gogh', 'Leonardo da Vinci'],
        'answer' => 'Leonardo da Vinci'
    ],
    [
        'id' => 10,
        'question' => '¿Cuánto es 5 x 6?',
        'options' => ['30', '20', '25'],
        'answer' => '30'
    ]
];

if (!isset($_SESSION['preguntas'])) {
    $_SESSION['preguntas'] = $preguntas;
}
?>
