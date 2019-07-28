<?php
require_once __DIR__.'/vendor/autoload.php';
use MatthiasMullie\Minify;
use com\github\tncrazvan\CatPaw\Tools\Strings;

define("DEBUG",true);

$input=[
    "css"=>[
        __DIR__."/public/css/fonts/meterial.css",
        __DIR__."/public/css/hopscotch.css",
        __DIR__."/public/css/materialize.css",
        __DIR__."/public/css/style.css"
    ],
    "js"=>[
        //MAIN LIBS
        __DIR__."/vendor/tncrazvan/elk/Main.js",
        __DIR__."/public/js/materialize.js",
        __DIR__."/public/js/highlighter.js",
        //VIEWS
        //...
        //WRAPPERS
        __DIR__."/public/js/Component/Wrappers/Nav.js",
        __DIR__."/public/js/Component/Wrappers/Content.js",
        __DIR__."/public/js/Component/Wrappers/Container.js",
        __DIR__."/public/js/Component/Modals/FloatingModal.js",
        //ASSETS
        __DIR__."/public/js/Component/Assets/SectionTitle.js",
        __DIR__."/public/js/Component/Assets/Coding.js",
        __DIR__."/public/js/Component/Assets/Button.js",
        __DIR__."/public/js/Component/Assets/NavButton.js",
        __DIR__."/public/js/Component/Assets/DeleteArticle.js",
        __DIR__."/public/js/index.js"
    ]
];

$output=[
    "css"=>__DIR__."/public/css/minified.css",
    "js"=>__DIR__."/public/js/minified.js"
];


Strings::minify($input["css"],$output["css"],!DEBUG);
echo "CSS minified in ".$output["css"]."\n";
Strings::minify($input["js"],$output["js"],!DEBUG);
echo "JS minified in ".$output["js"]."\n";