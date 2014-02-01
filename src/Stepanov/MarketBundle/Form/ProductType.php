<?php

namespace Stepanov\MarketBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
	    $dateCur = new \DateTime();
	    $dateCur= $dateCur->format('Y-m-d H:i');
        $builder
            ->add('name','text',array('label'=>'Имя'))
            ->add('image','file',array('label'=>'Изображение'))
            ->add('price','text',array('label'=>'Прайс'))
            ->add('created_at','hidden',array(
		        'data' =>$dateCur
	        ));

    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Stepanov\MarketBundle\Entity\Product'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'stepanov_marketbundle_product';
    }
}
