<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/token/refresh' => [[['_route' => 'gesdinet_jwt_refresh_token'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['POST' => 0], null, false, false, null]],
        '/api/user/me' => [[['_route' => 'app_user_getcurrentuser', '_controller' => 'App\\Controller\\UserController::getCurrentUser'], null, ['GET' => 0], null, false, false, null]],
        '/authentication_token' => [[['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|c(?'
                            .'|ontexts/([^.]+)(?:\\.(jsonld))?(*:150)'
                            .'|ategoriems(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:197)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:223)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:261)'
                                .')'
                            .')'
                        .')'
                        .'|examen(?'
                            .'|resultats(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:319)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:345)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:383)'
                                .')'
                            .')'
                            .'|tests(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:427)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:453)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:491)'
                                .')'
                            .')'
                        .')'
                        .'|medicaments(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:542)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:568)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:606)'
                            .')'
                        .')'
                        .'|ordonances(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:655)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:681)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:719)'
                            .')'
                        .')'
                        .'|patients(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:766)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:792)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:830)'
                            .')'
                        .')'
                        .'|rendezvouses(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:881)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:907)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:945)'
                            .')'
                        .')'
                        .'|users(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:989)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1015)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1054)'
                            .')'
                        .')'
                        .'|vitals(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1100)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1127)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1166)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:1207)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        150 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        197 => [[['_route' => '_api_/categoriems/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categoriem', '_api_operation_name' => '_api_/categoriems/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        223 => [
            [['_route' => '_api_/categoriems{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categoriem', '_api_operation_name' => '_api_/categoriems{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/categoriems{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categoriem', '_api_operation_name' => '_api_/categoriems{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        261 => [
            [['_route' => '_api_/categoriems/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categoriem', '_api_operation_name' => '_api_/categoriems/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/categoriems/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categoriem', '_api_operation_name' => '_api_/categoriems/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/categoriems/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categoriem', '_api_operation_name' => '_api_/categoriems/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        319 => [[['_route' => '_api_/examenresultats/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Examenresultat', '_api_operation_name' => '_api_/examenresultats/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        345 => [
            [['_route' => '_api_/examenresultats{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Examenresultat', '_api_operation_name' => '_api_/examenresultats{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/examenresultats{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Examenresultat', '_api_operation_name' => '_api_/examenresultats{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        383 => [
            [['_route' => '_api_/examenresultats/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Examenresultat', '_api_operation_name' => '_api_/examenresultats/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/examenresultats/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Examenresultat', '_api_operation_name' => '_api_/examenresultats/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/examenresultats/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Examenresultat', '_api_operation_name' => '_api_/examenresultats/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        427 => [[['_route' => '_api_/examentests/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Examentest', '_api_operation_name' => '_api_/examentests/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        453 => [
            [['_route' => '_api_/examentests{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Examentest', '_api_operation_name' => '_api_/examentests{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/examentests{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Examentest', '_api_operation_name' => '_api_/examentests{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        491 => [
            [['_route' => '_api_/examentests/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Examentest', '_api_operation_name' => '_api_/examentests/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/examentests/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Examentest', '_api_operation_name' => '_api_/examentests/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/examentests/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Examentest', '_api_operation_name' => '_api_/examentests/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        542 => [[['_route' => '_api_/medicaments/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Medicament', '_api_operation_name' => '_api_/medicaments/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        568 => [
            [['_route' => '_api_/medicaments{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Medicament', '_api_operation_name' => '_api_/medicaments{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/medicaments{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Medicament', '_api_operation_name' => '_api_/medicaments{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        606 => [
            [['_route' => '_api_/medicaments/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Medicament', '_api_operation_name' => '_api_/medicaments/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/medicaments/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Medicament', '_api_operation_name' => '_api_/medicaments/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/medicaments/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Medicament', '_api_operation_name' => '_api_/medicaments/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        655 => [[['_route' => '_api_/ordonances/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Ordonance', '_api_operation_name' => '_api_/ordonances/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        681 => [
            [['_route' => '_api_/ordonances{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Ordonance', '_api_operation_name' => '_api_/ordonances{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/ordonances{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Ordonance', '_api_operation_name' => '_api_/ordonances{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        719 => [
            [['_route' => '_api_/ordonances/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Ordonance', '_api_operation_name' => '_api_/ordonances/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/ordonances/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Ordonance', '_api_operation_name' => '_api_/ordonances/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/ordonances/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Ordonance', '_api_operation_name' => '_api_/ordonances/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        766 => [[['_route' => '_api_/patients/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Patient', '_api_operation_name' => '_api_/patients/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        792 => [
            [['_route' => '_api_/patients{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Patient', '_api_operation_name' => '_api_/patients{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/patients{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Patient', '_api_operation_name' => '_api_/patients{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        830 => [
            [['_route' => '_api_/patients/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Patient', '_api_operation_name' => '_api_/patients/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/patients/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Patient', '_api_operation_name' => '_api_/patients/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/patients/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Patient', '_api_operation_name' => '_api_/patients/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        881 => [[['_route' => '_api_/rendezvouses/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Rendezvous', '_api_operation_name' => '_api_/rendezvouses/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        907 => [
            [['_route' => '_api_/rendezvouses{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Rendezvous', '_api_operation_name' => '_api_/rendezvouses{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/rendezvouses{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Rendezvous', '_api_operation_name' => '_api_/rendezvouses{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        945 => [
            [['_route' => '_api_/rendezvouses/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Rendezvous', '_api_operation_name' => '_api_/rendezvouses/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/rendezvouses/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Rendezvous', '_api_operation_name' => '_api_/rendezvouses/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/rendezvouses/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Rendezvous', '_api_operation_name' => '_api_/rendezvouses/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        989 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1015 => [
            [['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1054 => [
            [['_route' => '_api_/users/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1100 => [[['_route' => '_api_/vitals/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Vital', '_api_operation_name' => '_api_/vitals/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1127 => [
            [['_route' => '_api_/vitals{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Vital', '_api_operation_name' => '_api_/vitals{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/vitals{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Vital', '_api_operation_name' => '_api_/vitals{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1166 => [
            [['_route' => '_api_/vitals/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Vital', '_api_operation_name' => '_api_/vitals/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/vitals/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Vital', '_api_operation_name' => '_api_/vitals/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/vitals/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Vital', '_api_operation_name' => '_api_/vitals/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1207 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
