<?php
$headers = 'From: antoine.lucsko@wanadoo.fr' . "\n";
$headers .= 'Reply-To:antoine.lucsko@wanadoo.fr' . "\n";
$headers .= 'Content-Type: text/plain; charset="iso-8859-1"' . "\n";
$headers .= 'Content-Transfer-Encoding: 8bit';
mail('antoine.lucsko@wanadoo.fr', 'Sujet',
        'Message contenu de l email', $headers);