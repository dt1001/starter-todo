<?php

class Views extends Application {
    
    public function index() {
        $this->data['pagetitle'] = 'Ordered TODO List';
        $tasks = $this->tasks->all();
        $this->data['content'] = 'Ok';
        $this->data['leftside'] = $this->makePrioritizedPanel($tasks);
        $this->data['rightside'] = $this->makeCategorizedPanel($tasks);
        
        $this->render('template_secondary');
    }
    
    function makePrioritizedPanel($tasks) {
        $role = $this->session->userdata('userrole');
        $parms['completer'] = ($role == ROLE_OWNER) ? '/views/complete' : '#';
        return $this->parser->parse('by_priority', $parms, true);
    }
    
    function makeCategorizedPanel($tasks) {
        $parms = ['display_tasks' => []];
        return $this->parser->parse('by_category', $parms, true);
    }
}
