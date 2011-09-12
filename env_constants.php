<?php
        require_once('version.php');

        // set environment constants based on host / domain name
        $host = $_SERVER['HTTP_HOST'];

        switch ($host) {
 case 'm.qa.bluefly.com':
                        define('ENV_NAME', 'test');
                        define('ERROR_LEVEL', E_ALL);
                        define('BASEURL', 'http://m.qa.bluefly.com');
                        define('SECURE_BASEURL', 'https://m.qa.bluefuly.com');
                        define('SERVERNAME',ltrim(BASEURL,'http://'));
                        define('PROFILER',TRUE);
                        define('HTDOCS_PATH' , '/mnt/www/BF-Mobile/site/htdocs');
                        define('INCLUDE_PATH', '/mnt/www/BF-Mobile/CodeIgniter/');
                        define('COMMON_PATH' , '/mnt/www/BF-Mobile/CodeIgniter');
                        define('SYSTEM_PATH' , '/mnt/www/BF-Mobile/CodeIgniter/CodeIgniter_1.7.3/system');
                        define('TARGET_HOST' , 'http://i.qa.bluefly.com');
                        define('SECURE_TARGET_HOST' , 'https://i.qa.bluefly.com');
                break;
                case 'lb1-test-349240709.us-east-1.elb.amazonaws.com':
                        define('ENV_NAME', 'test');
                        define('ERROR_LEVEL', E_ALL);
                        define('BASEURL', 'http://lb1-test-349240709.us-east-1.elb.amazonaws.com/');
                        define('SECURE_BASEURL', 'https://lb1-test-349240709.us-east-1.elb.amazonaws.com');
                        define('SERVERNAME',ltrim(BASEURL,'http://'));
                        define('PROFILER',TRUE);
                        define('HTDOCS_PATH' , '/mnt/www/BF-Mobile/site/htdocs');
                        define('INCLUDE_PATH', '/mnt/www/BF-Mobile/CodeIgniter/');
                        define('COMMON_PATH' , '/mnt/www/BF-Mobile/CodeIgniter');
                        define('SYSTEM_PATH' , '/mnt/www/BF-Mobile/CodeIgniter/CodeIgniter_1.7.3/system');
                        define('TARGET_HOST' , 'http://i.bluefly.com');
                        define('SECURE_TARGET_HOST' , 'https://i.bluefly.com');
                case '75.101.216.125':
                        define('ENV_NAME', 'test');
                        define('ERROR_LEVEL', E_ALL);
                        define('BASEURL', 'http://75.101.216.125');
                        define('SECURE_BASEURL', 'https://75.101.216.125');
                        define('SERVERNAME',ltrim(BASEURL,'http://'));
                        define('PROFILER',TRUE);
                        define('HTDOCS_PATH' , '/mnt/www/BF-Mobile/site/htdocs');
                        define('INCLUDE_PATH', '/mnt/www/BF-Mobile/CodeIgniter/');
                        define('COMMON_PATH' , '/mnt/www/BF-Mobile/CodeIgniter');
                        define('SYSTEM_PATH' , '/mnt/www/BF-Mobile/CodeIgniter/CodeIgniter_1.7.3/system');
                        define('TARGET_HOST' , 'http://i.bluefly.com');
                        define('SECURE_TARGET_HOST' , 'https://i.bluefly.com');

                case 'elod.m.firestart3r.com':
                        define('ENV_NAME', 'dev');
                        define('ERROR_LEVEL', E_ALL);
                        define('BASEURL', 'http://elod.m.firestart3r.com');
                        define('SECURE_BASEURL', 'https://elod.m.firestart3r.com');
                        define('SERVERNAME',ltrim(BASEURL,'http://'));
                        define('PROFILER',TRUE);
                        define('HTDOCS_PATH' , '/www/elod-m-bluefly/htdocs');
                        define('INCLUDE_PATH', '/www/CodeIgniter/');
                        define('COMMON_PATH' , '/www/CodeIgniter');
                        define('SYSTEM_PATH' , '/www');
                        define('TARGET_HOST' , 'http://i.bluefly.com'); //http://i.qa.bluefly.com
                        define('SECURE_TARGET_HOST' , 'https://i.bluefly.com'); //http://i.qa.bluefly.com
                break;
                case 'zoli.m.firestart3r.com':
                        define('ENV_NAME', 'dev');
                        define('ERROR_LEVEL', E_ALL);
                        define('BASEURL', 'http://zoli.m.firestart3r.com');
                        define('SECURE_BASEURL', 'https://zoli.m.firestart3r.com');
                        define('SERVERNAME',ltrim(BASEURL,'http://'));
                        define('PROFILER',TRUE);
                        define('HTDOCS_PATH' , '/www/zoli-m-bluefly/htdocs');
                        define('INCLUDE_PATH', '/www/CodeIgniter/');
                        define('COMMON_PATH' , '/www/CodeIgniter');
                        define('SYSTEM_PATH' , '/www');
                        define('TARGET_HOST' , 'http://i.bluefly.com');
                        define('SECURE_TARGET_HOST' , 'https://i.bluefly.com');
                break;
        
        }

        ini_set('include_path',INCLUDE_PATH);

        error_reporting(ERROR_LEVEL);
        if (ERROR_LEVEL === 0) ini_set('display_errors','0'); else ini_set('display_errors','1');

        define("APP_DEBUG", true);
        define("DEBUG_FILE", HTDOCS_PATH . "/app.log");
        define("APP_ADMIN","admin");
        define("ADMIN_PWD","zatool123");
        define("SYSTEM_UID", -999);

        define("LOGIN_TIMEOUT", 600); // 2 hours
        //define("LOGIN_TIMEOUT", 60);

        require_once('db_settings.php');
        dbsettings(ENV_NAME);
?>
