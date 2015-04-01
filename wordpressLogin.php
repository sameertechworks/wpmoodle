<?php
    ob_start();
    require_once('wp-load.php');
    

//$user = get_user_by( 'login', esc_sql($_REQUEST['username']) );
//if ( $user && wp_check_password( esc_sql($_REQUEST['password']), $user->data->user_pass, $user->ID) )
//   echo "That's it";
//else
//   echo "Nope";
//  die;
    if(isset($_REQUEST['logout']) && $_REQUEST['logout'] == '1')
    {
        wp_logout();        
        wp_redirect(home_url().'/moodle');
        return true;
    } else {
        $errors = array();

        $username = esc_sql($_REQUEST['username']);
        $password = esc_sql($_REQUEST['password']);
        $remember = esc_sql($_REQUEST['rememberme']);
        $remember = ($remember) ? "true" : "true";

        $login_data = array();
        $login_data['user_login'] = $username;
        $login_data['user_password'] = $password;
        $login_data['remember'] = $remember;
        $user_verify = wp_signon($login_data, true);

        if (is_wp_error($user_verify)) {
            $errors[] = 'Invalid username or password. Please try again!';
        } else {
            wp_set_auth_cookie($user_verify->ID);
            wp_redirect(home_url().'/moodle');
            return true;
        }
    }
        
