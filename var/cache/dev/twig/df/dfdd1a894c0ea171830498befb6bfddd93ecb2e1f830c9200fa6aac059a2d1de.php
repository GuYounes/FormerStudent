<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6e93616e79d5a608873615b785757ddc070851b27f91d9cf1056fb6cbbf8b866 extends Twig_Template
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
        $__internal_1ea26c6437bffe47c6edab82099336752c9a635863944f44a08c2992fc18a460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea26c6437bffe47c6edab82099336752c9a635863944f44a08c2992fc18a460->enter($__internal_1ea26c6437bffe47c6edab82099336752c9a635863944f44a08c2992fc18a460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_800685e70473f86f8fbd3d138d5ec4ca8dd339c91e863a4b7159f8aa6a29eb04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800685e70473f86f8fbd3d138d5ec4ca8dd339c91e863a4b7159f8aa6a29eb04->enter($__internal_800685e70473f86f8fbd3d138d5ec4ca8dd339c91e863a4b7159f8aa6a29eb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1ea26c6437bffe47c6edab82099336752c9a635863944f44a08c2992fc18a460->leave($__internal_1ea26c6437bffe47c6edab82099336752c9a635863944f44a08c2992fc18a460_prof);

        
        $__internal_800685e70473f86f8fbd3d138d5ec4ca8dd339c91e863a4b7159f8aa6a29eb04->leave($__internal_800685e70473f86f8fbd3d138d5ec4ca8dd339c91e863a4b7159f8aa6a29eb04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
