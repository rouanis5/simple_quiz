<?php
$quest = [
    "q1" => [
        "question" => "A quoi sert un Excel?",
        "choix" => ["réaliser des tableurs", "éditer du texte"],
        "réponse" => "réaliser des tableurs",
        "type" => "radio",
    ],
    "q2" => [
        "question" => "l'acronyme PHP?",
        "type" => "radio",
        "choix" => ["PHP: Hypertext Preprocessor", "Programming Hypertext Page", "Preprocessor Home Page"],
        "réponse" => "PHP: Hypertext Preprocessor",
    ],
    "q3" => [
        "question" => "Que contient la variable \$x?: <code>\$a=2; \$b=4; \$x=\$a%\$b</code> ",
        "choix" => [""],
        "réponse" => "2",
        "type" => "text",
    ],
    "q4" => [
        "question" => "Nous pouvons utiliser ___ pour commenter une seule ligne?",
        "choix" => ["/?", "//", "#", "'/* */"],
        "réponse" => "//",
        "type" => "radio",
    ],
    "q5" => [
        "question" => "Lequel des éléments suivants doit être installé sur votre ordinateur pour exécuter des scripts PHP?",
        "choix" => ["Adobe Dreamweaver", "PHP", "Apache", "WampServer"],
        "réponse" => ["PHP", "Apache", "WampServer"],
        "type" => "checkbox",
    ],
    "q6" => [
        "question" => "Un script PHP devrait commencer par ___ ?",
        "choix" => [""],
        "réponse" => "<?php",
        "type" => "text",
    ],
];
$total = 0;
foreach ($quest as $k => $v) {
    $total += is_array($v["réponse"]) ? count($v["réponse"]) : 1;
}
