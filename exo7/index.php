<?php 

function test($age, $genre){
    if ($age >= 18 and $genre === "homme") {
        return "Vous êtes un $genre et vous êtes majeur.";
    } elseif ($age >= 18 and $genre === "femme") {
        return "Vous êtes une $genre et vous êtes majeure.";
    } else {
        return "Vous êtes un(e) $genre et vous êtes mineur(e).";
    }
}

echo test(20, "homme");
