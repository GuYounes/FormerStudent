<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_1e94091ba6ac833e490cd9ac2d3f3ccc0244bcafcf8e5a6abf27694ad8ae49b3 extends Twig_Template
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
        $__internal_790394da886382f6071c0dad21453007703821c362eb2a43cae8b26e41005013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790394da886382f6071c0dad21453007703821c362eb2a43cae8b26e41005013->enter($__internal_790394da886382f6071c0dad21453007703821c362eb2a43cae8b26e41005013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_0d164019e77ba0ac349003b21de208d204c24777c58189631e79522bcf753402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d164019e77ba0ac349003b21de208d204c24777c58189631e79522bcf753402->enter($__internal_0d164019e77ba0ac349003b21de208d204c24777c58189631e79522bcf753402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_790394da886382f6071c0dad21453007703821c362eb2a43cae8b26e41005013->leave($__internal_790394da886382f6071c0dad21453007703821c362eb2a43cae8b26e41005013_prof);

        
        $__internal_0d164019e77ba0ac349003b21de208d204c24777c58189631e79522bcf753402->leave($__internal_0d164019e77ba0ac349003b21de208d204c24777c58189631e79522bcf753402_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
