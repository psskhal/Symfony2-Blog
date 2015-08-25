<?php

namespace Test\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Test\BlogBundle\Entity\Post;
use Test\BlogBundle\Form\PostType;
use Test\BlogBundle\Lib\Paginator;

class PostController extends Controller {

    /*
     *show all available posts
     */
    public function indexAction()
    {
//        $em = $this->getDoctrine()->getManager();
//        $posts = $em->getRepository('TestBlogBundle:Post')->findAll();
//
//        return $this->render('TestBlogBundle:Post:index.html.twig', array(
//            'posts' => $posts,
//
//        ));

        $order_by = array();
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('TestBlogBundle:Post');
        $PostsCount = $repo->getPostsCount();
        $paginator = new Paginator($PostsCount, $this->generateUrl('post_list'));

        $posts = $repo->getPostsListWithPagination($order_by, $paginator->getOffset(), $paginator->getLimit
        ());

        return $this->render('TestBlogBundle:Post:index.html.twig', array(
            'posts' => $posts,
            'paginator' => $paginator

        ));
    }

    /*
     * show particular post
     * @id: post id
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository("TestBlogBundle:Post")->find($id);

        $delete_from = $this->createFormBuilder()
            ->setAction($this->generateUrl('post_delete', array('id'=>$id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label'=>'Delete Post'))
            ->getForm();

        return $this->render('TestBlogBundle:Post:show.html.twig', array(
            'post' => $post,
            'delete_from' => $delete_from->createView()
        ));
    }

    /*
     * new post creation
     */
    public function newAction() {
        $post = new Post();

        $form = $this->createForm(new PostType, $post, array(
            'action' => $this->generateUrl('post_create'),
            'method' => 'POST'
        ));

        $form->add('submit', 'submit', array('label' => 'Create Post'));

        return $this->render('TestBlogBundle:Post:new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /*
     * process new post creation form
     */
    public function createAction(Request $request) {
        $post = new Post();

        $form = $this->createForm(new PostType, $post, array(
            'action' => $this->generateUrl('post_create'),
            'method' => 'POST'
        ));

        $form->add('submit', 'submit', array('label' => 'Create Post'));

        $form->handleRequest($request);

        if($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            $this->get('session')->getFlashBag()->add('msg', 'Your Post has been created!!');

            return $this->redirect($this->generateUrl('post'));
        }

        $this->get('session')->getFlashBag()->add('msg', 'Something went wrong!!');

        return $this->render('TestBlogBundle:Post:new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /*
     * edit particular post
     * @id: post id
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('TestBlogBundle:Post')->find($id);
        $form = $this->createForm(new PostType, $post, array(
            'action' => $this->generateUrl('post_update', array('id' => $post->getId())),
            'method' => 'PUT'
        ));

        $form->add('submit', 'submit', array('label' => 'Update Post'));
        return $this->render('TestBlogBundle:Post:edit.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /*
     * process post edit form
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('TestBlogBundle:Post')->find($id);
        $form = $this->createForm(new PostType, $post, array(
            'action' => $this->generateUrl('post_update', array('id' => $post->getId())),
            'method' => 'PUT'
        ));

        $form->add('submit', 'submit', array('label' => 'Update Post'));
        $form->handleRequest($request);

        if($form->isValid()) {
            $em->flush();

            $this->get('session')->getFlashBag()->add('msg', 'Your Post has been updated!!');

            return $this->redirect($this->generateUrl('post'));
        }

        $this->get('session')->getFlashBag()->add('msg', 'Something went wrong!!');

        return $this->render('TestBlogBundle:Post:edit.html.twig', array(
            'form' => $form->createView()
        ));

    }

    /*
     * delete post
     * @id: post id to delete
     */
    public function deleteAction(Request $request, $id) {
        $delete_from = $this->createFormBuilder()
            ->setAction($this->generateUrl('post_delete', array('id'=>$id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label'=>'Delete Post', 'attr' => array('class' => 'btn-danger')))
            ->getForm();

        $delete_from->handleRequest($request);

        if($delete_from->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $post = $em->getRepository('TestBlogBundle:Post')->find($id);
            $em->remove($post);
            $em->flush();
        }

        $this->get('session')->getFlashBag()->add('msg', 'Your post has been deleted!!');

        return $this->redirect($this->generateUrl('post'));
    }

    /*
     * delete post
     * @id: post id to delete
     */
    public function removeAction($id) {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('TestBlogBundle:Post')->find($id);
        $em->remove($post);
        $em->flush();

        $this->get('session')->getFlashBag()->add('msg', 'Your post has been deleted!!');

        return $this->redirect($this->generateUrl('post'));
    }
}