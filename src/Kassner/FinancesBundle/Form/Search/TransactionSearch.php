<?php

namespace Kassner\FinancesBundle\Form\Search;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TransactionSearch extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('account', null, array(
                'required' => false
            ))
            ->add('payee', null, array(
                'required' => false
            ))
            ->add('category', null, array(
                'required' => false
            ))
            ->add('submit', 'submit', array(
                'label' => 'Search',
                'attr' => array('class' => 'btn btn-primary')
            ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kassner\FinancesBundle\Entity\Transaction',
            'validation_groups' => false,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'kassner_financesbundle_transaction';
    }

}
