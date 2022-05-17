<?php 

$juegos = array(
    array("jugadorCruz" => "Aaron", "jugadorCirculo" => "Mateo", "puntosCruz" => 6, "puntosCirculo" => 0),
    array("jugadorCruz" => "Santi", "jugadorCirculo" => "Alan", "puntosCruz" => 1, "puntosCirculo" => 1),
    array("jugadorCruz" => "Santi", "jugadorCirculo" => "Alan", "puntosCruz" => 5, "puntosCirculo" => 0),
    array("jugadorCruz" => "Mateo", "jugadorCirculo" => "Aaron", "puntosCruz" => 6, "puntosCirculo" => 0),
    array("jugadorCruz" => "Majo", "jugadorCirculo" => "David", "puntosCruz" => 0, "puntosCirculo" => 6),
    array("jugadorCruz" => "Aaron", "jugadorCirculo" => "Mateo", "puntosCruz" => 3, "puntosCirculo" => 0),
    array("jugadorCruz" => "Karina", "jugadorCirculo" => "Sandra", "puntosCruz" => 6, "puntosCirculo" => 0),
    array("jugadorCruz" => "Josepe", "jugadorCirculo" => "Grillo", "puntosCruz" => 1, "puntosCirculo" => 1),
);

$jugador = readline("Jugador: ");

foreach ($juegos as $dato => $valor) {
    if ($jugador == strtoupper($valor["jugadorCruz"]) && $valor["puntosCruz"] > 1) {
        echo "\n◿\n";
        echo "‖ Jugador Tateti: " . key($juegos) . " (Gano X)\n";
        echo "‖ Jugador Cruz: " . $valor["jugadorCruz"] . " obtuvo " . $valor["puntosCruz"] . " puntos.\n";
        echo "‖ Jugador Circulo: " . $valor["jugadorCirculo"] . " obtuvo " . $valor["puntosCirculo"] . " puntos.\n";
        echo "◹\n";
        break;
    } elseif ($jugador == strtoupper($valor["jugadorCirculo"]) && $valor["puntosCirculo"] > 1) {
        echo "\n◿\n";
        echo "‖ Jugador Tateti: " . key($juegos) . " (Gano O)";
        echo "‖ Jugador Circulo: " . $$valor["jugadorCirculo"] . " obtuvo " . $$valor["puntosCirculo"] . " puntos.\n";
        echo "‖ Jugador Cruz: " . $valor["jugadorCruz"] . " obtuvo " . $valor["puntosCruz"] . " puntos.\n";
        echo "◹\n";
        break;
    } elseif ($dato == count($juegos)) {
        echo "El jugador " . $jugador . " no a ganado ningun juego.";
    }
}