<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_5714043633ad4dd046d6312b1451d055a2eaea611d04fd97acd42367e2486707 extends Twig_Template
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
        $__internal_d4310243ae89ff65f1f5808b44aa7403b15441c181ff5230df29d141bd1d4121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4310243ae89ff65f1f5808b44aa7403b15441c181ff5230df29d141bd1d4121->enter($__internal_d4310243ae89ff65f1f5808b44aa7403b15441c181ff5230df29d141bd1d4121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_6328a135abf3e52838b4f3090a01a9ddac7e1210c9f7562247927d0e5f6a1599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6328a135abf3e52838b4f3090a01a9ddac7e1210c9f7562247927d0e5f6a1599->enter($__internal_6328a135abf3e52838b4f3090a01a9ddac7e1210c9f7562247927d0e5f6a1599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d4310243ae89ff65f1f5808b44aa7403b15441c181ff5230df29d141bd1d4121->leave($__internal_d4310243ae89ff65f1f5808b44aa7403b15441c181ff5230df29d141bd1d4121_prof);

        
        $__internal_6328a135abf3e52838b4f3090a01a9ddac7e1210c9f7562247927d0e5f6a1599->leave($__internal_6328a135abf3e52838b4f3090a01a9ddac7e1210c9f7562247927d0e5f6a1599_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
