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
        $__internal_d22c8c10a414d3569faf28237bff26d963af3b1b9ba3b4372f021e27134b7b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d22c8c10a414d3569faf28237bff26d963af3b1b9ba3b4372f021e27134b7b00->enter($__internal_d22c8c10a414d3569faf28237bff26d963af3b1b9ba3b4372f021e27134b7b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_4cb8be811c5c09f1d71c7700fb43208fe91bc897878b226ad5200c2f588485dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb8be811c5c09f1d71c7700fb43208fe91bc897878b226ad5200c2f588485dc->enter($__internal_4cb8be811c5c09f1d71c7700fb43208fe91bc897878b226ad5200c2f588485dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d22c8c10a414d3569faf28237bff26d963af3b1b9ba3b4372f021e27134b7b00->leave($__internal_d22c8c10a414d3569faf28237bff26d963af3b1b9ba3b4372f021e27134b7b00_prof);

        
        $__internal_4cb8be811c5c09f1d71c7700fb43208fe91bc897878b226ad5200c2f588485dc->leave($__internal_4cb8be811c5c09f1d71c7700fb43208fe91bc897878b226ad5200c2f588485dc_prof);

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
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
