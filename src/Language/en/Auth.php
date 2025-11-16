<?php 

return [
    'invalid_credential' => 'Invalid credentials',
    'success' => [
        'login' => 'Connection successful',
        'logout' => 'Successful logout'
    ],
    'failed' => [
        'fullname' => 'Unknown user',
        'email' => [
            'incorrect' => 'Incorrect email',
            'required' => 'Email required',
            'valid_email' => 'Invalid email'
        ],
        'password' => [
            'required' => 'Password required',
            'length' => 'Incorrect email or password',
            'incorrect' => 'Oops! Invalid password.'
        ],
        'account' => [
            'verify' => ["redirect" => "/{key}"],
            'active' => 'Your account is already activated',
            'unknown' => 'Account status unknown {status}. Please contact support.',
            
        ],
        'otp' => [
            'required' => 'Required code',
            'not_found' => 'Invalid code',
            'invalid' => 'Expired code',
            'wait_before_resend' => 'Please wait {min} minutes before requesting a new code.'
        ]
    ]
];