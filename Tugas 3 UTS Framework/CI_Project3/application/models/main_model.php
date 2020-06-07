 <?php  
class Main_model extends CI_Model  
 {
  private $_table = "airports";  

  public $code;
  public $name;
  public $cityCode;
  public $cityName;
  public $countryName;
  public $countryCode;
  public $timezone;
  public $lat;
  public $lon;
  public $numAirports;
  public $city;


 	public function rules()
  {
        return [
            ['field' => 'code',
            'label' => 'Code',
            'rules' => 'required'],

            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'cityCode',
            'label' => 'City Code',
            'rules' => 'required'],

            ['field' => 'cityName',
            'label' => 'City Name',
            'rules' => 'required'],

            ['field' => 'countryName',
            'label' => 'Country Name',
            'rules' => 'required'],

            ['field' => 'countryCode',
            'label' => 'Coountry Code',
            'rules' => 'required'],

            ['field' => 'timezone',
            'label' => 'Timezone',
            'rules' => 'required'],

            ['field' => 'lat',
            'label' => 'Lat',
            'rules' => 'required'],

            ['field' => 'lon',
            'label' => 'Lon',
            'rules' => 'required'],

            ['field' => 'numAirports',
            'label' => 'Num Airports',
            'rules' => 'required'],

            ['field' => 'city',
            'label' => 'City',
            'rules' => 'required'],

        ];
  }
  public function save()
  {
        $post = $this->input->post();
        $this->code = $post["code"];
        $this->name = $post["name"];
        $this->cityCode = $post["cityCode"];
        $this->cityName = $post["cityName"];
        $this->countryName = $post["countryName"];
        $this->countryCode = $post["countryCode"];
        $this->timezone = $post["timezone"];
        $this->lat = $post["lat"];
        $this->lon = $post["lon"];
        $this->numAirports = $post["numAirports"];
        $this->city = $post["city"];

        return $this->db->insert($this->_table, $this);
  }

  function fetch_data()  
  {  
        $this->db->select("*");  
        $this->db->from("airports");
        $this->db->order_by("name");
        $this->db->limit(10);
        $query = $this->db->get();  
        return $query;  
  }
  
  function delete_data($id)
  {  
        return $this->db->delete($this->_table, array("code" => $id));
  
  }  

  function get_data_airports($limit, $start)
  {
    $this->db->order_by("name", "asc");
    $query = $this->db->get('airports', $limit, $start);
    return $query;
  }

  function edit_data($where, $table)
  {    
    return $this->db->get_where($table, $where);
  }

  function update_data($data){
    $post = $this->input->post();
        $code = $post['code'];
        $name = $post['name'];
        $cityCode = $post['cityCode'];
        $cityName = $post['cityName'];
        $countryName = $post['countryName'];
        $countryCode = $post['countryCode'];
        $timezone = $post['timezone'];
        $lat = $post['lat'];
        $lon = $post['lon'];
        $numAirports = $post['numAirports'];
        $city = $post['city'];
   
    
    return $this->db->replace('airports', $data);
  } 

}