<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b4016a23054f8433a224754a4a29b439a757ab137c4ec1fb4e908e7bb2a38f8b extends Twig_Template
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
        $__internal_06ec52efb9b1d5afb52c314c53cc96fdd322c6bca41b60a5748b92bd5e520559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ec52efb9b1d5afb52c314c53cc96fdd322c6bca41b60a5748b92bd5e520559->enter($__internal_06ec52efb9b1d5afb52c314c53cc96fdd322c6bca41b60a5748b92bd5e520559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ba4d8e66e7e57962ab0f33cbdb76e64a2d9885fc4dd818d03706b8ddc2d9270b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4d8e66e7e57962ab0f33cbdb76e64a2d9885fc4dd818d03706b8ddc2d9270b->enter($__internal_ba4d8e66e7e57962ab0f33cbdb76e64a2d9885fc4dd818d03706b8ddc2d9270b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_06ec52efb9b1d5afb52c314c53cc96fdd322c6bca41b60a5748b92bd5e520559->leave($__internal_06ec52efb9b1d5afb52c314c53cc96fdd322c6bca41b60a5748b92bd5e520559_prof);

        
        $__internal_ba4d8e66e7e57962ab0f33cbdb76e64a2d9885fc4dd818d03706b8ddc2d9270b->leave($__internal_ba4d8e66e7e57962ab0f33cbdb76e64a2d9885fc4dd818d03706b8ddc2d9270b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
