<?php

namespace App\Controller;

use App\Service\Customer;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/***
 * Class CustomerController
 *
 * @package App\Controller
 */
class CustomerController extends Controller
{
    /** @var Customer */
    protected $customerManager;

    /** @var EntityManager */
    protected $em;

    public function get($id)
    {
        $em = $this->getDoctrine()->getManager();
        $result = $em->getRepository(Customer::class)->find($id);

        return new JsonResponse($result);
    }

    public function post()
    {
        throw new \Exception('Not Implemented', 501);
    }

    public function delete($id)
    {

        $customer = $em->getRepository(Customer::class)->find($id);

        if (!empty($customer)) {
            $em->remove($id);
            $em->flush();
        } else {
            throw new \Exception(sprintf('Could not find Customer with id %s', $id));
        }

        return new JsonResponse(null, 204);
    }

    public function patch(Request $request, $id)
    {
        $customer = $this->em->getRepository(Customer::class)->find($id);

        if (empty($customer)) {
            throw new \Exception(sprintf('Could not find Customer with id %s', $id));
        }

        $requestValues = $request->request->all();

        $customer->setLogin($requestValues['login']);
        $customer->setPassword($requestValues['password']);
        $customer->setTitle($requestValues['title']);
        $customer->setLastname($requestValues['lastname']);
        $customer->setGender($requestValues['gender']);
        $customer->setEmail($requestValues['email']);
        $customer->setPicture($requestValues['picture']);
        $customer->setAddress($requestValues['address']);

        $this->em->persist($customer);
        $this->em->flush();

        return new JsonResponse($customer);
    }

    public function new(Customer $customer)
    {
        $this->customerManager = $customer;
        $this->em = $this->getDoctrine()->getManager();
    }
}
