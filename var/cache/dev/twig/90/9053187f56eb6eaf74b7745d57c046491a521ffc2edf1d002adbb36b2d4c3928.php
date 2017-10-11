<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_528a6999f1f011d1c834d19514fee0cf1dbd53e9d5b39c3abdea529370d5e1e3 extends Twig_Template
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
        $__internal_ea5b57b4cbee419104996b3d53ff5327c3d30264900a7822d95fb072b8812a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5b57b4cbee419104996b3d53ff5327c3d30264900a7822d95fb072b8812a31->enter($__internal_ea5b57b4cbee419104996b3d53ff5327c3d30264900a7822d95fb072b8812a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5c7e565312703a0ef08a582ad7298aec1e9e25c181f89a88fbc363a1782ae8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7e565312703a0ef08a582ad7298aec1e9e25c181f89a88fbc363a1782ae8e7->enter($__internal_5c7e565312703a0ef08a582ad7298aec1e9e25c181f89a88fbc363a1782ae8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ea5b57b4cbee419104996b3d53ff5327c3d30264900a7822d95fb072b8812a31->leave($__internal_ea5b57b4cbee419104996b3d53ff5327c3d30264900a7822d95fb072b8812a31_prof);

        
        $__internal_5c7e565312703a0ef08a582ad7298aec1e9e25c181f89a88fbc363a1782ae8e7->leave($__internal_5c7e565312703a0ef08a582ad7298aec1e9e25c181f89a88fbc363a1782ae8e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
