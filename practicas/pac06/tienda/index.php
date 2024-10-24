2 <!DOCTYPE html>
3 <html lang="en">
4 <head>
5 <meta charset="UTF-8">
6 <meta name="viewport" content="width=device-width, initial-scale=1.0">
7 <title>Mercadona productos /title>
8 <link
href="https: /cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous">
9
10 /head>
11 <body>
12
13 <?php
14 / Incluimos los componentes
15
16 ?>
17 <div class="container">
18
19 <div>
20 <h2>Productos disponibles /h2>
21
22 - aqui va la tabla de productos -->
23 /div>
24
25
26 - aqui incluye los datos de contacto del cliente con un toast live -->
27 - Button trigger modal -->

28 <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-
target="#staticBackdrop">

29 Mi perfil 🖐
30 /button>
31
32 - Modal que al clicar aparece info de contacto-->

33 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-
keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-
hidden="true">

34 <div class="modal-dialog">
35 <div class="modal-content">
36 <div class="modal-header">
37 <h5 class="modal-title" id="staticBackdropLabel">Información de
contacto /h5>

38 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-
label="Close"> /button>

39 /div>
40 <div class="modal-body">
41 - AQUI VA LA INFORMACIÓN DE CONTACTO -->
42 /div>
43
44 /div>
45 /div>
46 /div>
- Modal con la lista de productos que están disponibles -->
49
50 <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
51 - AQUI LA LISTA DE PRODUCTOS -->
52 /div>
53
54 -aqui va un footer -->
55 /div>
56
57
58 <script
src="https: /cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-
ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
crossorigin="anonymous"> /script>
59
60 /body>
61 /html>