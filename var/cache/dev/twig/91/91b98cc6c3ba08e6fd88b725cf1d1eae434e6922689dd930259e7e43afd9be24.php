<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b8859827bcea42ddb3b7c6a041082f75d112ee1ae690a512dcfa4d94559e8bfa extends Twig_Template
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
        $__internal_919328482a8ce99ec8dfc56549a2cbf62c8d665ca947926febb1171570c66cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919328482a8ce99ec8dfc56549a2cbf62c8d665ca947926febb1171570c66cba->enter($__internal_919328482a8ce99ec8dfc56549a2cbf62c8d665ca947926febb1171570c66cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1151c2ca1d950f61b6a6b89f1f3177c08d53fc2ce525e2ff3ed0e5b529db12e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1151c2ca1d950f61b6a6b89f1f3177c08d53fc2ce525e2ff3ed0e5b529db12e6->enter($__internal_1151c2ca1d950f61b6a6b89f1f3177c08d53fc2ce525e2ff3ed0e5b529db12e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_919328482a8ce99ec8dfc56549a2cbf62c8d665ca947926febb1171570c66cba->leave($__internal_919328482a8ce99ec8dfc56549a2cbf62c8d665ca947926febb1171570c66cba_prof);

        
        $__internal_1151c2ca1d950f61b6a6b89f1f3177c08d53fc2ce525e2ff3ed0e5b529db12e6->leave($__internal_1151c2ca1d950f61b6a6b89f1f3177c08d53fc2ce525e2ff3ed0e5b529db12e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
