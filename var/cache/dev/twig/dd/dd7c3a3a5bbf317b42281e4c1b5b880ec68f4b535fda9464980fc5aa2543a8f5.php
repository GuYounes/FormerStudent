<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2aaf77aa3a262348246c213954c1810184884ade6dc0e1bc22b6716d4f034daf extends Twig_Template
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
        $__internal_170319db1ea691c3d2710c7a86567de4884e0a9c6b0d3e102477fca010f19b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170319db1ea691c3d2710c7a86567de4884e0a9c6b0d3e102477fca010f19b35->enter($__internal_170319db1ea691c3d2710c7a86567de4884e0a9c6b0d3e102477fca010f19b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_ff712ef742e568d2ae717011d9f7a92116a35e57e56d22af0381ce51d8164d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff712ef742e568d2ae717011d9f7a92116a35e57e56d22af0381ce51d8164d50->enter($__internal_ff712ef742e568d2ae717011d9f7a92116a35e57e56d22af0381ce51d8164d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_170319db1ea691c3d2710c7a86567de4884e0a9c6b0d3e102477fca010f19b35->leave($__internal_170319db1ea691c3d2710c7a86567de4884e0a9c6b0d3e102477fca010f19b35_prof);

        
        $__internal_ff712ef742e568d2ae717011d9f7a92116a35e57e56d22af0381ce51d8164d50->leave($__internal_ff712ef742e568d2ae717011d9f7a92116a35e57e56d22af0381ce51d8164d50_prof);

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
