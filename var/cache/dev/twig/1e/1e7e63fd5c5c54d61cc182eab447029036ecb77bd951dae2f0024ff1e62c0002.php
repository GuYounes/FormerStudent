<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c8c0d9c81834a2dbb243f2f8d86b791c44d720164efc6992a8a750c8425e2233 extends Twig_Template
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
        $__internal_949c2d3fc082f1689c187738e611ba9e0f28ee2317e377e81f5aa14478d2e7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_949c2d3fc082f1689c187738e611ba9e0f28ee2317e377e81f5aa14478d2e7de->enter($__internal_949c2d3fc082f1689c187738e611ba9e0f28ee2317e377e81f5aa14478d2e7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b9df5e6c8bcfbcbfe65e4bbe4f0673eb8882830e9a3305a6e3f002c917513080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9df5e6c8bcfbcbfe65e4bbe4f0673eb8882830e9a3305a6e3f002c917513080->enter($__internal_b9df5e6c8bcfbcbfe65e4bbe4f0673eb8882830e9a3305a6e3f002c917513080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_949c2d3fc082f1689c187738e611ba9e0f28ee2317e377e81f5aa14478d2e7de->leave($__internal_949c2d3fc082f1689c187738e611ba9e0f28ee2317e377e81f5aa14478d2e7de_prof);

        
        $__internal_b9df5e6c8bcfbcbfe65e4bbe4f0673eb8882830e9a3305a6e3f002c917513080->leave($__internal_b9df5e6c8bcfbcbfe65e4bbe4f0673eb8882830e9a3305a6e3f002c917513080_prof);

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
