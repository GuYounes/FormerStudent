<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a602edcf4772b2d863167b7404ef766984de45237f63a75d6fa7009eec99224a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30328ac0c4c303b199077b6cbea9afa2699ceb94bee5d6eb1a1fad6bc2859aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30328ac0c4c303b199077b6cbea9afa2699ceb94bee5d6eb1a1fad6bc2859aaa->enter($__internal_30328ac0c4c303b199077b6cbea9afa2699ceb94bee5d6eb1a1fad6bc2859aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3e5f08a83ed6a40419fc8674413a0b0e94e8994ba98be5d841866b2ff3b35b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5f08a83ed6a40419fc8674413a0b0e94e8994ba98be5d841866b2ff3b35b0f->enter($__internal_3e5f08a83ed6a40419fc8674413a0b0e94e8994ba98be5d841866b2ff3b35b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_30328ac0c4c303b199077b6cbea9afa2699ceb94bee5d6eb1a1fad6bc2859aaa->leave($__internal_30328ac0c4c303b199077b6cbea9afa2699ceb94bee5d6eb1a1fad6bc2859aaa_prof);

        
        $__internal_3e5f08a83ed6a40419fc8674413a0b0e94e8994ba98be5d841866b2ff3b35b0f->leave($__internal_3e5f08a83ed6a40419fc8674413a0b0e94e8994ba98be5d841866b2ff3b35b0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
