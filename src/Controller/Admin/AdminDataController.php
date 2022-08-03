<?php

namespace App\Controller\Admin;

use App\Repository\AdminRepository;
use App\Entity\Admin;
use App\Form\AdminType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDataController extends AbstractController
{
    // id admin
    private const ID = 1;

    /**
     * @var AdminRepository
     */
    private $repository;

    public function __construct(AdminRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    // /**
    //  * @Route("/admin/edit", name="admin.edit.index")
    //  * @return \Symfony\Componenet\HttpFoundation\Response
    //  */
    // public function index()
    // {
    //     $admindatas = $this->repository->find(1);
    //     #$admindatas = $this->repository->findAll();
    //     #$admindatas = compact('admindatas');
    //     return new Response(var_dump($admindatas));
    //     #return $this->render('admin/data/index.html.twig', compact('admindatas'));
    // }


    /**
     * @Route("/admin/data", name="admin.data.edit", methods="GET|POST")
     * @param Admin $admin
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(Request $request)
    {
        $admin = $this->repository->find(self::ID);
        $form = $this->createForm(AdminType::class, $admin);
        // return new Response($request-));
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            $this->addFlash('success', 'Données modifiées avec succès');
            return $this->redirectToRoute('admin.property.index');
        }

        return $this->render('admin/data/edit.html.twig', [
            'admin' => $admin,
            'form' => $form->createView()
        ]);
    }
}
