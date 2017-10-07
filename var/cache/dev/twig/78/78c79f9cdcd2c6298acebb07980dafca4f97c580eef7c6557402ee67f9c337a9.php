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
        $__internal_34c11d298527591c0c88b0946e0f387518392c0d2cbdca57442f325b4a8fb1fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c11d298527591c0c88b0946e0f387518392c0d2cbdca57442f325b4a8fb1fc->enter($__internal_34c11d298527591c0c88b0946e0f387518392c0d2cbdca57442f325b4a8fb1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_7f2a01d5ad741184217ae06cf82105ba81329f317fd5fb2daba28896c91822c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2a01d5ad741184217ae06cf82105ba81329f317fd5fb2daba28896c91822c9->enter($__internal_7f2a01d5ad741184217ae06cf82105ba81329f317fd5fb2daba28896c91822c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_34c11d298527591c0c88b0946e0f387518392c0d2cbdca57442f325b4a8fb1fc->leave($__internal_34c11d298527591c0c88b0946e0f387518392c0d2cbdca57442f325b4a8fb1fc_prof);

        
        $__internal_7f2a01d5ad741184217ae06cf82105ba81329f317fd5fb2daba28896c91822c9->leave($__internal_7f2a01d5ad741184217ae06cf82105ba81329f317fd5fb2daba28896c91822c9_prof);

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
