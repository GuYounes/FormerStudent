<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a1160a1e338c87c4a8682b57e8d5e94825ce64ab881ad8f27e03a6832370eda2 extends Twig_Template
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
        $__internal_f799852c9c5ac4926546d675bd438db1ca1d350d5a2e3fd6e5c7b8b6fa849b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f799852c9c5ac4926546d675bd438db1ca1d350d5a2e3fd6e5c7b8b6fa849b2a->enter($__internal_f799852c9c5ac4926546d675bd438db1ca1d350d5a2e3fd6e5c7b8b6fa849b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_4053d0ab2eeac67acfcdab497c86d6be558ebd45bc8ee25db5291abbfe0deed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4053d0ab2eeac67acfcdab497c86d6be558ebd45bc8ee25db5291abbfe0deed0->enter($__internal_4053d0ab2eeac67acfcdab497c86d6be558ebd45bc8ee25db5291abbfe0deed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f799852c9c5ac4926546d675bd438db1ca1d350d5a2e3fd6e5c7b8b6fa849b2a->leave($__internal_f799852c9c5ac4926546d675bd438db1ca1d350d5a2e3fd6e5c7b8b6fa849b2a_prof);

        
        $__internal_4053d0ab2eeac67acfcdab497c86d6be558ebd45bc8ee25db5291abbfe0deed0->leave($__internal_4053d0ab2eeac67acfcdab497c86d6be558ebd45bc8ee25db5291abbfe0deed0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
