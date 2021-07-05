<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class categoriesController extends AbstractController
{

    private $categories = [
        1 => [
            "title" => "Politique",
            "content" => "Tous les articles liés à Jean Lassalle",
            "id" => 1,
            "published" => true,
        ],
        2 => [
            "title" => "Economie",
            "content" => "Les meilleurs tuyaux pour avoir DU FRIC",
            "id" => 2,
            "published" => true
        ],
        3 => [
            "title" => "Securité",
            "content" => "Attention les étrangers sont très méchants",
            "id" => 3,
            "published" => false
        ],
        4 => [
            "title" => "Ecologie",
            "content" => "Hummer <3",
            "id" => 4,
            "published" => true
        ]
    ];

    /**
     * @Route("/catégories", name="categorielist")
     */
    public function articleList()
    {
        return $this->render('categories.html.twig', [
            'categories' => $this->categories
        ]);
    }

    /**
     * @Route("/catégories/{id}", name="categories")
     */
    public function categories_show($id)
    {
        return $this->render('categories_show.html.twig', [
            'categorie' => $this->categories[$id]
        ]);
    }

}