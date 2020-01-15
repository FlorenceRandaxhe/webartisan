<?php
/**
 * Created by PhpStorm.
 * User: flore
 * Date: 02-11-19
 * Time: 10:53
 */

class PasswordChangeController
{

    protected $input;
    public $errors = [];

    function __construct($input)
    {
        $this->input = $input;
        $this->handle();
    }

    protected function handle()
    {
        $values = $this->validate();

        if (!$this->errors)
        {
            $this->save($values);
        }
    }

    /**
     * Validate the required data
     */

    protected function validate()
    {
        $values  = [];
        $values['user_id'] = $this->check_valid('user_id');
        $values['user_pass_new'] = $this->check_valid('user_pass_new');
        $values['user_pass_new'] = $this->check_new_pass('user_pass_new', 'user_id');
        $values['user_pass'] = $this->check_current_password('user_pass', 'user_id');
        $values['user_pass_new_conf'] = $this->check_confirmation_password('user_pass_new', 'user_pass_new_conf');

        return $values;
    }


    /**
     * @param $attribute
     * @return string|null
     * check if fields are empty
     */
    protected function check_valid($attribute)
    {
        if (!$this->input[$attribute])
        {
            $this->errors[$attribute] = 'Veuillez fournir une valeur pour ce champs';
            return null;
        }
        return htmlspecialchars($this->input[$attribute]);
    }

    /**
     * @param $attribute
     * @param $id
     * @return string|null
     * chack if new password is correct
     */
    protected function check_new_pass($attribute, $id)
    {
        if (!$this->input[$attribute])
        {
            $this->errors[$attribute] = 'Veuillez fournir un mot de passe';
            return null;
        }

        $uppercase      = preg_match('@[A-Z]@', $this->input[$attribute]);
        $lowercase      = preg_match('@[a-z]@', $this->input[$attribute]);
        $number         = preg_match('@[0-9]@', $this->input[$attribute]);
        $specialChars   = preg_match('@[^\w]@', $this->input[$attribute]);

        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($this->input[$attribute]) < 6 )
        {
            $this->errors[$attribute] = 'Le mot de passe doit être de minimum 6 caractères et contenir au moins une majuscule, un nombre et un caractère spécial';
            return null;
        }

        return htmlspecialchars($this->input[$attribute]);
    }

    /**
     * @param $attribute
     * @param $id
     * @return string|null
     * check if current password is correct
     */
    protected function check_current_password($attribute, $id)
    {
        if (!wp_check_password($this->input[$attribute], wp_get_current_user()->user_pass, $this->input[$id]))
        {
            $this->errors[$attribute] = 'Mauvais mot de passe';
            return null;
        }
        return htmlspecialchars($this->input[$attribute]);
    }

    /**
     * @param $attribute
     * @param $confirmation
     * @return string|null
     * check if new password and confirmation password are the same
     */
    protected function check_confirmation_password($attribute, $confirmation)
    {

        if ($this->input[$attribute] !=  $this->input[$confirmation])
        {
            $this->errors[$attribute] = 'Le mot de passe ne correspont pas';
            return null;
        }

        return htmlspecialchars($this->input[$attribute]);

    }

    /**
     * Save the given values using the post_type
     *@param array $values
     */

    protected function save($values)
    {
        wp_set_password( $values['user_pass_new'], $values['user_id'] );
        wp_set_auth_cookie($values['user_id']);
        wp_set_current_user($values['user_id']);
        do_action('wp_login', wp_get_current_user()->user_login, wp_get_current_user());
    }
}
