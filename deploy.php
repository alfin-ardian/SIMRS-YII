<?php
namespace Deployer;

require 'recipe/yii.php';

// Config

set('repository', 'https://github.com/alfin-ardian/SIMRS-YII.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts


// Hooks

after('deploy:failed', 'deploy:unlock');
