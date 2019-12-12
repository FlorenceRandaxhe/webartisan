<?php
/**
 * Created by PhpStorm.
 * User: flore
 * Date: 02-11-19
 * Time: 10:53
 */

class MailChangeController
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
        $values['user_email'] = $this->check_email('user_email');
        $values['user_id'] = $this->check_valid('user_id');
        return $values;
    }

    /**
     * Check if attribute exist and escape its value
     * @param $attribute
     * @return string|null
     */

    protected function check_valid($attribute)
    {
        return htmlspecialchars($this->input[$attribute]);
    }
    /**
     * Check if email is valid
     * @param $attribute
     * @return string|null
     */

    protected function check_email($attribute)
    {
        if (!$this->input[$attribute])
        {
            $this->errors[$attribute] = 'Veuillez remplir ce champs';
            return null;
        }

        if (email_exists($this->input[$attribute]))
        {
            $this->errors[$attribute] = 'Cette adresse email est déjà utilisée';
            return null;
        }

        if (!filter_var($this->input[$attribute], FILTER_VALIDATE_EMAIL))
        {
            $this->errors[$attribute] = 'Veuillez fournir une adresse mail valide';
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
       wp_update_user( array(
           'ID'             => $values['user_id'],
           'user_email'     => $values['user_email']) );
    }
}
