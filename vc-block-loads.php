<?php 


if (!defined('ABSPATH')) die('-1');
// Class started
class crazylandVCExtendAddonClass {
    function __construct() {
        // We safely integrate with VC with this hook
        add_action( 'init', array( $this, 'crazylandIntegrateWithVC' ) );
    }
 
    public function crazylandIntegrateWithVC() {
        // Checks if Visual composer is not installed
        if ( ! defined( 'WPB_VC_VERSION' ) ) {
            add_action('admin_notices', array( $this, 'crazylandShowVcVersionNotice' ));
            return;
        }
 
   
    
    //  visul composer addons
     include crazyland_ACC_PATH . '/vc-addons/vc-service.php';

     }
    // show visual composer version
    public function crazylandShowVcVersionNotice() {
        $theme_data = wp_get_theme();
        echo '
        <div class="notice notice-warning">
          <p>'.sprintf(__('<strong>%s</strong> recommends <strong><a href="'.site_url().'/wp-admin/themes.php?page=tgmpa-install-plugins" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', 'bright-crazycafe'), $theme_data->get('Name')).'</p>
        </div>';
    }
}
// Finally initialize code
new crazylandVCExtendAddonClass();




?>
