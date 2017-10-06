<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f3c85a22f19a9a614b98f7dbac660aa1adf38ebd727d0f704b9cb3c1dd2fc968 extends Twig_Template
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
        $__internal_883920845765ce05e0ffcf7308c6bec558f2a896a85e23bc72b80121def6de67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883920845765ce05e0ffcf7308c6bec558f2a896a85e23bc72b80121def6de67->enter($__internal_883920845765ce05e0ffcf7308c6bec558f2a896a85e23bc72b80121def6de67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_ccb9a8301cb4ef28303c6da51805575f49f95269efe5a0013dfa2145deb1ced3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb9a8301cb4ef28303c6da51805575f49f95269efe5a0013dfa2145deb1ced3->enter($__internal_ccb9a8301cb4ef28303c6da51805575f49f95269efe5a0013dfa2145deb1ced3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_883920845765ce05e0ffcf7308c6bec558f2a896a85e23bc72b80121def6de67->leave($__internal_883920845765ce05e0ffcf7308c6bec558f2a896a85e23bc72b80121def6de67_prof);

        
        $__internal_ccb9a8301cb4ef28303c6da51805575f49f95269efe5a0013dfa2145deb1ced3->leave($__internal_ccb9a8301cb4ef28303c6da51805575f49f95269efe5a0013dfa2145deb1ced3_prof);

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
