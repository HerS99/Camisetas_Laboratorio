<?php
class CamisetaController extends Controller {

    public function index() {
        $camiseta = $this->model('Camiseta');
        $camisetas = $camiseta->getAllCamisetas();
        $data = [
            'camisetas' => $camisetas ? $camisetas : []
        ];
        $this->view('camisetas/index', $data);
    }

    public function create() {
        $this->view('camisetas/create');
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $camiseta = $this->model('Camiseta');
            
            $data = [
                'equipo' => trim($_POST['equipo']),
                'jugador' => trim($_POST['jugador']),
                'numero' => intval($_POST['numero'])
            ];

            $result = $camiseta->create($data);
            if ($result) {
                header('Location: ' . URLROOT . '/camiseta');
                exit;
            } else {
                die('Error al crear la camiseta: ' . print_r($data, true));
            }
        } else {
            die('Método no permitido');
        }
    }

    public function edit($id) {
        $camiseta = $this->model('Camiseta');
        $data = [
            'camiseta' => $camiseta->getCamisetaById($id)
        ];
        $this->view('camisetas/edit', $data);
    }


    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $camiseta = $this->model('Camiseta');
            
            $data = [
                'id' => $id,
                'equipo' => trim($_POST['equipo']),
                'jugador' => trim($_POST['jugador']),
                'numero' => intval($_POST['numero'])
            ];

            if ($camiseta->update($data)) {
                header('Location: ' . URLROOT . '/camiseta');
                exit;
            } else {
                die('Error al actualizar la camiseta');
            }
        }
    }

    public function delete($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $camiseta = $this->model('Camiseta');
            
            if ($camiseta->delete($id)) {
                header('Location: ' . URLROOT . '/camiseta');
                exit;
            } else {
                die('Error al eliminar la camiseta');
            }
        }
    }
}
