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
        $__internal_f25c9d3fec35147758a394545b33cd799e46af0739580e9765b7bb0274317891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25c9d3fec35147758a394545b33cd799e46af0739580e9765b7bb0274317891->enter($__internal_f25c9d3fec35147758a394545b33cd799e46af0739580e9765b7bb0274317891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_89b77af3d01b6f635401a6d19f1f9c6d54acde251e64db433a16fd0c25fec09c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b77af3d01b6f635401a6d19f1f9c6d54acde251e64db433a16fd0c25fec09c->enter($__internal_89b77af3d01b6f635401a6d19f1f9c6d54acde251e64db433a16fd0c25fec09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f25c9d3fec35147758a394545b33cd799e46af0739580e9765b7bb0274317891->leave($__internal_f25c9d3fec35147758a394545b33cd799e46af0739580e9765b7bb0274317891_prof);

        
        $__internal_89b77af3d01b6f635401a6d19f1f9c6d54acde251e64db433a16fd0c25fec09c->leave($__internal_89b77af3d01b6f635401a6d19f1f9c6d54acde251e64db433a16fd0c25fec09c_prof);

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
