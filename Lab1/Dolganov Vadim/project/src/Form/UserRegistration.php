<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Lib\UserFields;

class UserRegistration extends AbstractType
{
    public const FORM_NAME = self::class;
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(UserFields::EMAIL, EmailType::class);
        $builder->add(UserFields::PASSWORD, PasswordType::class);
        $builder->add(UserFields::FIRST_NAME, TextType::class);
        $builder->add(UserFields::LAST_NAME, TextType::class);
    }
}