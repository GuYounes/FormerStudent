<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ef52aa7cf611b9b53f2bbfa6e1f3f52973f96cfeac77980a40b4de128f0b0c4b extends Twig_Template
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
        $__internal_9e151b29089d49e6893304c4da275274e0e147705b2a92cf8d0f2aeb338fa681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e151b29089d49e6893304c4da275274e0e147705b2a92cf8d0f2aeb338fa681->enter($__internal_9e151b29089d49e6893304c4da275274e0e147705b2a92cf8d0f2aeb338fa681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_13facdd912e4d32aa0a14b7d0513fb097f7f8cb87028d2eacb71b6d7b20f3a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13facdd912e4d32aa0a14b7d0513fb097f7f8cb87028d2eacb71b6d7b20f3a9b->enter($__internal_13facdd912e4d32aa0a14b7d0513fb097f7f8cb87028d2eacb71b6d7b20f3a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9e151b29089d49e6893304c4da275274e0e147705b2a92cf8d0f2aeb338fa681->leave($__internal_9e151b29089d49e6893304c4da275274e0e147705b2a92cf8d0f2aeb338fa681_prof);

        
        $__internal_13facdd912e4d32aa0a14b7d0513fb097f7f8cb87028d2eacb71b6d7b20f3a9b->leave($__internal_13facdd912e4d32aa0a14b7d0513fb097f7f8cb87028d2eacb71b6d7b20f3a9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
