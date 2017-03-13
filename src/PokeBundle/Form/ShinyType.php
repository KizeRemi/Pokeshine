<?php 
namespace PokeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ShinyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       
        $builder
            ->add('dateCapture', DateType::class, array(
                'label' => "Date de la capture",
                'placeholder' => 'Select a value',
            ))
            ->add('description', TextareaType::class,  array('label' => 'Ajouter la description du Pokemon (lieux, tentatives, anecdotes)'))
            ->add('youtube',TextType::class, array('label' => 'Vidéo Youtube'))
            ->add('pictureImgFile', VichImageType::class, [
						            'required' => false,
                                    'label' => "Votre photo",
						            'allow_delete' => true,
						            'download_link' => true
        	])           
            ->add('huntingMethod', EntityType::class,  array(
                                    'label' => 'Methode de chasse',
                                    'choice_label' => 'name',
                                    'class' => 'PokeBundle:huntingMethod',
                                    'required' => true,
                                    ))
            ->add('save', SubmitType::class, array(
                                    'label' => 'Enregistrer',
                                    ))
        ;
    }

}