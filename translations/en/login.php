<?php

return [

    'title' => 'Anmelden',
    'heading' => 'Melden Sie sich an',

    'buttons' => [
        'submit' => [
            'label' => 'Anmelden',
        ],

    ],

    'social' => [
      'or' => 'Or',
      'facebook' => 'Continue with Facebook',
      'google' => 'Continue with Google',
    ],

    'fields' => [

        'email' => [
            'label' => 'E-Mail-Adresse',
        ],

        'password' => [
            'label' => 'Passwort',
        ],

        'remember' => [
            'label' => 'Angemeldet bleiben',
        ],

    ],

    'messages' => [
        'failed' => 'Diese Kombination aus Zugangsdaten wurde nicht in unserer Datenbank gefunden.',
        'throttled' => 'Zu viele Loginversuche. Versuchen Sie es bitte in :seconds Sekunden nochmal.',
    ],

];
