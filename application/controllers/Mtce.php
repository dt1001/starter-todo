<?php

defineed('BASEPATH') OR exit('No direct script access allowed');

class Mtce extends Application
{
    public function index() {
        $this->data['pagetitle'] = "TODO List Maintenance";
        $tasks = $this->tasks->all(); // get all tasks
        
        foreach ($tasks as $task) {
            if (!empty($task->status)) {
                $task->status = $this->statues->get($task->status)->name;
            }
        }
            
        foreach ($tasks as $task) {
            $converted[] = (array) $task;
        }
        
        $this->data['display_tasks'] = $converted;
        $this->data['pagebody'] = 'itemlist';
        $this->render();
    }
}
