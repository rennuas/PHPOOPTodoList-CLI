<?php

namespace Repository {

    use Entity\TodoList;

    interface TodoListRepository
    {
        public function save(TodoList $todolist): void;

        public function remove(int $number): bool;

        public function getAll(): array;
    }

    class TodoListRepositoryImpl implements TodoListRepository
    {
        private array $todolist = array();

        public function save(TodoList $todolist): void
        {
            $number = sizeof($this->todolist) + 1;
            $this->todolist[$number] = $todolist;
        }

        public function remove(int $number): bool
        {
            if ($number > sizeof($this->todolist)) {
                return false;
            } else {
                for ($i = $number; $i < sizeof($this->todolist); $i++) {
                    $this->todolist[$i] = $this->todolist[$i + 1];
                }

                unset($this->todolist[sizeof($this->todolist)]);

                return true;
            }
        }

        public function getAll(): array
        {
            return $this->todolist;
        }
    }
}
