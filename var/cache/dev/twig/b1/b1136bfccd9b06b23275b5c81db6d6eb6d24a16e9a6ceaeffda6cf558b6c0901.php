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
        $__internal_794f8d6976f44bb0c9187df8c039867f440fab430c58604d8e374e063ea99e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_794f8d6976f44bb0c9187df8c039867f440fab430c58604d8e374e063ea99e0b->enter($__internal_794f8d6976f44bb0c9187df8c039867f440fab430c58604d8e374e063ea99e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_e379e3e85c62bb4af83dace637f09294efc1de8c4c0df92e6baac24cc684ecff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e379e3e85c62bb4af83dace637f09294efc1de8c4c0df92e6baac24cc684ecff->enter($__internal_e379e3e85c62bb4af83dace637f09294efc1de8c4c0df92e6baac24cc684ecff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_794f8d6976f44bb0c9187df8c039867f440fab430c58604d8e374e063ea99e0b->leave($__internal_794f8d6976f44bb0c9187df8c039867f440fab430c58604d8e374e063ea99e0b_prof);

        
        $__internal_e379e3e85c62bb4af83dace637f09294efc1de8c4c0df92e6baac24cc684ecff->leave($__internal_e379e3e85c62bb4af83dace637f09294efc1de8c4c0df92e6baac24cc684ecff_prof);

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
