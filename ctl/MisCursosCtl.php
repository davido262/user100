<?php

require_once('ctl/BaseCtl.php');
class MisCursosCtl extends BaseCtl {
  public function ejecutar() {
    require_once('mdl/CursosMdl.php');
    $mdl = new CursosMdl();
    if (isset($_POST['llenar_curso'])) {
      $ciclo = $_POST['ciclo'];
      $nrc = $_POST['nrc'];
      $q = $mdl->get_info_curso($ciclo, $nrc);
      if (count($q) == 0) {
        echo 'Error: no se encontro';
        return;
      }
      $info = array();
      $info['clave_materia'] = $q['clave'];
      $info['academia'] = $q['academia'];
      $info['materia'] = $q['materia'];
      $info['nrc'] = $q['nrc'];
      $info['seccion'] = $q['seccion'];
      $q = $mdl->get_info_detalle_curso($q['ciclo'], $q['nrc']);
      $info['dia'] = array();
      $info['horas_por_dia'] = array();
      $info['horario'] = array();
      foreach ($q as $dia) {
        $info['dia'][] = $dia['dia'];
        $info['horas_por_dia'][] = $dia['horas_por_dia'];
        $info['horario'][] = $dia['horario'];
      }
      echo json_encode($info);
    } elseif (isset($_POST['llenar_materia']))
    {
      $clave = $_POST['clave'];
      $q = $mdl->get_info_materia($clave);
      if (count($q) == 0) {
        echo 'Error: no se encontro';
        return;
      }
      $info = array();
      $info['materia'] = $q['materia'];
      $info['academia'] = $q['academia'];
      echo json_encode($info);
    } elseif (isset($_POST['modificar']))
    {
      $ciclonrc = $_POST['ciclonrc'];
      $nrc = $_POST['nrc'];
      $ciclo = $_POST['ciclo'];
      $clave = $_POST['clave'];
      $seccion = $_POST['seccion'];
      $dias = $_POST['dia'];
      $horas_por_dia = $_POST['hora'];
      $horarios = $_POST['duracion'];
      $mdl->modificar($nrc, $ciclonrc, $ciclo, $clave, $seccion,
                      $dias, $horas_por_dia, $horarios);
    }
    elseif(isset($_POST['agregar']))
    {
      $ciclonrc=$_POST['ciclonrc'];
      $codigo_profesor = $_SESSION['codigo'];
      $ciclo=$_POST['new_ciclo'];
      $clave=$_POST['new_clave'];
      $nrc=$_POST['new_nrc'];
      $seccion=$_POST['new_seccion'];
      $dia=$_POST['new_dia'];
      $hora=$_POST['new_hora'];
      $duracion=$_POST['new_duracion'];
      $mdl->agregar($ciclonrc, $codigo_profesor, $ciclo, $clave, $nrc, $seccion, $dia, $hora, $duracion);
    } elseif (isset($_POST['get_claves'])) {
      $q = $mdl->get_claves_materia();
      if (count($q) == 0) {
        echo 'Error: no se encontro';
        return;
      }
      $info = array();
      foreach ($q as $clave) {
        $info[] = $clave['clave'];
      }
      echo json_encode($info);
    } else {
      $this->mostrar();
    }
  }

  public function generarBody() {
    $body = file_get_contents($this->vstFile);

    // Ciclo
    require_once('mdl/CiclosMdl.php');
    $mdl = new CiclosMdl();

    $inicio_fila = strrpos($body, '<option value="{CICLO}">');
    $final_fila = $inicio_fila + 40;
    $fila = substr($body, $inicio_fila, $final_fila - $inicio_fila);

    $datos = $mdl->get_ciclos();
    $ciclo = '';
    if (!empty($datos)) {
      $ciclo = $datos[0]['ciclo'];
    }
    if (isset($_GET['ciclo'])) {
      $ciclo = $_GET['ciclo'];
    }

    $filas = '';
    foreach ($datos as $row) {
      $new_fila = $fila;
      $dict = array(
        '{CICLO}' => $row['ciclo'],
      );
      $new_fila = strtr($new_fila, $dict);
      if ($row['ciclo'] == $ciclo) {
        $new_fila = strtr($new_fila, array('>' => ' selected>'));
      }
      $filas .= $new_fila;
    }
    $body = str_replace($fila, $filas, $body);

    // New Ciclo
    $inicio_fila = strrpos($body, '<option value="{NEWCICLO}">');
    $final_fila = $inicio_fila + 46;
    $fila = substr($body, $inicio_fila, $final_fila - $inicio_fila);

    $datos = $mdl->get_ciclos();
    $filas = '';
    foreach ($datos as $row) {
      $new_fila = $fila;
      $dict = array(
        '{NEWCICLO}' => $row['ciclo'],
      );
      $new_fila = strtr($new_fila, $dict);
      $filas .= $new_fila;
    }
    $body = str_replace($fila, $filas, $body);

    // Curso
    require_once('mdl/CursosMdl.php');
    $mdl = new CursosMdl();

    $inicio_fila = strrpos($body, '<option value="{CURSO}">');
    $final_fila = $inicio_fila + 40;
    $fila = substr($body, $inicio_fila, $final_fila - $inicio_fila);

    $datos = $mdl->get_cursos($ciclo);
    if (!empty($datos)) {
      $clave = $datos[0]['clave'];
      $nrc = $datos[0]['nrc'];
    }
    if (isset($_GET['clave'])) {
      $clave = $_GET['clave'];
    }
    if (isset($_GET['nrc'])) {
      $nrc = $_GET['nrc'];
    }

    $filas = '';
    foreach ($datos as $row) {
      $new_fila = $fila;
      $dict = array(
        '{CURSO}' => $row['nrc'].' - '.$row['clave'].' - '.$row['materia'].' ('.$row['seccion'].')',
      );
      $new_fila = strtr($new_fila, $dict);
      if ($row['clave'] == $clave) {
        $new_fila = strtr($new_fila, array('>' => ' selected>'));
      }
      $filas .= $new_fila;
    }
    $body = str_replace($fila, $filas, $body);

    $this->onload_fcn = 'on_load()';
    return $body;
  }
}

?>
