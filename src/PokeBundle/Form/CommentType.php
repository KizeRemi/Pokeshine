<?php 
namespace PokeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextAreaType;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       
        $builder
            ->add('message', TextAreaType::class,  array('label' => 'Réagir:'))
            ->add('save', SubmitType::class, array(
                                    'label' => 'Enregistrer',
                                    ))
        ;
    }

}