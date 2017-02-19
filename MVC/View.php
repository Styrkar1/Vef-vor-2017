<?php
class View {
    private $model;
    
    public function __construct(Model $model) {
        $this->model = $model;
    }
    
    public function output() {
        return '<a href="mvc.php?action=textclicked">' . $this->model->text . '</a>';
    }
    
} 
?>
