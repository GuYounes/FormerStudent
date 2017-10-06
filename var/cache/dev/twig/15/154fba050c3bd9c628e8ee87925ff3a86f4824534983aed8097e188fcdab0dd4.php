<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5d8ab000be9e32356bb9ac8a683647637c7898a52f3c69a8db38025ad6ca37f3 extends Twig_Template
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
        $__internal_7822a3dffb6262801b8b2e07e1148849cbd22e8087caf91fd59104fd74526554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7822a3dffb6262801b8b2e07e1148849cbd22e8087caf91fd59104fd74526554->enter($__internal_7822a3dffb6262801b8b2e07e1148849cbd22e8087caf91fd59104fd74526554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f89d37b16c810bf994e30f076a2bdbdfd3a1fdd308099f9ca4f8e07b8cb638df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89d37b16c810bf994e30f076a2bdbdfd3a1fdd308099f9ca4f8e07b8cb638df->enter($__internal_f89d37b16c810bf994e30f076a2bdbdfd3a1fdd308099f9ca4f8e07b8cb638df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7822a3dffb6262801b8b2e07e1148849cbd22e8087caf91fd59104fd74526554->leave($__internal_7822a3dffb6262801b8b2e07e1148849cbd22e8087caf91fd59104fd74526554_prof);

        
        $__internal_f89d37b16c810bf994e30f076a2bdbdfd3a1fdd308099f9ca4f8e07b8cb638df->leave($__internal_f89d37b16c810bf994e30f076a2bdbdfd3a1fdd308099f9ca4f8e07b8cb638df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
