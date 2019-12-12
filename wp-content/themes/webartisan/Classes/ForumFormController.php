<?php

class ForumFormController
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
     * @return array
     */

    protected function validate()
    {
        $values  = [];
        $values['subject_forum'] = $this->check_valid('subject_forum');
        $values['message_forum'] = $this->check_valid('message_forum');
        $values['taxo_forum'] = $this->check_valid('taxo_forum');
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
        if ($attribute == 'subject_forum')
        {
            $this->errors[$attribute] = 'Quel est le sujet de votre question&nbsp;?';
            return null;
        }
        if ($attribute == 'message_forum')
        {
            $this->errors[$attribute] = 'Quelle est la question que vous voulez poser&nbsp;?';
            return null;
        }
        if ($attribute == 'taxo_forum')
        {
            $this->errors[$attribute] = 'Veuillez sélectionner une catégorie';
            return null;
        }
        $this->errors[$attribute] = 'Veuillez fournir une valeur pour ce champs';
        return null;
    }
    /**
     * Save the given values using the post_type
     *@param array $values
     */

    protected function save($values)
    {
        // create new forum thread
        $arg = array(
            'post_content' => $values['message_forum'],
            'post_title' => $values['subject_forum'],
            'post_status' =>'publish',
            'post_type' => 'forum',
            'comment_status' => 'open',
        );
        $post_id = wp_insert_post( $arg );

        // Save the category.
        $taxo = "field_5dbf16216a09e";
        $taxo_value = $values['taxo_forum'];
        update_field($taxo, $taxo_value, $post_id);

    }
}
