<?php

require_once 'SwatDB/SwatDBRecordsetWrapper.php';
require_once 'SwatDB/SwatDBClassMap.php';
require_once 'Inquisition/dataobjects/InquisitionInquisitionQuestionBinding.php';

/**
 * A recordset wrapper class for InquisitionInquisitionQuestionBinding objects
 *
 * @package   Inquisition
 * @copyright 2013 silverorange
 * @see       InquisitionInquisitionQuestionBinding
 */
class InquisitionInquisitionQuestionBindingWrapper
	extends SwatDBRecordsetWrapper
{
	// {{{ protected function init()

	protected function init()
	{
		parent::init();

		$this->row_wrapper_class =
			SwatDBClassMap::get('InquisitionInquisitionQuestionBinding');

		$this->index_field = 'id';
	}

	// }}}
}

?>
