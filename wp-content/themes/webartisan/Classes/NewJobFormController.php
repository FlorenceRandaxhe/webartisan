<?php

class NewJobFormController
{
    /**
     * $_POST
     *
     *@var array
     */
    protected $input;

    /**
     * The encountered validation errors
     *
     *@var array
     */
    public $errors = [];

    /**
     * Create a new controller instance
     *
     *@param array $input
     */
    function __construct($input)
    {
        $this->input = $input;
        $this->handle();
    }

    /**
     *Bootstrap the validation & saving of sent data
     */

    protected function handle()
    {
        $values = $this->validate();

        if (!$this->errors) {
            $this->save($values);
        }
    }

    /**
     * Validate the required data
     * @return array
     */

    protected function validate()
    {
        $values  = [];
        $values['job'] = $this->check_valid('job');
        $values['agency'] = $this->check_valid('agency');
        $values['job_link'] = $this->check_link('job_link');
        $values['country'] = $this->check_valid('country');
        $values['town'] = $this->check_valid('town');
        $values['type'] = $this->check_valid('type');
        $values['skills'] = $this->check_valid('skills');
        //$values['profilepicture'] = $this->check_img('profilepicture');

        return $values;
    }

    /**
     * Check if attribute exist and escape its value
     * @param $attribute
     * @return string|null
     */

    protected function check_valid($attribute)
    {
        if ($this->input[$attribute] ?? null)
        {
            return htmlspecialchars($this->input[$attribute]);
        }
        if ($attribute == 'job')
        {
            $this->errors[$attribute] = 'Quel est l\'intitulé du poste&nbsp;?';
            return null;
        }
        if ($attribute == 'agency')
        {
            $this->errors[$attribute] = 'Quel est le sujet de votre question&nbsp;?';
            return null;
        }
        if ($attribute == 'country')
        {
            $this->errors[$attribute] = 'Dans quel pays se trouve l\'emploi proposé&nbsp;?';
            return null;
        }
        if ($attribute == 'town')
        {
            $this->errors[$attribute] = 'Dans quelle ville se trouve l\'emploi proposé&nbsp;?';
            return null;
        }
        if ($attribute == 'type')
        {
            $this->errors[$attribute] = 'Quel est le type de l\'emploi proposé&nbsp;?';
            return null;
        }
        if ($attribute == 'skills')
        {
            $this->errors[$attribute] = 'Qelles sont les compétences requises pour postuler&nbsp;?';
            return null;
        }
        $this->errors[$attribute] = 'Veuillez fournir une valeur pour ce champs';
        return null;
    }

    /**
     * Check if the url is valid
     * @param $attribute
     * @return string|null
     */

    protected function check_link($attribute)
    {
        if (filter_var ($this->input[$attribute], FILTER_VALIDATE_URL))
        {
            return htmlspecialchars($this->input[$attribute]);
        }

        $this->errors[$attribute] = 'Veuillez fournir une url valide';
        return null;
    }

    /**
     * Check if an image is uploaded
     * @param $attribute
     * @return mixed
     */
    protected function check_img($attribute)
    {
        if( empty( $this->input[$attribute] ) ){
            $this->errors[$attribute] = 'Veuillez choisir une image';
            return null;
        }

        return $this->input[$attribute];
    }

    
    /**
     * Save the given values using the post_type
     *@param array $values
     */

    protected function save($values)
    {
        // create new job offer
        $post_data = array(
            'post_title' => $values['job'],
            'post_type' => 'emplois',
            'post_status' => 'publish'
        );
        $post_id = wp_insert_post($post_data);

        // Save tha agency name.
        $agency = "field_5d93970940889";
        $agency_value = $values['agency'];
        update_field($agency, $agency_value, $post_id);

        // Save the link to the job offer.
        $link = "field_5d9397989a391";
        $link_value = $values['job_link'];
        update_field($link, $link_value, $post_id);

        // Save the country.
        $country = "field_5d9397619a38f";
        $country_value = $values['country'];
        update_field($country, $country_value, $post_id);

        // Save the city.
        $city = "field_5d93977e9a390";
        $city_value = $values['town'];
        update_field($city, $city_value, $post_id);

        // Save job type
        $job_type = "field_5d9397bc9a392";
        $job_type_value = $values['type'];
        update_field( $job_type, $job_type_value, $post_id );

        // Save the skills required.
        $skills = "field_5dbc142277f47";
        $skills_value = $values['skills'];
        update_field( $skills, $skills_value, $post_id );

        // set uploaded image file as post thumbnail
        $wordpress_upload_dir = wp_upload_dir();
        $i = 1;

        $profilepicture = $_FILES['profilepicture'];
        $new_file_path = $wordpress_upload_dir['path'] . '/' . $profilepicture['name'];
        $new_file_mime = mime_content_type( $profilepicture['tmp_name'] );

        if( empty( $profilepicture ) )
            $this->errors['profilepicture'] = 'Veuillez choisir une image';

        if( $profilepicture['error'] )
            $this->errors['profilepicture'] = 'Veuillez choisir une image';

        if( $profilepicture['size'] > wp_max_upload_size() )
            $this->errors['profilepicture'] = 'Le fichier est trop volumineux';

        if( !in_array( $new_file_mime, get_allowed_mime_types() ) )
            $this->errors['profilepicture'] = 'Ce format n\'est pas accepté';

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

    }
}