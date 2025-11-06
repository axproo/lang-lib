<?php 

return [
    'access' => [
        'denied' => 'Accès refusé! {rôle}',
        'role' => [
            'admin' => 'Réservé aux administrateurs',
            'msp' => 'Pour les MSP uniquement.',
            'client' => 'Pour les clients, les administrateurs ou les MSP uniquement.'
        ],
        'tenant' => 'à cet utilisateur'
    ],
    'token' => [
        'missing' => 'Jeton manquant',
        'found' => 'Jeton trouvé',
        'failed' => [
            'format' => 'Jeton invalide'
        ],
        'otp' => [
            'verify' => 'Code de vérification',
            'active_account' => 'Activation réussie. Votre compte est désormais sécurisé et opérationnel.'
        ]
    ],
    'forms' => [
        'failed' => [
            'type' => 'Type de formulaire non valide {type}',
            'field' => 'Champ introuvable pour le formulaire {form}'
        ]
    ],
    'tables' => [
        'failed' => [
            'exist' => 'La table {table} n\'existe pas dans la base de données.'
        ]
    ],
    'email' => [
        'sent' => 'Un code de vérification vous a été envoyé par e-mail.',
        'active' => 'Votre compte a été activé avec succès.'
    ],
    'user' => [
        'not_found' => 'Utilisateur introuvable'
    ],
    'copyright' => [
        'title' => 'Tous droits réservés'
    ]
];