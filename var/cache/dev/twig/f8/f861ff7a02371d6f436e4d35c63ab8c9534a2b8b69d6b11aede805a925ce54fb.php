<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c9c039960fe28086f37d55a2d1ba25a6cd3f2c23d21fd438cb883d2d4322fed2 extends Twig_Template
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
        $__internal_fba3a953901a203e72acc5097f7b75ccd2b53740700da9490fd49dc0d395f904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba3a953901a203e72acc5097f7b75ccd2b53740700da9490fd49dc0d395f904->enter($__internal_fba3a953901a203e72acc5097f7b75ccd2b53740700da9490fd49dc0d395f904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_23af6795dd348c978855a89d005613df0dc814437ae6072aedd42b9aa14c7442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23af6795dd348c978855a89d005613df0dc814437ae6072aedd42b9aa14c7442->enter($__internal_23af6795dd348c978855a89d005613df0dc814437ae6072aedd42b9aa14c7442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_fba3a953901a203e72acc5097f7b75ccd2b53740700da9490fd49dc0d395f904->leave($__internal_fba3a953901a203e72acc5097f7b75ccd2b53740700da9490fd49dc0d395f904_prof);

        
        $__internal_23af6795dd348c978855a89d005613df0dc814437ae6072aedd42b9aa14c7442->leave($__internal_23af6795dd348c978855a89d005613df0dc814437ae6072aedd42b9aa14c7442_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
