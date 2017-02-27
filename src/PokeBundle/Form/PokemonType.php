<?php 
namespace PokeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class PokemonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('number',IntegerType::class, array('label' => 'Numero pokedex'))
            ->add('name',TextType::class, array('label' => 'Nom du Pokemon'))
            ->add('description', null,  array('label' => 'Ajouter la description du Pokemon'))
            ->add('generation', ChoiceType::class,  array(
                                    'label' => 'Generation',
                                    'required' => true,
                                    'choices'  => array(
                                            '1' => 1,
                                            '2' => 2,
                                            '3' => 3,
                                            '4' => 4,
                                            '5' => 5,
                                            '6' => 6,
                                            '7' => 7
                                    )))
            ->add('pokemonTypes', EntityType::class, array(
                                    'class' => 'PokeBundle:PokemonType',
                                    'multiple' => true,
                                    'choice_label' => 'name',
                                    'expanded' => true))
            ->add('secretImgFile', VichImageType::class, [
						            'required' => false,
                                    'label' => "Image secrete",
						            'allow_delete' => true,
						            'download_link' => true
        	])
            ->add('shinyImgFile', VichImageType::class, [
                                    'required' => false,
                                    'label' => "Image shiny",
                                    'allow_delete' => true,
                                    'download_link' => true
            ])
            ->add('save', SubmitType::class)
        ;
    }

}