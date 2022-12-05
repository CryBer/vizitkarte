<?php
class MyProject{
    public $projectName ='vizitkarte';
    public $version ='1234';
    public $collaborators = ['es', 'tu'];

    public function hello(){
        echo $this->projectName . ' - ' . $this->version;
    }
}
$project = new MyProject();

echo $project->projectName;
echo $project->version;                
?>