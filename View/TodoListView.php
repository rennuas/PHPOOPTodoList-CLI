<?php

namespace View {

    use Helper\InputHelper;
    use Service\TodoListService;

    class TodoListView
    {
        private TodoListService $todoListService;

        public function __construct(TodoListService $todoListService)
        {
            $this->todoListService = $todoListService;
        }

        public function showTodoList()
        {

            while (true) {

                $this->todoListService->showTodoList();

                echo PHP_EOL;
                echo "MENU : " . PHP_EOL;
                echo "1 : Tambah To do List" . PHP_EOL;
                echo "2 : Remove To do List" . PHP_EOL;
                echo "x : Keluar" . PHP_EOL;

                $choiced = InputHelper::input("Pilihan");

                if ($choiced == 'x') {
                    break;
                } else if ($choiced == 1) {
                    $this->addTodoList();
                } else if ($choiced == 2) {
                    $this->removeTodoList();
                } else {
                    echo "Pilihan anda tidak dimengerti" . PHP_EOL;
                }
            }

            echo "Sampai Jumpa Lagi" . PHP_EOL;
        }

        public function addTodoList()
        {
            $input = InputHelper::input('Tambah (x untuk batalkan)');

            if ($input == 'x') {
                echo "Batal Menambah To do" . PHP_EOL;
            } else {
                $this->todoListService->addTodoList($input);
            }
        }

        public function removeTodoList()
        {
            $input = InputHelper::input("Hapus No. To do (x untuk batalkan)");

            if ($input == 'x') {
                echo "Batal Menghapus To do" . PHP_EOL;
            } else {
                $this->todoListService->removeTodoList($input);
            }
        }
    }
}
