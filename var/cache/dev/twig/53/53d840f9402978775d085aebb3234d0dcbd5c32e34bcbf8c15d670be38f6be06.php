<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_53147ab19d6b17487840439dbefe0f05810de2cd68faab6e7ab50952815ad311 extends Twig_Template
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
        $__internal_89f7707f367ccf87fbd91d5d8a9eae2a9214094d17aec381097660fb1972c244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89f7707f367ccf87fbd91d5d8a9eae2a9214094d17aec381097660fb1972c244->enter($__internal_89f7707f367ccf87fbd91d5d8a9eae2a9214094d17aec381097660fb1972c244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_547fc96ed2b7a17f33eb89c6f9419177888b8cd8abf996e5bf64e7d234838e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547fc96ed2b7a17f33eb89c6f9419177888b8cd8abf996e5bf64e7d234838e34->enter($__internal_547fc96ed2b7a17f33eb89c6f9419177888b8cd8abf996e5bf64e7d234838e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_89f7707f367ccf87fbd91d5d8a9eae2a9214094d17aec381097660fb1972c244->leave($__internal_89f7707f367ccf87fbd91d5d8a9eae2a9214094d17aec381097660fb1972c244_prof);

        
        $__internal_547fc96ed2b7a17f33eb89c6f9419177888b8cd8abf996e5bf64e7d234838e34->leave($__internal_547fc96ed2b7a17f33eb89c6f9419177888b8cd8abf996e5bf64e7d234838e34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
