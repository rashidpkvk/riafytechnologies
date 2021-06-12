<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_companies extends CI_Model {
	public function getCompanies($keyword)
	{
		$this->db->select('pk_int_companies_id AS id, pk_int_companies_id AS value, vchr_name AS label');
		$this->db->like('vchr_name', $keyword, '%');
		return $this->db->get('tbl_companies')->result();
	}
	public function getCompany($companyId)
	{
		$this->db->where('pk_int_companies_id', $companyId);
		return $this->db->get('tbl_companies')->result();
	}
}
