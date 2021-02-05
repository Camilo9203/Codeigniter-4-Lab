<?php

namespace App\Models;

use CodeIgniter\Model;

class InscriptionsModel extends Model
{
	//Funcion Traer todos los registos de la tabla inscriptions 
	public function getInscriptions()
	{
		$Inscriptions = $this->db->query("SELECT * FROM inscriptions");
		return $Inscriptions->getResult();
	}
	//Funcion Crear registro en la tabla inscriptions 
	public function createCourse($datos)
	{
		//Instanciar tabla
		$Inscriptions = $this->db->table('inscriptions');
		//Insertar datos en la tabla
		$Inscriptions->insert($datos);
		//Retornar ID de 
		return $this->db->insertID();
	}
	//Funcion traer datos de unico registro 
	public function getInscription($data)
	{
		//Instanciar tabla
		$Inscriptions =  $this->db->table('inscription');
		//Comparar tabla con id enviado
		$Inscriptions->where($data);
		//Retornar array con resultados de la comparación
		return $Inscriptions->get()->getResultArray();
	}
	//Funcion actualizar registro
	public function updateCourse($data, $idInscription)
	{
		//Instanciar tabla
		$Inscriptions = $this->db->table('inscription');
		//Actualiar datos según ID enviado
		$Inscriptions->set($data);
		$Inscriptions->where('id_nombre', $idInscription);
		//Actualizar registro
		return $Inscriptions->update();
	}
	//Funcion borrar registro
	public function deleteCourse($data)
	{
		//Instanciar tabla
		$Inscriptions = $this->db->table('inscription');
		//Comparar registro 
		$Inscriptions->where($data);
		//Eliminar Resgistro
		return $Inscriptions->delete();
	}

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;
}
