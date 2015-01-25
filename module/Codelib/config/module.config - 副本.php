<?php

return array(
    'templates.path' => array('./module/Codelib/view'),
    'routes' => array(
        'ciauto' => array('/codelib/ciauto', '\Codelib\Controller\CiautoController:index'),
        'domain' => array('/codelib/domain/:type', '\Codelib\Controller\DomainController:index'),
        'phuml' => array('/codelib/phuml', '\Codelib\Controller\FilesysController:phuml'),
        'phumlshow' => array('/codelib/phumlshow', '\Codelib\Controller\FilesysController:phumlshow'),
        'movebom' => array('/codelib/movbom', '\Codelib\Controller\FilesysController:movebom'),

        'evil' => array('/codelib/evil', '\Codelib\Controller\EvilController:index'),
        'evil1' => array('/codelib/evil1', '\Codelib\Controller\EvilController:paramAttack'),
        'evil2' => array('/codelib/back', '\Codelib\Controller\BackdoorController:index'),

        'structure' => array('/codelib/structure', '\Codelib\Controller\StructureController:index'),
    ),
);
