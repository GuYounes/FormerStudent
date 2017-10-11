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
        $__internal_db64abc570fec0c395cd99128d0a7e598699c4a8e2ee0f397c35f02d4c5880da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db64abc570fec0c395cd99128d0a7e598699c4a8e2ee0f397c35f02d4c5880da->enter($__internal_db64abc570fec0c395cd99128d0a7e598699c4a8e2ee0f397c35f02d4c5880da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_050fc0a1006e1de770f097a4d6d3c41a61622afdb3b378829a4732380ea1bad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050fc0a1006e1de770f097a4d6d3c41a61622afdb3b378829a4732380ea1bad6->enter($__internal_050fc0a1006e1de770f097a4d6d3c41a61622afdb3b378829a4732380ea1bad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_db64abc570fec0c395cd99128d0a7e598699c4a8e2ee0f397c35f02d4c5880da->leave($__internal_db64abc570fec0c395cd99128d0a7e598699c4a8e2ee0f397c35f02d4c5880da_prof);

        
        $__internal_050fc0a1006e1de770f097a4d6d3c41a61622afdb3b378829a4732380ea1bad6->leave($__internal_050fc0a1006e1de770f097a4d6d3c41a61622afdb3b378829a4732380ea1bad6_prof);

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
