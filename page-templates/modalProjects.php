<?php
$projects = [
  [
    "id" => "1",
    "title" => "ALTHAUS SAN ÁNGEL",
    "url" => "https://www.springall-mk.com/copia-de-georgia-191",
    "location" => "San Ángel, Ciudad de México",
    "design" => "Despacho S+MK",
    "description" => "Althaus San Ángel es parte de una nueva marca de vivienda en renta con 26 niveles y 242 unidades. Este edificio promete cambiar el estilo de vida al sur de la ciudad gracias a sus amenidades disruptivas como Lobby Lounge, Sky Garden, Pet Club, Urban Gym, Whiskey Bar, Champagne Room, Sky Terrace y más."
  ],
  [
    "id" => "2",
    "title" => "Proyecto 2",
    "location" => "Otra ubicación",
    "design" => "Despacho de diseño",
    "description" => "Descripción del segundo proyecto..."
  ]
];

// Obtener el ID del proyecto desde el parámetro de la URL
$projectId = isset($_GET['project_id']) ? $_GET['project_id'] : "1"; // Valor por defecto si no se recibe

// Buscar el proyecto correspondiente en el array
$selectedProject = null;
foreach ($projects as $project) {
    if ($project['id'] === $projectId) {
        $selectedProject = $project;
        break; // Salir del bucle una vez encontrado
    }
}
?>
