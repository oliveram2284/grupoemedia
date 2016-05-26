<?php
App::uses('AppModel', 'Model');

class Video extends AppModel {   

  public $belongsTo = array('Category'); 
  //public $hasMany="File";  
  /*
  public $validate=array(
    'title'=>array(
              'notEmpty' => array(
                'required' => true,
                'rule' => 'notEmpty',
                'message' => 'Por favor, ingrese un Título de Noticia'
              )
            ),
    'overview'=>array(
              'notEmpty' => array(
                'required' => true,
                'rule' => 'notEmpty',
                'message' => 'Por favor, ingrese un Copete de Noticia'
              )
            ),
    'body'=>array(
              'notEmpty' => array(
                'required' => true,
                'rule' => 'notEmpty',
                'message' => 'Por favor, ingrese un Cuerpo de Noticia'
              )
            ),
   
    );
  */

  public function beforeSave($options = array()) {

   

    $id_temp= split("=", $this->data[$this->alias]['url']);

    $youtube_id=end($id_temp);
    $this->data[$this->alias]['youtube_id']=$youtube_id;

    
    $data = file_get_contents("https://www.googleapis.com/youtube/v3/videos?key=".YOUTUBE_API_KEY."&part=snippet&id=".$youtube_id);
    $json = json_decode($data);
    
    $this->data[$this->alias]['title']=$json->items[0]->snippet->title;
    $this->data[$this->alias]['channel_id']=$json->items[0]->snippet->channelId;
    $this->data[$this->alias]['description']=$json->items[0]->snippet->description;

    if(isset($json->items[0]->snippet->thumbnails)){
        $this->data[$this->alias]['default_img']=$json->items[0]->snippet->thumbnails->default->url;
        $this->data[$this->alias]['default_width']=$json->items[0]->snippet->thumbnails->default->width;
        $this->data[$this->alias]['default_height']=$json->items[0]->snippet->thumbnails->default->height;
    }
    

    if(isset($json->items[0]->snippet->medium)){
        $this->data[$this->alias]['medium_img']=$json->items[0]->snippet->thumbnails->medium->url;
        $this->data[$this->alias]['mediumt_width']=$json->items[0]->snippet->thumbnails->medium->width;
        $this->data[$this->alias]['medium_height']=$json->items[0]->snippet->thumbnails->medium->height;
    }
    

    if(isset($json->items[0]->snippet->high)){
        $this->data[$this->alias]['high_img']=$json->items[0]->snippet->thumbnails->high->url;
        $this->data[$this->alias]['high_width']=$json->items[0]->snippet->thumbnails->high->width;
        $this->data[$this->alias]['high_height']=$json->items[0]->snippet->thumbnails->high->height;
    }
   

    if(isset($json->items[0]->snippet->standard)){
        $this->data[$this->alias]['standard_img']=$json->items[0]->snippet->thumbnails->standard->url;
        $this->data[$this->alias]['standard_width']=$json->items[0]->snippet->thumbnails->standard->width;
        $this->data[$this->alias]['standard_height']=$json->items[0]->snippet->thumbnails->standard->height;
    }
    

    if(isset($json->items[0]->snippet->maxres)){
        $this->data[$this->alias]['maxres_img']=$json->items[0]->snippet->thumbnails->maxres->url;
        $this->data[$this->alias]['maxres_width']=$json->items[0]->snippet->thumbnails->maxres->width;
        $this->data[$this->alias]['maxres_height']=$json->items[0]->snippet->thumbnails->maxres->height;
    }
    

    $this->data[$this->alias]['youtube_published_at']=$json->items[0]->snippet->publishedAt;
    $this->data[$this->alias]['youtube_category_id']=$json->items[0]->snippet->categoryId;
    
    //var_dump($this->data[$this->alias]);
    //die();
	  return true;
	}

  private function youtube_image($id) {
    $resolution = array (
        'maxresdefault',
        'sddefault',
        'mqdefault',
        'hqdefault',
        'default'
    );

    for ($x = 0; $x < sizeof($resolution); $x++) {
        $url = '//img.youtube.com/vi/' . $id . '/' . $resolution[$x] . '.jpg';
        if (get_headers($url)[0] == 'HTTP/1.0 200 OK') {
            break;
        }
    }
    return $url;
  }
}