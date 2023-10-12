<?php

class Aprendiz {

    private string $idAprendiz;
    private string $nombres;
    private string $apellidos;
    private string $correo;

    public function __construct($idAprendiz, $nombres, $apellidos, $correo) {
        $this->idAprendiz = $idAprendiz;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->correo = $correo;
    }

    public function getIdAprendiz() {
        return $this->idAprendiz;
    }
    public function getNombres() {
        return $this->nombres;
    }
    public function getApellidos() {
        return $this->apellidos;
    }
    public function getCorreo() {
        return $this->correo;
    }
}

class Ficha {

    private string $codigoFicha;
    private $aprendices = array();

    public function __construct($codigoFicha) {
        $this->codigoFicha = $codigoFicha;
    }

    public function getCodigoFicha() {
        return $this->codigoFicha;
    }

    public function agregarAprendiz(Aprendiz $aprendiz) {
        $this->aprendices[] = $aprendiz;
    }

    public function getAprendices() {
        return $this->aprendices;
    }
}

class Programa {

    private string $codigoPrograma;
    private string $nombrePrograma;
    private $fichas = array();

    public function __construct($codigoPrograma, $nombrePrograma) {
        $this->codigoPrograma = $codigoPrograma;
        $this->nombrePrograma = $nombrePrograma;
    }

    public function getNombrePrograma() {
        return $this->nombrePrograma;
    }

    public function agregarFicha(Ficha $ficha) {
        $this->fichas[] = $ficha;
    }

    public function getFichas() {
        return $this->fichas;
    }
}

$aprendiz1 = new Aprendiz("11111", "Luigi", "Spaghetti", "luigi@xucasa.com");
$aprendiz2 = new Aprendiz("22222", "Mario", "Cannoli", "mario@xucasa.com");
$aprendiz3 = new Aprendiz("33333", "Isabella", "Lasagna", "isabella@xucasa.com");
$aprendiz4 = new Aprendiz("44444", "Giovanni", "Gelato", "giovanni@xucasa.com");
$aprendiz5 = new Aprendiz("55555", "Sofia", "Pizza", "sofia@xucasa.com");
$aprendiz6 = new Aprendiz("66666", "Franco", "Macaroni", "franco@xucasa.com");
$aprendiz7 = new Aprendiz("77777", "Bella", "Tortellini", "bella@xucasa.com");
$aprendiz8 = new Aprendiz("88888", "Roberto", "Pesto", "roberto@xucasa.com");
$aprendiz9 = new Aprendiz("99999", "Giulia", "Carbonara", "giulia@xucasa.com");

// AGREGACIÓN

$ficha1 = new Ficha("2560664A");
$ficha1->agregarAprendiz($aprendiz1);
$ficha1->agregarAprendiz($aprendiz2);
$ficha1->agregarAprendiz($aprendiz3);

$ficha2 = new Ficha("2560664B");
$ficha2->agregarAprendiz($aprendiz4);
$ficha2->agregarAprendiz($aprendiz5);
$ficha2->agregarAprendiz($aprendiz6);

$ficha3 = new Ficha("2560664C");
$ficha3->agregarAprendiz($aprendiz7);
$ficha3->agregarAprendiz($aprendiz8);
$ficha3->agregarAprendiz($aprendiz9);

// AGREGACIÓN

$programa = new Programa("2566664", "ADSO");
$programa->agregarFicha($ficha1);
$programa->agregarFicha($ficha2);
$programa->agregarFicha($ficha3);

$fichasPrograma = $programa->getFichas();

echo "<h1>Programa: " . $programa->getNombrePrograma() . "</h1>";
echo "<h2>Fichas en el programa:</h2>";

foreach ($fichasPrograma as $ficha) {
    echo 'Código de Ficha: <span style="color: red;">' . $ficha->getCodigoFicha() . '</span><br><br>';
    echo "Aprendices en esta ficha:<br><br>";
    
    $aprendicesFicha = $ficha->getAprendices();
    $contadorAprendices = 0;
    
    foreach ($aprendicesFicha as $aprendiz) {
        echo "ID Aprendiz: " . $aprendiz->getIdAprendiz() . "<br>";
        echo "Nombres: " . $aprendiz->getNombres() . "<br>";
        echo "Apellidos: " . $apellidos = $aprendiz->getApellidos() . "<br>";
        echo "Correo: " . $aprendiz->getCorreo() . "<br><br>";
        $contadorAprendices++;
    }

    echo '<span style="color: blue;">Total de Aprendices: ' . $contadorAprendices . '</span><br><br>';
    
}

?>