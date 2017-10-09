<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f96ec3b282c28522fc691c5435ca7700f41bb1de3dc3287e22ecbac36b5ebca2 extends Twig_Template
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
        $__internal_5c0368caa21b93de176ae392cfe492404834d68f1d5b7f07f86176614f1a8a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0368caa21b93de176ae392cfe492404834d68f1d5b7f07f86176614f1a8a0b->enter($__internal_5c0368caa21b93de176ae392cfe492404834d68f1d5b7f07f86176614f1a8a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_4ea98ada28dfa125beb229d807ceb0258c768063b7479131a01d5d8dbbc45cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea98ada28dfa125beb229d807ceb0258c768063b7479131a01d5d8dbbc45cbf->enter($__internal_4ea98ada28dfa125beb229d807ceb0258c768063b7479131a01d5d8dbbc45cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5c0368caa21b93de176ae392cfe492404834d68f1d5b7f07f86176614f1a8a0b->leave($__internal_5c0368caa21b93de176ae392cfe492404834d68f1d5b7f07f86176614f1a8a0b_prof);

        
        $__internal_4ea98ada28dfa125beb229d807ceb0258c768063b7479131a01d5d8dbbc45cbf->leave($__internal_4ea98ada28dfa125beb229d807ceb0258c768063b7479131a01d5d8dbbc45cbf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
