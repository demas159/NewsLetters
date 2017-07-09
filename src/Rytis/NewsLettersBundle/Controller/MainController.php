<?php

namespace Rytis\NewsLettersBundle\Controller;


use Rytis\NewsLettersBundle\Entity\Letter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{


    public function indexAction()
    {
        //Generating new Form
        $letter = new Letter();
        $form = $this->createFormBuilder($letter)
            ->setAction($this->generateUrl('RytisNewsLettersBundle_create'))
            ->setMethod('POST')

            ->add('Name', TextType::class, array(
                'label' => "Vardas:*",
                'required' => true
            ))
            ->add('Email', EmailType::class , array(
                'label' => "El.Paštas:*",
                'required' => true
            ))
            ->add('Categories', ChoiceType::class, array(
                'choices'  =>$letter->getCategories(),
                'empty_data' => Array('KategorijaA'=>'KategorijaA'),
                'label' => "Kategorijos:*",
                'expanded' => true,
                'multiple' => true,
                'attr' => Array('Class'=>'categories-select'),
                'required'=>true
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Užsisakyti naujienas! :)',
                    'attr'=> Array(
                        'class' => 'save-button'
                    )
            ))
            ->getForm();

        return $this->render('RytisNewsLettersBundle:Main:index.html.twig', array(
                                                                                'form' => $form->createView(),
                                                                            ));
    }

    public function createAction(Request $request)
    {

       $data = $request->request->get('form');

       $data['Categories'] = implode(',',$data['Categories']);

       $data = json_encode($data);

       $dir =  $this->getParameter('newsletters_directory');


       $fs = new Filesystem();

       if ($fs->exists($dir) == false)
       {
           $fs->mkdir($dir);
       }

       $files = array_diff(scandir($dir), array('..', '.'));


        if (count($files) >= 1)
        {
            $i = max($files) + 1 ;
        }
        else
        {
            $i = 1;
        }


        $fs->appendToFile($dir.DIRECTORY_SEPARATOR.$i,$data);


        $response = new Response(
            'Success',
            Response::HTTP_OK,
            array('content-type' => 'text/html')
        );

        Return $response;
    }

    public function updateAction(Request $request) {

        $data = $request->request->get('form');
        $id = $data['ID'];

        if (isset( $data['Categories'])) {
            $data['Categories'] = implode(',',$data['Categories']);
        }


        $data = json_encode($data);

        $dir =  $this->getParameter('newsletters_directory');

        $fs = new Filesystem();
        $fs->remove($dir.DIRECTORY_SEPARATOR.$id);
        $fs->appendToFile($dir.DIRECTORY_SEPARATOR.$id,$data);

        return $this->redirect('/admin');
    }

    public function adminAction() {

        $dir = $this->getParameter('newsletters_directory');

        $data = Array();

        $finder = new Finder();

        $finder->files()->in($dir);

        foreach ($finder as $file) {
         $data[ $file->getBasename()] = json_decode($file->getContents(),true);
        }

        return $this->render('RytisNewsLettersBundle:Main:admin.html.twig',array('data'=>$data));
    }


    public function deleteAction(Request $request) {
        $id = $request->request->get('id');

        $dir = $this->getParameter('newsletters_directory');

        unlink($dir.DIRECTORY_SEPARATOR.$id);

        $response = new Response(
            'Success',
            Response::HTTP_OK,
            array('content-type' => 'text/html')
        );

        return $response;
    }

    public function loadAction(Request $request) {
        $id = $request->request->get('id');

        $dir = $this->getParameter('newsletters_directory');

        $data = json_decode(file_get_contents($dir.$id),true);
        $data['Categories'] = explode(',', $data['Categories']);

        $letter = new Letter();
        $letter->setName($data['Name']);
        $letter->setEmail($data['Email']);

        $form = $this->createFormBuilder($letter)
            ->setAction($this->generateUrl('RytisNewsLettersBundle_AdminUpdate'))
            ->setMethod('POST')
            ->add('Name', TextType::class, array(
                'label' => "Vardas:*",
                'required' => true,
                'data' => isset($data['Name']) ? $data['Name'] : 'Vardas'
            ))
            ->add('Email', EmailType::class , array(
                'label' => "El.Paštas:*",
                'required' => true,
                   'data' => isset($data['Email']) ? $data['Email'] : 'Email'
            ))
            ->add('Categories', ChoiceType::class, array(
                'choices'  => array(
                    'choices'  =>$letter->getCategories()
                ),
                'data' =>isset($data['Categories']) ? $data['Categories'] : Array('KategorijaA'),
                'label' => "Kategorijos:*",
                'expanded' => true,
                'multiple' => true,
                'attr' => Array('Class'=>'categories-select'),
                'required'=>true
            ))
            ->add('ID', HiddenType::class, array(
                'data' => isset($id) ? $id : '0'
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Išsaugoti',
                'attr'=> Array(
                    'class' => 'Edit-button'
                )
            ))
            ->getForm();

            return $this->render('RytisNewsLettersBundle:Main:load.html.twig',array(
                                                                                    'data'=>$data,
                                                                                    'form'=> $form->createView()));
    }


}
