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
        $__internal_5587058d44af1b61f8319a055a2e69b730deae5b86351bc505b340944cfcddee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5587058d44af1b61f8319a055a2e69b730deae5b86351bc505b340944cfcddee->enter($__internal_5587058d44af1b61f8319a055a2e69b730deae5b86351bc505b340944cfcddee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a0af66f4c56debc1a2cb77ae1b1d045b7686417415ecc1e2dfb65b18519c5efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0af66f4c56debc1a2cb77ae1b1d045b7686417415ecc1e2dfb65b18519c5efb->enter($__internal_a0af66f4c56debc1a2cb77ae1b1d045b7686417415ecc1e2dfb65b18519c5efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5587058d44af1b61f8319a055a2e69b730deae5b86351bc505b340944cfcddee->leave($__internal_5587058d44af1b61f8319a055a2e69b730deae5b86351bc505b340944cfcddee_prof);

        
        $__internal_a0af66f4c56debc1a2cb77ae1b1d045b7686417415ecc1e2dfb65b18519c5efb->leave($__internal_a0af66f4c56debc1a2cb77ae1b1d045b7686417415ecc1e2dfb65b18519c5efb_prof);

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
