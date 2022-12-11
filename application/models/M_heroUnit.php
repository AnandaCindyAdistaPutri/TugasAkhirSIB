<? php define('BASEPATH') OR exit('no access allowed');
class M_heroUnit extends CI_Model
{
	public function __construct(){
		parent::__construct();
	}
	public function getHero(){
    $this->db->select("*");
    $this->db->from('hero_unit');
    $this->db->where('status_persetujuan', 'disetujui');
    $get = $get->result_array();
	}
}
?>