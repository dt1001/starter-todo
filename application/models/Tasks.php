<?php

class Tasks extends MY_Model {
    
    public function __construct() {
        parent::__construct('tasks', 'id');
    }
    /* in progress
    // provide form validation rules
    public function rules()
    {
        $config = array(
            ['field' => 'task', 'label' => 'TODO task', 'rules' => 'alpha_dash|max_length[64]'],
            ['field' => 'priority', 'label' => 'Priority', 'rules' => 'integer|less_than[4]'],
            ['field' => 'size', 'label' => 'Task size', 'rules' => 'integer|less_than[4]'],
            ['field' => 'group', 'label' => 'Task group', 'rules' => 'integer|less_than[5]'],
        );
        return $config;
    }
    
    // Initiate adding a new task
    public function add()
    {
        $task = $this->tasks->create();
        $this->session->set_userdata('task', $task);
        $this->showit();
    }
     */
}

