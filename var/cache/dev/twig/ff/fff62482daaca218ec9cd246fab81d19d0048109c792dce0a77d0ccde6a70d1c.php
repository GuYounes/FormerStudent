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
        $__internal_7a03e6faab3af1b31dd4eef121739cba798ecb6e71c56595dd06bc9c439d0da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a03e6faab3af1b31dd4eef121739cba798ecb6e71c56595dd06bc9c439d0da8->enter($__internal_7a03e6faab3af1b31dd4eef121739cba798ecb6e71c56595dd06bc9c439d0da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b2018af4dd357ea4e8d8bcaa62c2047271d8995bc888e9bd5eb8aea456d8c336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2018af4dd357ea4e8d8bcaa62c2047271d8995bc888e9bd5eb8aea456d8c336->enter($__internal_b2018af4dd357ea4e8d8bcaa62c2047271d8995bc888e9bd5eb8aea456d8c336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7a03e6faab3af1b31dd4eef121739cba798ecb6e71c56595dd06bc9c439d0da8->leave($__internal_7a03e6faab3af1b31dd4eef121739cba798ecb6e71c56595dd06bc9c439d0da8_prof);

        
        $__internal_b2018af4dd357ea4e8d8bcaa62c2047271d8995bc888e9bd5eb8aea456d8c336->leave($__internal_b2018af4dd357ea4e8d8bcaa62c2047271d8995bc888e9bd5eb8aea456d8c336_prof);

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
