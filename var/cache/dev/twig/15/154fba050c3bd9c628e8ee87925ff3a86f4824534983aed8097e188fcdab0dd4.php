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
        $__internal_d271c5d4b2601853a319355340956e0436f818d719ec184642abdafca2b128ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d271c5d4b2601853a319355340956e0436f818d719ec184642abdafca2b128ed->enter($__internal_d271c5d4b2601853a319355340956e0436f818d719ec184642abdafca2b128ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d80aa6237b773a3335181b8bf5a8ca865cf45c311118d696ca48aba871113727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80aa6237b773a3335181b8bf5a8ca865cf45c311118d696ca48aba871113727->enter($__internal_d80aa6237b773a3335181b8bf5a8ca865cf45c311118d696ca48aba871113727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d271c5d4b2601853a319355340956e0436f818d719ec184642abdafca2b128ed->leave($__internal_d271c5d4b2601853a319355340956e0436f818d719ec184642abdafca2b128ed_prof);

        
        $__internal_d80aa6237b773a3335181b8bf5a8ca865cf45c311118d696ca48aba871113727->leave($__internal_d80aa6237b773a3335181b8bf5a8ca865cf45c311118d696ca48aba871113727_prof);

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
