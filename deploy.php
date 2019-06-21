<?php
namespace Deployer;
require 'recipe/common.php';

set('application', 'callone_website');
#set('repository', 'git@gitlab.com:callone/callone-website.git');
#set('git_tty', true); 
set('shared_files', ['.htaccess']);
set('shared_dirs', []);
set('writable_dirs', []);
set('allow_anonymous_stats', false);
set('ssh_type', 'native');

inventory('hosts.yml');

// Tasks

task('upload', function () {
  upload('src/', '{{release_path}}');
});

desc('Deploy your project');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'upload',
    'deploy:shared',
    'deploy:writable',
#    'deploy:vendors',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success'
]);

// If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
