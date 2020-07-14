<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'post' => [
        'title' => 'Posts',

        'actions' => [
            'index' => 'Posts',
            'create' => 'New Post',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'things-to-do' => [
        'title' => 'Things To Do',

        'actions' => [
            'index' => 'Things To Do',
            'create' => 'New Things To Do',
            'edit' => 'Edit :name',
            'will_be_published' => 'ThingsToDo will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'perex' => 'Perex',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'special' => [
        'title' => 'Specials',

        'actions' => [
            'index' => 'Specials',
            'create' => 'New Special',
            'edit' => 'Edit :name',
            'will_be_published' => 'Special will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'perex' => 'Perex',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'dining' => [
        'title' => 'Dining',

        'actions' => [
            'index' => 'Dining',
            'create' => 'New Dining',
            'edit' => 'Edit :name',
            'will_be_published' => 'Dining will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'perex' => 'Perex',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'facility' => [
        'title' => 'Facilities',

        'actions' => [
            'index' => 'Facilities',
            'create' => 'New Facility',
            'edit' => 'Edit :name',
            'will_be_published' => 'Facility will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'perex' => 'Perex',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'room' => [
        'title' => 'Rooms',

        'actions' => [
            'index' => 'Rooms',
            'create' => 'New Room',
            'edit' => 'Edit :name',
            'will_be_published' => 'Room will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'perex' => 'Perex',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'current-special-offer' => [
        'title' => 'Current Special Offer',

        'actions' => [
            'index' => 'Current Special Offer',
            'create' => 'New Current Special Offer',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'current-special-offer' => [
        'title' => 'Current Special Offers',

        'actions' => [
            'index' => 'Current Special Offers',
            'create' => 'New Current Special Offer',
            'edit' => 'Edit :name',
            'will_be_published' => 'CurrentSpecialOffer will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'perex' => 'Perex',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];