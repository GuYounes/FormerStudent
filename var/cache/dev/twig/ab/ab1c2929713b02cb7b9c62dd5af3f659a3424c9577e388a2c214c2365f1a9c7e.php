<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_04450ec79a85f2fdd9f1b8c74b400cc245c62dd9d737164e6ed0580e036865d3 extends Twig_Template
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
        $__internal_363fdbfdf2664c1fc1247cf192d492cbf799395f18405cfdfce790d4f55d34c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_363fdbfdf2664c1fc1247cf192d492cbf799395f18405cfdfce790d4f55d34c6->enter($__internal_363fdbfdf2664c1fc1247cf192d492cbf799395f18405cfdfce790d4f55d34c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_e06a01090d3f443f3155e8f5fd7c52ca653b648083227f3ed675abde8c28268d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06a01090d3f443f3155e8f5fd7c52ca653b648083227f3ed675abde8c28268d->enter($__internal_e06a01090d3f443f3155e8f5fd7c52ca653b648083227f3ed675abde8c28268d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_363fdbfdf2664c1fc1247cf192d492cbf799395f18405cfdfce790d4f55d34c6->leave($__internal_363fdbfdf2664c1fc1247cf192d492cbf799395f18405cfdfce790d4f55d34c6_prof);

        
        $__internal_e06a01090d3f443f3155e8f5fd7c52ca653b648083227f3ed675abde8c28268d->leave($__internal_e06a01090d3f443f3155e8f5fd7c52ca653b648083227f3ed675abde8c28268d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
