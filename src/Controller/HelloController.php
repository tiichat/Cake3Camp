<?php
namespace App\Controller;

class HelloController extends AppController {
    public function initialize() {
        $this->name = 'Hello';
        $this->viewBuilder()->autoLayout(true);
        $this->viewBuilder()->Layout('Hello');
    }
    public function index() {
    }
    public function other() {
        $this->viewBuilder()->autoLayout(false);
    }
}