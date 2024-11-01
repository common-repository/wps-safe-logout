<?php
/**
 * wps-safe-logout
 *
 * @package       WPSAFE
 * @author        Pradeep Ghosh
 * @license       gplv2
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   wps-safe-logout
 * Description:    This plugin will not allow the user to access login pages after logout when press the browser back button. 
 * Version:       1.0.0
 * Author:        Pradeep Ghosh
 * Author URI:    
 * Text Domain:   wps-safe-logout
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with wps-safe-logout. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

// Include your custom code here.

add_filter( 'nocache_headers', function() {
    return array(
        'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0, some-custom-thing',
        'Pragma'        => 'no-cache',
        'Expires'       => gmdate( 'D, d M Y H:i:s \G\M\T', time() )
    );
} );
