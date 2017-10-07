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
        $__internal_5f4d29e9bd2a57bb8128e9184f561eb16b98045310870ae6e57ffbd07ca07f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f4d29e9bd2a57bb8128e9184f561eb16b98045310870ae6e57ffbd07ca07f09->enter($__internal_5f4d29e9bd2a57bb8128e9184f561eb16b98045310870ae6e57ffbd07ca07f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_25aff3e1806ae9850a70a25482282887f8b1051a51029b7901865dfdca74d3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25aff3e1806ae9850a70a25482282887f8b1051a51029b7901865dfdca74d3aa->enter($__internal_25aff3e1806ae9850a70a25482282887f8b1051a51029b7901865dfdca74d3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5f4d29e9bd2a57bb8128e9184f561eb16b98045310870ae6e57ffbd07ca07f09->leave($__internal_5f4d29e9bd2a57bb8128e9184f561eb16b98045310870ae6e57ffbd07ca07f09_prof);

        
        $__internal_25aff3e1806ae9850a70a25482282887f8b1051a51029b7901865dfdca74d3aa->leave($__internal_25aff3e1806ae9850a70a25482282887f8b1051a51029b7901865dfdca74d3aa_prof);

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
