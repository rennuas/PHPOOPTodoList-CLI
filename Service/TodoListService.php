<?php

namespace Service {

    use Entity\TodoList;
    use Repository\TodoListRepository;

    interface TodoListService
    {
        public function showTodoList(): void;

        public function addTodoList(string $todo): void;

        public function removeTodoList(int $number): void;
    }

    class TodoListServiceImpl implements TodoListService
    {
        private TodoListRepository $todoListRepository;

        public function __construct(TodoListRepository $todoListRepository)
        {
            $this->todoListRepository = $todoListRepository;
        }

        public function showTodoList(): void
        {
            $todolist = $this->todoListRepository->getAll();

            echo "TODO LIST" . PHP_EOL;

            if (sizeof($todolist) < 1) {
                echo "Tidak ada To Do List" . PHP_EOL;
            } else {
                foreach ($todolist as $number => $value) {
                    echo "$number." . $value->getTodo() . PHP_EOL;
                }
            }
        }

        public function addTodoList(string $todo): void
        {
            $todolist = new TodoList($todo);
            $this->todoListRepository->save($todolist);
            echo "Berhasil Menambah To Do" . PHP_EOL;
        }

        public function removeTodoList(int $number): void
        {
            $success = $this->todoListRepository->remove($number);
            if (!$success) {
                echo "Gagal Menghapus To Do" . PHP_EOL;
            } else {
                echo "Berhasil Menghapus To Do" . PHP_EOL;
            }
        }
    }
}
