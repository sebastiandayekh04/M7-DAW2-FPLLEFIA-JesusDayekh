<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Patrón Bridge</title>
</head>
<?php 
include_once '../../header.php';

echo getHeader(2);
?>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://miro.medium.com/v2/resize:fit:1200/1*-nGOaPQzlTbUGkndeFdxbQ.png'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 35rem; height: auto; box-sizing: border-box;">
    <h2 class="card-title text-center">Patrón Memento</h2>
    <div class="card border border-dark" style="width: 32rem; box-sizing: border-box;">
        <img class="card-img-top border border-dark" src="https://refactoring.guru/images/patterns/content/bridge/bridge.png" alt="Patrón Memento" style="height: 350px; object-fit: cover;">
        
        <!-- Contenedor desplazable -->
        <div class="card-body" style="max-height: 300px; overflow-y: auto;">
            <p class="card-text text-black">
            El patrón de diseño Bridge es un patrón estructural que tiene como objetivo separar una clase grande, o un grupo de clases estrechamente relacionadas, en dos jerarquías distintas (abstracción e implementación) para que puedan evolucionar de manera independiente.

            Problema que resuelve: Cuando se tiene una jerarquía de clases que crece exponencialmente al agregar nuevas características (como agregar colores a formas geométricas), la cantidad de combinaciones aumenta de manera insostenible. Este patrón resuelve el problema de la explosión de clases combinadas mediante la composición en lugar de la herencia.

            Solución: El patrón Bridge separa las clases en dos jerarquías:

            Abstracción: Representa el alto nivel, delegando el trabajo real a la clase de implementación.
            Implementación: Realiza el trabajo real, representando la parte de bajo nivel.
            De este modo, puedes agregar nuevas características a cada jerarquía sin que afecte a la otra. Un ejemplo típico es el caso de una interfaz gráfica (abstracción) que depende de una plataforma de sistema operativo (implementación).

            Ejemplo en PHP
            Veamos un ejemplo en PHP que implementa este patrón. En este caso, tenemos dispositivos como televisores y radios, y un control remoto como la abstracción que delega las acciones a estos dispositivos.
            </p>

            
            <!-- Código de ejemplo con desplazamiento propio -->
            <pre class="p-2 border rounded bg-light text-dark" style="max-height: 150px; overflow-y: auto; font-size: 0.9rem;">
&lt;?php
// Interfaz de "Implementación"
interface Device {
    public function isEnabled();
    public function enable();
    public function disable();
    public function getVolume();
    public function setVolume($percent);
    public function getChannel();
    public function setChannel($channel);
}

// Clases concretas de dispositivo (Implementación)
class Tv implements Device {
    private $volume = 50;
    private $channel = 1;
    private $enabled = false;

    public function isEnabled() {
        return $this->enabled;
    }

    public function enable() {
        $this->enabled = true;
    }

    public function disable() {
        $this->enabled = false;
    }

    public function getVolume() {
        return $this->volume;
    }

    public function setVolume($percent) {
        $this->volume = $percent;
    }

    public function getChannel() {
        return $this->channel;
    }

    public function setChannel($channel) {
        $this->channel = $channel;
    }
}

class Radio implements Device {
    private $volume = 30;
    private $station = 101.1;
    private $enabled = false;

    public function isEnabled() {
        return $this->enabled;
    }

    public function enable() {
        $this->enabled = true;
    }

    public function disable() {
        $this->enabled = false;
    }

    public function getVolume() {
        return $this->volume;
    }

    public function setVolume($percent) {
        $this->volume = $percent;
    }

    public function getChannel() {
        return $this->station;
    }

    public function setChannel($station) {
        $this->station = $station;
    }
}

// "Abstracción" - Control remoto
class RemoteControl {
    protected $device;

    public function __construct(Device $device) {
        $this->device = $device;
    }

    public function togglePower() {
        if ($this->device->isEnabled()) {
            $this->device->disable();
        } else {
            $this->device->enable();
        }
    }

    public function volumeDown() {
        $this->device->setVolume($this->device->getVolume() - 10);
    }

    public function volumeUp() {
        $this->device->setVolume($this->device->getVolume() + 10);
    }

    public function channelDown() {
        $this->device->setChannel($this->device->getChannel() - 1);
    }

    public function channelUp() {
        $this->device->setChannel($this->device->getChannel() + 1);
    }
}

// "Abstracción refinada" - Control remoto avanzado
class AdvancedRemoteControl extends RemoteControl {
    public function mute() {
        $this->device->setVolume(0);
    }
}

// Cliente
$tv = new Tv();
$remote = new RemoteControl($tv);
$remote->togglePower();  // Enciende el TV
$remote->volumeUp();  // Subir volumen

$radio = new Radio();
$advancedRemote = new AdvancedRemoteControl($radio);
$advancedRemote->togglePower();  // Enciende la radio
$advancedRemote->mute();  // Silenciar la radio

?&gt;
            </pre>
        </div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
