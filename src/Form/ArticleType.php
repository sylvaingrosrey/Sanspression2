<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('srcImgArticle')
            ->add('descriptionArticle')
            ->add('price')
            ->add('menuActive', CheckboxType::class, [
                'attr' => ['class' => 'inputcheckboxclass'],
                'label_attr' => ['class' => 'macheckboxclass'],
                'required' => false,
            ])
            ->add('newActive', CheckboxType::class, [
                'attr' => ['class' => 'inputcheckboxclass'],
                'label_attr' => ['class' => 'macheckboxclass'],
                'required' => false,
               
            ])
            ->add('promoActive', CheckboxType::class, [
                'attr' => ['class' => 'inputcheckboxclass'],
                'label_attr' => ['class' => 'macheckboxclass'],
                'required' => false,
            ])
            ->add('articleActive', CheckboxType::class, [
                'attr' => ['class' => 'inputcheckboxclass'],
                'label_attr' => ['class' => 'macheckboxclass'],
                'required' => false,
               
            ])
            ->add('date')
            ->add('categoryId', null, ['choice_label' => 'name'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
