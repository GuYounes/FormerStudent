<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3b50afe842adbb5ff58a6590ac44ce6d6f616ee0f124620ac601e510db104a87 extends Twig_Template
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
        $__internal_76264dafa071fbc143e45ea945c1c2160b66627da13d354201202e37ba4c4985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76264dafa071fbc143e45ea945c1c2160b66627da13d354201202e37ba4c4985->enter($__internal_76264dafa071fbc143e45ea945c1c2160b66627da13d354201202e37ba4c4985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_59c73ec1ff787bbb7769227438d328121e052e3b252f370779735f6d72327b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c73ec1ff787bbb7769227438d328121e052e3b252f370779735f6d72327b29->enter($__internal_59c73ec1ff787bbb7769227438d328121e052e3b252f370779735f6d72327b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_76264dafa071fbc143e45ea945c1c2160b66627da13d354201202e37ba4c4985->leave($__internal_76264dafa071fbc143e45ea945c1c2160b66627da13d354201202e37ba4c4985_prof);

        
        $__internal_59c73ec1ff787bbb7769227438d328121e052e3b252f370779735f6d72327b29->leave($__internal_59c73ec1ff787bbb7769227438d328121e052e3b252f370779735f6d72327b29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
