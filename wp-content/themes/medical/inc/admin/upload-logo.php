<?php
/**
 * Created by PhpStorm.
 * User: quynh
 * Date: ..
 * Time: ..
 */
?>
<?php
global $wpdb;
if (isset($_POST['header_setting'])) {
    foreach ($_POST as $option => $value) {
        $wpdb->replace('wp_options', array(
            'option_id' => '',
            'option_name' => $option,
            'option_value' => $value,
            'autoload' => 'yes'
        ), null);
    }
    echo '<script> window.location="options-general.php?page=header_setting"; </script>';
}
$settings = array();
$settings['logo_header'] = get_option('logo_header');
?>

<div class="wrap">
    <h2>Header Settings</h2>

    <form method="post" action="" novalidate="novalidate">
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row"><label>Upload Logo</label></th>
                    <td><input name="logo_header" type="text" id="logo_header" value="<?php echo $settings['logo_header']; ?>" class="regular-text"></td>
                </tr>
            </tbody>
        </table>

        <?php submit_button('Save Changes', 'button-primary', 'header_setting') ?>
    </form>
</div>