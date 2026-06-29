<?php
/**
 * Genera og-image.png (1200x630) per le anteprime social.
 * Uso: php tools/generate-og.php  ->  scrive ../og-image.png
 * Richiede l'estensione GD e i font DejaVu.
 */

$W = 1200;
$H = 630;
$out = __DIR__ . '/../og-image.png';

$fontBold = '/usr/share/fonts/truetype/dejavu/DejaVuSans-Bold.ttf';
$fontReg  = '/usr/share/fonts/truetype/dejavu/DejaVuSans.ttf';
$fontMono = '/usr/share/fonts/truetype/dejavu/DejaVuSansMono.ttf';

$img = imagecreatetruecolor($W, $H);

// Sfondo: gradiente verticale dal viola scuro al nero del tema (#0c0818)
for ($y = 0; $y < $H; $y++) {
    $t = $y / $H;
    $r = (int) (18 + (12 - 18) * $t);
    $g = (int) (10 + (8 - 10) * $t);
    $b = (int) (34 + (24 - 34) * $t);
    $line = imagecolorallocate($img, $r, $g, $b);
    imageline($img, 0, $y, $W, $y, $line);
}

// Alone viola in alto a destra
for ($i = 320; $i > 0; $i -= 4) {
    $alpha = (int) (118 - ($i / 320) * 118);
    $glow = imagecolorallocatealpha($img, 192, 132, 252, max(0, min(127, $alpha)));
    imagefilledellipse($img, 1080, 120, $i, $i, $glow);
}

$purple = imagecolorallocate($img, 192, 132, 252);
$red    = imagecolorallocate($img, 230, 57, 70);
$white  = imagecolorallocate($img, 245, 243, 250);
$muted  = imagecolorallocate($img, 168, 162, 188);

// Esagono logo (richiama il sito)
$cx = 110; $cy = 110; $rad = 46;
$pts = [];
for ($k = 0; $k < 6; $k++) {
    $ang = deg2rad(60 * $k - 90);
    $pts[] = $cx + $rad * cos($ang);
    $pts[] = $cy + $rad * sin($ang);
}
imagesetthickness($img, 3);
imagepolygon($img, $pts, $purple);
imagettftext($img, 30, 0, $cx - 28, $cy + 12, $white, $fontBold, 'GM');

// Titolo
imagettftext($img, 78, 0, 80, 320, $white, $fontBold, 'Giovanni Melfi');

// Sottotitolo
imagettftext($img, 30, 0, 84, 388, $purple, $fontReg, 'Consulente IT  ·  Software Engineer');

// Riga descrittiva
imagettftext($img, 22, 0, 84, 448, $muted, $fontReg, 'Software su misura · Automazione · Backend · DevOps');

// Barra accento
imagefilledrectangle($img, 80, 478, 380, 484, $red);

// Dominio in basso
imagettftext($img, 24, 0, 84, 560, $purple, $fontMono, 'giovannimelfi.it');

imagepng($img, $out);
imagedestroy($img);

echo "Scritto: $out (" . filesize($out) . " byte)\n";
