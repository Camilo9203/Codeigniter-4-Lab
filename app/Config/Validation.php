<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];
	public $courses = [
		'name'   => 'required|min_length[4]|max_length[10]',
		'description' => 'required|min_length[4]|max_length[10]',
	];
	public $students = [
		'name'   => 'required|min_length[4]|max_length[10]',
		'email' => 'required|min_length[4]|max_length[10]',
		'phone' => 'required|min_length[4]|max_length[10]|numeric',
	];


	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
