<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/logout' => [
            [['_route' => '_logout_main'], null, null, null, false, false, null],
            [['_route' => 'app_logout'], null, null, null, false, false, null],
        ],
        '/chat' => [[['_route' => 'chat_index', '_controller' => 'App\\Controller\\ChatController::index'], null, null, null, true, false, null]],
        '/chat/api/send' => [[['_route' => 'chat_send', '_controller' => 'App\\Controller\\ChatController::sendMessage'], null, ['POST' => 0], null, false, false, null]],
        '/chat/api/unread-count' => [[['_route' => 'chat_unread_count', '_controller' => 'App\\Controller\\ChatController::getUnreadCount'], null, ['GET' => 0], null, false, false, null]],
        '/evaluations' => [[['_route' => 'evaluations', '_controller' => 'App\\Controller\\EvalSlotController::new'], null, null, null, false, false, null]],
        '/admin/event/new' => [[['_route' => 'admin_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, null, null, false, false, null]],
        '/admin/event/remove' => [[['_route' => 'admin_event_remove', '_controller' => 'App\\Controller\\EventController::edit'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\ForgotPasswordController::forgotPassword'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/api/notifications' => [[['_route' => 'api_notifications', '_controller' => 'App\\Controller\\NotificationController::getNotifications'], null, ['GET' => 0], null, false, false, null]],
        '/api/notifications/mark-read' => [[['_route' => 'api_notifications_mark_read', '_controller' => 'App\\Controller\\NotificationController::markNotificationsAsRead'], null, ['POST' => 0], null, false, false, null]],
        '/notifications' => [[['_route' => 'app_notifications_page', '_controller' => 'App\\Controller\\NotificationController::notificationsPage'], null, ['GET' => 0], null, false, false, null]],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, null, null, false, false, null]],
        '/project' => [[['_route' => 'project_list', '_controller' => 'App\\Controller\\ProjectController::list'], null, null, null, true, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/api/search/users' => [[['_route' => 'api_search_users', '_controller' => 'App\\Controller\\UserController::searchUsersApi'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\UserController::admin'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/c(?'
                    .'|onfirm/([^/]++)(*:62)'
                    .'|hat/(?'
                        .'|pr(?'
                            .'|ivate/([^/]++)(*:95)'
                            .'|oject/([^/]++)(*:116)'
                        .')'
                        .'|api/messages/pr(?'
                            .'|ivate/([^/]++)(*:157)'
                            .'|oject/([^/]++)(*:179)'
                        .')'
                    .')'
                .')'
                .'|/userpage/(?'
                    .'|event/(?'
                        .'|registration/([^/]++)/([^/]++)(*:242)'
                        .'|deregistration/([^/]++)/([^/]++)(*:282)'
                    .')'
                    .'|([^/]++)(*:299)'
                .')'
                .'|/project/(?'
                    .'|([^/]++)(?'
                        .'|(*:331)'
                        .'|/(?'
                            .'|register(*:351)'
                            .'|u(?'
                                .'|nregister(*:372)'
                                .'|pload(*:385)'
                            .')'
                            .'|select\\-evaluator/([^/]++)(*:420)'
                        .')'
                    .')'
                    .'|evaluation/([^/]++)(?'
                        .'|/validate(*:461)'
                        .'|(*:469)'
                    .')'
                    .'|projects/([^/]++)/validate/([^/]++)(*:513)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        62 => [[['_route' => 'app_confirm_account', '_controller' => 'App\\Controller\\AccountConfirmationController::confirmAccount'], ['token'], null, null, false, true, null]],
        95 => [[['_route' => 'chat_private', '_controller' => 'App\\Controller\\ChatController::privateChat'], ['recipientId'], null, null, false, true, null]],
        116 => [[['_route' => 'chat_project', '_controller' => 'App\\Controller\\ChatController::projectChat'], ['projectId'], null, null, false, true, null]],
        157 => [[['_route' => 'chat_get_private_messages', '_controller' => 'App\\Controller\\ChatController::getPrivateMessages'], ['recipientId'], ['GET' => 0], null, false, true, null]],
        179 => [[['_route' => 'chat_get_project_messages', '_controller' => 'App\\Controller\\ChatController::getProjectMessages'], ['projectId'], ['GET' => 0], null, false, true, null]],
        242 => [[['_route' => 'userpage_event_registration', '_controller' => 'App\\Controller\\EventController::registration'], ['event_id', 'user_id'], null, null, false, true, null]],
        282 => [[['_route' => 'userpage_event_deregistration', '_controller' => 'App\\Controller\\EventController::deregistration'], ['event_id', 'user_id'], null, null, false, true, null]],
        299 => [[['_route' => 'userpage', '_controller' => 'App\\Controller\\UserController::index'], ['id'], null, null, false, true, null]],
        331 => [[['_route' => 'project_show', '_controller' => 'App\\Controller\\ProjectController::show'], ['id'], null, null, false, true, null]],
        351 => [[['_route' => 'project_register', '_controller' => 'App\\Controller\\ProjectController::register'], ['id'], null, null, false, false, null]],
        372 => [[['_route' => 'project_unregister', '_controller' => 'App\\Controller\\ProjectController::unregister'], ['id'], ['POST' => 0], null, false, false, null]],
        385 => [[['_route' => 'project_upload', '_controller' => 'App\\Controller\\ProjectController::upload'], ['id'], ['POST' => 0], null, false, false, null]],
        420 => [[['_route' => 'project_select_evaluator', '_controller' => 'App\\Controller\\ProjectController::selectEvaluator'], ['id', 'slotId'], ['POST' => 0], null, false, true, null]],
        461 => [[['_route' => 'project_evaluate', '_controller' => 'App\\Controller\\ProjectController::evaluateProject'], ['id'], ['POST' => 0], null, false, false, null]],
        469 => [[['_route' => 'project_evaluation_show', '_controller' => 'App\\Controller\\ProjectController::showEvaluation'], ['id'], null, null, false, true, null]],
        513 => [
            [['_route' => 'project_validate_user', '_controller' => 'App\\Controller\\ProjectController::validateProject'], ['id', 'userId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
