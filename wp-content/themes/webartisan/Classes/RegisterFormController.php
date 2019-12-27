<?php
/**
 * Created by PhpStorm.
 * User: flore
 * Date: 02-11-19
 * Time: 09:16
 */

class RegisterFormController
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

        if ( !$this->errors )
        {
            $this->save( $values );
        }
    }

    /**
     * Validate the required data
     * @return array
     */

    protected function validate()
    {
        $values  = [];
        $values['user_login'] = $this->check_valid('user_login');
        $values['user_login'] = $this->check_username('user_login');
        $values['conf_user_password'] = $this->check_valid('conf_user_password');
        $values['user_email'] = $this->check_email('user_email');
        $values['user_password'] = $this->check_valid_password('user_password');
        $values['conf_user_password'] = $this->check_confirmation_password('user_password', 'conf_user_password');

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
        if ($attribute == 'user_login')
        {
            $this->errors[$attribute] = 'Veuillez fournir un pseudo';
            return null;
        }
        if ($attribute == 'conf_user_password')
        {
            $this->errors[$attribute] = 'Veuillez confirmer votre mot de passe';
            return null;
        }
        $this->errors[$attribute] = 'Veuillez fournir une valeur pour ce champs';
        return null;

    }

    protected function check_username($attribute)
    {
        if (username_exists($this->input[$attribute]))
        {
            $this->errors[$attribute] = 'Ce nom d\'utilisateur est déjà utilisé';
            return null;
        }
        return htmlspecialchars($this->input[$attribute]);
    }

    /**
     * Check if email is valid and not already used
     * @param $attribute
     * @return string|null
     */
    protected function check_email($attribute)
    {
        if (!$this->input[$attribute])
        {
            $this->errors[$attribute] = 'Veuillez fournir votre adresse email';
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
     * Check if password is valid
     * @param $attribute
     * @return string|null
     */
    protected function check_valid_password($attribute)
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
     * Check if confirmation password is valid
     * @param $attribute
     * @param $confirmation
     * @return string|null
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
     * Save the data and create a new user
     *@param array $values
     */

    protected function save($values)
    {
        // insert new user
        wp_create_user( $values['user_login'], $values['user_password'], $values['user_email'] );

        // send mail to admin
        $mailHeaders = "Nouvelle inscription de " . $values['user_login'] . "\r\n";
        $message = 'Nouvelle inscription de ' . $values['user_login'] . ' sur votre site Web Artisan';
        $subject = 'Web Artisan - nouvelle inscription';
        mail("randaxhe.florence@gmail.com", $subject, $message, $mailHeaders);
    }
}
