<?php

class ContactFormController
{
    
    protected $input;
    public $errors = [];

   
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
        $values['name'] = $this->check_valid('name');
        $values['subject'] = $this->check_valid('subject');
        $values['message'] = $this->check_valid('message');
        $values['email'] = $this->check_email('email');

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
        if ($attribute == 'name')
        {
            $this->errors[$attribute] = 'Veuillez fournir votre nom';
            return null;
        }
        if ($attribute == 'subject')
        {
            $this->errors[$attribute] = 'Quel est le sujet de votre message&nbsp;?';
            return null;
        }
        if ($attribute == 'message')
        {
            $this->errors[$attribute] = 'Quel est votre message&nbsp;?';
            return null;
        }
        $this->errors[$attribute] = 'Veuillez fournir une valeur pour ce champs';
        return null;
    }

    /**
     * Check if email is valid
     * @param $attribute
     * @return string|null
     */
    protected function check_email($attribute)
    {
        if (filter_var($this->input[$attribute], FILTER_VALIDATE_EMAIL))
        {
            return htmlspecialchars($this->input[$attribute]);
        }
        $this->errors[$attribute] = 'Veuillez fournir une adresse mail valide';
        return null;
    }
    /**
     * Save data and send the contact email
     *@param array $values
     */
    protected function save($values)
    {
        $mailHeaders = "From: " . $values['name'] . "<" . $values['email'] . ">\r\n";
        mail("randaxhe.florence@gmail.com", $values['subject'], $values['message'], $mailHeaders);
    }
}