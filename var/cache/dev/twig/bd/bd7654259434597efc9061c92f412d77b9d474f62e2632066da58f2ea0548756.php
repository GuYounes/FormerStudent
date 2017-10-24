<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_98755bcf4298c4b98a6de6f1277a3634bb560419f8d7fc282df170ad46d4f7f3 extends Twig_Template
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
        $__internal_5ebc01da99a1e902086f0263652c10d8a2c105a4aa8e38b362e2265649414840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ebc01da99a1e902086f0263652c10d8a2c105a4aa8e38b362e2265649414840->enter($__internal_5ebc01da99a1e902086f0263652c10d8a2c105a4aa8e38b362e2265649414840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_fcbffded347fa059a196ff4740edba843a3efadea716118995e2b7d88f6f7b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbffded347fa059a196ff4740edba843a3efadea716118995e2b7d88f6f7b6a->enter($__internal_fcbffded347fa059a196ff4740edba843a3efadea716118995e2b7d88f6f7b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5ebc01da99a1e902086f0263652c10d8a2c105a4aa8e38b362e2265649414840->leave($__internal_5ebc01da99a1e902086f0263652c10d8a2c105a4aa8e38b362e2265649414840_prof);

        
        $__internal_fcbffded347fa059a196ff4740edba843a3efadea716118995e2b7d88f6f7b6a->leave($__internal_fcbffded347fa059a196ff4740edba843a3efadea716118995e2b7d88f6f7b6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
