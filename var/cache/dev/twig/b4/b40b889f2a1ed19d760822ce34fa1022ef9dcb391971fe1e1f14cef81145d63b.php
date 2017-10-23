<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_731ee1c27adfdcd299f0134febceae6024a6e66e3c13b6e9504926480a7ac2e0 extends Twig_Template
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
        $__internal_deefe84ff428da59cbaf03c277a44ebb750bdaed75a383a937c72c196f7d409d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deefe84ff428da59cbaf03c277a44ebb750bdaed75a383a937c72c196f7d409d->enter($__internal_deefe84ff428da59cbaf03c277a44ebb750bdaed75a383a937c72c196f7d409d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0d837148ad0919138f37f274a0a430a565b978c340c63a39c2230fdd3bd5b49c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d837148ad0919138f37f274a0a430a565b978c340c63a39c2230fdd3bd5b49c->enter($__internal_0d837148ad0919138f37f274a0a430a565b978c340c63a39c2230fdd3bd5b49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_deefe84ff428da59cbaf03c277a44ebb750bdaed75a383a937c72c196f7d409d->leave($__internal_deefe84ff428da59cbaf03c277a44ebb750bdaed75a383a937c72c196f7d409d_prof);

        
        $__internal_0d837148ad0919138f37f274a0a430a565b978c340c63a39c2230fdd3bd5b49c->leave($__internal_0d837148ad0919138f37f274a0a430a565b978c340c63a39c2230fdd3bd5b49c_prof);

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
