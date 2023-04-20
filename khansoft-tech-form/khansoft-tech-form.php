<?php

/**
 * Plugin Name: Khan Soft Tech Form
 * Plugin URI: https://yourdomain.com/plugins/contact-form-plugin/
 * Description: This is a custom form plugin for Khan Soft Tech.
 * Version: 1.0.0
 * Author: Malcolm Macharia
 * Author URI: https://example.com/
 * License: GPL2
 */

if (!defined('ABSPATH')) {
    die('You cannot be here');
}

function student_application_menu()
{
    add_menu_page(
        'Student Application',
        'Student Application',
        'manage_options',
        'student-application-menu',
        'student_application_menu_main',
        'dashicons-media-document',
        3
    );
}

function student_application_menu_main()
{
    // Add content here
    echo '<div class="wrap">
    <h1 class="title">Student Application Form</h1>
    <form action="" method="post" class="form-grid">
        <div class="input-container">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="input-container phone-container">
            <label for="phone">Phone:</label>
            <div class="phone-wrapper">
                <input type="tel" id="phone" name="phone" required>
                <button class="btn-submit" type="submit" name="view">View</button>
            </div>
        </div>
    </form>
</div>';

    // Add CSS styling
    echo '<link rel="stylesheet" type="text/css" href="' . plugins_url( 'style.css', __FILE__ ) . '">';

}


add_action('admin_menu', 'student_application_menu');

function contacts_menu()
{
    add_menu_page(
        'Contacts',
        'Contacts',
        'manage_options',
        'contacts-menu',
        'contacts_menu_main',
        'dashicons-media-document',
        4
    );
}

function contacts_menu_main()
{


    // Add content here
    echo '<div class="wrap">
        <h1 class="title">Contact Menu Form</h1>
        <form action="" method="post" class="form-grid">
            <div class="input-container">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
    
            <div class="input-container phone-container">
                <label for="phone">Phone:</label>
                <div class="phone-wrapper">
                    <input type="tel" id="phone" name="phone" required>
                    <button class="btn-submit" type="submit" name="view">View</button>
                </div>
            </div>
        </form>
    </div>';

    // Add CSS styling
    echo '<link rel="stylesheet" type="text/css" href="' . plugins_url( 'style.css', __FILE__ ) . '">';
    
}

add_action('admin_menu', 'contacts_menu');

function job_application_menu()
{
    add_menu_page(
        'Job Applications',
        'Job Applications',
        'manage_options',
        'job-application-menu',
        'job_application_menu_main',
        'dashicons-media-document',
        5
    );
}

function job_application_menu_main()
{

    // Add content here
    echo '<div class="wrap">
        <h1 class="title">Job Application Form</h1>
        <form action="" method="post" class="form-grid">
            <div class="input-container">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
    
            <div class="input-container phone-container">
                <label for="phone">Phone:</label>
                <div class="phone-wrapper">
                    <input type="tel" id="phone" name="phone" required>
                    <button class="btn-submit" type="submit" name="view">View</button>
                </div>
            </div>
        </form>
    </div>';

    // Add CSS styling
    echo '<link rel="stylesheet" type="text/css" href="' . plugins_url( 'style.css', __FILE__ ) . '">';

}

add_action('admin_menu', 'job_application_menu');

function lpn_application_menu()
{
    add_menu_page(
        'LPN Applications',
        'LPN Applications',
        'manage_options',
        'lpn-application-menu',
        'lpn_application_menu_main',
        'dashicons-media-document',
        6
    );
}

function lpn_application_menu_main()
{
    // Add content here
    echo '<div class="wrap">
        <h1 class="title">LPN Application Form</h1>
        <form action="" method="post" class="form-grid">
            <div class="input-container">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
    
            <div class="input-container phone-container">
                <label for="phone">Phone:</label>
                <div class="phone-wrapper">
                    <input type="tel" id="phone" name="phone" required>
                    <button class="btn-submit" type="submit" name="view">View</button>
                </div>
            </div>
        </form>
    </div>';

    // Add CSS styling
    echo '<link rel="stylesheet" type="text/css" href="' . plugins_url( 'style.css', __FILE__ ) . '">';

}

add_action('admin_menu', 'lpn_application_menu');
