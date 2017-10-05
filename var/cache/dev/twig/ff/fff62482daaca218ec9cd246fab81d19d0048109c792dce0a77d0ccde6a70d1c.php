<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b953a9446d4d6aa59d0ad956d4946551351e4c1c46b13240aca99d04daed6964 extends Twig_Template
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
        $__internal_c11e50b92e14ec9ab08077f1e3f1573f2d57a5c4566198172a1e9fcc765e621c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11e50b92e14ec9ab08077f1e3f1573f2d57a5c4566198172a1e9fcc765e621c->enter($__internal_c11e50b92e14ec9ab08077f1e3f1573f2d57a5c4566198172a1e9fcc765e621c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_ec40d1b42dac84fd3f46585368f4050b39862f2c7b277304eb4eaca500d65e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec40d1b42dac84fd3f46585368f4050b39862f2c7b277304eb4eaca500d65e79->enter($__internal_ec40d1b42dac84fd3f46585368f4050b39862f2c7b277304eb4eaca500d65e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c11e50b92e14ec9ab08077f1e3f1573f2d57a5c4566198172a1e9fcc765e621c->leave($__internal_c11e50b92e14ec9ab08077f1e3f1573f2d57a5c4566198172a1e9fcc765e621c_prof);

        
        $__internal_ec40d1b42dac84fd3f46585368f4050b39862f2c7b277304eb4eaca500d65e79->leave($__internal_ec40d1b42dac84fd3f46585368f4050b39862f2c7b277304eb4eaca500d65e79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
