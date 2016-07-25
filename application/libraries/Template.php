<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {

	public $CI;

	public function __construct()
	{
		$this->CI =& get_instance();
	}

	/**
	 * Load's front end webpage
	 *
	 * @param   array  Template essential data
	 * @return  webpage
	 */
	public function load($options = array('title' => '', 'content_title' => '', 'menu' => '', 'sub_menu' => '', 'view_file' => ''))
	{
		$this->CI->load->view('front/header', $options);
		$this->CI->load->view($options['view_file'], $options);
		$this->CI->load->view('front/footer', $options);
	}

	/**
	 * Load's admin/back end webpage
	 *
	 * @param   array  Template essential data
	 * @return  webpage
	 */
	public function admin($options = array('title' => '', 'content_title' => '', 'menu' => '', 'sub_menu' => '', 'view_file' => ''))
	{
		$this->CI->load->view('admin/common/header', $options);
		$this->CI->load->view('admin/common/nav', $options);
		$this->CI->load->view($options['view_file'], $options);
		$this->CI->load->view('admin/common/footer', $options);
	}
}
