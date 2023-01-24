<?php

interface TodoList {
    public function addTask($task);
    public function removeTask($task);
    public function listTasks();
}

trait TodoListActions {
    protected $tasks = [];
    public function addTask($task) {
        array_push($this->tasks, $task);
    }
    public function removeTask($task) {
        $index = array_search($task, $this->tasks);
        unset($this->tasks[$index]);
    }
    public function listTasks() {
        foreach ($this->tasks as $task) {
            echo $task . "\n";
        }
    }
}

class TerminalTodoList implements TodoList {
    use TodoListActions;

    public function __construct(){
        do {
            echo "Enter a command (add, remove, list, exit): ";
            $handle = fopen ("php://stdin","r");
            $line = fgets($handle);
            $line = trim($line);

            if ($line == 'add') {
                echo "Enter the task: ";
                $handle = fopen ("php://stdin","r");
                $task = fgets($handle);
                $task = trim($task);
                $this->addTask($task);
            } elseif ($line == 'remove') {
                echo "Enter the task: ";
                $handle = fopen ("php://stdin","r");
                $task = fgets($handle);
                $task = trim($task);
                $this->removeTask($task);
            } elseif ($line == 'list') {
                $this->listTasks();
            } elseif ($line == 'exit') {
                echo "Exiting...\n";
                break;
            } else {
                echo "Invalid command\n";
            }
        } while (true);
    }
}
$todo = new TerminalTodoList();