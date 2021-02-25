<?php
function recoge($var, $m = "")
{
    if (!isset($_REQUEST[$var])) {
        $tmp = (is_array($m)) ? [] : "";
    } elseif (!is_array($_REQUEST[$var])) {
        $tmp = trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
    } else {
        $tmp = $_REQUEST[$var];
        array_walk_recursive($tmp, function (&$valor) {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}

$columnas = recoge("columnas");

$columnasOk = false;

$columnasMinimo = 1;
$columnasMaximo = 1000;

if ($columnas == "") {
    print "  <p class=\"aviso\">No ha escrito el número de columnas.</p>\n";
    print "\n";
} elseif (!is_numeric($columnas)) {
    print "  <p class=\"aviso\">No ha escrito el número de columnas como número.</p>\n";
    print "\n";
} elseif (!ctype_digit($columnas)) {
    print "  <p class=\"aviso\">No ha escrito el número de columnas "
        . "como número entero positivo.</p>\n";
    print "\n";
} elseif ($columnas < $columnasMinimo || $columnas > $columnasMaximo) {
    print "  <p class=\"aviso\">El número de columnas debe estar entre "
        . "$columnasMinimo y $columnasMaximo.</p>\n";
    print "\n";
} else {
    $columnasOk = true;
}

if ($columnasOk) {
    print "  <table class=\"conborde\">\n";
    print "    <tbody>\n";
    print "      <tr>\n";
    for ($i = 1; $i <= $columnas; $i++) {
        print "        <td>$i</td>\n";
    }
    print "      </tr>\n";
    print "    </tbody>\n";
    print "  </table>\n";
    print "\n";
}
?>