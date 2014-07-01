<?php

namespace Vest\ResponsaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Vest\ResponsaBundle\Entity\AddrKontakte;
use Vest\ResponsaBundle\Form\AddrKontakteType;

/**
 * AddrKontakte controller.
 *
 */
class AddrKontakteController extends Controller
{

    /**
     * Lists all AddrKontakte entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VestResponsaBundle:AddrKontakte')->findAll();

        return $this->render('VestResponsaBundle:AddrKontakte:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new AddrKontakte entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new AddrKontakte();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('kontakte_show', array('id' => $entity->getId())));
        }

        return $this->render('VestResponsaBundle:AddrKontakte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a AddrKontakte entity.
    *
    * @param AddrKontakte $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(AddrKontakte $entity)
    {
        $form = $this->createForm(new AddrKontakteType(), $entity, array(
            'action' => $this->generateUrl('kontakte_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new AddrKontakte entity.
     *
     */
    public function newAction()
    {
        $entity = new AddrKontakte();
        $form   = $this->createCreateForm($entity);

        return $this->render('VestResponsaBundle:AddrKontakte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a AddrKontakte entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VestResponsaBundle:AddrKontakte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AddrKontakte entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VestResponsaBundle:AddrKontakte:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing AddrKontakte entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VestResponsaBundle:AddrKontakte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AddrKontakte entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('VestResponsaBundle:AddrKontakte:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a AddrKontakte entity.
    *
    * @param AddrKontakte $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(AddrKontakte $entity)
    {
        $form = $this->createForm(new AddrKontakteType(), $entity, array(
            'action' => $this->generateUrl('kontakte_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing AddrKontakte entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VestResponsaBundle:AddrKontakte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AddrKontakte entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('kontakte_edit', array('id' => $id)));
        }

        return $this->render('VestResponsaBundle:AddrKontakte:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a AddrKontakte entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VestResponsaBundle:AddrKontakte')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AddrKontakte entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('kontakte'));
    }

    /**
     * Creates a form to delete a AddrKontakte entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('kontakte_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
