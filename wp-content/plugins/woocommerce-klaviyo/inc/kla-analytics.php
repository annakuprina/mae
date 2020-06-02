<?php
class WPKlaviyoAnalytics {

    function __construct() {
        add_action('wp_footer', array(&$this, 'insert_analytics'));
    }

    function insert_analytics() {
        global $current_user;
        wp_reset_query();

        wp_get_current_user();
        $klaviyo_settings = get_option('klaviyo_settings');

        $klaviyo_public_key = $klaviyo_settings['public_api_key'];

        if ($klaviyo_public_key == '') {
          return;
        }

        $commenter = wp_get_current_commenter();
        $commenter_email = $commenter['comment_author_email'] || '';

        echo <<<EOT
        <script async type="text/javascript" src="//static.klaviyo.com/onsite/js/klaviyo.js?company_id=$klaviyo_public_key"></script>
        <script type="text/javascript">
        if ("$current_user->user_email") {
            var _learnq = _learnq || [];
            _learnq.push(["identify", {
                "\$email": "$current_user->user_email"
            }]);
        } else {
            // See if current user is a commenter
            if ("$commenter_email") {
                _learnq.push(["identify", {
                    "\$email": "$commenter_email"
                }]);
            }
        }
        </script>
        <!-- end: Klaviyo Code. -->
EOT;
    }
}

?>
