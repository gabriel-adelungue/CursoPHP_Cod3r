<div class="titulo">If Else</div>

<?php

if (true) {
    echo "Serei impresso?<br>";
}

if(true){
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte B<br>";
} else {
    echo "Falso - Parte A<br>";    
    echo "Falso - Parte B<br>";    
}


if (false) {
    echo "Passo A<br>";
} else if (true) {
    echo "Passo B<br>";
} else if (true) {
    echo "Passo C<br>";
} else {
    echo "Último Passo<br>";
}
    
echo "Fim<br>";    