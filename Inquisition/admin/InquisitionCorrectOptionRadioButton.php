<?php

require_once 'Swat/SwatCheckbox.php';

class InquisitionCorrectOptionRadioButton extends SwatCheckbox
{
	// {{{ public function process()

	public function process()
	{
		SwatInputControl::process();

		if ($this->getForm()->getHiddenField($this->id.'_submitted') === null)
			return;

		$data = &$this->getForm()->getFormData();
		$this->value = (array_key_exists('correct_option', $data) &&
			$data['correct_option'] == $this->id);
	}

	// }}}
	// {{{ public function display()

	public function display()
	{
		SwatInputControl::display();

		$this->getForm()->addHiddenField($this->id.'_submitted', 1);

		$input_tag = new SwatHtmlTag('input');
		$input_tag->type = 'radio';
		$input_tag->class = $this->getCSSClassString();
		$input_tag->name = 'correct_option';
		$input_tag->id = $this->id;
		$input_tag->value = $this->id;
		$input_tag->accesskey = $this->access_key;

		if ($this->value)
			$input_tag->checked = 'checked';

		$input_tag->display();
	}

	// }}}
}

?>
