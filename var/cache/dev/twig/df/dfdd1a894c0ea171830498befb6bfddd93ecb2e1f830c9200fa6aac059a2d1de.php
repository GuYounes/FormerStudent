<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6e93616e79d5a608873615b785757ddc070851b27f91d9cf1056fb6cbbf8b866 extends Twig_Template
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
        $__internal_0f6108b0df24f72d64b52f4a51e230f4a9e0abe4a98ab6345d82e707fd3ad362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6108b0df24f72d64b52f4a51e230f4a9e0abe4a98ab6345d82e707fd3ad362->enter($__internal_0f6108b0df24f72d64b52f4a51e230f4a9e0abe4a98ab6345d82e707fd3ad362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_313290be62f47d5f18e4bd1194e5a4f7d018c529a7757d644ffef1fabbf6589e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313290be62f47d5f18e4bd1194e5a4f7d018c529a7757d644ffef1fabbf6589e->enter($__internal_313290be62f47d5f18e4bd1194e5a4f7d018c529a7757d644ffef1fabbf6589e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0f6108b0df24f72d64b52f4a51e230f4a9e0abe4a98ab6345d82e707fd3ad362->leave($__internal_0f6108b0df24f72d64b52f4a51e230f4a9e0abe4a98ab6345d82e707fd3ad362_prof);

        
        $__internal_313290be62f47d5f18e4bd1194e5a4f7d018c529a7757d644ffef1fabbf6589e->leave($__internal_313290be62f47d5f18e4bd1194e5a4f7d018c529a7757d644ffef1fabbf6589e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
