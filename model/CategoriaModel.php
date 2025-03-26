<?php

class  CategoriaModel {

    private $categorias = [
        [
            'id' => '1',
            'nome' => 'Eletrônicos',
        ],
        [
            'id' => '2',
            'nome' => 'Eletrodomésticos',
        ],
        [
            'id' => '3',
            'nome' => 'Roupas e Acessórios',
        ],
        [
            'id' => '4',
            'nome' => 'Beleza e Cuidados Pessoais',
        ],
        [
            'id' => '5',
            'nome' => 'Saúde e Bem-estar',
        ],
        [
            'id' => '6',
            'nome' => 'Alimentos e Bebidas',
        ],
        [
            'id' => '7',
            'nome' => 'Casa e Decoração',
        ],
        [
            'id' => '8',
            'nome' => 'Esportes e Lazer',
        ],
        [
            'id' => '9',
            'nome' => 'Automotivo',
        ],
        [
            'id' => '10',
            'nome' => 'Brinquedos e Jogos',
        ],
        [
            'id' => '11',
            'nome' => 'Papelaria e Escritório',
        ],
        [
            'id' => '12',
            'nome' => 'Livros e Mídia',
        ],
        [
            'id' => '13',
            'nome' => 'Música e Instrumentos Musicais',
        ],
        [
            'id' => '14',
            'nome' => 'Pet Shop',
        ],
        [
            'id' => '15',
            'nome' => 'Ferramentas e Construção',
        ],
        [
            'id' => '16',
            'nome' => 'Relógios e Óculos',
        ],
        [
            'id' => '17',
            'nome' => 'Energia Solar e Sustentabilidade',
        ],
        [
            'id' => '18',
            'nome' => 'Segurança e Monitoramento',
        ],
        [
            'id' => '19',
            'nome' => 'Viagem e Turismo',
        ],
        [
            'id' => '20',
            'nome' => 'Serviços Digitais',
        ]
    ];

    public function listar() {
        return $this->categorias;
    }

    public function buscarPorId($id) {
        $indexCategoria = -1;

        $array_filtrado = array_filter(
            $this->categorias,
            function ($categoria, $index) use ($id, &$indexCategoria) {
                if ($categoria['id'] == $id) {
                    $indexCategoria = $index;
                    return $categoria;
                }
            },
            ARRAY_FILTER_USE_BOTH
        );

        return $array_filtrado[$indexCategoria];
    }
}