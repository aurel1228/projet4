<?php


class View
{
  private $_file;

  private $_t;

  function __construct($action)
  {
    $this->_file = 'views/view'.$action.'.php';
  }

  public function generate($data){
    $content = $this->generateFile($this->_file, $data);

    $view = $this->generateFile('views/template.php', array('t' => $this->_t, 'content' => $content));
    echo $view;
  }

  public function generatePost($data){
    $content = $this->generateFile($this->_file, $data);
    $view = $this->generateFile('views/templateSingle.php', array('t' => $this->_t, 'content' => $content));
    echo $view;
  }
  public function generateForm(){
    $content = $this->generateFileSimple($this->_file);

    $view = $this->generateFile('views/templateForm.php', array('t' => $this->_t, 'content' => $content));
    echo $view;
  }


  private function generateFile($file, $data){
    if (file_exists($file)) {
      extract($data);

      ob_start();

      require $file;
     return ob_get_clean();
    }
    else {
      throw new \Exception("Fichier ".$file." introuvable", 1);

    }
  }

  private function generateFileSimple($file){
    if (file_exists($file)) {



      require $file;

    }
    else {
      throw new \Exception("Fichier ".$file." introuvable", 1);

    }
  }












}









 ?>