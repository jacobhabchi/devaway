<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//handle all get requests: calling Controller::index
$routes->get('/', 'Home::index');
$routes->get('how', 'How::index');
$routes->get('login', 'Login::index');
$routes->get('signup', 'Signup::index');
$routes->get('apply', 'Apply::index');
$routes->get('business_dashboard', 'BusinessDashboard::index');
$routes->get('contract', 'Contract::index');
$routes->get('developer_dashboard', 'DeveloperDashboard::index');

//handles talent seach, displaying all possible talent (no filter/faceted search)
$routes->get('talent', 'Talent::searchTalent');

//Handles killing session via logout - calls Validate controlle :: logout function
$routes->get('logout', 'Validate::logout');

//handle post requests for submitted contracts
$routes->post('submit-contract', 'Contract::submit');

//handle updating status of contract based on accept/decline
$routes->post('accept-contract', 'Contract::accepted');
$routes->post('decline-contract', 'Contract::declined');

//handles submitting contract form to database
$routes->post('contact', 'Contract::index');

//handles passing all developer-specific data to profile for businesses to view
$routes->post('view-profile', 'Profile::index');

//removes skill from developer dashboard and database
$routes->post('remove-skill', 'DeveloperDashboard::removeSkill');

//adds skill to developer dashboard and creates Developer-Skill pair in DeveloperSKills table
$routes->post('add-skill', 'DeveloperDashboard::addSkill');


//updates details, projects, bio, experience on developer dashboard and database
$routes->post('update-details', 'DeveloperDashboard::updateDetails');
$routes->post('update-projects', 'DeveloperDashboard::updateProjects');
$routes->post('update-experience', 'DeveloperDashboard::updateExperience');
$routes->post('update-bio', 'DeveloperDashboard::updateBio');

//handles all faceted search and filtering of talent
$routes->post('find-talent', 'Talent::searchTalent');

//handles business signup and enters data into database
$routes->post('register', 'Signup::signup');

//handles develoepr applications and enters data into database
$routes->post('new_application', 'Apply::apply');

//Validates user login and creates sessions depending on user - business vs developer
$routes->post('validate', 'Validate::login');



