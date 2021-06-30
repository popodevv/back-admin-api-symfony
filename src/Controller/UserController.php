<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class UserController extends AbstractController
{
    // public function addUser(Request $request, SerializerInterface $serializer, EntityManagerInterface $entityManager, ValidatorInterface $validator)
    // {

    //     $em = $serializer->deserialize($request->getContent(), User::class, 'json');

    //     $errors = $validator->validate($em);
    //     if(count($errors)) {
    //         $errors = $serializer->serialize($errors, 'json');
    //         return new Response($errors, 500, [
    //             'Content-Type' => 'application/json'
    //         ]);
    //     }
    //     $entityManager->persist($em);
    //     $entityManager->flush();
    //     $data = [
    //         'status' => 201,
    //         'message' => 'L\'utilisateur a bien été ajouté'
    //     ];
    //     return new JsonResponse($data, 201);
    // }


}