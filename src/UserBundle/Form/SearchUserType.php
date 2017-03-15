<?php 
namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SearchUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       
        $builder
            ->add('search', TextType::class, array(
                                    'label' => 'Rechercher un shasseur: ',
                                    'attr' => array(
                                        'placeholder' => 'Rechercher un shasseur',
                                    ),
                                    'required' => false,
                                    ))
            ->add('save', SubmitType::class, array(
                                    'label' => 'Enregistrer',
                                    ));
    }

}